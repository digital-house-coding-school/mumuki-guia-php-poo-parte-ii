public function testPagable(): void {
  $this->assertTrue(interface_exists("Pagable"), "No esta la interfaz Pagable");
  
  $interface = new ReflectionClass('Pagable');


  var_dump($interface->getMethods());exit;
}