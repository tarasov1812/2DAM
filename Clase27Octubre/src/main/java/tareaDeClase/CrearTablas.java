package tareaDeClase;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;
import java.sql.Statement;

public class CrearTablas {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		Connection conn = null;
		Statement stmt = null;
		
		String sql = "CREATE TABLE x (id INT PRIMARY KEY, "
				+ "nombreProduct VARCHAR(40) NOT NULL,"
				+ "fabricante VARCHAR(60))"; 
		try {
			conn=DriverManager.getConnection("jdbc:mysql://127.0.0.1:3306/TiendaPC","root","");
			stmt = conn.createStatement();
			stmt.execute(sql);
				System.out.println("Crear la tabla ok");
				conn.close();
				stmt.close();
				
		} catch(SQLException e) {
			e.printStackTrace();
		}

	}

}