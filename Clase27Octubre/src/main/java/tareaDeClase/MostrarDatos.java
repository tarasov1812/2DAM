package tareaDeClase;

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
		
		String sql = "SELECT * FROM x";
		try {
			conn=DriverManager.getConnection("jdbc:mysql://127.0.0.1:3306/TiendaPC","root","");
			stmt = conn.createStatement();
			ResultSet rs=stmt.executeQuery(sql);
			while(rs.next()) {
				int id = rs.getInt("id");
				String nombreProduct = rs.getString("nombreProduct");
				String fabricante = rs.getString("fabricante");
				System.out.println("id: " + id + "\nnombre: " + nombreProduct + "\nfabricante: " + fabricante);
			}
				
		} catch(SQLException e) {
			e.printStackTrace();
		}

	}

}
