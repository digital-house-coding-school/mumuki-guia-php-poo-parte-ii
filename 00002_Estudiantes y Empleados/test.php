public function testEmpleado() : void {
  $empleado = new Empleado();
  
  $this->assertTrue($empleado instanceof Persona, "La clase Empleado no hereda de Persona");
}

public function testEstudiante() : void {
  $estudiante = new Estudiante();
  
  $this->assertTrue($estudiante instanceof Persona, "La clase Estudiante no hereda de Persona");
}

public function testSueldo(): void {
  $persona = new Empleado();
  $props = get_object_vars($persona);
  
  $this->assertTrue(property_exists('Empleado', 'sueldo'), "Falta la propiedad sueldo en la clase empleado");
  
  $this->assertFalse(array_key_exists("sueldo", $props), "El sueldo de un empleado debe ser privado");
}

public function testSetGetSueldo() : void {
  $this->assertTrue(method_exists('Empleado','setSueldo'), "La clase Empleado no tiene un método setSueldo");
  $this->assertTrue(method_exists('Empleado','getSueldo'), "La clase Empleado no tiene un método getSueldo");
  
  $persona = new Empleado();
  
  $persona->setSueldo(500);
  
  $resul = $persona->getSueldo();
  
  $this->assertTrue($resul === 500, "Los métodos getSueldo y setSueldo tienen un error");
}

public function testEgresado(): void {
  $persona = new Estudiante();
  $props = get_object_vars($persona);
  
  $this->assertTrue(property_exists('Estudiante', 'egresado'), "Falta la propiedad egresado en la clase empleado");
  
  $this->assertFalse(array_key_exists("egresado", $props), "El atributo 'egresado' de un estudiante debe ser privado");
}

public function testSetGetEgresado() : void {
  $this->assertTrue(method_exists('Estudiante','terminarCursada'), "La clase Estudiante no tiene un método terminarCursada");
  $this->assertTrue(method_exists('Estudiante','esEgresado'), "La clase Estudiante no tiene un método esEgresado");
  
  $persona = new Estudiante();
  
  $this->assertTrue($persona->esEgresado() === false, "El valor del atributo egresado de un estudiante, por default, debe ser false. Puede haber también un error en el método esEgresado");
  
  $persona->terminarCursada();
  
  $resul = $persona->esEgresado();
  
  $this->assertTrue($resul === true, "Los métodos terminarCursada y esEgresado tienen un error");
}