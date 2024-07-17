<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'customers'; // agar bisa di panggil di postman

    protected $fillable = [
         'name',
         'alamat',
         'no_hp',

    ];
}
