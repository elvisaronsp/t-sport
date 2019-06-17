<?php

namespace App\Domain\Repository;

use App\Domain\Entity\Tournament;
use Ramsey\Uuid\UuidInterface;

interface TournamentRepositoryInterface
{

    public function findTournament(UuidInterface $id): ?Tournament;

    public function findAll(): ?array;

}