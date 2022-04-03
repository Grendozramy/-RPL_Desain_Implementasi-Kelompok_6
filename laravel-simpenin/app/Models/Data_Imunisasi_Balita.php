<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Data_Imunisasi_Posyandu;
use App\Models\Data_Imunisasi_Jadwal;

class Data_Imunisasi_Balita extends Model
{
    use HasFactory;

    /**
     * The attributes that should be cast.
     *
     * @var string
     */
    protected $id_dib = 'string';

    /**
     * The attributes that should be cast.
     *
     * @var string
     */
    protected $dataimunisasi = 'string';

    public function dataimunisasi(Imunisasi $Imunisasi){
        return $this ->hasmany(\App\Models\Imunisasi::class);
    }

    public function getdataimunisasi(){
        return $this -> Data_Imunisasi_Balita;
    }

    public function setdataimunisasi(){
        return $this -> Data_Imunisasi_Balita;
    }
}