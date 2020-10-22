<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Hash;

class User extends Authenticatable
{
    use Notifiable;
	protected $table = 'user';
    protected $hidden = [ 'password' ];
    protected $fillable = [
        'email',
        'last_name',
        'first_name',
        'address',
        'gender',
        'membership',
        'date_of_birth',
        'cc_number',
        'cc_type',
        'cc_exp_date',
    ];
    protected $dates = ['created_at','updated_at'];
    protected $dateFormat = 'Y-m-d H:i:s';

    public function setPasswordAttribute($password){
        return $this->attributes['password'] = Hash::make($password);
    }
    public function setAddressAttribute($address){
        return $this->attributes['address'] = json_encode($address);
    }
    public function getAddressAttribute($address){
        return json_decode($address);
    }
    public function getCreatedAtAttribute($date)
    {
        return date('Y-m-d H:i:s', strtotime($date));
    }

}
