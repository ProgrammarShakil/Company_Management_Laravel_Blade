<?php

namespace App\Models;

use App\Models\PayEmployee;
use Illuminate\Support\Facades\DB;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;
    

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','fathers_name_or_husband_name_value','fathers_name_or_husband_name','mothers_name','date_of_birth','religion','gender',
        'NID_NO_or_Birth_ID_value','NID_NO_or_Birth_ID','mobile_no','image','NID_font_image','NID_back_image','father_or_mother_image',
        'NID_font_father_or_mother_image','NID_back_father_or_mother_image','permanent_address','present_address','status',
    ];
 
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];



    public function pay_employees(){
      return  $this->hasMany(PayEmployee::class, 'id');
    }
}
