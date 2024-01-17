<?php

namespace App\Core\Components\Log;

class Wrapper extends \App\Core\Components\Log
{

	public function setDi(\Phalcon\Di\DiInterface $di)  : void 
	{
		parent::setDi($di);
	}
}