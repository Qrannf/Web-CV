<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Biodata extends Model
{
    protected $table = 'biodata';
    protected $fillable = ['nama','email','telepon','alamat','profile_image','about'];

    public function pendidikan(): HasMany
    {
        return $this->hasMany(Pendidikan::class, 'biodata_id');
    }

    public function pengalaman(): HasMany
    {
        return $this->hasMany(Pengalaman::class, 'biodata_id');
    }

    public function keahlian(): HasMany
    {
        return $this->hasMany(Keahlian::class, 'biodata_id');
    }
}
