<?php


namespace AndyWaite\SimTelemetryParser;

use AndyWaite\SimTelemetryParser\Game\GameDetector;
use AndyWaite\SimTelemetryParser\Packet\DataStructure;
use AndyWaite\SimTelemetryParser\Packet\Unpacker;
use AndyWaite\SimTelemetryParser\Util\DocBlockParser;

class Parser
{
    /**
     * @var GameDetector
     */
    private $gameDetector;
    /**
     * @var Unpacker
     */
    private $unpacker;

    public function __construct(GameDetector $gameDetector, Unpacker $unpacker)
    {
        $this->gameDetector = $gameDetector;
        $this->unpacker = $unpacker;
    }

    /**
     * Factory method to init dependencies
     *
     * @return Parser
     */
    public static function getParser()
    {
        return new self(
            new GameDetector(),
            new Unpacker(
                new DocBlockParser()
            )
        );
    }

    /**
     * Take a binary stream and return
     * a parsed model representing
     * the type of packet sent
     *
     * @param string $stream
     * @return DataStructure
     */
    public function streamToModels(string $stream): DataStructure
    {
        $unpacked = $this->streamToArray($stream);
        return $this->dataToModels($unpacked);
    }

    /**
     * Take an assoc array (as returned by streamToArray)
     * and return as hydrated models
     *
     * @param array $data
     * @return DataStructure
     */
    public function dataToModels(array $data): DataStructure
    {
        // Work out the game and get our game-specific packet identifier
        $packetIdentifier = $this->gameDetector->getGamePacketIdentifierFromData($data);

        // Identify the type of packet the game has sent and fetch its model
        $packet = $packetIdentifier->getPacketModelFromData($data);

        // Hydrate data
        $packet->hydrate($data);

        return $packet;
    }


    /**
     * Take a binary stream and return
     * as an assoc array
     *
     * @param $stream
     * @return array
     */
    public function streamToArray($stream): array
    {
        // Work out the game and get our game-specific packet identifier
        $packetIdentifier = $this->gameDetector->getGamePacketIdentifierFromStream($stream);

        // Identify the type of packet the game has sent and fetch its model
        $packet = $packetIdentifier->getPacketModelFromStream($stream);

        // Unpack the packet data given the model spec
        return $this->unpacker->unpack($stream, $packet);
    }
}