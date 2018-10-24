Bien!

Ya habiendo escrito la clase Persona, vamos a ser un poco más específicos.

Lo que sucede realmente es que en el sistema de Digital House va a haber **Estudiantes** y **Empleados**

Todos van a tener asociados nombre, apellido y email lo cual los hace excelentes candidatos para ser clases que hereden de persona, sin embargo los alumnos y empleados van a tener características propias.

Dado esto, tu objetivo es:

> 1. Armar la clase `Empleado` que herede de la clase `Persona` que va a sumar el atributo **sueldo** junto con los métodos `getSueldo` y `setSueldo`

> 2. Armar la clase `Estudiante` que herede de la clase `Persona` y agregue el atributo **egresado** que será un booleano que indica si un estudiante terminó el curso o no. Por default este atributo debe indicar false (puede indicarse por default en el atributo o mediante el constructor)

> 3. Agregar el metodo `esEgresado` en la clase `Estudiante` que retorne el valor de el atributo **egresado**

> 4. Agregar el método `terminarCursada` que modifique el atributo **egresado** a **TRUE**