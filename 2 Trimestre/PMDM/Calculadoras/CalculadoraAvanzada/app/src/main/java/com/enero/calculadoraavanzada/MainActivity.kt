package com.enero.calculadoraavanzada

import android.os.Bundle
import android.view.View
import android.widget.Button
import android.widget.EditText
import androidx.appcompat.app.AppCompatActivity


class MainActivity : AppCompatActivity() {
    private var editTextDisplay: EditText? = null
    private val inputStr = StringBuilder()
    private var num1 = 0.0
    private var num2 = 0.0
    private var operator: String? = null
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_main)
        editTextDisplay = findViewById(R.id.editTextDisplay)

        // Set click listeners for number buttons
        setNumberButtonClickListeners()

        // Set click listeners for operator buttons
        setOperatorButtonClickListeners()

        // Set click listener for "=" button
        findViewById<View>(R.id.buttonEquals).setOnClickListener { calculateResult() }

        // Set click listener for "C" (clear) button
        findViewById<View>(R.id.buttonClear).setOnClickListener { clearInput() }
    }

    private fun setNumberButtonClickListeners() {
        val numberButtonIds = intArrayOf(
            R.id.button0, R.id.button1, R.id.button2, R.id.button3,
            R.id.button4, R.id.button5, R.id.button6, R.id.button7, R.id.button8, R.id.button9
        )
        for (buttonId in numberButtonIds) {
            val button = findViewById<Button>(buttonId)
            button.setOnClickListener { v -> onNumberButtonClick((v as Button).text.toString()) }
        }
    }

    private fun setOperatorButtonClickListeners() {
        val operatorButtonIds =
            intArrayOf(R.id.buttonAdd, R.id.buttonSubtract, R.id.buttonMultiply, R.id.buttonDivide)
        for (buttonId in operatorButtonIds) {
            val button = findViewById<Button>(buttonId)
            button.setOnClickListener { v -> onOperatorButtonClick((v as Button).text.toString()) }
        }
    }

    private fun onNumberButtonClick(buttonText: String) {
        inputStr.append(buttonText)
        updateDisplay()
    }

    private fun onOperatorButtonClick(op: String) {
        if (inputStr.length > 0) {
            num1 = inputStr.toString().toDouble()
            operator = op
            inputStr.setLength(0) // Clear the input for the next number
            updateDisplay()
        }
    }

    private fun calculateResult() {
        if (inputStr.length > 0) {
            num2 = inputStr.toString().toDouble()
            when (operator) {
                "+" -> num1 += num2
                "-" -> num1 -= num2
                "*" -> num1 *= num2
                "/" -> num1 /= if (num2 != 0.0) {
                    num2
                } else {
                    // Handle division by zero
                    clearInput()
                    editTextDisplay!!.setText("Error")
                    return
                }
            }
            inputStr.setLength(0)
            inputStr.append(num1)
            updateDisplay()
        }
    }

    private fun updateDisplay() {
        editTextDisplay!!.setText(inputStr.toString())
    }

    private fun clearInput() {
        inputStr.setLength(0)
        num1 = 0.0
        num2 = 0.0
        operator = null
        updateDisplay()
    }
}