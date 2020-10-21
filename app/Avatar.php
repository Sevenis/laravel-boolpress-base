<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Avatar extends Model
{
    //bisogna inserirlo per avvisare
    //che abbiamo rimosso il timestamps
    //nel migration
    public $timestamps = false;

    protected $fillable = [
        'telefono', 'avatar', 'user_id',
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

}
