<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pengalaman extends Model
{
    protected $table = 'pengalaman';
    protected $fillable = ['biodata_id','title','organisasi','start_date','end_date','description'];

    public function biodata(): BelongsTo
    {
        return $this->belongsTo(Biodata::class, 'biodata_id');
    }
}
