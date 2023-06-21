<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    use HasFactory;

    protected $fillable = ['proker_id', 'tanggal', 'laporan'];

    protected $guarded = ['id'];

    public function program()
    {
        return $this->belongsTo(Program::class, 'proker_id');
    }
}