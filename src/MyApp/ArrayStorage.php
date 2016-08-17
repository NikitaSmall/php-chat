<?php

namespace src\MyApp;

class ArrayStorage implements StorageInterface
{
	protected $array;

	public function __constuct()
	{
		$this->array = [];
	}

	public function getMessages()
	{
		return $this->array;
	}

	public function putMessage($msg)
	{
		$this->array[] = $msg;
	}
}