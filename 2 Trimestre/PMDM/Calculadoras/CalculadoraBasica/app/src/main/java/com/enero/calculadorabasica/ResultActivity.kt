package com.enero.calculadorabasica

import android.os.Bundle
import android.widget.TextView
import androidx.appcompat.app.AppCompatActivity


class ResultActivity : AppCompatActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_result)
        val textViewResult = findViewById<TextView>(R.id.textViewResult)

        // Retrieve the result from the intent
        val result = intent.getDoubleExtra("RESULT", 0.0)

        // Display the result in the TextView
        textViewResult.text = "Resultado: $result"
    }
}