<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Akun extends Model
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
    protected $username = 'string';

    /**
     * The attributes that should be cast.
     *
     * @var string
     */
    protected $sandi = 'string';

    /**
     * The attributes that are mass assignable.
     *
     * @var string
     */
    protected $nama = 'string';

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var string
     */
    protected $no_telp = 'string';

    /**
     * The attributes that should be cast.
     *
     * @var string
     */
    protected $alamat = 'string';

    
    public function daftar(){
        return $this -> daftar;
    }

    public function masuk(){
        return $this -> masuk;
    }

    public function viewakun(){
        return $this -> viewakun;
    }
}