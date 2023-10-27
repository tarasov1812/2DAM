package connect;

import java.sql.*;

public class ConectarDb {
	public static void main(String[] args) throws SQLException {
		Connection conect = null;
		try {
			conect = DriverManager.getConnection("jdbc:mysql://127.0.0.1:3306/phon","root","");
		
		if( conect!=null) {
			System.out.println("Conexion a base de datos ok");
			conect.close();
		}
	

		
		}
		catch(SQLException e) {
			System.out.println("Error");
		}

}
}
