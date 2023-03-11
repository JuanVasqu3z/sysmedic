CREATE TABLE Roles (
	rolId varchar(200) PRIMARY KEY,
	name varchar(30)
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

CREATE TABLE Users (
	userId varchar(200) PRIMARY KEY,
	email varchar(30),
    password LONGTEXT,
    rolId varchar(200),
    personId varchar(255),
    FOREIGN KEY (personId) REFERENCES Personas (IdPersona) ON DELETE CASCADE,
    FOREIGN KEY (rolId) REFERENCES Roles (rolId) ON DELETE CASCADE
);

CREATE TABLE Medicamentos (
    IdMedicamento varchar(255) PRIMARY KEY,
	Codigo varchar(255),
	Nombre varchar(255),
    Tipo varchar(255),
    Presentancion varchar(255),
    Cantidad varchar(255),
    Unidad int
);

CREATE TABLE Almacenes (
    IdAlmacen int NOT NULL AUTO_INCREMENT PRIMARY KEY,
	Cantidad int,
    Nombre varchar(255),
    Peldanos varchar(255)
);

CREATE TABLE Medicos (
	IdMedico varchar(255) PRIMARY KEY,
    IdPersona varchar(255),
    NumeroDeColegio varchar(255),
    FOREIGN KEY (IdPersona) REFERENCES Personas (IdPersona) ON DELETE CASCADE
);

CREATE TABLE AtencionesPrimarias (
	IdAtencionP varchar(255) PRIMARY KEY,
    IdPersona varchar(255),
    medicoId varchar(255),
    atendido boolean default 0,
    enEspera boolean default 1,
    Fecha Date,
    Hora Time ,
    MotivoDeconsulta TEXT,
    FOREIGN KEY (IdPersona) REFERENCES Personas (IdPersona) ON DELETE CASCADE,
    FOREIGN KEY (medicoId) REFERENCES Personas (IdPersona) ON DELETE CASCADE
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
    Cantidad int,
    Fecha varchar(255),
    IdPersona varchar(255),
    IdMedico varchar(255),
    IdAtencionP INT,
    FOREIGN KEY (IdPersona) REFERENCES Personas (IdPersona) ON DELETE CASCADE,
    FOREIGN KEY (IdMedico) REFERENCES Medicos (IdMedico) ON DELETE CASCADE
);

CREATE TABLE Lotes (
	IdLote int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Cantidad int,
    FechaIngreso Date,
    FechaVencimiento Date,
    FechaExpedicion Date,
    Total INT,
    IdMedicamento varchar(255),
    IdAlmacen INT,
    FOREIGN KEY (IdMedicamento) REFERENCES Medicamentos (IdMedicamento) ON DELETE CASCADE,
    FOREIGN KEY (IdAlmacen) REFERENCES Almacenes (IdAlmacen) ON DELETE CASCADE
);

CREATE TABLE Permisos(
    IdPermiso int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Nombre varchar(200)
);

CREATE TABLE PermisosRoles (
    IdPermisosRoles int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    IdPermiso int,
    rolId varchar(200),
    FOREIGN KEY (rolId) REFERENCES Roles (rolId) ON DELETE CASCADE,
    FOREIGN KEY (IdPermiso) REFERENCES Permisos (IdPermiso) ON DELETE CASCADE
);

INSERT INTO Roles (rolId, name) VALUES ('123-admin', 'Admin');
INSERT INTO Roles (rolId, name) VALUES ('123-medico', 'Medico');
INSERT INTO Roles (rolId, name) VALUES ('123-personal-apoyo', 'Personal de apoyo');

-- insertando permisos
INSERT INTO Permisos (Nombre) VALUES ('crear_persona');
INSERT INTO Permisos (Nombre) VALUES ('ver_persoma');
INSERT INTO Permisos (Nombre) VALUES ('crear_medicamento');
INSERT INTO Permisos (Nombre) VALUES ('editar_medicamento');
INSERT INTO Permisos (Nombre) VALUES ('crear_lotes');
INSERT INTO Permisos (Nombre) VALUES ('ver_lotes');

-- emparejar
INSERT INTO PermisosRoles (IdPermiso, rolId) VALUES (1, '123-admin');
INSERT INTO PermisosRoles (IdPermiso, rolId) VALUES (2, '123-admin');
INSERT INTO PermisosRoles (IdPermiso, rolId) VALUES (3, '123-admin');
INSERT INTO PermisosRoles (IdPermiso, rolId) VALUES (4, '123-admin');
INSERT INTO PermisosRoles (IdPermiso, rolId) VALUES (5, '123-admin');
INSERT INTO PermisosRoles (IdPermiso, rolId) VALUES (6, '123-admin');


INSERT INTO PermisosRoles (IdPermiso, rolId) VALUES (1, '123-medico');
INSERT INTO PermisosRoles (IdPermiso, rolId) VALUES (2, '123-medico');

INSERT INTO PermisosRoles (IdPermiso, rolId) VALUES (5, '123-personal-apoyo');
INSERT INTO PermisosRoles (IdPermiso, rolId) VALUES (6, '123-personal-apoyo');

