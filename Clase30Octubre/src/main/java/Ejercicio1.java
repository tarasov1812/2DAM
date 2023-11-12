import javax.swing.*;
public class Ejercicio1 extends JFrame{
	private JPanel panel;

	public void inicializarVentana() {
		setSize(500, 500);
		setVisible(true);
		panel = new JPanel();
		panel.setLayout(null);
		getContentPane().add(panel);
	}
	
	private void agredarBoton(String nombreBoton, int x, int y) {
		JButton botonBienvenido = new JButton(nombreBoton);
		botonBienvenido.setBounds(x, y, 100, 50);
		panel.add(botonBienvenido);
	}
	
	public void addBotones() {
		String[] botones = {"Button 1", "Button 2", "Button 3"};
		int i = 1;
		for(String boton : botones) {
			agredarBoton((boton), 100*i, 50);
			i++;
		}
	}
	
}
