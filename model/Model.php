<?php

namespace model;

use core\DB;

class Model
{
    protected DB $db;
    public function __construct()
    {
        $this->db = new DB();
    }

}