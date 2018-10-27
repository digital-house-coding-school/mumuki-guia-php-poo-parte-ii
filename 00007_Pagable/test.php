public function testPagable(): void {
  $this->assertTrue(interface_exists("Pagable"), "No esta la interfaz Pagable");
  
  $interface = new ReflectionClass('Pagable');
  
  $estaPagar = false;
  
  foreach ($interface->getMethods() as $method) {
   if ($method->name == "pagar") {
    $estaPagar = true;
   }
  }
  
  $this->assertTrue($estaPagar, "No esta el método pagar dentro de la interfaz");
}