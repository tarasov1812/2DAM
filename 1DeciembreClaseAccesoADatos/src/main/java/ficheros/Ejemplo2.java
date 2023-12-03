package ficheros;

import java.io.*;

public class Ejemplo2 {

	public static void main(String[] args) {
		String ruta = "c:\\prueba\\";
		String nombreArchivo = "malaga.txt";
		String contenido = "Malaga es lo mejor del mundo";
		try (BufferedWriter fw = new BufferedWriter(new FileWriter(ruta + nombreArchivo))) {
			System.out.println("Archivo malaga.txt creado correctamente");
			fw.write(contenido);
		} catch (IOException e) {
			e.printStackTrace();
			System.err.println("Error al crear el archivo malaga.txt");
		}
				

	}

}
