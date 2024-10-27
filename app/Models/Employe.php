<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Departement;

class Employe extends Model
{
    use HasFactory;

    protected $fillable = ['fullname' , 'registration_number' , 'departement_id' ,
        'poste' , 'hire_date' , 
        'e_mail' , 'phone' ,  
        'address' , 'city' , 'Salaire'];

    public function departement(){
        return  $this->belongsTo(Departement::class);
    }
}