<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Password_Reset_Token extends Model
{
    use HasFactory;
    protected $table = 'password_reset_tokens';
    protected $primaryKey = "email";    
    public $timestamps = false;
    protected $fillable = [
        'email',
        'token',     
    ];
}
