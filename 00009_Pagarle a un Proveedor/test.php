public function testImplementa(): void {
  $prov = new Empleado("Juan", "Perez", "juan@perez.com");
  
  $this->assertTrue($empleado instanceof Pagable, "La clase Empleado no implementa Pagable");
}

public function testPagar() : void {
  $prov = new Empleado("Juan", "Perez", "juan@perez.com");
  
  $prov->agregarPago(500);
  $prov->agregarPago(100);
  $prov->agregarPago(1000);
  
  $resul= $empleado->pagar();
  
  $this->assertTrue(is_string($resul), "El valor de retorno del método pagar debe ser un string");
  
  $this->assertTrue(strtolower($resul) === "a juan perez se le depositaron 1600", "Se esperaba 'A Juan Perez se le depositaron $1600' y se recibió '$resul'");
}