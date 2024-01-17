<?php

namespace App\Core\Components\Requester;

class Wrapper extends \App\Core\Components\Requester
{

	public function setDi(\Phalcon\Di\DiInterface $di)  : void 
	{
		parent::setDi($di);
	}
}