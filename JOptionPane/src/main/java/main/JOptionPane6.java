package main;
import javax.swing.*;
public class JOptionPane6 {

	public static void main(String[] args) {
		UIManager.put("OptionPane.yesButtonText", "Si");
		UIManager.put("OptionPane.noButtonText", "No");
		UIManager.put("OptionPane.cancelButtonText", "Cancelar");
		
		int opcion = JOptionPane.showConfirmDialog(null, "Quieres continuar",
				"Confirmar", JOptionPane.YES_NO_CANCEL_OPTION);
		
		if(opcion == JOptionPane.NO_OPTION) {
			JOptionPane.showMessageDialog(null, "La respuesta es " + opcion);
		} else if (opcion == JOptionPane.YES_OPTION) {
			JOptionPane.showMessageDialog(null, "La respuesta es " + opcion);
		} else {
			JOptionPane.showMessageDialog(null, "La respuesta es " + opcion);
		}

	}

}
