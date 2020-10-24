<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Pengguna extends Authenticatable
{
  use Notifiable;

  protected $table = "pengguna";
  protected $primarykey = "id";
  protected $fillable = [
      'nama_lengkap', 'email', 'password','jenis_kelamin','alamat','no_hp','tanggal_lahir','level','avatar'
  ];

  public function getAvatar()
    {
      if(!$this->avatar){
        return asset('images/default.jpg');
      }
        return asset('images/'.$this->avatar);
    }

  protected $hidden = [
      'password', 'remember_token',
  ];


  protected $casts = [
      'email_verified_at' => 'datetime',
  ];
}
