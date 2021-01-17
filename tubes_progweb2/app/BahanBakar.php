<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BahanBakar extends Model
{
    //
    protected $table = 'bahan_bakar';
    protected $primaryKey = 'id_bb';
    protected $fillable = [
      'id_bb',
      'name_bb',
      'price_bb',
      'point_bb'
    ];

    public function transaksi()
    {
      return $this->hasMany(Transaksi::class,'id_bb');
    }

    public $timestamps = false;
}
