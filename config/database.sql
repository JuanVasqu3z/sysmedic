CREATE TABLE Users (
	userId varchar(200) PRIMARY KEY,
	email varchar(30),
    password LONGTEXT
);

CREATE TABLE Medicamentos (
	Codigo int NOT NULL AUTO_INCREMENT PRIMARY KEY,
	Nombre varchar(255),
    Tipo varchar(255),
    Presentancion varchar(255),
    Unidad Varchar(255),
    Cantidad Varchar(255)
);

CREATE TABLE Almacenes (
    IdAlmacen int NOT NULL AUTO_INCREMENT PRIMARY KEY,
	Cantidad varchar(255),
    Nombre varchar(255),
    Peldanos varchar(255)
);


CREATE TABLE Personas (
	IdPersona varchar(255) PRIMARY KEY,
	Cedula varchar(255),
    Nombre varchar(255),
    Apellido varchar(255),
    Direccion TEXT,
    NumeroTelefono varchar(255),
    Sexo varchar(50)
);

CREATE TABLE Medicos (
	IdMedico varchar(255) PRIMARY KEY,
    IdPersona varchar(255),
    NumeroDeColegio varchar(255),
    FOREIGN KEY (IdPersona) REFERENCES Personas (IdPersona) ON DELETE CASCADE
);
CREATE TABLE PersonalDeApoyo (
	IdPersonalDeApoyo varchar(255) PRIMARY KEY,
    IdPersona varchar(255),
    FOREIGN KEY (IdPersona) REFERENCES Personas (IdPersona) ON DELETE CASCADE
);

CREATE TABLE AtencionesPrimarias (
	IdAtencionP varchar(255) PRIMARY KEY,
    IdPersona varchar(255),
    IdPersonalDeApoyo varchar(255),
    Fecha Date,
    Hora Time ,
    MotivoDeconsulta TEXT,
    FOREIGN KEY (IdPersonalDeApoyo) REFERENCES PersonalDeApoyo (IdPersonalDeApoyo) ON DELETE CASCADE,
    FOREIGN KEY (IdPersona) REFERENCES Personas (IdPersona) ON DELETE CASCADE
);

CREATE TABLE AtencionesMedicas (
	IdAtencionMedica varchar(255) PRIMARY KEY,
    Diagnostico varchar(255),
    Recipe varchar(255),
    Indicacciones TEXT,
    IdAtencionP varchar(255),
    IdMedico varchar(255),
    FOREIGN KEY (IdAtencionP) REFERENCES AtencionesPrimarias (IdAtencionP) ON DELETE CASCADE,
    FOREIGN KEY (IdMedico) REFERENCES Medicos (IdMedico) ON DELETE CASCADE
);

CREATE TABLE EntregaDeMedicamentos (
	IdEntrega int AUTO_INCREMENT PRIMARY KEY,
    IdAtencionMedica varchar(255),
    IdLote INT,
    Cantidad varchar(255),
    Fecha varchar(255),
    IdPersonalDeApoyo varchar(255),
    IdMedico varchar(255),
    IdAtencionP INT,
    FOREIGN KEY (IdAtencionMedica) REFERENCES AtencionesMedicas (IdAtencionMedica) ON DELETE CASCADE,
    FOREIGN KEY (IdMedico) REFERENCES Medicos (IdMedico) ON DELETE CASCADE
);

CREATE TABLE Lotes (
	IdLote int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Cantidad varchar(255),
    FechaIngreso Date,
    FechaVencimiento Date,
    FechaExpedicion Date,
    Total varchar(255),
    Codigo INT,
    IdAlmacen INT,
    FOREIGN KEY (Codigo) REFERENCES Medicamentos (Codigo) ON DELETE CASCADE,
    FOREIGN KEY (IdAlmacen) REFERENCES Almacenes (IdAlmacen) ON DELETE CASCADE
);