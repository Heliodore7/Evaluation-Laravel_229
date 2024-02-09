<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    use HasFactory;
    protected $filliable =[
        'nom',
        'prenom',
        'telephone',
        'email',
        'photo',
        'user_id',
    ];

    public function User(){
        return $this->belongsTo(User::class);
    }

}
