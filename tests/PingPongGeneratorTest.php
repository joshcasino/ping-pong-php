<?php
    require_once "src/PingPongGenerator.php";

    class PingPongGeneratorTest extends PHPUnit_Framework_TestCase
    {
        function test_makePingPong()
        {
            $test_PingPongGenerator = new PingPongGenerator;
            $input = 15;

            $result = $test_PingPongGenerator->makePingPong($input);

            $this->assertEquals("Ping-Pong", $result);

        }

        function test_makePingPongFive()
        {
            $test_PingPongGenerator = new PingPongGenerator;
            $input = 5;

            $result = $test_PingPongGenerator->makePingPong($input);

            $this->assertEquals("Pong", $result);

        }

        function test_makePingPongThree()
        {
            $test_PingPongGenerator = new PingPongGenerator;
            $input = 3;

            $result = $test_PingPongGenerator->makePingPong($input);

            $this->assertEquals("Ping", $result);

        }

        function test_makePingPongElse()
        {
            $test_PingPongGenerator = new PingPongGenerator;
            $input = 4;

            $result = $test_PingPongGenerator->makePingPong($input);

            $this->assertEquals(4, $result);

        }
    }
?>
