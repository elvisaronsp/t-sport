<?php

declare(strict_types=1);

namespace App\Domain\Repository;

use App\Domain\Entity\Tournament\Tournament;
use App\Domain\Entity\Tournament\TournamentId;

interface TournamentRepositoryInterface
{

    /**
     * @param TournamentId $id
     * @return Tournament|null
     */
    public function findTournament(TournamentId $id): ?Tournament;

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