<?php

namespace App\Core\Components\Mailers\PhpMailer;

class Wrapper extends \App\Core\Components\Mailers\PhpMailer
{

	public function setDi(\Phalcon\Di\DiInterface $di)  : void 
	{
		parent::setDi($di);
	}
}