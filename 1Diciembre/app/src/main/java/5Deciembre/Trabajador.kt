package `5Deciembre`

interface Trabajador {
    val nombre: String
    val edad: Int

    fun trabajar() {
        println("$nombre está trabajando.")
    }

    fun presentarse() {
        println("Hola, mi nombre es $nombre y tengo $edad años.")
    }
}

class Empleado(
    override val nombre: String,
    override val edad: Int,
    val cargo: String
) : Trabajador {
    override fun trabajar() {
        println("$nombre está realizando tareas como $cargo.")
    }

    fun tomarDescanso() {
        println("$nombre está tomando un descanso.")
    }
}

class Jefe(
    override val nombre: String,
    override val edad: Int,
    val departamento: String
) : Trabajador {
override fun trabajar() {
    println("$nombre está supervisando el departamento $departamento.")
}
    fun realizarReuniones() {
        println("$nombre está llevando a cabo reuniones con el equipo.")
    }
}

fun main() {
    val empleado1 = Empleado("Ana", 25, "Desarrollador")
    val jefe1 = Jefe("Sr. Rodríguez", 40, "Ventas")

    empleado1.presentarse()
    empleado1.trabajar()
    jefe1.presentarse()
    jefe1.trabajar()

    empleado1.tomarDescanso()
    jefe1.realizarReuniones()
}
