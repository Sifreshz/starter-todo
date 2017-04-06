<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Priorities extends MY_Model {

    public function __construct() {
        parent::__construct('id', 'task','priority','size','group','deadline','status','flag');
    }

}
