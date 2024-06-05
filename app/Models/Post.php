<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Usamamuneerchaudhary\Commentify\Traits\Commentable;

class Post extends Model
{
    use HasFactory;
    use Commentable;

    protected $fillable = [
        'title', 
        'product_id' // Thêm dòng này
    ];
}
