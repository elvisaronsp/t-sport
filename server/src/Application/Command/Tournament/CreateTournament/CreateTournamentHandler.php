<?php

declare(strict_types=1);

namespace App\Application\Command\Tournament\CreateTournament;

use App\Domain\Repository\TournamentRepositoryInterface;

class CreateTournamentHandler
{

    /**
     * @var TournamentRepositoryInterface
     */
    private $tournamentStore;

    public function __construct(TournamentRepositoryInterface $tournamentStore)
    {

        $this->tournamentStore = $tournamentStore;

    }

    public function __invoke(CreateTournamentCommand $command): void
    {
        // TODO: Implement __invoke() method.


    }

}