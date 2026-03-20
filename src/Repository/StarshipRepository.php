<?php

namespace App\Repository;

use App\Model\Starship;
use App\Model\StarshipStatusEnum;
use Psr\Log\LoggerInterface;

class StarshipRepository
{
  public function __construct(private LoggerInterface $logger)
  {

  }
  public function findAll(): array
  {
    $this->logger->info('Starships.');
    return [
      new Starship(
        1,
        'Twigcelerator',
        'Rally',
        'Hans Moleman',
        StarshipStatusEnum::COMPLETED,
      ),
      new Starship(
        2,
        'Twigcelerator2 ',
        'Indoor',
        'Gary',
        StarshipStatusEnum::IN_PROGRESS,
      ),
      new Starship(
        3,
        'Twigcelerator 3',
        'Snow',
        'Lee Sharp',
        StarshipStatusEnum::WAITING,
      ),
    ];
  }

  public function find(int $id): ?Starship
  {
    foreach ($this->findAll() as $starship) {
      if ($starship->getId() === $id) {
        return $starship;
      }
    }
    return null;
  }
}