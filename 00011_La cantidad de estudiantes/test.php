public function testCantidadEstudiantes(): void {
  $clase = new ReflectionClass('Estudiante');
  
  $estaPagar = false;
  
  var_dump($clase->getProperties()[2]->isStatic());exit;
  foreach ($clase->getAttributes() as $method) {
   if ($method->name == "pagar") {
    $estaPagar = true;
   }
  }
}