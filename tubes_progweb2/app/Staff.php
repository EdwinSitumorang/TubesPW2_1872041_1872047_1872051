<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    //
    protected $table = 'staff';

    protected $fillable = [
      'id',
      'rating_staff',
      'staff_idusers',
      'staff_id_cabang'
    ];

    public function user()
    {
      return $this->belongsTo(User::class,'staff_idusers');
    }

    public function cabang()
    {
      return $this->belongsTo(Cabang::class,'staff_id_cabang');
    }

    public $timestamps = false;
}
