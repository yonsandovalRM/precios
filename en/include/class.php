<?php

class Conectar{
    //Creamos un método estático que no necesita ser instanciado
    public static function conexion(){
    
    //new mysqli creamos o instanciamos el objeto mysqli
    //new mysqli('servidor','usuario','contraseña','nombre de la BD');
        $conexion=new mysqli("localhost", "root", "", "agrolab");           
       //llamamos a la conexión y hacemos una consulta para utilizar UTF-8
        $conexion->query("SET NAMES 'utf8'");
       //devolvemos la conexión para que pueda ser utilizada en otros métodos
        return $conexion;
    }
}
 
class Analisis{
 private $db;        //atributo que almacena la conexión a la BD
 private $dsanalisis; //propiedad que almacenara los resultados de la BD

    public function __construct(){
       $this->dsanalisis=array(); //Le decimos que sea un array
       $this->db=Conectar::conexion(); //Almacenamos en db la llamada la clase estática Conectar
    }

    public function get_analisis($identificador){
        //hacemos una consulta
        $consulta=$this->db->query("SELECT * FROM ANALISIS WHERE TIPO=".$identificador."");
        //recorremos el resultado con while y el método fetch_assoc
        /*la diferencia entre fetch_assoc y fetch_array es que fetch_assoc te permite hacer SOLO arrays asociativos */
        while($filas=$consulta->fetch_assoc()){
          //metemos cada fila de la tabla (que son arrays) dentro del array analisis
            $this->analisis[]=$filas;
        }
    return $this->analisis; //devolvemos el array que trataremos en la vista
    }
}
class Noticias{
 private $db;        //atributo que almacena la conexión a la BD
 private $dsnoticias; //propiedad que almacenara los resultados de la BD

    public function __construct(){
       $this->dsnoticias=array(); //Le decimos que sea un array
       $this->db=Conectar::conexion(); //Almacenamos en db la llamada la clase estática Conectar
    }

    public function get_noticias(){
        //hacemos una consulta
        $consulta=$this->db->query("SELECT * FROM NOTICIAS");
        //recorremos el resultado con while y el método fetch_assoc
        /*la diferencia entre fetch_assoc y fetch_array es que fetch_assoc te permite hacer SOLO arrays asociativos */
        while($filas=$consulta->fetch_assoc()){
          //metemos cada fila de la tabla (que son arrays) dentro del array noticias
            $this->noticias[]=$filas;
        }
    return $this->noticias; //devolvemos el array que trataremos en la vista
    }
}
?>

