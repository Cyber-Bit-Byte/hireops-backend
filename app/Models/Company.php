<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'email_notifications'
    ];

    // One company has many users
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
