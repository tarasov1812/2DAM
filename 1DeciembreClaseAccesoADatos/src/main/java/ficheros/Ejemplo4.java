package ficheros;

import java.io.BufferedWriter;
import java.io.FileWriter;
import java.io.IOException;

public class Ejemplo4 {
	public static void main(String[] args) {
		String ruta = "c:\\prueba\\";
		String nombreArchivo = "sevilla.txt";
		String contenido = "Sevilla es lo mejor del mundo";
		try (BufferedWriter fw = new BufferedWriter(new FileWriter(ruta + nombreArchivo))) {
			System.out.println("Archivo sevilla.txt creado correctamente");
			fw.write(contenido);
		} catch (IOException e) {
			e.printStackTrace();
			System.err.println("Error al crear el archivo malaga.txt");
		}
	}
}
