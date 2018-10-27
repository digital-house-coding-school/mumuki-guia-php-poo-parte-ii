Resulta que si miramos un poco más profundo en nuestro diagrama de clases hay 3 clases que heredan de Persona:

> 1. Estudiante
> 2. Empleado
> 3. ProveedorExterno 

En este caso, en nuestro sistema va a querer denotar que todos los fines de mes, tanto a Empleados como a Proveedores Externos se les va a pagar su sueldo!

Dado que no es una responsabilidad de **todas las persona** vamos a implementar una interfaz `Pagable` con el método `pagar`. Luego, cada una de las clases (Empleado y ProveedorExterno) implementará este método de maneras diferentes.

Tu trabajo entonces, en este ejercicio es:

> Escribir la interfaz `Pagable` que tenga un método `pagar` que no recibe ningún parámetro.
