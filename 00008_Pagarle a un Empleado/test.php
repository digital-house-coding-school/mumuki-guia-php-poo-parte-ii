public function testImplementa(): void {
  $empleado = new Empleado("Dario", "Sus", "dario@dh.com", 500);
  
  $this->assertTrue($empleado instanceof Pagable, "La clase Empleado no implementa Pagable");
}

public function testPagar() : void {
  $empleado = new Empleado("Dario", "Sus", "dario@dh.com", 500);
  
  $resul= $empleado->pagar();
  
  $this->assertTrue(is_string($resul), "El valor de retorno del método pagar debe ser un string");
  
  $this->assertTrue(strtolower($resul) === "a dario sus se le depositaron $500", "Se esperaba 'A Dario Sus se le depositaron $500' y se recibió '$resul'");
}