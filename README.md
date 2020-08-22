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
   $packet = $parser->parse($binaryStream);
                           
   // Each packet contains different data. Speed is only contained in the car telemetry packet
   if ($packet instanceof AndyWaite\SimTelemetryParser\Game\F12020\CarTelemetryPacket) {
    echo "You are traveling at ".$packet->getValue()."kph";
   }
    ```                     

For a scrappy demo of it in use, see `demo.php`

I plan to write a much nicer server application & visualiser which will use this library.

For a complete reference of packets & their contents, see: https://forums.codemasters.com/topic/54423-f1%C2%AE-2020-udp-specification/



