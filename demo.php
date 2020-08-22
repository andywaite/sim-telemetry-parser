<?php

    include 'vendor/autoload.php';

    $parser = \AndyWaite\SimTelemetryParser\Parser::getParser();

    //Create a UDP socket
    if(!($sock = socket_create(AF_INET, SOCK_DGRAM, 0)))
    {
        $errorcode = socket_last_error();
        $errormsg = socket_strerror($errorcode);

        die("Couldn't create socket: [$errorcode] $errormsg \n");
    }

    echo "Socket created \n";

    // Bind the source address
    if( !socket_bind($sock, "192.168.86.20" , 20777) )
    {
        $errorcode = socket_last_error();
        $errormsg = socket_strerror($errorcode);

        die("Could not bind socket : [$errorcode] $errormsg \n");
    }

    echo "Socket bind OK \n";

    $data = [];

    //Do some communication, this loop can handle multiple clients
    while(1)
    {
        //Receive some data
        socket_recvfrom($sock, $buffer, 40000, 0, $remote_ip, $remote_port);

        try {
            $packet = $parser->streamToModels($buffer);
            $playerCar = $packet->getHeader()->getPlayerCarIndex();

            if ($packet instanceof \AndyWaite\SimTelemetryParser\Game\F12020\Structs\PacketCarTelemetryData) {
                $data["Gear"] =  $packet->getCarTelemetry($playerCar)->getGear();
                $data["Speed"] =  $packet->getCarTelemetry($playerCar)->getSpeed()."kph";
                $data["RPM"] =  $packet->getCarTelemetry($playerCar)->getEngineRPM()."kph";
            }

            if ($packet instanceof \AndyWaite\SimTelemetryParser\Game\F12020\Structs\PacketCarStatusData) {
                $data["Fuel mix"] =  $packet->getCarStatus($playerCar)->getFuelMix();
                $data["Brake bias"] =  $packet->getCarStatus($playerCar)->getFrontBrakeBias();
            }

            if ($packet instanceof \AndyWaite\SimTelemetryParser\Game\F12020\Structs\PacketMotionData) {
                $data["Lateral G"] =  $packet->getCarMotion($playerCar)->getGForceLateral();
                $data["Lng G"] =  $packet->getCarMotion($playerCar)->getGForceLongitudinal();
                $data["Vert G"] =  $packet->getCarMotion($playerCar)->getGForceVertical();
            }

            if ($packet instanceof \AndyWaite\SimTelemetryParser\Game\F12020\Structs\PacketSessionData) {
                $data["Track"] =  $packet->getTrackId();
            }

            if ($packet instanceof \AndyWaite\SimTelemetryParser\Game\F12020\Structs\PacketLapData) {
                $data["Best lap"] =  $packet->getCarLapData($playerCar)->getBestLapNum();
                $data["Last lap"] =  $packet->getCarLapData($playerCar)->getLastLapTime();
                $data["Current lap"] =  $packet->getCarLapData($playerCar)->getCurrentLapTime();
                $data["Sector"] =  $packet->getCarLapData($playerCar)->getSector();
                $data["Position"] =  $packet->getCarLapData($playerCar)->getCarPosition();
            }


            foreach ($data as $label => $value) {
                echo "\n".$label.": ".$value;
            }

        } catch (\Throwable $e) {
            echo "\n\n-------------";
            echo "\n".$e->getMessage();
            file_put_contents("error_buffer", $buffer);
        }
    }

    socket_close($sock);
