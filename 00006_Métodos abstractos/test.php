public function testIngresarAEdificio(): void {
  $oRefl = new ReflectionClass ("Persona");
  
  $methods = $oRefl->getMethods();
  
  $estaElMetodo = false;
  
  foreach ($methods as $method) {
    if ($method->name === "ingresarAlEdificio") {
      $estaElMetodo = true;
    }
  }
  
  $this->assertTrue($estaElMetodo, "Falta el método ingresarAlEdificio");
  
  $r = new ReflectionMethod("Persona", "ingresarAlEdificio");
  
  $this->assertTrue($r->isAbstract(), "El metodo ingresarAlEdificio no es abstracto");
  
  $this->assertTrue(count($r->getParameters()) === 1, "El método ingresarAlEdificio debe recibir un parámetro");
}