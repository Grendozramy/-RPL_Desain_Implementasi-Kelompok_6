<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Informasi_Data_Balita extends Model
{
    use HasFactory;

    /**
     * The attributes that should be cast.
     *
     * @var string
     */
    protected $id_idb = 'string';

    /**
     * The attributes that should be cast.
     *
     * @var string
     */
    protected $nama_balita = 'string';

    /**
     * The attributes that should be cast.
     *
     * @var int
     */
    protected $usia_balita = 'int';

    /**
     * The attributes that should be cast.
     *
     * @var int
     */
    protected $tinggi_badan = 'int';

    /**
     * The attributes that should be cast.
     *
     * @var int
     */
    protected $berat_badan = 'int';

    /**
     * The attributes that should be cast.
     *
     * @var string
     */
    protected $jenis_kelamin = 'string';

    /**
     * The attributes that should be cast.
     *
     * @var string
     */
    protected $ideal = 'string';

    public function infodata(Imunisasi $Imunisasi){
        return $this ->hasmany(\App\Models\Imunisasi::class);
    }
}
