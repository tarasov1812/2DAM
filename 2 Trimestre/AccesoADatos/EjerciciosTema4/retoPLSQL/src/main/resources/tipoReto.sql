-- EJERCICIO 2---------------crear el tipo de objeto empleado3
CREATE TYPE empleado3 AS OBJECT (
  id_empleado NUMBER(4),
  nombre VARCHAR2(30),
  apellido VARCHAR2(40),
  MAP MEMBER FUNCTION get_id_empleado RETURN NUMBER
);
