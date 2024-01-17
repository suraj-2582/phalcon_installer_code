<?php

namespace App\Core\Models\User;

class Wrapper extends \App\Core\Models\User
{

	public function setDi(\Phalcon\Di\DiInterface $di)  : void 
	{
		parent::setDi($di);
	}
	public function createUser(?array $data = null, string $type = 'customer', bool $autoConfirm = false, bool $isBusiness = true, \App\Core\Models\Acl\Role $roleModel = NULL, \App\Core\Models\Business $business = NULL) : array 
	{
		
		$roleModel = $roleModel ?? $this->getDi()->getObjectManager()->get(\App\Core\Models\Acl\Role::class);
		$business = $business ?? $this->getDi()->getObjectManager()->get(\App\Core\Models\Business::class);
		return parent::createUser($data, $type, $autoConfirm, $isBusiness, $roleModel, $business);
		
	}
	public function prepareUserBusiness(?array $data = null, \App\Core\Models\Business $business = NULL, \App\Core\Models\Staff\Role $staffRole = NULL, \App\Core\Models\Staff\Permission $permission = NULL) : void 
	{
		
		$business = $business ?? $this->getDi()->getObjectManager()->get(\App\Core\Models\Business::class);
		$staffRole = $staffRole ?? $this->getDi()->getObjectManager()->get(\App\Core\Models\Staff\Role::class);
		$permission = $permission ?? $this->getDi()->getObjectManager()->get(\App\Core\Models\Staff\Permission::class);
		parent::prepareUserBusiness($data, $business, $staffRole, $permission);
		
	}
	public function getSavedShopData(?string $userName = null, ?string $email = null) : ?array 
	{
		
		return parent::getSavedShopData($userName, $email);
		
	}
	public function getBusiness(\App\Core\Models\Business $business = NULL) : \App\Core\Models\Business 
	{
		
		$business = $business ?? $this->getDi()->getObjectManager()->get(\App\Core\Models\Business::class);
		return parent::getBusiness($business);
		
	}
	public function getCurrentBusiness(\App\Core\Models\User $user = NULL, \App\Core\Models\Business $business = NULL, bool $safe = false) : mixed 
	{
		
		$user = $user ?? $this->getDi()->getObjectManager()->get(\App\Core\Models\User::class);
		$business = $business ?? $this->getDi()->getObjectManager()->get(\App\Core\Models\Business::class);
		return parent::getCurrentBusiness($user, $business, $safe);
		
	}
	public function login(?array $data = null, \App\Core\Components\Account $accountComponent = NULL) : array 
	{
		
		$accountComponent = $accountComponent ?? $this->getDi()->getObjectManager()->get(\App\Core\Components\Account::class);
		return parent::login($data, $accountComponent);
		
	}
	public function getToken(string $time = '+4 hour', array $additionalData = array (
), bool $restrictForSameUser = true, \App\Core\Components\Helper $helper = NULL) : string 
	{
		
		$helper = $helper ?? $this->getDi()->getObjectManager()->get(\App\Core\Components\Helper::class);
		return parent::getToken($time, $additionalData, $restrictForSameUser, $helper);
		
	}
	public function getRole(\App\Core\Models\Acl\Role $roleModel = NULL) : \App\Core\Models\Acl\Role 
	{
		
		$roleModel = $roleModel ?? $this->getDi()->getObjectManager()->get(\App\Core\Models\Acl\Role::class);
		return parent::getRole($roleModel);
		
	}
	public function sendConfirmationMail( $data = null, \App\Core\Components\Helper $helper = NULL, \App\Core\Components\SendMail $sendMail = NULL) : array 
	{
		
		$helper = $helper ?? $this->getDi()->getObjectManager()->get(\App\Core\Components\Helper::class);
		$sendMail = $sendMail ?? $this->getDi()->getObjectManager()->get(\App\Core\Components\SendMail::class);
		return parent::sendConfirmationMail($data, $helper, $sendMail);
		
	}
	public function reLoginUserUsingToken( $data = null, \App\Core\Components\Helper $helper = NULL) : array 
	{
		
		$helper = $helper ?? $this->getDi()->getObjectManager()->get(\App\Core\Components\Helper::class);
		return parent::reLoginUserUsingToken($data, $helper);
		
	}
	public function sendAcknowledgementMail( $data = null, \App\Core\Components\SendMail $sendMail = NULL) : array | bool 
	{
		
		$sendMail = $sendMail ?? $this->getDi()->getObjectManager()->get(\App\Core\Components\SendMail::class);
		return parent::sendAcknowledgementMail($data, $sendMail);
		
	}
	public function confirmUser( $token = null, \App\Core\Components\Helper $helper = NULL) : array 
	{
		
		$helper = $helper ?? $this->getDi()->getObjectManager()->get(\App\Core\Components\Helper::class);
		return parent::confirmUser($token, $helper);
		
	}
	public function sendForgotPasswordMail( $data = null, \App\Core\Components\Helper $helper = NULL, \App\Connector\Components\Email\Helper $emailHelper = NULL, \App\Core\Components\SendMail $sendMail = NULL) : array 
	{
		
		$helper = $helper ?? $this->getDi()->getObjectManager()->get(\App\Core\Components\Helper::class);
		$emailHelper = $emailHelper ?? $this->getDi()->getObjectManager()->get(\App\Connector\Components\Email\Helper::class);
		$sendMail = $sendMail ?? $this->getDi()->getObjectManager()->get(\App\Core\Components\SendMail::class);
		return parent::sendForgotPasswordMail($data, $helper, $emailHelper, $sendMail);
		
	}
	public function sendResetMail( $data = null, \App\Core\Components\Helper $helper = NULL, \App\Core\Components\SendMail $sendMail = NULL) : array | bool 
	{
		
		$helper = $helper ?? $this->getDi()->getObjectManager()->get(\App\Core\Components\Helper::class);
		$sendMail = $sendMail ?? $this->getDi()->getObjectManager()->get(\App\Core\Components\SendMail::class);
		return parent::sendResetMail($data, $helper, $sendMail);
		
	}
	public function forgotReset( $data = null, \App\Core\Components\TokenManager $tokenManager = NULL, \App\Core\Components\Helper $helper = NULL) : array 
	{
		
		$tokenManager = $tokenManager ?? $this->getDi()->getObjectManager()->get(\App\Core\Components\TokenManager::class);
		$helper = $helper ?? $this->getDi()->getObjectManager()->get(\App\Core\Components\Helper::class);
		return parent::forgotReset($data, $tokenManager, $helper);
		
	}
	public function getDetails(\App\Core\Models\User\Details $details = NULL) : array 
	{
		
		$details = $details ?? $this->getDi()->getObjectManager()->get(\App\Core\Models\User\Details::class);
		return parent::getDetails($details);
		
	}
	public function updateStatus( $data = null, \App\Core\Models\User $userModel = NULL) : array 
	{
		
		$userModel = $userModel ?? $this->getDi()->getObjectManager()->get(\App\Core\Models\User::class);
		return parent::updateStatus($data, $userModel);
		
	}
	public function updateConfirmation( $data = null, \App\Core\Models\User $userModel = NULL) : array 
	{
		
		$userModel = $userModel ?? $this->getDi()->getObjectManager()->get(\App\Core\Models\User::class);
		return parent::updateConfirmation($data, $userModel);
		
	}
	public function logout(\App\Core\Components\Session $session = NULL, \App\Core\Components\Cache $cache = NULL, \App\Core\Components\TokenManager $tokenManager = NULL) : array 
	{
		
		$session = $session ?? $this->getDi()->getObjectManager()->get(\App\Core\Components\Session::class);
		$cache = $cache ?? $this->getDi()->getObjectManager()->get(\App\Core\Components\Cache::class);
		$tokenManager = $tokenManager ?? $this->getDi()->getObjectManager()->get(\App\Core\Components\TokenManager::class);
		return parent::logout($session, $cache, $tokenManager);
		
	}
	public function sendUninstallMail(?array $data = null, \App\Connector\Components\Email\Helper $emailTemplate = NULL, \App\Core\Components\SendMail $mailer = NULL) : array 
	{
		
		$emailTemplate = $emailTemplate ?? $this->getDi()->getObjectManager()->get(\App\Connector\Components\Email\Helper::class);
		$mailer = $mailer ?? $this->getDi()->getObjectManager()->get(\App\Core\Components\SendMail::class);
		return parent::sendUninstallMail($data, $emailTemplate, $mailer);
		
	}
	public function getUserRefreshToken(\App\Core\Models\Acl\Role $role = NULL, \App\Core\Models\Resource $resource = NULL, \App\Core\Models\Acl\RoleResource $roleResource = NULL, \App\Core\Components\Helper $helper = NULL) : string 
	{
		
		$role = $role ?? $this->getDi()->getObjectManager()->get(\App\Core\Models\Acl\Role::class);
		$resource = $resource ?? $this->getDi()->getObjectManager()->get(\App\Core\Models\Resource::class);
		$roleResource = $roleResource ?? $this->getDi()->getObjectManager()->get(\App\Core\Models\Acl\RoleResource::class);
		$helper = $helper ?? $this->getDi()->getObjectManager()->get(\App\Core\Components\Helper::class);
		return parent::getUserRefreshToken($role, $resource, $roleResource, $helper);
		
	}
	public function setUserStatistics(?string $userId = null, string $action = 'login', \App\Core\Components\Utility $utility = NULL) : \MongoDB\UpdateResult | bool 
	{
		
		$utility = $utility ?? $this->getDi()->getObjectManager()->get(\App\Core\Components\Utility::class);
		return parent::setUserStatistics($userId, $action, $utility);
		
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