<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class People extends Model
{
    use HasFactory, SoftDeletes;

    protected $date = ['deleted_at'];
    protected $fillable = ['name', 'email', 'category_id'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function user()
    {
        return $this->hasOne(User::class, 'people_id');
    }
}
