package pakete;

import javax.swing.*;
import java.awt.Color;

public class Ejercicio4 extends JFrame {
	public static void main (String[] args) {
		JFrame frame = new JFrame("Boton Pesonalizado");
		frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		JPanel panel = new JPanel();
		panel.setLayout(null);
		frame.getContentPane().add(panel);
		
		JButton button = new JButton("Boton Pesonalizado");
		button.setBackground(Color.GREEN);
		button.setForeground(Color.RED);
		
		button.setBounds(50, 50, 200, 30);
		frame.setSize(300, 200);
		
		panel.add(button);
		frame.setVisible(true);
		
	}

}
