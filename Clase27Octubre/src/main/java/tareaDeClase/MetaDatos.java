package tareaDeClase;

import java.sql.*;

public class MetaDatos {
	public static void main(String[] args) throws SQLException {
		Connection conect = null;
		try {
			conect = DriverManager.getConnection("jdbc:mysql://127.0.0.1:3306/TiendaPC","root","");
		
		if( conect!=null) {
			System.out.println("Conexion a base de datos ok");
			DatabaseMetaData meta = conect.getMetaData();
			System.out.println("Verison de driver JDBS" + meta.getDriverVersion());
			System.out.println("Nombre " + meta.getDatabaseProductName());
			System.out.println("Version " + meta.getDatabaseProductVersion());
			ResultSet columnas = meta.getColumns("TiendaPC", null, "x", null);
			while(columnas.next()) {
				String nombrecol = columnas.getString("COLUMN_NAME");
				String tipo = columnas.getString("TYPE_NAME");
				String tamcol = columnas.getString("COLUMN_SIZE");
				System.out.println(nombrecol + " " + tipo + " " + tamcol);
			}
			conect.close();
		}
	

		
		}
		catch(SQLException e) {
			System.out.println("Error");
		}

}
}
