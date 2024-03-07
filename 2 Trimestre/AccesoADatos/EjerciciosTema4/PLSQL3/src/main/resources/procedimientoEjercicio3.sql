CREATE OR REPLACE PROCEDURE ejecutar_bloque4_plsql(p_output OUT VARCHAR2) AS
  alm alumno;
BEGIN
  -- Inicializar la variable empleado
  alm := alumno(1, 'Raúl', 'Montoya');

  -- Acceder a los atributos del objeto
  p_output := 'ID Alumno: ' || alm.id_alumno || CHR(10) ||
              'Nombre: ' || alm.nombre || CHR(10) ||
              'Apellido: ' || alm.apellido || CHR(10) ||
              'ID Player desde la función: ' || alm.get_id_alumno();
END;
/