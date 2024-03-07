CREATE OR REPLACE PROCEDURE ejecutar_bloque3_plsql(p_output OUT VARCHAR2) AS
  empl empleado3;
BEGIN
  -- Inicializar la variable empleado
  empl := empleado3(1, 'Sami', 'Comeniño');

  -- Acceder a los atributos del objeto
  p_output := 'ID Player: ' || empl.id_empleado || CHR(10) ||
              'Nombre: ' || empl.nombre || CHR(10) ||
              'Apellido: ' || empl.apellido || CHR(10) ||
              'ID Player desde la función: ' || empl.get_id_empleado();
END;
/