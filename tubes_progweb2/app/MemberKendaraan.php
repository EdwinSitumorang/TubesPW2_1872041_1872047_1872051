<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MemberKendaraan extends Model
{
  protected $table = 'member_kendaraan';

  protected $fillable = [
    'id',
    'id_member',
    'no_plat',
    'jenis_kendaraan'
  ];


  public function milikmember()
  {
    return $this->belongsTo(User::class,'id_member');
  }
  public $timestamps = false;
}
