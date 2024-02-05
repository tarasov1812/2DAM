package Ejercicio9;

import javafx.application.Application;
import javafx.fxml.FXMLLoader;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.stage.Stage;

public class Ejercicio9 extends Application {
	@Override
	public void start(Stage primaryStage) throws Exception {
		FXMLLoader loader = new FXMLLoader(getClass().getResource("Ejercicio9.fxml"));
		Parent root = loader.load();

		primaryStage.setTitle("Ejercicio9");
		primaryStage.setScene(new Scene(root, 600, 400));
		primaryStage.show();
	}

	public static void main(String[] args) {
		launch(args);
	}
}