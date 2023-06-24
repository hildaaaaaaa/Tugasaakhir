<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

    protected $fillable = ['category_id', 'proker', 'user_id', 'tanggal', 'deskripsi', 'id'];

    protected $guarded = ['id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // public function laporan()
    // {
    //     return $this->hasMany(Laporan::class);
    // }

    // public function evaluasi()
    // {
    //     return $this->hasMany(Evaluasi::class);
    // }

    public function user(){
        return $this->belongsTo(User::class);
    }
}