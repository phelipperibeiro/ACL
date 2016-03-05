<?php

namespace Acl\Entities;

/**
 * Description of Resource
 *
 * @author fandrade
 */
class Resource {

    protected $name;
    protected $ownerField;

    public function __construct($name = null, $ownerField = null) {
        $this->name = $name;
        $this->ownerField = $ownerField;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    public function getOwnerField() {
        return $this->ownerField;
    }

    public function setOwnerField($ownerField) {
        $this->ownerField = $ownerField;
        return $this;
    }

}
