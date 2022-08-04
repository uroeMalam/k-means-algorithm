<?php

namespace App\Models;

use Carbon\Traits\Timestamp;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class dataCenter extends Model
{
    use HasFactory;
    use Timestamp;
    use SoftDeletes;

    protected $table = 'dist_random';
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'center_name', 'tahun', 'id_kabupaten', 'id_data',
    ];
}
