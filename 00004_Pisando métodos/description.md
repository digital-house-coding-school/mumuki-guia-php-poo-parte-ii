Detrás de escena le hemos agregado a la clase `Persona` el siguiente constructor:

``` php
public function __construct($nombre, $apellido, $email) {
  $this->nombre = $nombre;
  $this->apellido = $apellido;
  $this->email = $email;
}
```

Si bien este constructor va a ser ideal para los **Estudiantes**, queremos que para los **Empleados** sea también obligatorio el sueldo a la hora de crear una instancia.

Dado esto, te pedimos que escribas el constructor de la clase `Empleado` que reciba 4 parámetros (nombre, apellido, email y sueldo) en vez de 3.
