package pakete;

import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.awt.*;
import javax.swing.*;

public class Ejercicio1 extends JFrame {
	private JLabel etiquetaMensaje;
	private JLabel etiquetaMensaje1;
	
	public Ejercicio1() {
		setTitle("Ejemplo con Dos Contenedores");
		setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		
		JPanel panelBoton = new JPanel();
		JPanel panelMensaje = new JPanel();
		
		etiquetaMensaje = new JLabel("Mensaje: ");
		etiquetaMensaje1 = new JLabel("Bienvenido: ");
		
		for(int i = 1; i <= 3; i++) {
			JButton boton = new JButton("Boton " + i);
			boton.addActionListener(new ActionListener() {
				public void actionPerformed(ActionEvent e) {
					
					String textoBoton = ((JButton)
					e.getSource()).getText();
					etiquetaMensaje.setText("Mensaje: " + textoBoton);		
					
				}
			});
			
			panelBoton.add(boton);
			
			
		}
		setLayout(new BorderLayout());
		add(panelBoton, BorderLayout.CENTER);
		add(panelMensaje, BorderLayout.NORTH);
		panelMensaje.add(etiquetaMensaje);

		pack();
		setVisible(true);

	}
	
	public static void main (String[] args) {

				SwingUtilities.invokeLater(new Runnable() {
					public void run() {
						new Ejercicio1();
					}
				});
	}

}
