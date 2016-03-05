<?php

namespace Acl\Entities;

/**
 * Description of Permission
 *
 * @author fandrade
 */
class Role {

    protected $name;
    protected $permissions;

    public function __construct($name = null) {
        $this->name = $name;
        $this->permissions = [];
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
        return $this;
    }
    public function getPermissions() {
        return $this->permissions;
    }

    public function addPermissions(Permission $permission) {
        $this->permissions = $permission;
        return $this;
    }

}
