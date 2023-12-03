package ficheros;

import java.io.BufferedWriter;
import java.io.FileWriter;
import java.io.IOException;

public class Ejemplo5 {
	public static void main(String[] args) {
		String ruta = "c:\\prueba\\";
		String nombreArchivo = "productos.txt";
		String[] contenido = { "portatil", "monitor", "movil", "altavoces" };
		try (BufferedWriter fw = new BufferedWriter(new FileWriter(ruta + nombreArchivo))) {
			System.out.println("Archivo productos.txt creado correctamente");
			for (String content : contenido) {
				fw.write(content + "\n");
			}
		} catch (IOException e) {
			e.printStackTrace();
			System.err.println("Error al crear el archivo productos.txt");
		}
	}

}
