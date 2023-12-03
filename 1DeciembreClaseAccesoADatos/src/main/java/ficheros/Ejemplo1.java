package ficheros;

import java.io.File;

public class Ejemplo1 {
	public static void main(String[] args){
		String ruta = "c:\\prueba\\";
		File fichero = new File(ruta);
		
		if(fichero.mkdir()){
			System.out.println("Carpeta creada");
		} else {
			System.out.println("No se puedo cread la carpeta");
			if(fichero.exists()) {
				System.out.println("La carpeta ya existe");
			}
		}
		
	}

}

