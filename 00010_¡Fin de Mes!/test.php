public function testFinDeMes(): void {
  $prov1 = new ProveedorExterno("Juan", "Perez", "juan@perez.com");
  
  $prov1->agregarPago(100);
  $prov1->agregarPago(200);
  
  $prov2 = new ProveedorExterno("Sara", "Sanchez", "sara@sara.com");
  
  $prov2->agregarPago(2000);
  $prov2->agregarPago(4000);
  $prov2->agregarPago(200);
  
  $emp1 = new Empleado("Dario","Sus","dario@dh.com",500);
  
  $emp2 = new Empleado("Ale","Viv","alejandro@dh.com", 600);
  
  $pagables = [$prov1, $prov2, $emp1, $emp2];
  
  $resuls = finDeMes($pagables);
  
  $this->assertTrue(is_array($resuls), "La función no retorna un array");
  
  $this->assertTrue(count($resuls) === 4, "La función no retorna la cantidad de elementos esperada en el array");
  
  var_dump($resuls);exit;
  
  $funciona = $resuls[0] === 'A Juan Perez se le depositaron $300' && $resuls[1] === 'A Sara Sanchez se le depositaron $6200' && $resuls[2] === 'A Dario Sus se le depositaron $500' && $resuls[3] === 'A Ale Viv se le depositaron $600';
  
  $this->assertTrue($funciona, "La función no retorna los valores esperados");
  
  
}