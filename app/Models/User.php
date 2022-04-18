<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
// use Laravel\Sanctum\HasApiTokens;
use App\Models\Role;
class User extends Authenticatable
{
    use  HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role_id',
        'school_id',
        'district_id',
        'contact_number'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    
    public function school()
    {
        return $this->belongsTo(School::class,'school_id','id');
        // return $this->hasMany(Comment::class, 'foreign_key', 'local_key');
    }
    public function district()
    {
        return $this->belongsTo(District::class,'district_id','districtId');
    }

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


/**
     * Get the post that owns the comment.
     */
    public function role()
    {
        return $this->belongsTo(Role::class,'role_id');
    }


}
