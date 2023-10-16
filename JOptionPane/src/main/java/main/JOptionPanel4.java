package main;
import javax.swing.*;
public class JOptionPanel4 {
	public static void main(String[] args) {
		int codigo = JOptionPane.showConfirmDialog(null, "Quieres un euro para una causa?", "Donation", 
				JOptionPane.YES_NO_CANCEL_OPTION,
				JOptionPane.QUESTION_MESSAGE);
		if(codigo == JOptionPane.YES_OPTION) {
			System.out.println("Has pulsado Si");
		} else if(codigo == JOptionPane.NO_OPTION) {
			System.out.println("Has puslasdo No");
		} else {
			System.out.println("Cancel");
		}
	}

}
