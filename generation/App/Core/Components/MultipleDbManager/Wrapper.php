<?php

namespace App\Core\Components\MultipleDbManager;

class Wrapper extends \App\Core\Components\MultipleDbManager
{

	public function setDi(\Phalcon\Di\DiInterface $di)  : void 
	{
		parent::setDi($di);
	}
}