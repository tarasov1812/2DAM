package com.enero.retotrabajos

import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import androidx.recyclerview.widget.LinearLayoutManager
import androidx.recyclerview.widget.RecyclerView
import android.widget.TextView
import androidx.appcompat.app.AlertDialog

val courses = listOf(
    Trabajo("Programacion", listOf(Subject("Programador en Android"), Subject("Gestor de BDD"), Subject("Programador en Java"))),
    Trabajo("Deseño WEB", listOf(Subject("Especialista en Wordpress"), Subject("Tecinoco en JavaScript"), Subject("Especialista en PHP"))),
    Trabajo("Marketing Digital", listOf(Subject("Especialista en CEO"), Subject("Tecnico en SEM"), Subject("Especialista en redes sociales")))
)

class MainActivity : AppCompatActivity() {

    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_main)

        val recyclerViewCourses: RecyclerView =
            findViewById(R.id.recyclerView)
        recyclerViewCourses.layoutManager = LinearLayoutManager(this)
        recyclerViewCourses.adapter = TrabajoAdapter(courses) { course ->
            showSubjectsDialog(course)
        }
    }

    private fun showSubjectsDialog(course: Trabajo) {
        val subjects = course.subjects.map { it.name }.toTypedArray()

        AlertDialog.Builder(this)
            .setTitle("Asignaturas de ${course.name}")
            .setItems(subjects) { _, _ ->
            }
            .setPositiveButton("Aceptar") { dialog, _ ->
                dialog.dismiss()
            }
            .create()
            .show()
    }
}