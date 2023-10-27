package tareaDeClase;
import java.sql.*;

public class CrearBaseDeDatos {

	public static void main(String[] args) {
		Connection conn = null;
		Statement stmt = null;
		
		String sql = "CREATE DATABASE TiendaPC";
		try {
			conn=DriverManager.getConnection("jdbc:mysql://127.0.0.1:3306/","root","");
			stmt = conn.createStatement();
			stmt.execute(sql);
				System.out.println("La base de datos TiendaPC ok");
				conn.close();
				stmt.close();
				
		} catch(SQLException e) {
			e.printStackTrace();
		}

	}

}
