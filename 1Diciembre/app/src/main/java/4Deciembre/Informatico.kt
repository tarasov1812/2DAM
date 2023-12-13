package `4Deciembre`

open class ProductoInformatico(val nombre: String, val precio: Double) {
    open fun encender() {
        println("$nombre encendido.")
    }

    open fun apagar() {
        println("$nombre apagado.")
    }

    open fun ejecutar() {
        println("$nombre ejecutando acciones generales.")
    }
}

class Laptop(nombre: String, precio: Double, val marca: String) : ProductoInformatico(nombre, precio) {
    override fun ejecutar() {
        println("$nombre ejecutando tareas específicas de una laptop de la marca $marca.")
    }
}

class Impresora(nombre: String, precio: Double, val tipo: String) : ProductoInformatico(nombre, precio) {
    fun imprimir(documento: String) {
        println("$nombre imprimiendo documento: $documento")
    }
}

fun main() {
    val laptop = Laptop("HP envi", 1200.0, "MarcaY")
    val impresora = Impresora("Epson Ecotank", 300.0, "Inyección de Tinta")

    laptop.encender()
    laptop.ejecutar()
    laptop.apagar()

    impresora.encender()
    impresora.imprimir("Documento de prueba")
    impresora.apagar()
}

