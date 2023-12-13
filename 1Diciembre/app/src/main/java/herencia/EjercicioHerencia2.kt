package herencia

open class Vehiculo(val modelo: String, val typo: String, val fabricante: String) {
    fun correr() {
        println("Estoy corriendo")
    }
}

class Coche(modelo: String, typo: String, fabricante: String, val color: String) : Vehiculo(modelo, typo, fabricante) {
    fun parar() {
        println("Me pare")
    }
}

fun main() {
    val miChoche = Coche("5", "cupe", "BMW", "rojo")

    println("modelo: ${miChoche.modelo}")
    println("typo: ${miChoche.typo}")
    println("fabricante: ${miChoche.fabricante}")
    println("color: ${miChoche.color}")

    miChoche.correr()

    miChoche.parar()
}