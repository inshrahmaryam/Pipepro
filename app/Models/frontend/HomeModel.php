<?php

namespace App\Models\frontend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeModel extends Model
{
    use HasFactory;
    protected $table = 'home';
    protected $fillable = ['name', 'phonenumber', 'flavours', 'youraddress'];
}
