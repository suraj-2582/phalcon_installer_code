<?php

namespace App\Core\Components\Translation;

class Wrapper extends \App\Core\Components\Translation
{

	public function setDi(\Phalcon\Di\DiInterface $di)  : void 
	{
		parent::setDi($di);
	}
	public function registerTranslation()  
	{
		
		parent::registerTranslation();
		
	}
}