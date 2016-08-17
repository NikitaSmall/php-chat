<?php

namespace src\MyApp; 

interface StorageInterface
{
	/*
	 * getMessages
	 */
	function getMessages();

	/*
	 * putMessage
	 */
	function putMessage($msg);
}