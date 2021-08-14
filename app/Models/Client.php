<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    public function customer(){

     return  $this->hasMany(Customer::class);
    }

    public function messages(){
        return  $this->hasMany(Message::class);
    }

    public function messageSent(){
        return $this->hasManyThrough(Message::class,SentMessage::class,'message_id','id');
    }

    public function setFullNameAttribute(){
        return $this->first_name .' ' . $this->last_name;
    }

    public function setFirstNameAttribute($value){
        return ucfirst($value);
    }
}
