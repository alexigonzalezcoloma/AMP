<?php
class equipos_model{
    private $db;
    private $equipos;
    private $comentarios;
    private $nombre;
 
    public function __construct(){
        $this->db=Conectar::conexion();
        $this->equipos=array();
    }
    public function get_equipos(){
        $consulta=$this->db->query("select * from CLIENTE;");
        while($filas=$consulta->fetch_assoc()){
            $this->equipos[]=$filas;
        }
        return $this->equipos;
    }

    public function get_comentarios(){
        $consulta=$this->db->query("select * from COMENTARIOS;");
        while($filas=$consulta->fetch_assoc()){
            $this->comentarios[]=$filas;
        }
        return $this->comentarios;
    }

    public function set_equipo($nombre,$rut,$celular,$correo,$equi,$tipo,$modelo,$desperfecto){
        $consulta_CLIENTE=$this->db->query("INSERT INTO CLIENTE NOMBRE,RUT,CELULAR,CORREO VALUES ('".$nombre."','".$rut."','".$celular."','".$correo."')");
        $consulta_EQUIPO=$this->db->query("INSERT INTO EQUIPO  TIPO, MODELO, DESPERFECTO, FECHA VALUES ('".$equi."','".$tipo."'.'".$modelo."','".$desperfecto."','".$FECHA."')");
        return 0;
    }
}
?>