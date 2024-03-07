CREATE TYPE alumno AS OBJECT (
  id_alumno NUMBER(4),
  nombre VARCHAR2(30),
  apellido VARCHAR2(40),
  MAP MEMBER FUNCTION get_id_alumno RETURN NUMBER
  );
