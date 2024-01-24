package modelo;


import java.sql.Date;

import org.hibernate.Session;
import org.hibernate.SessionFactory;
import org.hibernate.cfg.Configuration;
import org.hibernate.context.internal.ThreadLocalSessionContext;
import org.hibernate.engine.spi.SessionFactoryImplementor;


public class Main {


	public static void main(String[] args) {


	    // Configurar la sesi�n de Hibernate
	    SessionFactory sessionFactory = new Configuration()
	    	   .configure()


	          //  .configure("hibernate.cfg.xml") // Ruta del archivo de configuraci�n de Hibernate
	            .buildSessionFactory(); // Construir la sesi�n de Hibernate


	    // Configurar la sesi�n en el contexto actual
	    ThreadLocalSessionContext context = new ThreadLocalSessionContext((SessionFactoryImplementor) sessionFactory);
	    context.bind(sessionFactory.openSession());


	    try {
	        // Crear objeto cliente
	        Game game = new Game("Word of Warcraft", 2012, "Blizzard", 80.00, "Pedazo de juego", "todas");


	        // Obtener la sesi�n actual
	        Session session = context.currentSession();


	        // Iniciar transacci�n
	        session.beginTransaction();


	        // Guardar objeto en la base de datos
	        session.save(game);


	        // Hacer commit de la transacci�n
	        session.getTransaction().commit();


	        // Imprimir cliente guardado en la base de datos
	        System.out.println("Game guardado: " + game);


	    } catch (Exception e) {
	        e.printStackTrace();
	    } finally {
	        // Desligar la sesi�n del contexto
	        ThreadLocalSessionContext.unbind(sessionFactory);
	        // Cerrar la sesi�n de Hibernate
	        sessionFactory.close();
	    }
	}


}
