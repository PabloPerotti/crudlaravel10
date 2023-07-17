<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    use HasFactory; 

    // Instancio la tabla 'clientes' 
    protected $table = 'clientes';
    
    // Declaro los campos que usaré de la tabla 'clientes' 
    protected $fillable = ['name', 'email', 'direccion', 'img']; 
    
}