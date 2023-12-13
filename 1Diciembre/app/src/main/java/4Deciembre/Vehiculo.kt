package `4Deciembre`

open class Vehiculo (val marca: String, val modelo: String){
    fun acelerar(){
        println("Acelerado un vehiculo")
    }
    fun frenar() {
        println("Frenando un vehiculo")
    }
    open fun conducir() {
        println("Conduciendo un vehiculo")
    }
}

class Coche (marca: String, modelo: String, val numeroPuertas: Int) : Vehiculo (marca, modelo){
    override fun conducir(){
        println("Conduciendo un coche")
    }
}

class Motocicleta (marca: String, modelo: String, val tipo: String) : Vehiculo (marca, modelo){
    fun hacerCaballito(){
        println("Haciendo un caballito")
    }
}

fun main() {
    val bmw=Coche("bmw", "5", 4)
    bmw.acelerar()
    bmw.frenar()
    bmw.conducir()
    println("Numero de puertas: " + bmw.numeroPuertas)

    val ducati=Motocicleta("ducati","650","Depotiva")
    ducati.acelerar()
    ducati.frenar()
    ducati.conducir()
    println("Tipo de moto: " + ducati.tipo)
}