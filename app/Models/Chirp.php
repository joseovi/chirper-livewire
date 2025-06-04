<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chirp extends Model
{
    public function user(){
        return $this->belongsTo(user::class);
    }
    use HasFactory;
    protected $fillable = ['message',];
}
