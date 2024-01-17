<?php

namespace App\Core\Components\Helper;

class Wrapper extends \App\Core\Components\Helper
{

	public function __construct(\App\Core\Components\KeyManager $keyManager)  
	{
		parent::__construct($keyManager);
	}
	public function setDi(\Phalcon\Di\DiInterface $di)  : void 
	{
		parent::setDi($di);
	}
	public function decodeBasicAuth(?string $authString = null, \App\Core\Models\User $user = NULL) : array 
	{
		
		$user = $user ?? $this->getDi()->getObjectManager()->create(\App\Core\Models\User::class);
		return parent::decodeBasicAuth($authString, $user);
		
	}
}