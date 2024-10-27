<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Employe;

class Dossier extends Model
{
    use HasFactory;

    protected $fillable = ['Name' , 'employe_id'];

    public function employe(){
        return  $this->belongsTo(Employe::class);
    }
}
