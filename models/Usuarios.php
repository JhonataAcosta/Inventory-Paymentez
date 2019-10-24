<?php
// incluimos la conexión a la base de datos 
require "../config/conexion.php";

class Usuarios
{
    // implementamos nuestro constructor
    public  function __construct()
    {
    }
    //implementamos un metodo para insertar registros
    public function insertar_usuarios($name,$personal_id,$area,$cargo,$estado)
    {
        $sql="INSERT INTO usuarios (name,personal_id,area,cargo,estado) 
        VALUES ('$name','$personal_id','$area','$cargo','$estado')";
        return ejecutarConsulta($sql);
    }
    //implementamos un metodo para editar registro
    public function editar_usuarios($id_usuario,$name,$personal_id,$area,$cargo,$estado)
    {
        $sql="UPDATE usuarios SET name='$name',personal_id='$personal_id',area='$area',cargo='$cargo',estado='$estado';
        where id_usuario='$id_usuario'";
        return ejecutarConsulta($sql);
    }
    //implementamos un metodo para mostrar los datos de un registro a modificar
    public function modificar_usuarios($id_usuario)
    {
        $sql="SELECT *FROM usuarios where id_usuario='$id_usuario'";
        return ejecutarConsultaSimpleFila($sql);
    }
    //implementamos un metodo para listar los registros
    public function listar_usuarios($id_usuario)
    {
        $sql="SELECT *FROM usuarios ";
        return ejecutarConsulta($sql);
    }
    //implementamos un metodo para eliminar registros
    public function eliminar_usuarios($id_usuario)
    {
        $sql="DELETE usuarios where id_usuario='$id_usuario' ";
        return ejecutarConsulta($sql);
    }
}
?>