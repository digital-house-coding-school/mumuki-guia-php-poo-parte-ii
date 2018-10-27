class ProveedorExterno extends Persona {
  private $pagos;
  
  public function __construct($nombre, $apellido, $email) {
    $this->nombre = $nombre;
    $this->apellido = $apellido;
    $this->email = $email;
    $this->pagos = [];
  }
  
  public function getPagos() {
    return $this->pagos;
  }
  
  public function agregarPago($pago) {
    $this->pagos[] = $pago;
  }
  
  public function ingresarAlEdificio($autorizacion) {
    $autorizacion->verificar();
  }
}