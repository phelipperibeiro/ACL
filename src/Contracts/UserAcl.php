<?php

namespace Acl\Contracts;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author fandrade
 */
interface UserAcl {

    public function getRole();

    public function getId();
}
