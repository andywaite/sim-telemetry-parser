<?php

namespace AndyWaite\SimTelemetryParser\Test\Packet;

use AndyWaite\SimTelemetryParser\Game\F12020\Structs\PacketMotionData;
use AndyWaite\SimTelemetryParser\Game\F12020\Structs\PacketParticipantsData;
use AndyWaite\SimTelemetryParser\Packet\DataStructure;
use AndyWaite\SimTelemetryParser\Packet\Unpacker;
use AndyWaite\SimTelemetryParser\Util\DocBlockParser;
use PHPUnit\Framework\TestCase;

class UnpackerTest extends TestCase
{
    /**
     * @dataProvider dataProvider
     * @param string $stream
     * @param DataStructure $packet
     * @param array $expectedProps
     */
    public function testUnpacker(string $stream, DataStructure $packet, array $expectedProps)
    {
        $unpacker = new Unpacker(new DocBlockParser());
        $unpacked = $unpacker->unpack($stream, $packet);

        $this->checkNestedExpectedProps($expectedProps, $unpacked);
    }

    protected function checkNestedExpectedProps($expectedProps, $unpacked)
    {
        foreach ($expectedProps as $prop => $value) {
            $this->assertArrayHasKey($prop, $unpacked);

            if (is_array($value)) {
                $this->checkNestedExpectedProps($value, $unpacked[$prop]);
            } else {
                $this->assertEquals($value, $unpacked[$prop]);
            }

        }
    }

    public function dataProvider()
    {
        return [
            [
                file_get_contents(dirname(__FILE__).'/../example/stream_packet_0'),
                new PacketMotionData(),
                [
                    'header' => ['playerCarIndex' => 0],
                    'carMotionData' => [
                        [
                            'yaw' => 0.79592460393906,
                            'gForceLateral' => -0.0003999798791483
                        ],
                        [
                            'gForceLateral' => 0.0
                        ]
                    ]
                ]
            ],
            [
                file_get_contents(dirname(__FILE__).'/../example/stream_packet_4'),
                new PacketParticipantsData(),
                [
                    'header' => ['playerCarIndex' => 0],
                    "participants" => [
                        [
                            "nationality" => 10,
                            'name' => "BackmarkerRacer"
                        ],
                        [
                            "nationality" => 255,
                            'name' => "Default Ghost"
                        ]
                    ]
                ]
            ]
        ];
    }
}