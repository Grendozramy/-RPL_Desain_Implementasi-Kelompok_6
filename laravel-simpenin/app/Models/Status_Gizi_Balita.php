<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status_Gizi_Balita extends Model
{
    use HasFactory;

    /**
     * The attributes that should be cast.
     *
     * @var string
     */
    protected $id_sgb = 'string';

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
    protected $status_gizi = 'string';

    /**
     * The attributes that should be cast.
     *
     * @var string
     */
    protected $zscore = 'string';

    /**
     * The attributes that should be cast.
     *
     * @var string
     */
    protected $validasi = 'string';

    public function statusgizi(Imunisasi $Imunisasi){
        return $this ->hasmany(\App\Models\Imunisasi::class);
    }
}
