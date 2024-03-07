CREATE OR REPLACE PROCEDURE ejecutar_bloque2_plsql(p_output OUT VARCHAR2) AS
  ply player1;
BEGIN
  -- Inicializar la variable empleado
  ply := player1(1, 'Rocky', 'Bilbo');

  -- Acceder a los atributos del objeto
  p_output := 'ID Player: ' || ply.id_player || CHR(10) ||
              'Nombre: ' || ply.nombre || CHR(10) ||
              'Apellido: ' || ply.apellido || CHR(10) ||
              'ID Player desde la función: ' || ply.get_id_player();
END;
/