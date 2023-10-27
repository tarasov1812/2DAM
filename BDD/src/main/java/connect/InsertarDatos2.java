package connect;
import java.sql.*;

public class InsertarDatos2 {
	public static void main(String[] args) {
		Connection conn = null;
		Statement stmt = null;
		
		String sql = "INSERT INTO cliente (id, nif, nombre, edad) "
				+ "VALUES (2, '2222','Alex','33')";
		
		try {
			conn = DriverManager.getConnection("jdbc:mysql://127.0.0.1:3306/empresa", "root", "");
			stmt = conn.createStatement();
			stmt.executeUpdate(sql);
				System.out.println("Datos insertados");
				conn.close();
				stmt.close();
		} catch (SQLException e) {
			e.printStackTrace();
		}
	}
}
