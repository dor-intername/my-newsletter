<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    public function client(){

        return $this->belongsTo(Client::class);
    }

    public function message(){
        return $this->belongsToMany(Message::class,SentMessage::class);
    }
}
