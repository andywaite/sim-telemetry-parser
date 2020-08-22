<?php

namespace AndyWaite\SimTelemetryParser\Test\Game\F12020;

use AndyWaite\SimTelemetryParser\Game\F12020\Structs\PacketMotionData;
use PHPUnit\Framework\TestCase;

class HydrationTest extends TestCase
{
    public function testHydration()
    {
        $filename = dirname(__FILE__).'/../../example/stream_packet_0_unpacked.json';
        $data = json_decode(file_get_contents($filename), true);
        $struct = new PacketMotionData();
        $struct->hydrate($data);

        $this->assertEquals(-0.010047739371657, $struct->getAngularAccelerationZ());
        $this->assertEquals(0, $struct->getHeader()->getPacketId());
        $this->assertEquals(2020, $struct->getHeader()->getPacketFormat());
        $this->assertEquals(-0.01835060492157936, $struct->getCarMotionData()[0]->getRoll());
    }
}