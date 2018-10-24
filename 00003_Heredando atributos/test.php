public function testNombre(): void {
  $persona = new Persona();
  
  $this->assertTrue(property_exists('Persona', 'nombre'), "Falta la propiedad nombre");
  
  $reflect = new ReflectionClass($persona);

  $props = $reflect->getProperties(ReflectionProperty::IS_PROTECTED);
  
  $hayNombre = false;
  
  foreach ($props as $prop) {
    if ($prop->name == "nombre") {
      $hayNombre = true;
    }
  }
  
  $this->assertTrue($hayNombre, "El atributo nombre no es protegido");
}

public function testSetGetNombre() : void {
  $this->assertTrue(method_exists('Persona','setNombre'), "La clase Persona no tiene un método setNombre");
  $this->assertTrue(method_exists('Persona','getNombre'), "La clase Persona no tiene un método getNombre");
  
  $persona = new Persona();
  
  $persona->setNombre("Ale");
  
  $resul = $persona->getNombre();
  
  $this->assertTrue($resul === "Ale", "Los métodos getNombre y setNombre tienen un error");
}

public function testApellido(): void {
  $persona = new Persona();
  
  $this->assertTrue(property_exists('Persona', 'apellido'), "Falta la propiedad apellido");
  
  $reflect = new ReflectionClass($persona);

  $props = $reflect->getProperties(ReflectionProperty::IS_PROTECTED);
  
  $hayApellido = false;
  
  foreach ($props as $prop) {
    if ($prop->name == "apellido") {
      $hayApellido = true;
    }
  }
  
  $this->assertTrue($hayApellido, "El atributo apellido no es protegido");
}

public function testSetGetApellido() : void {
  $this->assertTrue(method_exists('Persona','setApellido'), "La clase Persona no tiene un método setApellido");
  $this->assertTrue(method_exists('Persona','getApellido'), "La clase Persona no tiene un método getApellido");
  
  $persona = new Persona();
  
  $persona->setApellido("Viv");
  
  $resul = $persona->getApellido();
  
  $this->assertTrue($resul === "Viv", "Los métodos getApellido y setApellido tienen un error");
}

public function testEmail(): void {
  $persona = new Persona();
  
  $this->assertTrue(property_exists('Persona', 'email'), "Falta la propiedad email");
  
  $reflect = new ReflectionClass($persona);

  $props = $reflect->getProperties(ReflectionProperty::IS_PROTECTED);
  
  $hayEmail = false;
  
  foreach ($props as $prop) {
    if ($prop->name == "email") {
      $hayEmail = true;
    }
  }
  
  $this->assertTrue($hayEmail, "El atributo email no es protegido");
}

public function testSetGetEmail() : void {
  $this->assertTrue(method_exists('Persona','setEmail'), "La clase Persona no tiene un método setEmail");
  $this->assertTrue(method_exists('Persona','getEmail'), "La clase Persona no tiene un método getEmail");
  
  $persona = new Persona();
  
  $persona->setEmail("ale@digitalhouse.com");
  
  $resul = $persona->getEmail();
  
  $this->assertTrue($resul === "ale@digitalhouse.com", "Los métodos getEmail y setEmail tienen un error");
}