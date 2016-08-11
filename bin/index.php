<?php
	use Ratchet\MessageComponentInterface;
	use Ratchet\ConnectionInterface;

	use MyApp\Chat;

    // Make sure composer dependencies have been installed
    require dirname(__DIR__) . '/vendor/autoload.php';


    // Run the server application through the WebSocket protocol on port 8080
    $app = new Ratchet\App('localhost', 8080);
    $app->route('/chat', new Chat);
    $app->route('/echo', new Ratchet\Server\EchoServer, array('*'));
    $app->run();