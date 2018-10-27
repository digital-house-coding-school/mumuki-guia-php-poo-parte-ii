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
  
  $this->assertTrue($estaCantidad, "Falta el atributo 'cantidadEstudiantes');
  
  $this->assertTrue($esEstatica, "El atributo cantidadEstudiantes no es estatico");
  
  $this->assertTrue(Estudiante::$cantidadEstudiantes === 0, "El valor de cantidadEstudiantes no es 0");
}