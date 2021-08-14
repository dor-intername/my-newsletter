<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    public function client(){

        return $this->belongsTo(Client::class);
    }

    public function customer(){
        return $this->belongsToMany(Customer::class,SentMessage::class);
    }
}
