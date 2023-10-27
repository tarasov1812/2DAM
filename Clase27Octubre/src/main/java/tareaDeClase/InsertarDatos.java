package tareaDeClase;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;
import java.sql.Statement;

public class InsertarDatos {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		Connection conn = null;
		Statement stmt = null;
		
		String sql = "INSERT INTO x (id, nombreProduct, fabricante) " + 
		"VALUES (1, 'Portatil','HP'),"
		+ "(2, 'Tablet', 'lenevo')";
		try {
			conn=DriverManager.getConnection("jdbc:mysql://127.0.0.1:3306/TiendaPC","root","");
			stmt = conn.createStatement();
			stmt.executeUpdate(sql);
				System.out.println("Datos insertados en la tabla x");
				conn.close();
				stmt.close();
				
		} catch(SQLException e) {
			e.printStackTrace();
		}

	}

}
