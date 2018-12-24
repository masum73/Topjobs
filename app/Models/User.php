<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','user_role',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function isAdmin(){
        if($this->user_role == 1){
            return true;
        }else
            return false;
    }
    public function isCompany(){
        if($this->user_role == 2){
            return true;
        }else
            return false;
    }
    public function isCandidate(){
        if($this->user_role == 3){
            return true;
        }else
            return false;
    }
//    every company has many posted jobs
    public function jobs()
    {
        return $this->hasMany(Job::class, 'user_id','id');
    }
}
