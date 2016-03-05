<?php

namespace Acl;

/**
 * Description of Acl
 *
 * @author fandrade
 */
class Acl {

    protected $roles;
    protected $resources;
    protected $user;

    public function __construct(array $roles, array $resources) {

        foreach ($roles as $role) {
            if (!$role instanceof \Acl\Entities\Role) {
                throw new \InvalidArgumentException("Invalid Role");
            }
        }

        foreach ($resources as $resource) {
            if (!$resource instanceof \Acl\Entities\Resource) {
                throw new \InvalidArgumentException("Invalid Resource");
            }
        }
        $this->roles = $roles;
        $this->resources = $resources;
    }

    public function setUser(Contracts\UserAcl $user) {
        $this->user = $user;
        return $this;
    }

    public function hasRole($role) {

        foreach ($this->roles as $r) {
            if ($r->getName() == $role) {
                return true;
            }
        }

        return false;
    }

    private function hasPermission($role, $permission) {

        foreach ($this->roles as $r) {
            if ($r->getName() == $role) {
                foreach ((array) $r->getPermissions() as $p) {
                    if ($p == $permission) {
                        return true;
                    }
                }
            }
        }
        return false;
    }

    public function can($permission, Contracts\UserAcl $user = null) {

        if ($user) {
            return $this->hasPermission($user->getRole(), $permission);
        }

        if ($this->user) {
            return $this->hasPermission($this->user->getRole(), $permission);
        }

        return false;
    }

    public function cannot($permission, Contracts\UserAcl $user = null) {
        return !$this->can($permission, $user);
    }

    public function isOwner($resource, Contracts\UserAcl $user = null) {
            
//        if ($user) {
//            $this->setUser($user);
//        }

        foreach ((array) $this->resources as $r) {

            if (is_a($resource, $r->getName())) {
                if ($user) {
                    return $resource->{$r->getOwnerField()}() == $user->getId();
                }
            }
            return $resource->{$r->getOwnerField()}() == $this->user->getId();
        }

        return false;
    }

}
