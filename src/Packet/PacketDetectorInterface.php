<?php


namespace AndyWaite\SimTelemetryParser\Packet;

interface PacketDetectorInterface
{
    /**
     * Get the specific model for the packet we've recieved
     *
     * @param string $stream
     * @return DataStructure
     */
    public function getPacketModelFromStream(string $stream): DataStructure;

    /**
     * Get the specific model for an array of data
     *
     * @param array $data
     * @return DataStructure
     */
    public function getPacketModelFromData(array $data): DataStructure;
}