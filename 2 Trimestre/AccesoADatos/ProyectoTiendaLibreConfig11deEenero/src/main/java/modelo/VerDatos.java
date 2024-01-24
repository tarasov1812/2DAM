package modelo;

import java.util.List;

import org.hibernate.Session;
import org.hibernate.SessionFactory;
import org.hibernate.cfg.Configuration;
import org.hibernate.context.internal.ThreadLocalSessionContext;
import org.hibernate.engine.spi.SessionFactoryImplementor;
import org.hibernate.query.Query;

public class VerDatos {

	public static void main(String[] args) {
		SessionFactory sessionFactory = new Configuration().configure().buildSessionFactory();
		// Configurar la sesin en el contexto actual
		ThreadLocalSessionContext context = new ThreadLocalSessionContext((SessionFactoryImplementor) sessionFactory);
		context.bind(sessionFactory.openSession());

		try {
			// Crear objeto fabricante

			// Obtener la sesión actual
			Session session = context.currentSession();

			// Iniciar transacción
			session.beginTransaction();

			String hql = "FROM Fabricante";
            Query<Fabricante> query = session.createQuery(hql, Fabricante.class);


            // Ejecutar consulta y obtener resultados
            List<Fabricante> fabricantes = query.list();


            // Imprimir resultados
            System.out.println("Registros en la tabla fabricante:");
            for (Fabricante f : fabricantes) {
                System.out.println(f.toString());
            }
            session.getTransaction().commit();
		} catch (Exception e) {
			e.printStackTrace();
		} finally {
			// Desligar la sesión del contexto
			context.unbind(sessionFactory);
			// Cerrar la sesión de Hibernate
			sessionFactory.close();
		}

	}

}
