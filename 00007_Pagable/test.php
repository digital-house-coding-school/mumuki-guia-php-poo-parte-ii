public function testPagable(): void {
  $this->assertTrue(interface_exists("Pagable"), "No esta la interfaz Pagable");
  
  $interface = class_implements('Foo');
  $methods_implemented = get_class_methods(array_shift($interface));

  var_dump($methods_implemented);exit;
}