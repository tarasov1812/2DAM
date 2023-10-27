package connect;
import java.sql.*;

public class CreateTableEjemplo2 {
	public static void main (String[] args) {
		Connection conn = null;
		Statement stmt = null;
		
		String sql = "CREATE TABLE tableejemplo2 (id INT PRIMARY KEY, "
				+ "nombre VARCHAR(10) NOT NULL)";
		
	}

}
