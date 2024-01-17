<?php

namespace App\Connector\Components\ActivityLogEvent;

class Wrapper extends \App\Connector\Components\ActivityLogEvent
{

	public function setDi(\Phalcon\Di\DiInterface $di)  : void 
	{
		parent::setDi($di);
	}
	public function createActivityLog(?\Phalcon\Events\Event $event = null, ?object $myComponent = null, ?array $data = null, \App\Core\Models\BaseMongo $mongo = NULL) : array 
	{
		
		$mongo = $mongo ?? $this->getDi()->getObjectManager()->create(\App\Core\Models\BaseMongo::class);
		return parent::createActivityLog($event, $myComponent, $data, $mongo);
		
	}
}