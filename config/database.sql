CREATE TABLE Users (
	userId varchar(200) PRIMARY KEY,
	email varchar(30)
);

CREATE TABLE Carreras (
	IdCarrera varchar(200) PRIMARY KEY,
	Nombre varchar(30)
);

CREATE TABLE Departamentos (
	IdDepa varchar(200) PRIMARY KEY,
	Nombre varchar(30)
);

CREATE TABLE Cargos (
	IdCargo varchar(200) PRIMARY KEY,
	Nombre varchar(30),
    Tipo varchar(30)
);

CREATE TABLE Medicamentos (
	Codigo varchar(20) PRIMARY KEY,
	Nombre varchar(30),
    Tipo varchar(30),
    Presentancion varchar(30),
    Unidad Varchar(20),
    Cantidad Varchar(20)
);

CREATE TABLE Almacenes (
	IdAlmacen varchar(20) PRIMARY KEY,
	Cantidad varchar(30),
    Nombre varchar(30),
    Peldaños varchar(30)
);

CREATE TABLE Sedes (
	IdSede varchar(20) PRIMARY KEY,
    Nombre varchar(30)
);

CREATE TABLE Personas (
	IdPersona varchar(20) PRIMARY KEY,
	Cedula varchar(30),
    Nombre varchar(30),
    Apellido varchar(30),
    Direccion varchar(30),
    NumeroTelefono varchar(30),
    Sexo varchar(30)
);

CREATE TABLE Empleados (
	IdEmpleados varchar(20) PRIMARY KEY,
    IdCargo varchar(30),
    IdDepa varchar(30),
    IdSede varchar(30),
    FOREIGN KEY (IdCargo) REFERENCES Cargos (IdCargo) ON DELETE CASCADE,
    FOREIGN KEY (IdDepa) REFERENCES Departamentos (IdDepa) ON DELETE CASCADE,
    FOREIGN KEY (IdSede) REFERENCES Sedes (IdSede) ON DELETE CASCADE
);

CREATE TABLE Estudiantes (
	IdEstudiantes varchar(20) PRIMARY KEY,
    IdCarrera varchar(30),
    IdSede varchar(30),
    FOREIGN KEY (IdCarrera) REFERENCES Carreras (IdCarrera) ON DELETE CASCADE,
    FOREIGN KEY (IdSede) REFERENCES Sedes (IdSede) ON DELETE CASCADE
);

CREATE TABLE Medicos (
	IdMedico varchar(20) PRIMARY KEY,
    IdPersona varchar(30),
    NumeroDeColegio varchar(30),
    FOREIGN KEY (IdPersona) REFERENCES Personas (IdPersona) ON DELETE CASCADE
);
CREATE TABLE PersonalDeApoyo (
	IdPersonalDeApoyo varchar(20) PRIMARY KEY,
    IdPersona varchar(30),
    FOREIGN KEY (IdPersona) REFERENCES Personas (IdPersona) ON DELETE CASCADE
);

CREATE TABLE AtencionesPrimarias (
	IdAtencionP varchar(20) PRIMARY KEY,
    IdPersona varchar(30),
    IdPersonalDeApoyo varchar(30),
    Fecha varchar(20),
    Hora varchar(20),
    MotivoDeconsulta varchar(60),
    FOREIGN KEY (IdPersonalDeApoyo) REFERENCES PersonalDeApoyo (IdPersona) ON DELETE CASCADE,
    FOREIGN KEY (IdPersona) REFERENCES Personas (IdPersona) ON DELETE CASCADE
);

CREATE TABLE AtencionesMedicas (
	IdAtencionMedica varchar(20) PRIMARY KEY,
    IdAtencionP varchar(30),
    IdMedico varchar(30),
    Diagnostico varchar(20),
    Recipe varchar(20),
    Indicacciones varchar(60),
    IdPersona varchar(100),
    FOREIGN KEY (IdAtencionP) REFERENCES AtencionesPrimarias (IdAtencionP) ON DELETE CASCADE,
    FOREIGN KEY (IdPersona) REFERENCES Medicos (IdMedico) ON DELETE CASCADE
);

CREATE TABLE EntregaDeMedicamentos (
	IdEntregaM varchar(20) PRIMARY KEY,
    AtencionMedica varchar(30),
    IdLote varchar(30),
    Cantidad varchar(20),
    Fecha varchar(20),
    IdPersonalDeApoyo varchar(60),
    IdMedico varchar(100),
    IdAtencionP varchar(100),
    FOREIGN KEY (IdAtencionP) REFERENCES AtencionesPrimarias (IdAtencionP) ON DELETE CASCADE,
    FOREIGN KEY (IdMedico) REFERENCES Medicos (IdMedico) ON DELETE CASCADE
);

CREATE TABLE Lotes (
	IdLote varchar(20) PRIMARY KEY,
    AtencionMedica varchar(30),
    FechaIngreso varchar(30),
    FechaVencimiento varchar(20),
    FechaExpedicion varchar(20),
    Total varchar(60),
    Codigo varchar(30),
    IdAlmacen varchar(20),
    FOREIGN KEY (Codigo) REFERENCES Medicamentos (Codigo) ON DELETE CASCADE,
    FOREIGN KEY (IdAlmacen) REFERENCES Almacenes (IdAlmacen) ON DELETE CASCADE
);