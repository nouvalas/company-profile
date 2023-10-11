<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portofolio extends Model
{
    use HasFactory;

    protected $table = 'portofolio';
    protected $fillable = [
        'judul_portofolio', 'kategori_id', 'gambar_portofolio'
    ]; 

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
}
