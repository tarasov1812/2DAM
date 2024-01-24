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

			String hql = "FROM Alumno";
            Query<Alumno> query = session.createQuery(hql, Alumno.class);


            // Ejecutar consulta y obtener resultados
            List<Alumno> alumnos = query.list();


            // Imprimir resultados
            System.out.println("Registros en la tabla alumnos:");
            for (Alumno a : alumnos) {
                System.out.println(a.toString());
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
