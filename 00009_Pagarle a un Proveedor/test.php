public function testImplementa(): void {
  $prov = new ProveedorExterno("Juan", "Perez", "juan@perez.com");
  
  $this->assertTrue($prov instanceof Pagable, "La clase ProveedorExterno no implementa Pagable");
}

public function testPagar() : void {
  $prov = new ProveedorExterno("Juan", "Perez", "juan@perez.com");
  
  $prov->agregarPago(500);
  $prov->agregarPago(100);
  $prov->agregarPago(1000);
  
  $resul= $prov->pagar();
  
  $this->assertTrue(is_string($resul), "El valor de retorno del método pagar debe ser un string");
  
  $this->assertTrue(strtolower($resul) === "a juan perez se le depositaron $1600", "Se esperaba 'A Juan Perez se le depositaron $1600' y se recibió '$resul'");
}