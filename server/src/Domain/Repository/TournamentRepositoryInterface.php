<?php

namespace App\Domain\Repository;


use App\Domain\Entity\Tournament\Tournament;
use Ramsey\Uuid\UuidInterface;

interface TournamentRepositoryInterface
{

    /**
     * @param UuidInterface $id
     * @return Tournament|null
     */
    public function findTournament(UuidInterface $id): ?Tournament;

    /**
     * @return array|null
     */
    public function findAll(): ?array;

    /**
     * @param Tournament $tournament
     * @return mixed
     */
    public function add(Tournament $tournament):void;

}