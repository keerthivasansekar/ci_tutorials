<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_contacts extends MY_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->table = 'ci_contacts';
    }

}
