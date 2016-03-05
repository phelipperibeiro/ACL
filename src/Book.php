<?php

namespace Acl;

/**
 * Description of Book
 *
 * @author fandrade
 */
class Book {

    protected $id;
    protected $user_id;
    protected $name;

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function getUserId() {
        return $this->user_id;
    }

    public function setUserId($UserId) {
        $this->user_id = $UserId;
        return $this;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
        return $this;
    }

}
