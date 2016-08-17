<?php
    require '/bin/autoload.php';
	use Ratchet\MessageComponentInterface;
	use Ratchet\ConnectionInterface;

	use src\MyApp\Chat;
    use src\MyApp\ArrayStorage;

    // Make sure composer dependencies have been installed

    // Run the server application through the WebSocket protocol on port 8080
    $app = new Ratchet\App('localhost', 8080);
    $app->route('/chat', new Chat(new ArrayStorage));
    $app->route('/echo', new Ratchet\Server\EchoServer, array('*'));
    $app->run();