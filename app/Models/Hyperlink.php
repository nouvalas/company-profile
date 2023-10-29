<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hyperlink extends Model
{
    use HasFactory;
    protected $table = 'hyperlink';
    protected $fillable = [
        'nama_hyperlink', 'link'
    ]; 

    public function banner()
    {
        return $this->hasMany(Banner::class);
    }
}
