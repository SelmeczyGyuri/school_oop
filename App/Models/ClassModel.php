<?php

namespace App\Models;

class ClassModel extends Model{
    public string|null $name = null;

    protected static $table = 'osztalyok';

    public function __construct(?string $name = null) {
        parent::__construct();
        if($name) {
            $this->name = $name;
        }
    }
}