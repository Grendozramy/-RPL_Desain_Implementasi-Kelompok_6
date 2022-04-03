<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Akun;

class PetugasImunisasi extends Model
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

    public function getmasuk(){
        return $this -> masuk;
    }

    public function viewakun(){
        return $this -> viewakun;
    }

    public function getImunisasi(){
        return $this -> Imunisasi;
    }

    public function setImunisasi(){
        return $this -> Imunisasi;
    }
}
