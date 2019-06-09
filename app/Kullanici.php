<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Kullanici extends Authenticatable
{

    public $timestamps = false;
    protected $table="kullanici";

    protected $fillable =[
        "adsoyad","email","sifre",
    ];

    protected $hidden = [
        "created_at", "updated_at",
    ];

}
