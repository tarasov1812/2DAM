package modelo;

import org.hibernate.SessionFactory;
import org.hibernate.cfg.Configuration;

public class InsertarRegistro {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		SessionFactory sessionFactory = new Configuration().configure("hibernate.cfg.xml").buildSessionFactory();

		// Crear el DAO de Empresa
		EmpresaDao empresaDAO = new EmpresaDaoHibernate(sessionFactory);
		
		// Obtener y mostrar todas las empresas
		System.out.println("Empresas existentes:");
		empresaDAO.obtenerTodasLasEmpresas().forEach(empresa -> {
			System.out.println(
					"ID: " + empresa.getId() + ", Nombre: " + empresa.getNombre() + ", País: " + empresa.getPais());
		});
		
		//insertar empresa
		Empresa empr = new Empresa(8, "empr", "brasil");
		empresaDAO.agregarEmpresa(empr);
		
		System.out.println("Empresas existentes:");
		empresaDAO.obtenerTodasLasEmpresas().forEach(empresa -> {
			System.out.println(
					"ID: " + empresa.getId() + ", Nombre: " + empresa.getNombre() + ", País: " + empresa.getPais());
		});

		sessionFactory.close();

	}

}
