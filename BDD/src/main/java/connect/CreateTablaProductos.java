package connect;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;
import java.sql.Statement;

public class CreateTablaProductos {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		Connection conn = null;
		Statement stmt = null;
		
		String sql = "CREATE TABLE productos (id INT PRIMARY KEY, "
				+ "codigo VARCHAR(10) NOT NULL,"
				+ "nombre VARCHAR(60) NOT NULL,"
				+ "precio VARCHAR(10))";
		try {
			conn=DriverManager.getConnection("jdbc:mysql://127.0.0.1:3306/empresa","root","");
			stmt = conn.createStatement();
			stmt.execute(sql);
				System.out.println("Create la tabla clientes");
				conn.close();
				stmt.close();
				
		} catch(SQLException e) {
			e.printStackTrace();
		}

	}

}
