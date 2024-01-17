<?php

namespace App\Core\Models;

class TokenManagerFactory 
{
	public \Phalcon\Di\DiInterface $di;
	public function setDi(\Phalcon\Di\DiInterface $di)  : void 
	{
		$this->di = $di;
	}
	public function create(...$args) : \App\Core\Models\TokenManager 
	{
		return $this->di->getObjectManager()->create(\App\Core\Models\TokenManager::class, ...$args);
	}
}