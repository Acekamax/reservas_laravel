<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reservas extends Model
{
    use HasFactory;
    
    protected $table="reservas";
    public $timestamps=false;
    protected $fillable = ['idusuario','idclase','fecha_reserva'];

    public function getReservas(){

        $reserva = reservas::all();
        var_dump($reserva); 

    }

    public function createReservas($reserva){
        $reserva = reservas::create([
            'idusuario' => $reserva[0],
            'idclase' => $reserva[1],
            'fecha_reserva' => $reserva[2],
        ]);
    }

    public function deleteReservas($id){
        reservas::where("id",$id)->delete();
    }

    
}
