<?php
    class PingPongGenerator
    {
        function makePingPong($input_number)
        {
            if ($input_number % 15 == 0) {
                return "Ping-Pong";
            }
            elseif ($input_number % 5 == 0) {
                return "Pong";
            }
            elseif ($input_number % 3 == 0) {
                return "Ping";
            }
            else {
                return $input_number;
            }
        }
    }
?>
