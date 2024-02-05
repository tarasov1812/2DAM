package ejercicio3;

import javafx.event.ActionEvent;
import javafx.fxml.FXML;

public class SimpleController {
    @FXML
    private void handleButtonClick(ActionEvent event) {
        System.out.println("¡Ha pulsado el botón!");
    }
    
    @FXML
    private void handleOk(ActionEvent event) {
        System.out.println("¡Ha pulsado OK!");
    }
    
    @FXML
    private void handleCancel(ActionEvent event) {
        System.out.println("¡Ha pulsado Cancel!");
    }
}
