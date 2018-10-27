class Estudiante extends Persona {
  private $egresado = false;
  static $cantidadEstudiantes = 0;
  
  public function __construct($nombre, $apellido, $email) {
    $this->nombre = $nombre;
    $this->apellido = $apellido;
    $this->email = $email;
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