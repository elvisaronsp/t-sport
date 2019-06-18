<?php

namespace App\Domain\Entity\Tournament;


class Tournament
{

    /** @var TournamentId */
    protected $tournamentId;

    /**
     * @var string
     */
    protected $name;

    /** @var \DateTime  */
    protected $createdOn;

    /** @var \DateTime  */
    protected $updatedOn;

    public function __construct(TournamentId $id, $name)
    {

        $this->tournamentId = $id;
        $this->name = $name;
        $this->createdOn = new \DateTime();
        $this->updatedOn = new \DateTime();

        //TODO publicar evento CreateTournament

    }

    /**
     * @return TournamentId
     */
    public function getTournamentId(): TournamentId
    {
        return $this->tournamentId;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }



}