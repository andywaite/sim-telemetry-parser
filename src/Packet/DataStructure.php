<?php


namespace AndyWaite\SimTelemetryParser\Packet;


interface DataStructure
{
    public function hydrate(array $data);
}