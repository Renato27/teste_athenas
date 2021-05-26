<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory,SoftDeletes;

    protected $date = ['deleted_at'];
    protected $fillable = ['name'];

    const ADMIN     = 1;
    const GERENTE   = 2;
    const NORMAL    = 3;

    public function people()
    {
        return $this->hasMany(People::class, 'category_id', 'id');
    }
}
