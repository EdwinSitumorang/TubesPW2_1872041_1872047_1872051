<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cabang extends Model
{
    //
    protected $table = 'cabang';
    protected $primaryKey = 'id_cabang';

    protected $fillable = [
      'id_cabang',
      'nama_cabang'
    ];

    public function staff()
    {
      return $this->hasMany(Staff::class,'id_cabang');
    }

    public $timestamps = false;
}
