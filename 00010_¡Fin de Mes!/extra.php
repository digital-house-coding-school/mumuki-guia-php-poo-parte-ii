interface Pagable {
  public function pagar();
}

abstract class Persona {
  protected $nombre;
  protected $apellido;
  protected $email;
  
  public function __construct($nombre, $apellido, $email) {
    $this->nombre = $nombre;
    $this->apellido = $apellido;
    $this->email = $email;
  }
  
  public abstract function ingresarAlEdificio($i);
  
  public function getNombre() {
    return $this->nombre;
  }
  
  public function setNombre($nombre) {
    $this->nombre = $nombre;
  }
  
  public function getApellidO() {
    return $this->apellido;
  }
  
  public function setApellido($apellido) {
    $this->apellido = $apellido;
  }
  
  public function getEmail() {
    return $this->email;
  }
  
  public function setEmail($email) {
    $this->email = $email;
  }
}

class ProveedorExterno extends Persona implements Pagable {
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
  
  public function pagar() {
     $nombre = $this->nombre;
    $apellido = $this->apellido;
    $sueldo = 0;
    
    foreach ($this->pagos as $pago) {
      $sueldo += $pago;
    }
     return "A $nombre $apellido se le depositaron $sueldo";
  }
}

class Empleado extends Persona implements Pagable {
  private $sueldo;
  
  public function __construct($nombre, $apellido, $email, $sueldo) {
    $this->nombre = $nombre;
    $this->apellido = $apellido;
    $this->email = $email;
    $this->sueldo = $sueldo;
  }
  
  public function getSueldo() {
    return $this->sueldo;
  }
  
  public function setSueldo($sueldo) {
    $this->sueldo = $sueldo;
  }
  
  public function ingresarAlEdificio($huella) {
    $huella->verificar();
  }
  
  public function pagar() {
     return "A " . $this->nombre . " " . $this->apellido . " se le depositaron $" . $this->sueldo; 
  }
}