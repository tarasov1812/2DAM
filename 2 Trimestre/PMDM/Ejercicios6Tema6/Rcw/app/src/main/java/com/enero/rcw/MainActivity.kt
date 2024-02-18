package com.enero.rcw

import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import androidx.recyclerview.widget.LinearLayoutManager
import androidx.recyclerview.widget.RecyclerView

class MainActivity : AppCompatActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_main)

        val personList = generatePersonList()

        val recyclerView: RecyclerView = findViewById(R.id.recyclerView)
        recyclerView.layoutManager = LinearLayoutManager(this)

        val personAdapter = PersonAdapter(personList)
        recyclerView.adapter = personAdapter
    }

    private fun generatePersonList(): List<Person> {
        return listOf(
            Person("Alberto ", "Perez ", "- Malaga"),
            Person("Juan ", "Carlos ", "- Sevilla"),
            Person("Eva ", "Gomez ", "- Granada"),
            Person("Alberto ", "Gonzales ", "- Ronda"),
            Person("Laura ", "Morena ", "- Nerja"),
            Person("Cristina ", "Lopez ", "- Marbella"),
            Person("Isabel ", "Casto ", "- Cordoba"),
            Person("Pedro ", "Segundo ", "- Madrid"),
            Person("Jose ", "Gomez ", "- Nerja"),
            Person("Manuel ", "Bravo ", "- Almachar"),
            Person("Diana ", "Bautista ", "- Bilbao"),
        )
    }
}