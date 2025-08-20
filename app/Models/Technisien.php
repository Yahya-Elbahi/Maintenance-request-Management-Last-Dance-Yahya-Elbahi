<?php

namespace App\Models;

use GuzzleHttp\Client;
use Illuminate\Database\Eloquent\Model;

class Technisien extends Model
{
    protected $fillable = [
        // 'user_id',
        // 'technisien_id',
        'title',
        'description',
        'category',
        'image'
    ];

    public function clientPost(){
        return $this->hasOne(Client::class);
    }

    // public function user()
    // {
    //     return $this->belongsTo(User::class,'user_id');
    // }

    // public function technisien()
    // {
    //     return $this->belongsTo(Technisien::class,'technisien_id');
    // }
    // public function user(){
    //     return $this->belongsTo(User::class);
    // }


}
