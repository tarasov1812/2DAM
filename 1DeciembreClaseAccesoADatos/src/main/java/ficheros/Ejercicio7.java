package ficheros;

import java.io.*;

public class Ejercicio7 {
	public static void main(String[] args) {
		try {
			File archivo = new File("c:/prueba/ciudades.txt");
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
		} catch (IOException e) {
			System.out.println(e.getMessage());
		}
	}

}
