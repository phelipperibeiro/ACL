<?php

require_once '../vendor/autoload.php';

use Acl\Book;


$permission = new Acl\Entities\Permission();
$permission->setName("view");

$role = new Acl\Entities\Role("Supervisor");
$role->addPermissions($permission);
$roles[] = $role;

$user = new Acl\User();
$user->setId(1);

$book = new Book();
$book->setName("The Lord of Rings")->setId(1)->setUserId($user->getId());

$resource = new \Acl\Entities\Resource(Book::class, "getUserId");
$resources[] = $resource;


$acl = new \Acl\Acl($roles, $resources);

//$acl->setUser($user);
//$acl->isOwner($book, $user);
//var_dump($acl->can("view"));
