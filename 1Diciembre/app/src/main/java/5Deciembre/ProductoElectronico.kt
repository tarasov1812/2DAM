package `5Deciembre`


interface ProductoElectronico {
    val nombre: String
    val fabricante: String
    val precio: Double

    fun encender()
    fun apagar()
}

class Televisor(
    override val nombre: String,
    override val fabricante: String,
    override val precio: Double
) : ProductoElectronico {
    override fun encender() {
        println("Encendiendo el televisor $nombre fabricado por $fabricante.")
    }

    override fun apagar() {
        println("Apagando el televisor $nombre.")
    }
}

class TelevisorBarato(
    override val nombre: String,
    override val fabricante: String,
    override val precio: Double
) : ProductoElectronico {
    override fun encender() {
        println("Encendiendo el televisor $nombre fabricado por $fabricante. No se prende...")
    }

    override fun apagar() {
        println("Esta roto el televisor $nombre.")
    }
}

class Portatil(
    override val nombre: String,
    override val fabricante: String,
    override val precio: Double
) : ProductoElectronico {
    override fun encender() {
        println("Encendiendo el portatil $nombre fabricado por $fabricante.")
    }

    override fun apagar() {
        println("Apago el portatil $nombre.")
    }
}

fun main() {
    val miTelevisor = Televisor("Smart TV", "Samsung", 799.99)
    val miTelevisorBarato = TelevisorBarato("Cheap TV", "Xiomi", 79.99)
    val miPortatil = Portatil("MacBook", "Apple", 3279.99)

    println("Nombre: ${miTelevisor.nombre}")
    println("Fabricante: ${miTelevisor.fabricante}")
    println("Precio: ${miTelevisor.precio} €")

    miTelevisor.encender()
    miTelevisor.apagar()

    println("Nombre: ${miTelevisorBarato.nombre}")
    println("Fabricante: ${miTelevisorBarato.fabricante}")
    println("Precio: ${miTelevisorBarato.precio} €")

    miTelevisorBarato.encender()
    miTelevisorBarato.apagar()

    println("Nombre: ${miPortatil.nombre}")
    println("Fabricante: ${miPortatil.fabricante}")
    println("Precio: ${miPortatil.precio} €")

    miPortatil.encender()
    miPortatil.apagar()
}