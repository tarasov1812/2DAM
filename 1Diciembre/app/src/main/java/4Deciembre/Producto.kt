package `4Deciembre`

open class Producto(val nombre: String, val precio: Double) {
    open fun mostrarDetalle() {
        println("Producto: $nombre, Precio: $precio")
    }
}

open class Envio(nombre: String, precio: Double, val destino: String) : Producto(nombre, precio) {
    fun calcularCostoEnvio(): String {
        return " Coste de envio " + precio * 0.1 // 10% del precio del producto como costo de envío
    }

    fun mostrarDetalleEnvio() {
        mostrarDetalle()
        println("Destino: $destino" + calcularCostoEnvio());
    }
}

class Factura(nombre: String, precio: Double, destino: String, val numeroFactura: String) : Envio(nombre, precio, destino) {
    fun imprimirFactura() {
        mostrarDetalleEnvio()
        println("Número de factura: $numeroFactura")
    }
}

fun main() {
    val factura = Factura("Laptop", 1200.0, "CiudadA", "FAC-001")
    factura.imprimirFactura()
}
