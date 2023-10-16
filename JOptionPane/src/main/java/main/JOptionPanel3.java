package main;
import javax.swing.JOptionPane;
public class JOptionPanel3 {

	public static void main(String[] args) {
		String nombre = JOptionPane.showInputDialog(null, "Dime tu nombre", "Datos Personales", JOptionPane.QUESTION_MESSAGE);
		if(nombre!=null) {
			System.out.println("Tu nombre es " + nombre);
		} else {
			System.out.println("");
		}
	}

}
