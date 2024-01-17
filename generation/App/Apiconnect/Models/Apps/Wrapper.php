<?php

namespace App\Apiconnect\Models\Apps;

class Wrapper extends \App\Apiconnect\Models\Apps
{

	public function setDi(\Phalcon\Di\DiInterface $di)  : void 
	{
		parent::setDi($di);
	}
	public function getSubUserWithApp(array $filter = array (
), \App\Core\Models\User\SubUser $subUser = NULL) : array 
	{
		
		$subUser = $subUser ?? $this->getDi()->getObjectManager()->create(\App\Core\Models\User\SubUser::class);
		return parent::getSubUserWithApp($filter, $subUser);
		
	}
	public function createApp(?array $data = null, \App\Core\Components\Helper $helper = NULL) : array 
	{
		
		$helper = $helper ?? $this->getDi()->getObjectManager()->get(\App\Core\Components\Helper::class);
		return parent::createApp($data, $helper);
		
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