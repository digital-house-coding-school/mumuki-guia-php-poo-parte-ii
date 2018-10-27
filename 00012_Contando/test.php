public function testCantidadEstudiantes(): void {
  $clase = new ReflectionClass('Estudiante');
  
  $estaCantidad = false;
  $esEstatica = false;
  
  foreach ($clase->getProperties() as $p) {
   if ($p->name == "cantidadEstudiantes") {
    $estaCantidad = true;
    $esEstatica = $p->isStatic();
   }
  }
  
  $this->assertTrue($estaCantidad, "Falta el atributo 'cantidadEstudiantes'");
  
  $this->assertTrue($esEstatica, "El atributo cantidadEstudiantes no es estatico");
  
  $this->assertTrue(Estudiante::$cantidadEstudiantes === 0, "El valor de cantidadEstudiantes no es 0");
}

public function testContador() : void {
  $e1 = new Estudiante("D", "S", "d@dh.com");
  $e2 = new Estudiante("A", "V", "a@dh.com");
  $e3 = new Estudiante("J", "H", "j@dh.com");
  
  $cant = Estudiante::$cantidadEstudiantes;
  
  $this->assertTrue($cant === 3, "Parecería que los estudiantes no se están contando bien...");
}