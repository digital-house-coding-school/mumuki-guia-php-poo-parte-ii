public function testCalcularCuotaFinal(): void {
  $clase = new ReflectionClass('Estudiante');
  
  $estaMetodo = false;
  $esEstatico = false;
  
  foreach ($clase->getMethods() as $m) {
   if ($m === "calcularCuotaFinal") {
    $estaMetodo = true;
    $esEstatico = $m->isStatic();
   }
  }
  
  $this->assertTrue($estaMetodo, "Falta el método 'calcularCuotaFinal'");
  
  $this->assertTrue($esEstatico, "El método calcularCuotaFinal no es estatico");
  
  Estudiante::$precioCuota = 500;
  
  $resul = Estudiante::calcularCuotaFinal(20);
  
  $this->assertTrue($resul === 400, "El método no retorna lo esperado");
}