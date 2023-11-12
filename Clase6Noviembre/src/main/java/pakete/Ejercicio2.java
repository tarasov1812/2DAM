package pakete;

import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.awt.*;
import javax.swing.*;

public class Ejercicio2 extends JFrame {
	private JLabel etiquetaMensaje;
	private JLabel etiquetaMensaje1;
	
	public Ejercicio2() {
		setTitle("Ejemplo con Dos Contenedores");
		setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		
		JPanel panelBoton = new JPanel();
		JPanel panelMensaje = new JPanel();
		JPanel panelMensaje1 = new JPanel();
		
		etiquetaMensaje = new JLabel("Mensaje: ");
		etiquetaMensaje1 = new JLabel("Bienvenido: ");
		
		for(int i = 1; i <= 3; i++) {
			JButton boton = new JButton("Boton " + i);
			boton.addActionListener(new ActionListener() {
				public void actionPerformed(ActionEvent e) {
					
					String textoBoton = ((JButton)
					e.getSource()).getText();
					etiquetaMensaje.setText("Mensaje: " + textoBoton);		
					etiquetaMensaje1.setText("Bienvenido: " + textoBoton + " Otra Vez");
					
				}
			});
			
			panelBoton.add(boton);
			
			
		}
		setLayout(new BorderLayout());
		add(panelBoton, BorderLayout.CENTER);
		add(panelMensaje, BorderLayout.NORTH);
		add(panelMensaje1, BorderLayout.SOUTH);
		panelMensaje.add(etiquetaMensaje);
		panelMensaje1.add(etiquetaMensaje1);

		pack();
		setVisible(true);

	}
	
	public static void main (String[] args) {

				SwingUtilities.invokeLater(new Runnable() {
					public void run() {
						new Ejercicio2();
					}
				});
	}

}
