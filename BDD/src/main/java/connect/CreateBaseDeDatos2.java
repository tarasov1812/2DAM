package connect;
import java.sql.*;
public class CreateBaseDeDatos2 {
	public static void main(String[] args) {
		Connection conn = null;
		Statement stmt = null;
		
		String sql = "CREATE DATABASE ejemplo";
		
		try {
			conn = DriverManager.getConnection("jdbc:mysql://127.0.0.1:3306/","root","");
			stmt = conn.createStatement();
			stmt.execute(sql);
				System.out.println("Base de datos creada");
				conn.close();
				stmt.close();
			
		} catch (SQLException e) {
			e.printStackTrace();
		}

	}

}
