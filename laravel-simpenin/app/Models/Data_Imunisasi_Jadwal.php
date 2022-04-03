<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data_Imunisasi_Jadwal extends Model
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
     * @var string
     */
    protected $vaksin_imunisasi = 'string';

    /**
     * The attributes that should be cast.
     *
     * @var int
     */
    protected $usia_balita = 'int';

    /**
     * The attributes that should be cast.
     *
     * @var date
     */
    protected $tanggal = 'date';

    public function setdataimunisasi(){
        return $this -> Data_Imunisasi_Balita;
    }
}
