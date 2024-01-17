<?php

namespace App\Apiconnect\Components\Token;

class Wrapper extends \App\Apiconnect\Components\Token
{

	public function setDi(\Phalcon\Di\DiInterface $di)  : void 
	{
		parent::setDi($di);
	}
	public function createBefore(?\Phalcon\Events\Event $event = null,  $myComponent = null,  $data = null, \App\Apiconnect\Models\Apps $appModel = NULL)  
	{
		
		$appModel = $appModel ?? $this->getDi()->getObjectManager()->get(\App\Apiconnect\Models\Apps::class);
		parent::createBefore($event, $myComponent, $data, $appModel);
		
	}
}