<?php

namespace App\Core\Models\BaseMongo;

class Wrapper extends \App\Core\Models\BaseMongo
{

	public function __construct()  
	{
		parent::__construct();
	}
	public function setDi(\Phalcon\Di\DiInterface $di)  : void 
	{
		parent::setDi($di);
	}
	public function encryptWithAES(?string $data = null, \App\Core\Components\KeyManager $km = NULL) : string 
	{
		
		$km = $km ?? $this->getDi()->getObjectManager()->get(\App\Core\Components\KeyManager::class);
		return parent::encryptWithAES($data, $km);
		
	}
	public function decryptWithAES( $data = null, \App\Core\Components\KeyManager $km = NULL)  
	{
		
		$km = $km ?? $this->getDi()->getObjectManager()->get(\App\Core\Components\KeyManager::class);
		parent::decryptWithAES($data, $km);
		
	}
}