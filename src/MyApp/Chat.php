<?php
namespace src\MyApp;
use Ratchet\MessageComponentInterface;
use Ratchet\ConnectionInterface;

class Chat implements MessageComponentInterface {
    protected $clients;
    protected $messages;

    public function __construct(StorageInterface $storage) {
        $this->clients = new \SplObjectStorage;
        $this->storage = $storage;
    }

    public function onOpen(ConnectionInterface $conn) {
        $this->clients->attach($conn);
        $conn->send(json_encode($this->storage->getMessages()));
    }

    public function onMessage(ConnectionInterface $from, $msg) {
        $this->storage->putMessage($msg);

        foreach ($this->clients as $client) {
            // if ($from != $client) {
                $client->send($msg);
            // }
        }
    }

    public function onClose(ConnectionInterface $conn) {
        $this->clients->detach($conn);
    }

    public function onError(ConnectionInterface $conn, \Exception $e) {
        $conn->close();
    }
}