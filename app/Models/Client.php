<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class Client extends Eloquent implements Authenticatable
{
    use AuthenticableTrait;
    protected $connection = 'mongodb';

    protected $collection = 'clients';
}
