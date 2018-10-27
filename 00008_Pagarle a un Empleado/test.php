public function testImplementa(): void {
  $empleado = new Empleado();
  
  $this->assertTrue($empleado instanceof Pagable, "La clase Empleado no implementa Pagable");
}