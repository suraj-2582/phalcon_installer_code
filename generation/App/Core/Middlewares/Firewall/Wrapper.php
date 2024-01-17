<?php

namespace App\Core\Middlewares\Firewall;

class Wrapper extends \App\Core\Middlewares\Firewall
{
	public \Phalcon\Di\DiInterface $di;
	public function setDi(\Phalcon\Di\DiInterface $di)  : void 
	{
		$this->di = $di;
	}
}