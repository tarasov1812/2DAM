package com.example.a1diciembre

class PersonaDeMundo(val nombre: String, val apellidos: String, val edad: Int) {
    // Constructor secundario
    constructor(nombre: String, apellidos: String) : this(nombre, apellidos, 0)

    fun mostrarInformacion() {
        println("Nombre: $nombre")
        println("Apellidos: $apellidos")
        println("Edad: $edad")
    }
}

fun main() {
// Uso del constructor principal
    val persona1 = PersonaDeMundo("Juan", "Pérez", 30)
    persona1.mostrarInformacion()

// Uso del constructor secundario
    val persona2 = PersonaDeMundo("María", "Gómez")
    persona2.mostrarInformacion()
}