package modelo;

import org.hibernate.Session;
import org.hibernate.SessionFactory;
import org.hibernate.cfg.Configuration;
import org.hibernate.context.internal.ThreadLocalSessionContext;
import org.hibernate.engine.spi.SessionFactoryImplementor;
import org.hibernate.query.Query;

import java.util.List;

public class EliminarRegistro {

    public static void main(String[] args) {

        // Configurar la sesión de Hibernate
        SessionFactory sessionFactory = new Configuration()
                .configure()
                .buildSessionFactory();

        // Configurar la sesión en el contexto actual
        ThreadLocalSessionContext context = new ThreadLocalSessionContext((SessionFactoryImplementor) sessionFactory);
        context.bind(sessionFactory.openSession());

        try {
            // Obtener la sesión actual
            Session session = context.currentSession();

            // Iniciar transacción
            session.beginTransaction();

            // Realizar una consulta para obtener los datos antes de la eliminación
            String selectHqlBeforeDelete = "FROM Alumno WHERE id = 2";
            Query<Alumno> selectQueryBeforeDelete = session.createQuery(selectHqlBeforeDelete, Alumno.class);
            List<Alumno> alumnosBeforeDelete = selectQueryBeforeDelete.list();

            // Imprimir resultados antes de la eliminación
            System.out.println("Registros en la tabla fabricante antes de la eliminación:");
            for (Alumno a : alumnosBeforeDelete) {
                System.out.println(a.toString());
            }

            // Eliminar el registro
            String deleteHql = "DELETE FROM Alumno WHERE id = 2";
            Query<?> deleteQuery = session.createQuery(deleteHql);
            deleteQuery.executeUpdate();

            // Realizar una nueva consulta para obtener los datos después de la eliminación
            String selectHqlAfterDelete = "FROM Alumno";
            Query<Alumno> selectQueryAfterDelete = session.createQuery(selectHqlAfterDelete, Alumno.class);
            List<Alumno> alumnosAfterDelete = selectQueryAfterDelete.list();

            // Imprimir resultados después de la eliminación
            System.out.println("Registros en la tabla alumno después de la eliminación:");
            for (Alumno a : alumnosAfterDelete) {
                System.out.println(a.toString());
            }

            // Hacer commit de la transacción
            session.getTransaction().commit();

        } catch (Exception e) {
            e.printStackTrace();
        } finally {
            context.unbind(sessionFactory);
            sessionFactory.close();
        }
    }
}
