package ficheros;

import java.io.BufferedReader;
import java.io.File;
import java.io.FileReader;
import java.io.IOException;

public class Ejercicio8 {

	public static void main(String[] args) {
		String[] archivos = { "c:/prueba/ciudades.txt", "c:/prueba/productos.txt", "c:/prueba/malaga.txt",
				"c:/prueba/granada.txt", "c:/prueba/sevilla.txt" };
		try {
			for (String arch : archivos) {
				File archivo = new File(arch);
				if (!archivo.exists()) {
					System.out.println("El archivo ciudades.txt no existre");
					return;
				}
				FileReader fr = new FileReader(archivo);
				BufferedReader br = new BufferedReader(fr);
				String linea;
				while ((linea = br.readLine()) != null) {
					System.out.println(linea);
				}
				br.close();
				fr.close();
			}
		} catch (IOException e) {
			System.out.println(e.getMessage());
		}

	}

}
