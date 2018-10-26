class Persona {
  protected $nombre;
  protected $apellido;
  protected $email;
  
  public function __construct($nombre, $apellido, $email) {
    $this->nombre = $nombre;
    $this->apellido = $apellido;
    $this->email = $email;
  }
  
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