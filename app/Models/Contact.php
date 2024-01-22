<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
// if i use single name i should use the below code before protected $fillable
    protected $table = 'contact';
    protected $fillable = [

        'name',
        'email',
        'phone',
        'subject',
        'message',
        ];
}
