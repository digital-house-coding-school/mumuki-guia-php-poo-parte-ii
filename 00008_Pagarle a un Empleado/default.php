class Empleado extends Persona {
  private $sueldo;
  
  public function __construct($nombre, $apellido, $email, $sueldo) {
    $this->nombre = $nombre;
    $this->apellido = $apellido;
    $this->email = $email;
    $this->sueldo = $sueldo;
  }
  
  public function getSueldo() {
    return $this->sueldo;
  }
  
  public function setSueldo($sueldo) {
    $this->sueldo = $sueldo;
  }
  
  public function ingresarAlEdificio($huella) {
    $huella->verificar();
  }
}