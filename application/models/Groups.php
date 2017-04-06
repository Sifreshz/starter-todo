<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Groups extends MY_Model {

    public function __construct() {
        parent::__construct('id', 'name');
    }

}
