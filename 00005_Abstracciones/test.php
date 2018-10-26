public function testAbstracta(): void {
  $persona = new ReflectionClass('Persona');
  
  $this->assertTrue($persona->isAbstract(), "La clase Persona no es abstracta");
}