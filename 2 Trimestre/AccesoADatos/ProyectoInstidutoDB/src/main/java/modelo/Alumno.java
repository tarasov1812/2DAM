package modelo;

import java.sql.Date;

import javax.persistence.*;

@Entity
@Table(name = "alumno")
public class Alumno {

    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    @Column(name = "id")
    private int id;

    @Column(name = "nombre")
    private String nombre;

    @Column(name = "apellido1")
    private String apellido1;
    
    @Column(name = "apellido2")
    private String apellido2;
    
    @Column(name = "fecha_nacimiento")
    private Date fecha_nacimiento;
    
    @Column(name = "es_repetidor")
    private String es_repetidor;
    
    @Column(name = "teléfono")
    private int teléfono;

    // Constructor por defecto requerido por Hibernate
    public Alumno() {
    }

    // Constructor para crear un objeto de tipo Clientes con un nombre y una ciudad espec�ficos
    public Alumno(String nombre, String apellido1, String apellido2, Date fecha_nacimiento, String es_repetidor,  int teléfono) {
        this.nombre = nombre;
        this.apellido1 = apellido1;
        this.apellido2 = apellido2;
        this.fecha_nacimiento = fecha_nacimiento;
        this.es_repetidor = es_repetidor;
        this.teléfono = teléfono;
    }

    // Getter y setter para el atributo id
    public int getId() {
        return id;
    }


    public void setId(int id) {
        this.id = id;
    }

    // Getter y setter para el atributo nombre
    public String getNombre() {
        return nombre;
    }


    public void setNombre(String nombre) {
        this.nombre = nombre;
    }

    // Getter y setter para el atributo ciudad
    public String getApellido1() {
        return apellido1;
    }

    public void setApellido1(String apellido1) {
        this.apellido1 = apellido1;
    }
    

    public String getApellido2() {
		return apellido2;
	}

	public void setApellido2(String apellido2) {
		this.apellido2 = apellido2;
	}

	public Date getFecha_nacimiento() {
		return fecha_nacimiento;
	}

	public void setFecha_nacimiento(Date fecha_nacimiento) {
		this.fecha_nacimiento = fecha_nacimiento;
	}

	public String getEs_repetidor() {
		return es_repetidor;
	}

	public void setEs_repetidor(String es_repetidor) {
		this.es_repetidor = es_repetidor;
	}

	public int getTeléfono() {
		return teléfono;
	}

	public void setTeléfono(int teléfono) {
		this.teléfono = teléfono;
	}

	// M�todo para imprimir informaci�n del objeto Clientes
    @Override
    public String toString() {
        return "Clientes{" +
                "id=" + id +
                ", nombre='" + nombre + '\'' +
                ", apellido1='" + apellido1 + '\'' +
                ", apellido2='" + apellido2 + '\'' +
                ", fecha_nacimiento='" + fecha_nacimiento + '\'' +
                ", es_repetidor='" + es_repetidor + '\'' +
                 ", teléfono='" + teléfono + '\'' +
                '}';
    }
}
