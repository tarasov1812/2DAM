package ejercicio5;

import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.scene.control.Button;

public class SimpleController {
	@FXML
	private Button boton1, boton2, boton3, boton4;
	
	@FXML
	private void handleButtonClick(ActionEvent event) {
		String idBotonPulsado = ((Button) event.getSource()).getId();
		System.out.println("Botón pulsado: " + idBotonPulsado);

		switch (idBotonPulsado) {
		case "boton1":
			System.out.println("¡Has pulsado el botón 1!");
			break;
		case "boton2":
			System.out.println("¡Has pulsado el botón 2!");
			break;
		case "boton3":
			System.out.println("¡Has pulsado el botón 3!");
			break;
		case "boton4":
			System.out.println("¡Has pulsado el botón 4!");
			break;
		default:
			System.out.println("Botón no reconocido");
			break;
		}

	}
}