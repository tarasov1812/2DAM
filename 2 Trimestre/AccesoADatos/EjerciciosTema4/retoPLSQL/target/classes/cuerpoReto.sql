CREATE TYPE BODY player1 AS
  MAP MEMBER FUNCTION get_id_player RETURN NUMBER IS
  BEGIN
    RETURN id_player;
  END;
END;
/