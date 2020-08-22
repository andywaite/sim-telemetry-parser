<?php

namespace AndyWaite\SimTelemetryParser\Test\Game\F12020;

use AndyWaite\SimTelemetryParser\Game\F12020\PacketDetector;
use AndyWaite\SimTelemetryParser\Game\F12020\Structs\PacketEventData;
use AndyWaite\SimTelemetryParser\Game\F12020\Structs\PacketMotionData;
use AndyWaite\SimTelemetryParser\Game\F12020\Structs\Penalty;
use PHPUnit\Framework\TestCase;

class PacketDetectorTest extends TestCase
{
    /**
     * @dataProvider dataProvider
     * @param string $stream
     * @param string $expectedPacketType
     */
    public function testIdentifyPacket(string $stream, string $expectedPacketType)
    {
        $packetDetector = new PacketDetector();
        $packet = $packetDetector->getPacketModelFromStream($stream);

        $this->assertInstanceOf($expectedPacketType, $packet);
    }

    public function dataProvider()
    {
        return [
//            [
//                file_get_contents(dirname(__FILE__).'/../../example/stream_packet_0'),
//                PacketMotionData::class
//            ],
//            [
//                file_get_contents(dirname(__FILE__).'/../../example/stream_packet_3'),
//                Penalty::class
//            ],
            [
                file_get_contents(dirname(__FILE__).'/../../example/stream_packet_error'),
                PacketEventData::class
            ]
        ];
    }
}