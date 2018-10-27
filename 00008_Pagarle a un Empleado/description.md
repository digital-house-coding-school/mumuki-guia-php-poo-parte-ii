Ahora sí, vamos a aclarar que la clase `Empleado` implementa la interfaz `Pagable`.

Por contrato esto nos va a obligar a que la clase `Empleado` defina e implemente el método `pagar` (que no recibía ningún argumento).

¿Que debería hacer el método?

Para este ejercicio simplemente va a retornar el texto "A **NOMBRE** **APELLIDO** se le depositaron $**SUELDO**" donde **NOMBRE**, **APELLIDO** y **SUELDO** tienen que corresponderese con los datos de la instancia.