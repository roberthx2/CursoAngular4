
1. Instalar proyecto 

	Para crear el proyecto se debe instalar en primer lugar nodeJs, luego se procede a correr los siguientes comandos:

	npm install -g @angular/cli  --> instala angular cli

	ng new angular4 --> Crear un proyecto de angular

	cd angular4

	ng serve   --> Ejecuta el servidor interno

2. Generar un componente

	ng generate component NAME

3. Instalar paquetes

	npm install --save bootstrap

4. Cargar paquetes en la app

	En el archivo .angular-cli.json se cargan los paquetes

	Nota: los archivos son cargados desde index.html por lo que desde alli deben ser cargadas las rutas