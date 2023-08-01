DROP DATABASE IF EXISTS UNGE;
CREATE DATABASE UNGE;
USE UNGE;

CREATE TABLE Campus(
    Id int(3) not null auto_increment,
    Nombre varchar(50) not null,
    Ubicacion varchar(30) not null,
    PRIMARY KEY (Id)
);
CREATE TABLE Sede(
    Id int(3) not null auto_increment,
    Nombre varchar(50) not null,
    Direccion varchar(50) not null,
     PRIMARY KEY (Id)
);
CREATE TABLE Facultad(
    Id int(3) not null auto_increment,
    Nombre varchar(50) not null,
    Sede int(3) not null,
    Campus int(3) not null,
    PRIMARY KEY (Id),
    FOREIGN KEY (Sede) REFERENCES Sede (Id),
    FOREIGN KEY (Campus) REFERENCES Campus (Id)
);

CREATE TABLE Carreras(
    Id int(3) not null auto_increment,
    Nombre varchar(50) not null,
    Facultad int(3) not null,
   PRIMARY KEY (Id),
   FOREIGN KEY (Facultad) REFERENCES Facultad (Id)
);

CREATE TABLE Evento(
    Id int(3) not null auto_increment,
    titulo varchar(20) not null,
    descripcion text not null,
   PRIMARY KEY (Id)
);

CREATE TABLE Lugar(
    Id int(3) not null auto_increment,
    Dia int(3) not null,
    Mes varchar(20) not null,
    Agno int(5) not null,
    Hora_inicio time not null,
    Hora_final time not null,
    Facultad int(3) not null,
    Evento int(3) not null,
    PRIMARY KEY (Id),
    FOREIGN KEY (Facultad) REFERENCES Facultad (Id),
    FOREIGN KEY (Evento) REFERENCES Evento (Id)
);

CREATE TABLE Categoria(
    Id int(3) not null auto_increment,
    Nombre varchar(50) not null,
   PRIMARY KEY (Id)
);

CREATE TABLE Noticias(
    Id int(3) not null auto_increment,
    Titulo varchar(50) not null,
    Descripcion text not null,
    Img varchar(20) not null,
    Dia int(3) not null,
    Mes varchar(10) not null,
    Agno int(5) not null,
    Categoria int(3) not null,
    Facultad int(3) not null,
    PRIMARY KEY (Id),
    FOREIGN KEY (Categoria) REFERENCES Categoria (Id),
    FOREIGN KEY (Facultad) REFERENCES Facultad (Id)
);


CREATE TABLE Usuario(
    Id int(3) not null auto_increment,
    Nombre varchar(50) not null,
    Email varchar(100) not null,
    password varchar(30) not null,
   PRIMARY KEY (Id)
);


