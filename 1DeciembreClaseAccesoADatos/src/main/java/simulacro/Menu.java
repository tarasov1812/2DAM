package simulacro;

import java.io.BufferedReader;
import java.io.BufferedWriter;
import java.io.File;
import java.io.FileReader;
import java.io.FileWriter;
import java.io.IOException;
import java.nio.file.Files;
import java.nio.file.Path;
import java.nio.file.Paths;
import java.util.Scanner;

public class Menu {
	public static void main(String[] args) {
		Scanner sc = new Scanner(System.in);
		String ruta = "";
		String nombreArchivo = "";
		String contenido = "";
		int i;
		do {
			System.out.println("1 - Crear Carpeta\n" + "2 - Crear fichero\n" + "3 - Borrar fichero\n"
					+ "4 - Borrar carpteta\n" + "5 - Leer fichero\n" + "6 - Ver informacion\n" + "7 - Salir\n");
			i = Integer.parseInt(sc.nextLine());
			switch (i) {
			case 1:
				System.out.println("Dime el nombre de carpeta");
				ruta = sc.nextLine();
				ruta = "c:\\" + ruta + "\\";
				File fichero = new File(ruta);

				if (fichero.mkdir()) {
					System.out.println("Carpeta creada");
				} else {
					System.out.println("No se puedo crear la carpeta");
					if (fichero.exists()) {
						System.out.println("La carpeta ya existe");
					}
				}
				break;
			case 2:
				System.out.println("Dime el nombre de carpeta");
				ruta = sc.nextLine();
				ruta = "c:\\" + ruta + "\\";
				System.out.println("Dime el nombre de archivo");
				nombreArchivo = sc.nextLine();
				nombreArchivo = nombreArchivo + ".txt";
				System.out.println("Escribe contenido");
				contenido = sc.nextLine();
				try (BufferedWriter fw = new BufferedWriter(new FileWriter(ruta + nombreArchivo))) {
					System.out.println("Archivo " + nombreArchivo + " creado correctamente");
					fw.write(contenido);
				} catch (IOException e) {
					e.printStackTrace();
					System.err.println("Error al crear el archivo " + nombreArchivo);
				}
				break;
			case 3:
				System.out.println("Dime el nombre de archivo para borrar");
				nombreArchivo = sc.nextLine();
				nombreArchivo = nombreArchivo + ".txt";
				Path fileToDeletePath = Paths.get(ruta + nombreArchivo);
				try {
					Files.delete(fileToDeletePath);
					System.out.println("Archivo " + nombreArchivo + " borrado correctamente");
				} catch (IOException e) {
					e.printStackTrace();
					System.err.println("Error al borrar el archivo " + nombreArchivo);
				}
				break;
			case 4:
				System.out.println("Dime el nombre de carpeta");
				ruta = sc.nextLine();
				ruta = "c:\\" + ruta + "\\";
				Path carpetaToDeletePath = Paths.get(ruta);
				try {
					Files.delete(carpetaToDeletePath);
					System.out.println("Carpeta " + ruta + " borrado correctamente");
				} catch (IOException e) {
					e.printStackTrace();
					System.err.println("Error al borrar el carpeta " + ruta);
				}
				break;
			case 5:
				try {
					System.out.println("Dime el nombre de carpeta");
					ruta = sc.nextLine();
					ruta = "c:\\" + ruta + "\\";
					System.out.println("Dime el nombre de archivo");
					nombreArchivo = sc.nextLine();
					nombreArchivo = nombreArchivo + ".txt";
					Path path = Paths.get(ruta + nombreArchivo);
					FileReader fr = new FileReader(ruta + nombreArchivo);
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
				break;
			case 6:
				System.out.println("Dime el nombre de carpeta");
				ruta = sc.nextLine();
				ruta = "c:\\" + ruta + "\\";
				System.out.println("Dime el nombre de archivo");
				nombreArchivo = sc.nextLine();
				nombreArchivo = nombreArchivo + ".txt";
				File file = new File(ruta + nombreArchivo);
				System.out.println("Ruta absoluta: " + file.getAbsolutePath() + "\nNombre es: " + file.getName()
						+ "\nModificasion: " + file.lastModified());
				break;
			case 7:
				System.out.println("Adios");
				break;
			default:
				System.out.println("Opcion incorrecta");
				break;
			}
		} while (i != 7);
		System.out.println("Adios");
	}
}
