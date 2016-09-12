<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/PingPongGenerator.php";

    $app = new Silex\Application();


    session_start();
    if (empty($_SESSION['pingpongarray'])) {
    $_SESSION['pingpongarray'] = array();
    }
    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));
?>
