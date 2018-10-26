public function testIngresarAEdificio(): void {
  $oRefl = new ReflectionClass ("Persona");
  
  $methods = $oRefl->getMethods();
  
  $r = new ReflectionMethod("Persona", "sarasa");
  
  var_dump($r->isAbstract());exit;
  var_dump($r->getParameters());exit;
}