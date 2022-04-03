<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data_Imunisasi_Posyandu extends Model
{
    use HasFactory;

    /**
     * The attributes that should be cast.
     *
     * @var string
     */
    protected $dataimunisasi = 'string';

    /**
     * The attributes that should be cast.
     *
     * @var date
     */
    protected $jadwal = 'date';

    /**
     * The attributes that should be cast.
     *
     * @var string
     */
    protected $nama_posyandu = 'string';

    /**
     * The attributes that should be cast.
     *
     * @var string
     */
    protected $tempat = 'string';

    public function setdataimunisasi(){
        return $this -> Data_Imunisasi_Balita;
    }
}
