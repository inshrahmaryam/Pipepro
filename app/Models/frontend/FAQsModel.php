<?php

namespace App\Models\frontend;

use Illuminate\Database\Eloquent\Model;

class FAQsModel extends Model
{
    use HasFactory;
    protected $table="faqs";
    protected $primarykey="id";
}
