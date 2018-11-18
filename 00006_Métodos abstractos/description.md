Notese que hasta este punto, la clase Persona va a funcionar como una herencia tradicional, heredandole a las clases hijas sus atributos y métodos.

Sin embargo, la clase Persona, al ser abstracta va a tener una particularidad: **No puede ser instanciada**

Una última característica de las clases abstractas es que pueden tener **métodos abstractos**

Estos métodos solo pueden definirse en una clase abstracta y únicamente definen la firma de la función (nombre y parámetros de la misma). Un método abstracto funciona como un contrato, es decir, las clases hijas se veran obligadas a escribir dicho método, respetando la firma y completando el contenido de la función.

Para esto vamos a agregar un método **abstracto** en la clase Persona llamado `ingresarAEdificio`. Esta función **debe recibir un parámetro** que será el medio de identificación.

¿Porqué decimos que este método es abstracto?

Los empleados se van a identificar mediante una huella digital, mientras que los Estudiantes lo harán con una tarjeta. La implementación de estos métodos quedará pendiente para cada una de estas clases, pero al agregar el método abstracto, aseguraremos que toda persona tiene que poder `ingresarAlEdificio`