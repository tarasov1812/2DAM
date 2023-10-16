package main;
import javax.swing.*;
public class JOptionPaneDeMemoria {

	public static void main(String[] args) {
		String nombre = JOptionPane.showInputDialog(null, "Dime tu nombre", "Datos Personales", JOptionPane.QUESTION_MESSAGE);
		if(nombre != null) {
			System.out.println(nombre);
		} else {
			System.out.println("Null");
		}

	}

}
