import java.awt.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;

import javax.swing.JButton;
import javax.swing.JFrame;
import javax.swing.JLabel;
import javax.swing.JPanel;
public class Ejercicio4 extends JFrame{
	private JPanel panel;
	private JLabel label = new JLabel("12345");
	String[] botones = {"A", "B", "C", "D", "E"};

	public void inicializarVentana() {
		setSize(500, 500);
		setVisible(true);
		panel = new JPanel();
		panel.setLayout(null);
		getContentPane().add(panel);
	}
	
	public void label() {
		panel.add(label);
	}
	
	private void agredarBoton(final String nombreBoton, int x, int y) {
		JButton botonBienvenido = new JButton(nombreBoton);
		botonBienvenido.setBounds(x, y, 100, 50);
		botonBienvenido.addActionListener(new ActionListener() {
		
			public void actionPerformed(ActionEvent e) {
				JFrame ventanaNueva = new JFrame("Nueva ventana");
				ventanaNueva.setSize(200, 200);
				ventanaNueva.setDefaultCloseOperation(JFrame.DISPOSE_ON_CLOSE);
				ventanaNueva.add(new JLabel("has pulsado el boton " + nombreBoton));
				ventanaNueva.setVisible(true);
				label.setText("Has pulsado el botón " + nombreBoton);
			}	
			
		});
		panel.add(botonBienvenido);
	}
	
	public void addBotones() {
		int i = 1;
		for(String boton : botones) {
			agredarBoton((boton), 100*i, 50);
			i++;
		}
	}
	
}
