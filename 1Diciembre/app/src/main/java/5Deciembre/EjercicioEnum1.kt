package `5Deciembre`

enum class DiadDeLaSemana {
    LUNES, MARTES, MIERCOLES
}
//enum class EjercicioEnumMeses {
//    ENERO, FEBRERO
fun main() {
    val diaActual = DiadDeLaSemana.MIERCOLES

    when(diaActual) {
        DiadDeLaSemana.LUNES -> println("Es lunes")
        DiadDeLaSemana.MARTES -> println("Es martes")
        DiadDeLaSemana.MIERCOLES -> println("Es miercoles")
//        EjercicioEnumMeses.ENERO -> println("Las rebajas")
//        EjercicioEnumMeses.FEBRERO -> println("Mi cumpleaños")
    }
}

