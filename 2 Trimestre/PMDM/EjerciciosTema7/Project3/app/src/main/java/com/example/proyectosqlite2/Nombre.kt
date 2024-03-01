package com.example.proyectosqlite2

class Nombre {
    var id: Int = 0
    var NombreUsuario: String? = null
    constructor(id: Int, nombre: String) {
        this.id = id
        this.NombreUsuario = nombre
    }
    constructor(nombre: String) {
        this.NombreUsuario = nombre
    }
}

