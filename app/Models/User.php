<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    // Tentukan nama tabel jika tidak mengikuti konvensi Laravel
    protected $table = 'm_user';

    // Menonaktifkan penggunaan timestamps otomatis
    public $timestamps = false;

    // Kolom yang bisa diisi
    protected $fillable = [
        'username',
        'password',
        'firstname',
        'lastname',
        'role',
        'isactive',
        'createddate',
        'createdby',
        'updateddate',
        'updatedby',
        'isdeleted',
    ];

    // Menambahkan akses mutator untuk mengenkripsi password
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }
}
