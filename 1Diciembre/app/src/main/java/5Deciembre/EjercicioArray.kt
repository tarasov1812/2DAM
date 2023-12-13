package `5Deciembre`

fun main() {
    var col : List<Any>
    col = mutableListOf(1, "Alberto", 2, "Laura", 3, "Cristina")

    col.add(4)
    for(element in col) {
        println(element)
    }

    col[4] = "Pedro"
    for(element in col) {
        println(element)
    }
}

