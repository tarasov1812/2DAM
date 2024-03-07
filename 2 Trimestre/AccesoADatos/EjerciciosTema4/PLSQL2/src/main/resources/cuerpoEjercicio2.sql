CREATE TYPE BODY empleado3 AS
  MAP MEMBER FUNCTION get_id_empleado RETURN NUMBER IS
  BEGIN
    RETURN id_empleado;
  END;
END;
/