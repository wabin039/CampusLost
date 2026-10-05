<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    // Define custom primary key for the users table
    protected $primaryKey = 'user_id';

    protected $fillable = [
        'name',
        'student_id',
        'email',
        'password',
        'role',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    // Relationships updated with correct 'user_id' primary key
    public function items()
    {
        return $this->hasMany(Item::class, 'user_id', 'user_id');
    }

    public function claims()
    {
        return $this->hasMany(Claim::class, 'user_id', 'user_id');
    }

    public function notifications()
    {
        return $this->hasMany(Notification::class, 'user_id', 'user_id');
    }

    public function adminActions()
    {
        return $this->hasMany(AdminAction::class, 'admin_id', 'user_id');
    }
}
