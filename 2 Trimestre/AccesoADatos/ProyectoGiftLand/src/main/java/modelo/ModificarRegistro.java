package modelo;

import org.hibernate.Session;
import org.hibernate.SessionFactory;
import org.hibernate.cfg.Configuration;
import org.hibernate.context.internal.ThreadLocalSessionContext;
import org.hibernate.engine.spi.SessionFactoryImplementor;
import org.hibernate.query.Query;

import java.util.List;

public class ModificarRegistro {

    public static void main(String[] args) {

        SessionFactory sessionFactory = new Configuration()
                .configure()
                .buildSessionFactory();

        ThreadLocalSessionContext context = new ThreadLocalSessionContext((SessionFactoryImplementor) sessionFactory);
        context.bind(sessionFactory.openSession());

        try {
            Session session = context.currentSession();

            session.beginTransaction();

            String updateHql = "UPDATE Producto SET nombre = 'Tom' WHERE id = 1";
            Query<?> updateQuery = session.createQuery(updateHql);
            updateQuery.executeUpdate();

            String selectHql = "FROM Producto WHERE id = 1";
            Query<Producto> selectQuery = session.createQuery(selectHql, Producto.class);
            List<Producto> alomnos = selectQuery.list();

            System.out.println("Registros en la tabla producto después de la actualización:");
            for (Producto a : alomnos) {
                System.out.println(a.toString());
            }

            session.getTransaction().commit();

        } catch (Exception e) {
            e.printStackTrace();
        } finally {
            context.unbind(sessionFactory);
            sessionFactory.close();
        }
    }
}
