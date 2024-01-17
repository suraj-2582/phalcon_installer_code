<?php

namespace App\Core\Models\Acl\Role;

class Wrapper extends \App\Core\Models\Acl\Role
{

	public function setDi(\Phalcon\Di\DiInterface $di)  : void 
	{
		parent::setDi($di);
	}
	public function createRole( $data = null, \App\Core\Models\Resource $resourceModel = NULL, \App\Core\Models\Acl\RoleResource $roleResourceModel = NULL) : array 
	{
		
		$resourceModel = $resourceModel ?? $this->getDi()->getObjectManager()->create(\App\Core\Models\Resource::class);
		$roleResourceModel = $roleResourceModel ?? $this->getDi()->getObjectManager()->get(\App\Core\Models\Acl\RoleResource::class);
		return parent::createRole($data, $resourceModel, $roleResourceModel);
		
	}
	public function deleteRole( $data = null, \App\Core\Models\Acl\Role $roleModel = NULL, \App\Core\Models\User $userModel = NULL) : array 
	{
		
		$roleModel = $roleModel ?? $this->getDi()->getObjectManager()->get(\App\Core\Models\Acl\Role::class);
		$userModel = $userModel ?? $this->getDi()->getObjectManager()->get(\App\Core\Models\User::class);
		return parent::deleteRole($data, $roleModel, $userModel);
		
	}
	public function updateRole( $data = null, \App\Core\Models\Acl\Role $roleModel = NULL, \App\Core\Models\Acl\RoleResource $roleResourceModel = NULL, \App\Core\Models\Resource $resource = NULL) : array 
	{
		
		$roleModel = $roleModel ?? $this->getDi()->getObjectManager()->get(\App\Core\Models\Acl\Role::class);
		$roleResourceModel = $roleResourceModel ?? $this->getDi()->getObjectManager()->get(\App\Core\Models\Acl\RoleResource::class);
		$resource = $resource ?? $this->getDi()->getObjectManager()->get(\App\Core\Models\Resource::class);
		return parent::updateRole($data, $roleModel, $roleResourceModel, $resource);
		
	}
	public function getRole( $data = null, \App\Core\Models\Acl\Role $roleModel = NULL, \App\Core\Models\Acl\RoleResource $roleResource = NULL) : array 
	{
		
		$roleModel = $roleModel ?? $this->getDi()->getObjectManager()->get(\App\Core\Models\Acl\Role::class);
		$roleResource = $roleResource ?? $this->getDi()->getObjectManager()->get(\App\Core\Models\Acl\RoleResource::class);
		return parent::getRole($data, $roleModel, $roleResource);
		
	}
	public function getAllRoles( $limit = 1,  $activePage = 1, \App\Core\Models\Acl\Role $roleModel = NULL, \App\Core\Models\Acl\RoleResource $roleResourceModel = NULL) : array 
	{
		
		$roleModel = $roleModel ?? $this->getDi()->getObjectManager()->get(\App\Core\Models\Acl\Role::class);
		$roleResourceModel = $roleResourceModel ?? $this->getDi()->getObjectManager()->get(\App\Core\Models\Acl\RoleResource::class);
		return parent::getAllRoles($limit, $activePage, $roleModel, $roleResourceModel);
		
	}
	public function getAllResources(\App\Core\Models\Acl\RoleResource $roleResourceModel = NULL) : \Phalcon\Mvc\Model\ResultsetInterface | bool 
	{
		
		$roleResourceModel = $roleResourceModel ?? $this->getDi()->getObjectManager()->get(\App\Core\Models\Acl\RoleResource::class);
		return parent::getAllResources($roleResourceModel);
		
	}
	public function getRoleResources(?array $customData = null, \App\Core\Models\Acl\Role $roleModel = NULL, \App\Core\Models\User\SubUser $subUserModel = NULL, \App\Core\Models\Resource $resourceModel = NULL, \App\Core\Models\Acl\RoleResource $roleResourceModel = NULL) : array 
	{
		
		$roleModel = $roleModel ?? $this->getDi()->getObjectManager()->get(\App\Core\Models\Acl\Role::class);
		$subUserModel = $subUserModel ?? $this->getDi()->getObjectManager()->get(\App\Core\Models\User\SubUser::class);
		$resourceModel = $resourceModel ?? $this->getDi()->getObjectManager()->get(\App\Core\Models\Resource::class);
		$roleResourceModel = $roleResourceModel ?? $this->getDi()->getObjectManager()->get(\App\Core\Models\Acl\RoleResource::class);
		return parent::getRoleResources($customData, $roleModel, $subUserModel, $resourceModel, $roleResourceModel);
		
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