<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Model;

class Client extends Model
{
    protected $guarded = ['id'];
    protected $table = 'clients';
    protected $fillable = ['first_name', 'last_name', 'phone', 'email', 'password'];
    use HasFactory;

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getAuthPassword()
    {
        return $this->password;
    }

    public function customer()
    {

        return $this->hasMany(Customer::class);
    }

    public function messages()
    {
        return $this->hasMany(Message::class);
    }

    public function messageSent()
    {
        return $this->hasManyThrough(Message::class, SentMessage::class, 'message_id', 'id');
    }

    public function getfullNameAttribute()
    {
        return ucfirst($this->first_name) . ' ' . ucfirst($this->last_name);
    }
}
