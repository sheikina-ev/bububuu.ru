<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class User extends Authenticatable
{
    use HasFactory, Notifiable, HasApiTokens;

    // Указываем поля таблиц (без id, created_at и updated_at)
    protected $fillable = [
        'surname',
        'name',
        'patronymic',
        'sex',
        'birthday',
        'email',
        'password',
        'nickname',
        'avatar',
        'phone',
        'api_token',
        'role_id',
    ];
    // Списки полей для скрытия
    protected $hidden = [
        'password',
        'api_token',
    ];

    // Списки полей для скрытия
    protected function casts(): array{
    return [
        'password' => 'hashed'
];
}
    // Связь с моделью ROle M:1
    public  function  role(){
        return $this->belongsTo(Role::class);
    }
}
