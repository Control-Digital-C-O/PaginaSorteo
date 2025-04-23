# PaginaSorteo

Pagina para el sorteo de herramientas de electricidad.

## Estructura del proyecto

/mi-proyecto
│
├── public/ # Document root
│ ├── index.php # Front controller
│ ├── js/ # JS de cliente y AJAX
│ └── css/ # Estilos
│
├── src/ # Código PHP orientado a objetos
│ ├── Controllers/ # UsuarioController.php, PagoController.php
│ ├── Models/ # Usuario.php, Pago.php, Pozo.php, Sorteo.php
│ └── Views/ # plantillas HTML/partial views
│
├── config/ # Configuración (DB, rutas...)
│ └── config.php
│
└── vendor/ # Librerías de Composer (si las hubiera)

📄 Documentación del Proyecto: Página de Sorteo
1. Resumen Ejecutivo
Nombre del Proyecto: Página de Sorteo
Objetivo: Desarrollar una aplicación web que permita la realización de sorteos de manera sencilla y transparente.
Tecnologías Utilizadas: PHP, Apache (XAMPP), HTML, CSS, JavaScript
Ubicación del Proyecto: C:\P​royectos\vsc\P​aginaSorteo
URL de Acceso Local: http://localhost/PaginaSorteo​
Gantt Chart GanttPRO Blog
+8
FESC
+8
Rock Content
+8

2. Estructura del Proyecto
pgsql
Copiar
Editar
PaginaSorteo/
├── .github/
│   └── workflows/
│       └── deploy.yml
├── config/
├── public/
│   ├── css/
│   ├── js/
│   └── index.html
├── src/
│   ├── controllers/
│   ├── models/
│   └── views/
├── test/
├── .htaccess
├── composer.json
├── LICENSE
├── README.md
└── index.php
3. Descripción del Proyecto
La "Página de Sorteo" es una aplicación web diseñada para facilitar la creación y gestión de sorteos en línea. Permite a los usuarios ingresar participantes, definir premios y realizar sorteos de manera aleatoria y justa. El proyecto está construido utilizando PHP como lenguaje principal, con soporte de tecnologías web estándar para la interfaz de usuario.​
YouTube
+4
Gantt Chart GanttPRO Blog
+4
Google Ayuda
+4

4. Configuración del Entorno
Requisitos Previos:

Sistema Operativo: Windows 10

Servidor Web: XAMPP (Apache, PHP, MySQL)

Editor de Código: Visual Studio Code o similar​
Filestage

Pasos para la Configuración:

Instalar XAMPP y asegurarse de que Apache y MySQL estén en funcionamiento.

Clonar o descargar el repositorio del proyecto en el directorio htdocs de XAMPP.

Asegurarse de que el archivo index.php se encuentre en la raíz del proyecto para facilitar el acceso.

Configurar el archivo .htaccess para habilitar el Front Controller:​

apache
Copiar
Editar
DirectoryIndex index.php index.html index.htm

<IfModule mod_rewrite.c>
    RewriteEngine On
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteRule ^ index.php [L]
</IfModule>
Editar el archivo httpd.conf de Apache para permitir la sobrescritura de configuraciones:​

apache
Copiar
Editar
<Directory "C:/Proyectos/vsc/PaginaSorteo">
    Options Indexes FollowSymLinks Includes ExecCGI
    AllowOverride All
    Require all granted
</Directory>
Reiniciar Apache para aplicar los cambios.​

5. Uso de la Aplicación
Abrir un navegador web y navegar a http://localhost/PaginaSorteo.

Utilizar la interfaz para agregar participantes y definir premios.

Iniciar el sorteo y visualizar los resultados generados aleatoriamente.​

6. Colaboración y Contribución
Este proyecto está abierto a contribuciones. Los interesados pueden clonar el repositorio, crear ramas para nuevas funcionalidades o correcciones, y enviar pull requests para revisión. Se recomienda seguir las buenas prácticas de desarrollo y mantener una comunicación clara en las descripciones de los commits.​

7. Licencia
Este proyecto está licenciado bajo la Licencia MIT, lo que permite su uso, modificación y distribución con ciertas condiciones.​

8. Contacto
Para consultas, sugerencias o colaboración, puedes contactarme a través de [tu correo electrónico o enlace a redes sociales, si lo deseas compartir].​
