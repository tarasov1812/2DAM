package com.enero.calculadorabasica

import android.content.Intent
import android.os.Bundle
import android.view.View
import android.widget.Button
import android.widget.EditText
import android.widget.RadioButton
import android.widget.RadioGroup
import androidx.appcompat.app.AppCompatActivity


class MainActivity : AppCompatActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_main)
        val editTextNumber1 = findViewById<EditText>(R.id.editTextNumber1)
        val editTextNumber2 = findViewById<EditText>(R.id.editTextNumber2)
        val radioGroup = findViewById<RadioGroup>(R.id.radioGroup)
        val buttonCalculate = findViewById<Button>(R.id.buttonCalculate)
        buttonCalculate.setOnClickListener(View.OnClickListener {
            val number1 = editTextNumber1.text.toString().toDouble()
            val number2 = editTextNumber2.text.toString().toDouble()
            val selectedRadioButtonId = radioGroup.checkedRadioButtonId
            if (selectedRadioButtonId == -1) {
                // No radio button is selected
                return@OnClickListener
            }
            val selectedRadioButton = findViewById<RadioButton>(selectedRadioButtonId)
            val operation = selectedRadioButton.text.toString()

            // Perform the calculation based on the selected operation
            val result = performOperation(number1, number2, operation)

            // Start the ResultActivity and pass the result as an extra
            val intent = Intent(
                this@MainActivity,
                ResultActivity::class.java
            )
            intent.putExtra("RESULT", result)
            startActivity(intent)
        })
    }

    private fun performOperation(number1: Double, number2: Double, operation: String): Double {
        return when (operation) {
            "Suma" -> number1 + number2
            "Resta" -> number1 - number2
            "Multiplicación" -> number1 * number2
            "División" -> if (number2 != 0.0) {
                number1 / number2
            } else {
                // Handle division by zero
                Double.NaN
            }

            else -> 0.0
        }
    }
}