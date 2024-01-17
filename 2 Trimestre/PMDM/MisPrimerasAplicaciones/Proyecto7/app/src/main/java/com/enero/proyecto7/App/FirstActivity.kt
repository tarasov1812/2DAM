package com.enero.proyecto7.App

import android.content.Intent
import android.os.Bundle
import androidx.appcompat.app.AppCompatActivity
import androidx.appcompat.widget.AppCompatButton
import androidx.appcompat.widget.AppCompatEditText
import com.enero.proyecto7.R

class FirstActivity : AppCompatActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_first)
        val btnStart = findViewById<AppCompatButton>(R.id.btnStart)
        val etName = findViewById<AppCompatEditText>(R.id.etName)
        val etApellidos = findViewById<AppCompatEditText>(R.id.etApellidos)
        val etCurso = findViewById<AppCompatEditText>(R.id.etCurso)
        val etAsignatura = findViewById<AppCompatEditText>(R.id.etAsignatura)
        val etNota = findViewById<AppCompatEditText>(R.id.etNota)

        btnStart.setOnClickListener {
            val name = etName.text.toString()
            val intent = Intent(this, ResultActivity::class.java)
            if (name.isNotEmpty()) {
                intent.putExtra("EXTRA_NAME", name)
                startActivity(intent)
            }

            val apellido = etApellidos.text.toString()

            if (apellido.isNotEmpty()) {
                intent.putExtra("EXTRA_APELLIDO", apellido)
                startActivity(intent)
            }

            val curso = etCurso.text.toString()
            if (curso.isNotEmpty()) {
                intent.putExtra("EXTRA_CURSO", curso)
                startActivity(intent)
            }
            val asignatura = etAsignatura.text.toString()
            if (curso.isNotEmpty()) {
                intent.putExtra("EXTRA_ASIGNATURA", asignatura)
                startActivity(intent)
            }
            val nota = etNota.text.toString()
            if (curso.isNotEmpty()) {
                intent.putExtra("EXTRA_NOTA", nota)
                startActivity(intent)
            }
        }

    }
}
