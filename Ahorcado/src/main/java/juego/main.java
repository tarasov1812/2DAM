package juego;

import java.util.Scanner;

public class main {

	public static void main(String[] args) {
		Scanner sc = new Scanner(System.in);
		String respuesta = "java";
		String palabraAdivina = "_".repeat(respuesta.length());
		int intentos = 6;
		do {
			System.out.println("Palabra adivina: " + palabraAdivina);
			System.out.println("Inentos restados " + intentos);
			System.out.println("Ingresa una letra");
			String letra = sc.nextLine().toLowerCase();
			if (respuesta.contains(letra)) {
				char[] x = palabraAdivina.toCharArray();
				if (palabraAdivina.contains(letra)) {
					x[respuesta.indexOf(letra.charAt(0), palabraAdivina.lastIndexOf(letra) + 1)] = letra.charAt(0);
				} else {
					x[respuesta.indexOf(letra)] = letra.charAt(0);
				}
				String word = "";
				for (int y = 0; y < x.length; y++) {
					word += x[y];
				}
				palabraAdivina = word;
			} else {
				intentos--;
			}
			if (respuesta.equals(palabraAdivina)) {
				System.out.println("Win!\nLa palabra correta es - " + respuesta + "\nItentos = " + (6 - intentos));
				break;
			}
		} while (intentos > 0);
		System.out.println("Game Over");
	}

}
