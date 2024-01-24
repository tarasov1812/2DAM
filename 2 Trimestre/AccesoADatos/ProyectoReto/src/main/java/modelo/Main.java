package modelo;

import org.hibernate.Session;
import org.hibernate.SessionFactory;
import org.hibernate.Transaction;
import org.hibernate.cfg.Configuration;

import java.util.HashSet;
import java.util.List;
import java.util.Set;

public class Main {

    public static void main(String[] args) {

        SessionFactory sessionFactory = new Configuration()
                .configure()
                .buildSessionFactory();

        try {
            // Crear autores
            Autor autor1 = new Autor("Autor 1");
            Autor autor2 = new Autor("Autor 2");

            // Crear categorías
            Categoria categoria1 = new Categoria("Ficción");
            Categoria categoria2 = new Categoria("Ciencia Ficción");

            // Crear libros
            Libro libro1 = new Libro("Libro 1");
            libro1.getAutores().add(autor1);
            libro1.getCategorias().add(categoria1);

            Libro libro2 = new Libro("Libro 2");
            libro2.getAutores().add(autor2);
            libro2.getCategorias().add(categoria2);

            // Crear cliente
            Cliente cliente = new Cliente("Cliente 1");

            // Crear pedido
            Pedido pedido = new Pedido(cliente);
            Set<Libro> librosPedido = new HashSet<>();
            librosPedido.add(libro1);
            librosPedido.add(libro2);
            pedido.setLibros(librosPedido);

            // Guardar entidades en la base de datos
            guardarEntidad(sessionFactory, autor1);
            guardarEntidad(sessionFactory, autor2);
            guardarEntidad(sessionFactory, categoria1);
            guardarEntidad(sessionFactory, categoria2);
            guardarEntidad(sessionFactory, libro1);
            guardarEntidad(sessionFactory, libro2);
            guardarEntidad(sessionFactory, cliente);
            guardarEntidad(sessionFactory, pedido);

            // Realizar consultas HQL
            System.out.println("Libros del autor específico:");
            List<Libro> librosAutor = obtenerLibrosDeAutor(sessionFactory, "Autor 1");
            imprimirLibros(librosAutor);

            System.out.println("Libros de la categoría específica:");
            List<Libro> librosCategoria = obtenerLibrosDeCategoria(sessionFactory, "Ficción");
            imprimirLibros(librosCategoria);

            System.out.println("Historial de pedidos del cliente:");
            List<Pedido> historialPedidos = obtenerHistorialPedidos(sessionFactory, "Cliente 1");
            imprimirPedidos(historialPedidos);

        } catch (Exception e) {
            e.printStackTrace();
        } finally {
            sessionFactory.close();
        }
    }

    // Métodos de utilidad para CRUD

    private static void guardarEntidad(SessionFactory sessionFactory, Object entidad) {
        try (Session session = sessionFactory.getCurrentSession()) {
            Transaction transaction = session.beginTransaction();
            session.save(entidad);
            transaction.commit();
        }
    }

    // Consultas HQL

    private static List<Libro> obtenerLibrosDeAutor(SessionFactory sessionFactory, String nombreAutor) {
        try (Session session = sessionFactory.getCurrentSession()) {
            return session.createQuery("FROM Libro l WHERE :nombreAutor MEMBER OF l.autores", Libro.class)
                    .setParameter("nombreAutor", nombreAutor)
                    .getResultList();
        }
    }

    private static List<Libro> obtenerLibrosDeCategoria(SessionFactory sessionFactory, String nombreCategoria) {
        try (Session session = sessionFactory.getCurrentSession()) {
            return session.createQuery("FROM Libro l WHERE :nombreCategoria MEMBER OF l.categorias", Libro.class)
                    .setParameter("nombreCategoria", nombreCategoria)
                    .getResultList();
        }
    }

    private static List<Pedido> obtenerHistorialPedidos(SessionFactory sessionFactory, String nombreCliente) {
        try (Session session = sessionFactory.getCurrentSession()) {
            return session.createQuery("FROM Pedido p WHERE p.cliente.nombre = :nombreCliente", Pedido.class)
                    .setParameter("nombreCliente", nombreCliente)
                    .getResultList();
        }
    }

    // Métodos de utilidad para imprimir resultados

    private static void imprimirLibros(List<Libro> libros) {
        for (Libro libro : libros) {
            System.out.println(libro);
        }
    }

    private static void imprimirPedidos(List<Pedido> pedidos) {
        for (Pedido pedido : pedidos) {
            System.out.println(pedido);
        }
    }
}
