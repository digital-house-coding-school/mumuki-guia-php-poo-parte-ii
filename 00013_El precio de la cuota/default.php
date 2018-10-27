class Estudiante extends Persona {
  private $egresado = false;
  static $cantidadEstudiantes = 0;
  static $precioCuota;
  
  public function __construct($nombre, $apellido, $email) {
    $this->nombre = $nombre;
    $this->apellido = $apellido;
    $this->email = $email;
    Estudiante::$cantidadEstudiantes++;
  }
  
  public function esEgresado() {
    return $this->egresado;
  }
  
  public function terminarCursada() {
    $this->egresado = true;
  }
  
  public function ingresarAlEdificio($tarjeta) {
    $tarjeta->verificar();
  } 
}