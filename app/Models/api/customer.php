<?php

namespace App\Models\api;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    protected $table = 'customer';
    protected $fillable = ['name','email','address','phone'];
    use HasFactory;
}
