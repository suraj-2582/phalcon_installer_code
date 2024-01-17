<?php

namespace App\Core\Components\TokenManager;

class Wrapper extends \App\Core\Components\TokenManager
{

	public function __construct(\App\Core\Models\TokenManagerFactory $tokenManagerModel)  
	{
		parent::__construct($tokenManagerModel);
	}
	public function setDi(\Phalcon\Di\DiInterface $di)  : void 
	{
		parent::setDi($di);
	}
	public function cleanExpiredTokens(?\App\Core\Models\UserGeneratedTokens $ugt = null)  
	{
		
		$ugt = $ugt ?? $this->getDi()->getObjectManager()->get(\App\Core\Models\UserGeneratedTokens::class);
		parent::cleanExpiredTokens($ugt);
		
	}
}