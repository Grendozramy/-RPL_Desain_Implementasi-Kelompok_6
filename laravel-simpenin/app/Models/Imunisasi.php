<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Informasi_Data_Balita;
use App\Models\Status_Gizi_Balita;
use App\Models\Data_Imunisasi_Balita;

class Imunisasi extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string
     */
    protected $imunisasi = 'string';

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var string
     */
    protected $infodata = 'Informasi_Data_Balita';

    /**
     * The attributes that should be cast.
     *
     * @var string
     */
    protected $statusgizi = 'Status_Gizi_Balita';

    /**
     * The attributes that should be cast.
     *
     * @var string
     */
    protected $dataimunisasi = 'Data_Imunisasi_Balita';

    public function getInformasi_Data_Balita(){
        return $this -> Informasi_Data_Balita;
    }

    public function setInformasi_Data_Balita(){
        return $this -> Informasi_Data_Balita;
    }

    public function getStatus_Gizi_Balita(){
        return $this -> Status_Gizi_Balita;
    }

    public function setStatus_Gizi_Balita(){
        return $this -> Status_Gizi_Balita;
    }

    public function getData_Imunisasi_Balita(){
        return $this -> Data_Imunisasi_Balita;
    }

    public function setData_Imunisasi_Balita(){
        return $this -> Data_Imunisasi_Balita;
    }

    public function infodata(){
        return $this -> Informasi_Data_Balita;
    }

    public function statusgizi(){
        return $this -> Status_Gizi_Balita;
    }

    public function dataimunisasi(){
        return $this -> Data_Imunisasi_Balita;
    }
}
