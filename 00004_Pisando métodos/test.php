public function testEmpleado(): void {
  $empleado = new Empleado("Dario", "Sus", "dario@dh.com", 500);
  
  $nombre = $empleado->getNombre();
  
  $apellido = $empleado->getApellido();
  
  $email = $empleado->getEmail();
  
  $sueldo = $empleado->getSueldo();
  
  $this->assertTrue($nombre === "Dario", "El constructor parecería no estar asignando el nombre");
  
  $this->assertTrue($apellido === "Sus", "El constructor parecería no estar asignando el apellido");
  
  $this->assertTrue($email === "dario@dh.com", "El constructor parecería no estar asignando el email");
  
  $this->assertTrue($sueldo === 500, "El constructor parecería no estar asignando el sueldo");
}