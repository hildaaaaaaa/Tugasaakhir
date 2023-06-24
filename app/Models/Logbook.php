<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logbook extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'title', 'desc'];

    public function ketua_proker() {
        return $this->belongsTo(User::class);
    }
}
