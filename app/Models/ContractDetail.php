<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract; 
use Jenssegers\Mongodb\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;

class ContractDetail extends Model implements 
AuthenticatableContract
{
    use Notifiable, Authenticatable, SoftDeletes;

    protected $connection = 'mongodb';
    protected $collection = 'contractdetails';
    protected $dates = ['deleted_at'];

    protected $guarded = [];
}
