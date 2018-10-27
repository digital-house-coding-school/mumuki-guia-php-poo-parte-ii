class Estudiante extends Persona {
  private $egresado = false;
  
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