CREATE TYPE empleado1 AS OBJECT (
  id_empleado NUMBER(4),
  nombre VARCHAR2(30),
  apellido VARCHAR2(40),
  MAP MEMBER FUNCTION get_id_empleado RETURN NUMBER
);
