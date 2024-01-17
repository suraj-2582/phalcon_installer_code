<?php

namespace App\Core\Components\Cache;

class Wrapper extends \App\Core\Components\Cache
{

	public function __construct()  
	{
		parent::__construct();
	}
	public function setDi(\Phalcon\Di\DiInterface $di)  : void 
	{
		parent::setDi($di);
	}
}