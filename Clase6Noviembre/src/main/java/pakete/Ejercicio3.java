package pakete;

import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.awt.*;
import javax.swing.*;

public class Ejercicio3 extends JFrame {
	private JLabel etiquetaMensaje;
	private JLabel etiquetaMensaje1;
	
	public Ejercicio3() {
		setTitle("Ejemplo con Dos Contenedores");
		setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		
		JPanel panelBoton = new JPanel();
		JPanel panelBoton2 = new JPanel();
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
		
		for(int i = 1; i <= 3; i++) {
			JButton boton = new JButton("Ventana " + i);
			boton.addActionListener(new ActionListener() {
				public void actionPerformed(ActionEvent e) {
					
					String textoBoton = ((JButton)
					e.getSource()).getText();
					JFrame ventanaNueva = new JFrame("textoBoton");
					ventanaNueva.setSize(200, 200);
					ventanaNueva.setDefaultCloseOperation(JFrame.DISPOSE_ON_CLOSE);
					ventanaNueva.add(new JLabel(textoBoton));
					ventanaNueva.setVisible(true);
					
				}
			});
			
			panelBoton2.add(boton);
			
			
		}
		
		setLayout(new BorderLayout());
		add(panelBoton, BorderLayout.CENTER);
		add(panelMensaje, BorderLayout.NORTH);
		add(panelMensaje1, BorderLayout.SOUTH);
		add(panelBoton2, BorderLayout.WEST);
		panelMensaje.add(etiquetaMensaje);
		panelMensaje1.add(etiquetaMensaje1);

		pack();
		setVisible(true);

	}
	
	public static void main (String[] args) {

				SwingUtilities.invokeLater(new Runnable() {
					public void run() {
						new Ejercicio3();
					}
				});
	}

}
