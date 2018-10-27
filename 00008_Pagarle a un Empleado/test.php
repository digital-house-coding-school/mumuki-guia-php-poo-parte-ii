public function testImplementa(): void {
  $empleado = new Empleado("Dario", "Sus", "dario@dh.com", 500);
  
  $this->assertTrue($empleado instanceof Pagable, "La clase Empleado no implementa Pagable");
}