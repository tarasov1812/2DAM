module JavaFX {
	requires javafx.controls;
	requires javafx.fxml;
	
	opens Ejercicio6 to javafx.graphics, javafx.fxml;
	opens Ejercicio7 to javafx.graphics, javafx.fxml;
	opens Ejercicio9 to javafx.graphics, javafx.fxml;
	opens Ejercicio10 to javafx.graphics, javafx.fxml;
}
