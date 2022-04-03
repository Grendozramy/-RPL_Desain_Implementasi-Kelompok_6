<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Akun;
use App\Models\Imunisasi;

class User extends Authenticatable
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string
     */
    protected $id = 'string';

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var string
     */
    protected $akun = 'string';

    /**
     * The attributes that should be cast.
     *
     * @var string
     */
    protected $imunisasi = 'string';

    public function getdaftar(){
        return $this -> daftar;
    }

    public function getmasuk(){
        return $this -> masuk;
    }

    public function viewakun(){
        return $this -> viewakun;
    }

    public function getImunisasi(){
        return $this -> Imunisasi;
    }

    public function viewImunisasi(){
        return $this -> viewakun;
    }
}
