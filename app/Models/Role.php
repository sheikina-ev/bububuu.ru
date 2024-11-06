<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    // Указываем поля таблиц (без id, created_at и updated_at)

    protected $fillable = [
        'name',
        'code'
    ];

    // Связь с моделью User
    public function users(){
        return $this->hasMany(User::class);
    }
}
