<?php


namespace AndyWaite\SimTelemetryParser\Game\F12020\Structs;

use AndyWaite\SimTelemetryParser\Util\BinaryFormatCodesHelper;

class PacketParticipantsData extends AbstractF12020Struct
{

    /**
    * Header
    *
    * @var PacketHeader
    */
    protected PacketHeader $header;

    /**
    * Number of active cars in the data – should match number of
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT8_LE
    */
    protected int $numActiveCars;

    /**
    * 
    *
    * @var ParticipantData[]
    * @size 22
    */
    protected array $participants;

    /**
     * @return PacketHeader
     */
    public function getHeader(): PacketHeader
    {
        return $this->header;
    }

    /**
     * @return int
     */
    public function getNumActiveCars(): int
    {
        return $this->numActiveCars;
    }

    /**
     * @return ParticipantData[]
     */
    public function getParticipants(): array
    {
        return $this->participants;
    }


    /**
     * @param int $participantIndex
     * @return ParticipantData
     */
    public function getParticipant(int $participantIndex): ParticipantData
    {
        return $this->participants[$participantIndex];
    }

}