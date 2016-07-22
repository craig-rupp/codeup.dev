<?php

class Log

{
	public $filename;
	public $handle;

	public function __construct($prefix = 'log')
	{
		$this->filename = $prefix . "-" . date("Y-M-D") . ".log";
		$this->handle = fopen($this->filename, 'a');
	}

	public function logMessage($logLevel, $message)
	{	
		$myLog = date("Y-M-D") . " $logLevel $message";
		fwrite($this->handle, $myLog . PHP_EOL);
	}

	public function info($message)
	{
		$this->logMessage('INFO', $message);
	}

	public function error($message)
	{
		$this->logMessage('ERRRRRR' , $message);
	}

	public function __destruct()
	{
		fclose($this->handle);

	}
}