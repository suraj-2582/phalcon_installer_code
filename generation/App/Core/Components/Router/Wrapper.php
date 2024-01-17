<?php

namespace App\Core\Components\Router;

class Wrapper extends \App\Core\Components\Router
{
	public \Phalcon\Di\DiInterface $di;
	public function setDi(\Phalcon\Di\DiInterface $di)  : void 
	{
		$this->di = $di;
	}
}