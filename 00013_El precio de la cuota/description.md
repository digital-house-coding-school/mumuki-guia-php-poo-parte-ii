Le hemos agregado a los estudiantes el atributo estático `$precioCuota` ya que vamos a asumir que el precio de la cuota es exactamente igual para todos los estudiantes.

Inclusive, si mañana cambiase el precio no tenemos que modificar un valor en cada instancia sino que es un valor para todos los estudiantes.

Tu trabajo es hacer un método estático llamado `calcularCuotaFinal` que reciba un parámetro. Este parámetro será un número entre 0 y 100 que indicará el porcentaje de beca recibido. El método debe devolver el monto final de la cuota tomando en cuenta el atributo estático `$precioCuota` y el porcentaje de beca recibido como parámetro