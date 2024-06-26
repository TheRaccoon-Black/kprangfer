<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dataekskul extends Model
{
    use HasFactory;
    protected $table = "dataekskuls";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'nama_ekskul','user_id', 'kategori_ekskul', 'pelatih_ekskul',
    ];
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
