<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Usuarios as GlobalUsuarios;

class usuarios extends Model
{
    use HasFactory;

    protected $table="usuario";
    public $timestamps=false;
    protected $fillable = ['cedula','nombre','email','contrasena'];

    public function getUsuarios(){

        $usuario = usuarios::all();
        var_dump($usuario); 

    }

    public function createUsuarios($usuario){
        $usuario = usuarios::create([
            'cedula' => $usuario[0],
            'nombre' => $usuario[1],
            'email' => $usuario[2],
            'contrasena' => $usuario[3],
        ]);
    }

    public function deleteUsuarios($id){
        usuarios::where("id",$id)->delete();
    }

    public function updateUsuario($usuario){
        $user=usuarios::find($usuario[0]);
        $user->cedula=$usuario[1];
        $user->nombre=$usuario[2];
        $user->email=$usuario[3];
        $user->contrasena=$usuario[4];
        $user->save();
    }
    public function getUsuario($id){
        $usuario=usuarios::find($id);
        return $usuario;
    }

}
