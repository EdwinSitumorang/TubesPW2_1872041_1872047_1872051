<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    //
    protected $table = 'member';

    protected $fillable = [
      'id',
      'point_member',
      'happy_birthday',
      'id_member'
    ];

    public function user()
    {
      return $this->belongsTo(User::class,'id_member');
    }

    public $timestamps = false;
}
