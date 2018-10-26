public function testEmpleado(): void {
  $empleado = new Empleado("Dario", "Sus", "dario@dh.com", 500);
  
  $nombre = $empleado->getNombre();
  
  $apellido = $empleado->getApellido();
  
  $email = $empleado->getEmail();
  
  $sueldo = $empleado->getSueldo();
  
  $this->assertTrue($nombre === "Dario", "El constructor parecería no estar asignando el nombre");
}