package `5Deciembre`

interface Persona {
    val nombre: String
    val edad: Int

    fun presentarse() {
        println("Hola, mi nombre es $nombre y tengo $edad años.")
    }
}

class Alumno(
    override val nombre: String,
    override val edad: Int,
    val grado: String
) : Persona {
    override fun presentarse() {
        super.presentarse()
        println("Soy un alumno del grado $grado.")
    }

    fun estudiar() {
        println("Estudiando para el próximo examen.")
    }
}

class Profesor(
    override val nombre: String,
    override val edad: Int,
    val asignatura: String
) : Persona {
    override fun presentarse() {
        super.presentarse()
        println("Soy profesor de la asignatura $asignatura.")
    }

    fun darClase() {
        println("Impartiendo la lección del día.")
    }
}

fun main() {
    val alumno1 = Alumno("Juan", 15, "1º FP")
    val profesor1 = Profesor("Prof. Martínez", 25, "Entorno de desarrollo")

    alumno1.presentarse()
    profesor1.presentarse()

    alumno1.estudiar()
    profesor1.darClase()
}