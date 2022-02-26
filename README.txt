
Comenzando...

Se realiza una persistencia de datos en Mysql con solo una tabla para los elementos que vamos a registrar. 
El codigo se hecho en PHP por lo que es necesario descargar un servidor para trabajar el proyecto en mi casa Utilice Apache

Pre-requisitos:
-XAMPP Control Panel
-Mysql
-git
-Apache
-Visual Estido Code.

y dejo el backup de la base de datos para que pueda ser restaurado con los valores de prueba.
    const SERVIDOR 	= 'localhost';
    const NAMEDB 	= 'dbOPA';
    const USER 		= 'andres';
    const PASSWORD 	= '123';
    const CHARSET 	= 'utf8';


Para probar:
Hice un index.php donde se podrá desplegar un menu.
En este puedes ver 3 opciones: #1 Registrar Elementos; esta opción nos permite ingresar más elementos a la base de datos. 
#2 Consultar los elementos que tenemos en la base de datos.
#3 Calcular cantidad de elemetentos.

