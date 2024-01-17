package com.enero.proyecto7.App

import android.os.Bundle
import android.widget.TextView
import androidx.appcompat.app.AppCompatActivity
import com.enero.proyecto7.R

class ResultActivity : AppCompatActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_result)
        //  val tvResult = findViewById<TextView>(R.id.tvResult)
        val tvResult=findViewById<TextView>(R.id.tvResult)
        val name: String = intent.extras?.getString("EXTRA_NAME").orEmpty()
        tvResult.text = "Nombre: $name"

        val tvResult2=findViewById<TextView>(R.id.tvResult2)
        val apellido: String = intent.extras?.getString("EXTRA_APELLIDO").orEmpty()
        tvResult2.text = "Apellidos: $apellido"

        val tvResult3=findViewById<TextView>(R.id.tvResult3)
        val curso: String = intent.extras?.getString("EXTRA_CURSO").orEmpty()
        tvResult3.text = "Curso: $curso"

        val tvResult4=findViewById<TextView>(R.id.tvResult4)
        val asignatura: String = intent.extras?.getString("EXTRA_ASIGNATURA").orEmpty()
        tvResult4.text = "Asignatura: $asignatura"

        val tvResult5=findViewById<TextView>(R.id.tvResult5)
        val nota: String = intent.extras?.getString("EXTRA_NOTA").orEmpty()
        tvResult5.text = "Nota: $nota"
    }
}