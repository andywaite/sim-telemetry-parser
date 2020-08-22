# Library to parse UDP packets from sim racing games

**Currently only supports Codemasters F1 2020**

See: https://forums.codemasters.com/topic/54423-f1%C2%AE-2020-udp-specification/

Many sim racing games can send telemetry data over the network to a 3rd party app.

The data format varies from game-to-game, but often includes:
  - Car data like speed & engine RPM
  - Control data like throttle position & steering angle
  - Lap data like current lap time and fastest sectors

The data sent in the UDP packets comes through as a raw binary stream. The aim of this
library is to take that binary stream and turn it into something we can work with in PHP.

Note that this library does NOT handle receiving the binary stream or display it - merely
parsing the raw data and turning it into a friendly model.

## How to use

1) Use Composer to install
   
   `$ composer install andywaite/sim-telemetry-parser`
   
2) Use it!
   
   ```                                                         
   // Create parser class
   $parser = AndyWaite\SimTelemetryParser\Parser::getParser();
   
   // Parse a stream
   $packet = $parser->streamToModels($binaryStream);
   
   // Get index of player  car
   $playerCar = $packet->getHeader()->getPlayerCarIndex();
                           
   // Each packet contains different data. Speed is only contained in the car telemetry packet
   if ($packet instanceof \AndyWaite\SimTelemetryParser\Game\F12020\Structs\PacketCarTelemetryData) {
    echo "You are traveling at ".$packet->getCarTelemetry($playerCar)->getSpeed()."kph";
   }
    ```                     

For a scrappy demo of it in use, see `demo.php`

## Types of model that can be returned by parse function
 - `AndyWaite\SimTelemetryParser\Game\F12020\PacketCarSetupData`
 - `AndyWaite\SimTelemetryParser\Game\F12020\PacketCarStatusData`
 - `AndyWaite\SimTelemetryParser\Game\F12020\PacketCarTelemetryData`
 - `AndyWaite\SimTelemetryParser\Game\F12020\PacketEventData`
 - `AndyWaite\SimTelemetryParser\Game\F12020\PacketFinalClassificationData`
 - `AndyWaite\SimTelemetryParser\Game\F12020\PacketHeader`
 - `AndyWaite\SimTelemetryParser\Game\F12020\PacketLapData`
 - `AndyWaite\SimTelemetryParser\Game\F12020\PacketLobbyInfoData`
 - `AndyWaite\SimTelemetryParser\Game\F12020\PacketMotionData`
 - `AndyWaite\SimTelemetryParser\Game\F12020\PacketParticipantsData`
 - `AndyWaite\SimTelemetryParser\Game\F12020\PacketSessionData`
 - `AndyWaite\SimTelemetryParser\Game\F12020\FastestLap`
 - `AndyWaite\SimTelemetryParser\Game\F12020\Penalty`
 - `AndyWaite\SimTelemetryParser\Game\F12020\RaceWinner`
 - `AndyWaite\SimTelemetryParser\Game\F12020\Retirement`
 - `AndyWaite\SimTelemetryParser\Game\F12020\SpeedTrap`
 - `AndyWaite\SimTelemetryParser\Game\F12020\TeamMateInPits`

## Future development

I plan to write a much nicer server application & visualiser which will use this library.


For a complete reference of packets & their contents, see: https://forums.codemasters.com/topic/54423-f1%C2%AE-2020-udp-specification/



