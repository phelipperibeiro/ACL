<?php

namespace Acl\Entities;

/**
 * Description of Permission
 *
 * @author fandrade
 */
class Permission {

    protected $name;

    public function __construct($name = null) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
        return $this;
    }

}
