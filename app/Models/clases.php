<?php

namespace App\Models;

use Clases as GlobalClases;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clases extends Model
{
    use HasFactory;

    protected $table="clases";
    public $timestamps=false;
    protected $fillable = ['nombre', 'fecha', 'cupos'];

    public function getClases(){

        $clases = clases::all();
        return $clases;

    }

    public function createClase($clase){
        $clase = clases::create([
            'nombre' => $clase[0],
            'fecha' => $clase[1],
            'cupos' => $clase[2],
        ]);
    }

    public function deleteClase($id){
        clases::where("id",$id)->delete();
    }

    public function updateClases($clase){
        $clases=clases::find($clase[0]);
        $clases->nombre=$clase[1];
        $clases->fecha=$clase[2];
        $clases->cupos=$clase[3];
        $clases->save();
    }

    public function getClase($id){
        $clases=clases::find($id);
        return $clases;
    }

}
