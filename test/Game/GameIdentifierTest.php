<?php

namespace AndyWaite\SimTelemetryParser\Test\Game\GameFactoryTest;

use AndyWaite\SimTelemetryParser\Game\GameDetector;
use AndyWaite\SimTelemetryParser\Game\F12020\PacketDetector;
use PHPUnit\Framework\TestCase;

class GameIdentifierTest extends TestCase
{
    public function testIdentifyGameFromStream()
    {
        $stream = file_get_contents(dirname(__FILE__).'/../example/stream_packet_0');

        $gameFactory = new GameDetector();
        $this->assertEquals(GameDetector::GAME_F1_2020, $gameFactory->identifyGameFromStream($stream));
    }

    public function testGetDetectorFromStream()
    {
        $stream = file_get_contents(dirname(__FILE__).'/../example/stream_packet_0');

        $gameFactory = new GameDetector();
        $this->assertInstanceOf(PacketDetector::class, $gameFactory->getGamePacketIdentifierFromStream($stream));
    }
}
