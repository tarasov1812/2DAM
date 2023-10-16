import java.util.Random;

import javax.swing.*;

public class juego {

	public static void main(String[] args) {
		Random r = new Random();
		int numeroDeJugador;
		int random = r.nextInt(5) + 1;
		System.out.println(random);
		do {
			numeroDeJugador = Integer.parseInt(JOptionPane.showInputDialog("Adivina el numero entre 1 y 5"));
			if (numeroDeJugador == random) {
				JOptionPane.showMessageDialog(null, "Correcto!");
			} else {
				JOptionPane.showMessageDialog(null, "Pruba otra vez!");
			}
		} while (numeroDeJugador != random);
		JOptionPane.showMessageDialog(null, "Felicitaciones! El numero correcto es " + numeroDeJugador);
		System.exit(0);
	}

}
