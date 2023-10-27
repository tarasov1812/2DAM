package connect;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;
import java.sql.Statement;
import java.sql.ResultSet;

public class MostrarDatos {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		Connection conn = null;
		Statement stmt = null;
		
		String sql = "SELECT * FROM cliente";
		try {
			conn=DriverManager.getConnection("jdbc:mysql://127.0.0.1:3306/empresa","root","");
			stmt = conn.createStatement();
			ResultSet rs=stmt.executeQuery(sql);
			while(rs.next()) {
				int id = rs.getInt("id");
				String nif = rs.getString("nif");
				String nombre = rs.getString("nombre");
				String edad = rs.getString("edad");
				System.out.println("id: " + id + "\nnif: " + nif + "\nnombre: " + nombre + "\nedad: " + edad);
			}
				
		} catch(SQLException e) {
			e.printStackTrace();
		}

	}

}
