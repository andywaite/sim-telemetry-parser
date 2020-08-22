<?php


namespace AndyWaite\SimTelemetryParser\Game;

use AndyWaite\SimTelemetryParser\Game\F12020\PacketDetector;
use AndyWaite\SimTelemetryParser\Packet\PacketDetectorInterface;
use AndyWaite\SimTelemetryParser\Util\BinaryFormatCodesHelper;

/**
 * Class GameIdentifier
 * @package AndyWaite\SimTelemetryParser\Packet
 *
 * Look at the header of the packet and identify the game. Currently only supports F1 2020.
 */
class GameDetector
{
    const GAME_F1_2020 = "F1 2020";

    /**
     * Given a stream, identify the game
     * and return its ID
     *
     * @param string $stream
     * @return string
     */
    public function identifyGameFromStream(string $stream): string
    {
        // the first 16 bits of the stream are a 16 bit unsigned integer which tell us the format
        $unpacked = unpack(BinaryFormatCodesHelper::UINT16_LE."packetFormat", $stream);
        return $this->identifyGameFromFormatProperty($unpacked['packetFormat']);
    }

    /**
     * Given an array of data,
     * identify the game and
     * return its ID
     *
     * @param array $data
     * @return string
     */
    public function identifyGameFromData(array $data): string
    {
        return $this->identifyGameFromFormatProperty($data['header']['packetFormat']);
    }

    /**
     * @param string $format
     * @return string
     */
    protected function identifyGameFromFormatProperty(string $format)
    {
        switch ($format) {
            case 2020:
                return self::GAME_F1_2020;
            // if adding more games in the future, we'll need to detect their packets here
        }

        throw new \RuntimeException("Unidentified packet received. This app currently only supports F1 2020");
    }

    /**
     * Given a stream, get us the correct packet
     * detector for the game.
     *
     * @param string $stream
     * @return PacketDetectorInterface
     */
    public function getGamePacketIdentifierFromStream(string $stream): PacketDetectorInterface
    {
        $game = $this->identifyGameFromStream($stream);

        switch ($game) {
            case self::GAME_F1_2020:
                return new PacketDetector();
        }

        throw new \RuntimeException("Unidentified packet received. This app currently only supports F1 2020");
    }

    /**
     * Given an array of data, get us the correct packet
     * detector for the game.
     *
     * @param array $data
     * @return PacketDetectorInterface
     */
    public function getGamePacketIdentifierFromData(array $data): PacketDetectorInterface
    {
        $game = $this->identifyGameFromData($data);

        switch ($game) {
            case self::GAME_F1_2020:
                return new PacketDetector();
        }

        throw new \RuntimeException("Unidentified packet received. This app currently only supports F1 2020");
    }
}