<?php

namespace App\Core\Components\Session;

class Wrapper extends \App\Core\Components\Session
{

	public function setDi(\Phalcon\Di\DiInterface $di)  : void 
	{
		parent::setDi($di);
	}
}