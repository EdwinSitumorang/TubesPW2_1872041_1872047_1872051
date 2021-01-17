<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    //
    protected $table = 'transaksi';

    protected $fillable = [
      'id_transaksi',
      'id_bb',
      'id_user_staff',
      'id_user_member',
      'liter',
      'total',
      'tgl_transaksi'
    ];

    public function bahanbakar()
    {
      return $this->belongsTo(BahanBakar::class,'id_bb');
    }

    public function userstaff()
    {
      return $this->belongsTo(User::class,'id_user_staff');
    }

    public function usermember()
    {
      return $this->belongsTo(User::class,'id_user_member');
    }

    public $timestamps = false;
}
