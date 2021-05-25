<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kakeibo extends Model
{
    use HasFactory;
    protected $table = 'money_info';
    protected $fillable = [
        'month','money','category','detail','memo',
    ];
}
