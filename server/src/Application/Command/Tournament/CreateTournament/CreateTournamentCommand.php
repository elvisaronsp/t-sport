<?php

declare(strict_types=1);

namespace App\Application\Command\Tournament\CreateTournament;

use App\Domain\Entity\Tournament\TournamentId;

class CreateTournamentCommand
{

    /**
     * @var TournamentId
     */
    public $tournamentId;

    /**
     * @var string
     */
    public $name;

    /**
     * CreateTournamentCommand constructor.
     * @param TournamentId $tournamentId
     * @param string $name
     */
    public function __construct(TournamentId $tournamentId, string $name)
    {
        $this->tournamentId = $tournamentId;
        $this->name = $name;
    }

}