CREATE DATABASE 100games;
	use 100games;

CREATE TABLE Equipo(
	Id_Equipo int AUTO_INCREMENT PRIMARY KEY,
	Nombre varchar(20) NOT NULL,
	Puntos int DEFAULT 0,
	Strike int DEFAULT 0 
);

CREATE TABLE Participantes(
	Id_Participante int AUTO_INCREMENT PRIMARY KEY,
	Id_Equipo int  NOT NULL,
	Nombre varchar(50)  NOT NULL,
	NC int DEFAULT 00000000,
	FOREIGN KEY(Id_Equipo) references Equipo(Id_Equipo)
);

CREATE TABLE Preguntas(
	Id_Pregunta int AUTO_INCREMENT PRIMARY KEY,
	Pregunta varchar(100) NOT NULL
);

CREATE TABLE Respuestas(
	Id_Respuesta int AUTO_INCREMENT PRIMARY KEY,
	Id_Pregunta int NOT NULL,
	Respuesta varchar(50) NOT NULL,
	Puntos int NOT NULL,
	Oculto int DEFAULT 0,
	Sonido int DEFAULT 0,
	FOREIGN KEY(Id_Pregunta) references Preguntas(Id_Pregunta)
);

