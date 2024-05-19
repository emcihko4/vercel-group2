<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;

    protected $connection = 'mysql';
    protected $table = 'tbl_user';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'string';
    protected $fillable = [
        'username',
        'password',
        'userlevel',
        'name'
    ];   
    protected $hidden = [
        'password'
    ];
    protected $casts = [
        'password'=>'hashed',
    ];
}
