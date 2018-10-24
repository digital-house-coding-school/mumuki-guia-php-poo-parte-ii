public function testEmpleado() : void {
  $empleado = new Empleado();
  
  $this->assertTrue($empleado instanceof Persona, "La clase Empleado no hereda de Persona");
}

public function testEstudiante() : void {
  $estudiante = new Estudiante();
  
  $this->assertTrue($estudiante instanceof Persona, "La clase Estudiante no hereda de Persona");
}