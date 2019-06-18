<?php

namespace App\Domain\Entity\Tournament;

use Ramsey\Uuid\Uuid;

class TournamentId
{

    /**
     * @var string
     */
    private $id;

    /**
     * TournamentId constructor.
     * @param null $id
     * @throws \Exception
     */
    public function __construct($id = null)
    {
        $this->id = null === $id ? Uuid::uuid4()->toString() : $id;
    }

    /**
     * @return string
     */
    public function id()
    {
        return $this->id;
    }

    /**
     * @param TournamentId $userId
     *
     * @return bool
     */
    public function equals(TournamentId $userId)
    {
        return $this->id() === $userId->id();
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->id();
    }

}