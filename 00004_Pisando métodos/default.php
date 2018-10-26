class Empleado extends Persona {
  private $sueldo;
  
  public function getSueldo() {
    return $this->sueldo;
  }
  
  public function setSueldo($sueldo) {
    $this->sueldo = $sueldo;
  }
}