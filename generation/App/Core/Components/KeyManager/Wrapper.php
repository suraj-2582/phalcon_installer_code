<?php

namespace App\Core\Components\KeyManager;

class Wrapper extends \App\Core\Components\KeyManager
{

	public function setDi(\Phalcon\Di\DiInterface $di)  : void 
	{
		parent::setDi($di);
	}
	public function getKeyCollection(\App\Core\Models\BaseMongo $mongo = NULL) : \MongoDB\Collection 
	{
		
		$mongo = $mongo ?? $this->getDi()->getObjectManager()->get(\App\Core\Models\BaseMongo::class);
		return parent::getKeyCollection($mongo);
		
	}
	public function getNewKeyPair(\App\Core\Components\Helper $helper = NULL,  $ssl = false) : array 
	{
		
		$helper = $helper ?? $this->getDi()->getObjectManager()->get(\App\Core\Components\Helper::class);
		return parent::getNewKeyPair($helper, $ssl);
		
	}
}