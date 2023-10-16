package juego;

import java.util.Scanner;
import javax.swing.*;
public class main {

	public static void main(String[] args) {
		String nombre = JOptionPane.showInputDialog(null, "Dime tu nombre", "Datos Personales", JOptionPane.QUESTION_MESSAGE);
		if(nombre!=null) {
			JOptionPane.showMessageDialog(null, "Bienvenido " + nombre);
		} else {
			JOptionPane.showMessageDialog(null, "Bienvenido anonimus");
		}
		Scanner sc = new Scanner(System.in);
		String respuesta = "java";
		String palabraAdivina = "_".repeat(respuesta.length());
		int intentos = 6;
		do {
			JOptionPane.showMessageDialog(null, "Palabra adivina: " + palabraAdivina + "\n" + "Inentos restados " + intentos);
			String letra = JOptionPane.showInputDialog(null, "Dime un letra", "Letra", JOptionPane.QUESTION_MESSAGE);
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
				JOptionPane.showMessageDialog(null, "Win!\nLa palabra correta es - " + respuesta);
				break;
			}
		} while (intentos > 0);
		JOptionPane.showMessageDialog(null, "GAME OVER");
	}

}
