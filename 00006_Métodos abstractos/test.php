public function testIngresarAEdificio(): void {
  $oRefl = new ReflectionClass ("Persona");
  
  $methods = $oRefl->getMethods();
  
  var_dump($methods);exit;
}