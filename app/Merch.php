<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Merch extends Authenticatable
{
    protected $table = 'merch';
}
