<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Traits\Timestamp;
use Illuminate\Database\Eloquent\SoftDeletes;

class data extends Model
{
    use HasFactory;
    use Timestamp;
    use SoftDeletes;

    protected $table = 'tb_data';
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'tahun', 'luas_tanam', 'luas_panen', 'produktivitas', 'produksi', 'id_kabupaten', 'id_kecamatan',
    ];
}
