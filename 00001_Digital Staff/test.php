public function testNombre(): void {
  $persona = new Persona();
  $props = get_object_vars($persona);
  
  $this->assertTrue(property_exists('Persona', 'nombre'), "Falta la propiedad nombre");
  
  $this->assertFalse(array_key_exists("nombre", $props), "El nombre debe ser privado");
}

public function testSetGetNombre() : void {
  $this->assertTrue(method_exists('Persona','setNombre'), "La clase Persona no tiene un método setNombre");
  $this->assertTrue(method_exists('Persona','getNombre'), "La clase Persona no tiene un método getNombre");
  
  $persona = new Persona();
  
  $persona->setNombre("Ale");
  
  $resul = $persona->getNombre();
  
  $this->assertTrue($resul === "Ale", "Los métodos getNombre y setNombre tienen un error");
}