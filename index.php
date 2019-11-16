<?php date_default_timezone_set("America/Bogota");

    class Persona{

        //attributes
        public $nombre = "Juan";
        public $cedula = null;
        public $tareas = array();

        //construct
        /*
        function __construct(string $nombre, int $cedula){
            $this->numero = $nombre;
            $this->cedulaº = $cedula;
        }
        */

        //sets and sets
        public function getNombre(){
            return $this->nombre;
        }

        public function setNombre($nombre){
            $this->nombre = $nombre;
            return $this;
        }

        public function getCedula(){
            return $this->cedula;
        }

        public function setCedula($cedula){
            $this->cedula = $cedula;
            return $this;
        }

        public function getTareas(){
            return $this->tareas;
        }

        public function setTareas($tarea){
            $this->cedula = $cedula;
            return $this;
        }

    }

    class Tarea{

        //attributes
        public $nombre = null;
        public $fecha_creacion = null;
        public $estado = null;

        //construct
        function __construct(string $nombre, string $fecha_creacion, boolval $estado){
            $this->nombre = $nombre;
            $this->fecha_creacion = $fecha_creacion;
            $this->estado = FALSE;
        }

        //gets and sets
        public function getNombre(){
            return $this->nombre;
        }

        public function setNombre($nombre){
            $this->nombre = $nombre;
            return $this;
        }

        public function getFechaCreacion(){
            return $this->fecha_creacion;
        }

        public function setFechaCreacion($fecha_creacion){
            $this->fecha_creacion = $fecha_creacion;
            return $this;
        }

        public function getEstado(){
            return $this->estado;
        }

        public function setEstado(){
            $this->estado = !$estado;
            return $this;
        }

    }

    $p = new Persona("Juan", 001);
    echo $p->nombre;
    /*
    $jsonencoded = json_encode($json,JSON_UNESCAPED_UNICODE);

    $fh = fopen($p->getNombre(),".json", 'w');
    fwrite($fh, $jsonencoded);
    fclose($fh);
    */

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>doc php</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/estilos.css"/>
    </style>
</head>
<body>
  <table>
    <thead>
      <tr>
        <th>Tarea</th>
        <th>Fecha de creación</th>
      </tr>
    </thead>
    <tbody id="tbody_rta">

    </tbody>
  </table>

  <div class="section" id="div_rta">
  </div>
</body>
</html>