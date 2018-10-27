A los Proveedores Externos también les vamos a pagar. Por eso vamos a buscar que la clase `ProveedorExterno` implementa la interfaz `Pagable`.

Por contrato esto nos va a obligar a que la clase `ProveedorExterno` defina e implemente el método `pagar` (que no recibía ningún argumento).

¿Que debería hacer el método?

Para este ejercicio simplemente va a retornar el texto "A **NOMBRE** **APELLIDO** se le depositaron $**PAGO**" donde **NOMBRE**, **APELLIDO** y **PAGO** tienen que corresponderese con los datos de la instancia.

La diferencia con un Empleado es como calcular el **PAGO**. En este caso, el atributo `$pagos` es un array. El **PAGO** se va a calcular como la suma de todos los valores del array `$pagos`