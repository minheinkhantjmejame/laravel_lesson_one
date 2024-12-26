<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $table = "articles";
    protected $primaryKey = "id";

    // Mass Assignment 
    // method 1

    // protected $fillable = [
    //     'title',
    //     'description',
    //     'user_id',
    //     'rating'    // created_at, updated_at ka dot default par tae a twet pyan yay sayar ma lo 
    // ];



    // Method 2

    protected $guarded = [];
}
