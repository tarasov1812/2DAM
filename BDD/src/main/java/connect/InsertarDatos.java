package connect;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;
import java.sql.Statement;

public class InsertarDatos {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		Connection conn = null;
		Statement stmt = null;
		
		String sql = "INSERT INTO cliente (id, nif, nombre, edad) " + 
		"VALUES (1, '1111','Alberto','40')";
		try {
			conn=DriverManager.getConnection("jdbc:mysql://127.0.0.1:3306/empresa","root","");
			stmt = conn.createStatement();
			stmt.executeUpdate(sql);
				System.out.println("Datos insertados en la table clientes");
				conn.close();
				stmt.close();
				
		} catch(SQLException e) {
			e.printStackTrace();
		}

	}

}
