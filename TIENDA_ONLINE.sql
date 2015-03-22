CREATE TABLE prendas(
id int primary key,
nombre varchar(55),
descripcion varchar(55),
color varchar(55),
depto varchar(55),
existencia int,
precio float);

CREATE TABLE img(
id int primary key,
idproducto int,
imagen varchar(100));

CREATE TABLE clientes(
id int primary key,
usuario varchar(55),
password varchar(55),
nombre varchar(55),
paterno varchar(55),
materno varchar(55),
telefono varchar(10),
celular varchar(14),
correo varchar(55));

CREATE TABLE direccion(
idcliente int,
pais varchar(55),
estado varchar(55),
ciudad varchar(55),
colonia varchar(55),
calle varchar(55),
mz varchar(4),
lt varchar(4),
no varchar(5),
cp varchar(5));

/*CREATE TABLE usuarios(
idcliente int,
usuario varchar(55),
password varchar(55));
*/
CREATE TABLE pedidos(
id int primary key,
idcliente int,
fecha varchar(12),
estado varchar(20));

CREATE TABLE ventas(
id int primary key,
idpedido int,
idproducto int,
unidades int);

