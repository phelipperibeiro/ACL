<?php

namespace Acl;

//use Acl\Contracts\UserAcl;

/**
 * Description of User
 *
 * @author fandrade
 */
class User implements Contracts\UserAcl {

    protected $id;

    public function getRole() {
        return "Supervisor";
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

}
