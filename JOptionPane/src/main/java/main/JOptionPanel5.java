package main;
import javax.swing.*;
public class JOptionPanel5 {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		int codigo = JOptionPane.showConfirmDialog(null, "elige entre si no o cancel", "Dialogo", 
				JOptionPane.YES_NO_CANCEL_OPTION,
				JOptionPane.QUESTION_MESSAGE);
		if(codigo == JOptionPane.NO_OPTION) {
			JOptionPane.showMessageDialog(null, "La respuesta es " + codigo);
		} else if (codigo == JOptionPane.YES_OPTION) {
			JOptionPane.showMessageDialog(null, "La respuesta es " + codigo);
		} else {
			JOptionPane.showMessageDialog(null, "La respuesta es " + codigo);
		}
	} 

}
