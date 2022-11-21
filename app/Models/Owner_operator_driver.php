<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract; 
use Jenssegers\Mongodb\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;


class Owner_operator_driver extends Model implements 
    AuthenticatableContract
{
    use Notifiable, Authenticatable;
    use HasFactory, SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $connection = 'mongodb';
    protected $collection = 'owner_operator_driver';

    // protected $fillable = [
    //     'userEmail', 'userPass',
    // ];

    protected $guarded = [];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    // protected $hidden = [
    //     'userPass',
    // ];
    // public function getAuthPassword()
    // {
    //     return $this->userPassword;
    // }
}
