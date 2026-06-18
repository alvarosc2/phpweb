# Readme

## PHP

Ya contaba con una instalación de PHP en mi sistema Linux. No es un lenguaje facil de instalar pero para este trabajo estoy abusando de mi experiencia previa ya que he tenido un par de empleos como programador PHP.

### Terminal mostrando la version de PHP
Los archivos de la aplicación en PHP se guardan en la ruta /var/www/html/ en donde PHP busca el archivo index.php que es el punto de entrada de la aplicación.
![Terminal mostrando la version de PHP](/img/php_version.png)


### Browser mostrando la corrida del programa en PHP
![Browser mostrando la corrida del programa en PHP](/img/browser.png)

## Archivo index.php

Para el archivo index.php, crea un formulario con las siguientes características: 

- El formulario debe tener un color de fondo diferente al que viene por defecto en el cuerpo del documento. 

- Debe mostrar el título “Registrar alumno”. 

- Debe tener los siguientes campos con sus respectivos títulos: 

- Nombre (el input debe ser de tipo text) 

- Apellidos (el input debe ser de tipo text) 

- Edad (el input debe ser de tipo number) 

- Correo (el input debe ser de tipo email) 

- Contraseña (el input debe ser de tipo password) 

- Debe tener un botón con la función de enviar los datos del formulario a una nueva página. 

![Formato de registro de alumnos](/img/form1.png)

## Archivo card.php

Para el archivo card.php, crea una vista con las siguientes características: 

- Debe mostrar una imagen. 

- Debe tener el título “Alumno”. 

- Debe mostrar los datos enviados en el formulario anterior: 

- Nombre 

- Apellidos 

- Edad 

- Correo 

![Tarjeta de datos enviados](/img/card1.png)

## Flujo de la página web

Ingresa los datos en el formulario. Posteriormente, deberás presionar sobre el botón “Registrar”, el cual enviará la información a la página card.php, utilizando el método POST. En la página card.php se deberán obtener los datos enviados, utilizando el lenguaje de programación PHP y mostrar en la tarjeta el nombre, la edad y el correo, los cuales fueron capturados anteriormente en el formulario.

