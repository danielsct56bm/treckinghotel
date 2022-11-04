create database crud1;
use crud1;
create table persona(
    id int auto_increment primary key,
    nombres varchar(100),
    apellido_paterno varchar(100),
    apellido_materno varchar(100),
    fecha_nacimiento date,
    celular varchar(12)
);

create table tipohabitacion(
	id int auto_increment primary key,
    tipo varchar(20),
    descripcion varchar(100)
);

create table habitacion(
    id int auto_increment primary key,
    capacidad int not null,
    tipohabitacion_id int not null
);

CREATE TABLE reservas (
	id int not NULL auto_increment,
    promocion varchar(200) default NULL,
    duracion varchar(200) default null,
    id_persona int not null,
    primary key (id),
    key fk_promociones_1_idx (id_persona),
    constraint fk_promociones_1 foreign key (id_persona) references persona(id)
);