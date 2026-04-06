📌 Sistema de Tareas con Perfiles de Usuario Multilingües
📖 Descripción del Proyecto

Este proyecto consiste en el desarrollo de un sistema web que permite a los usuarios gestionar sus tareas y direcciones personales en un entorno multilingüe. La aplicación está diseñada para adaptarse al idioma preferido del usuario, ofreciendo una experiencia accesible y flexible.

El sistema incluye autenticación de usuarios, gestión de perfiles, y operaciones CRUD (Crear, Leer, Actualizar, Eliminar) tanto para usuarios como para direcciones.

🎯 Objetivo

Desarrollar una aplicación web funcional que permita la gestión de información personal en múltiples idiomas, aplicando buenas prácticas de desarrollo, uso de frameworks y control de versiones.

⚙️ Tecnologías Utilizadas

Framework: CakePHP 5.x
Lenguaje: PHP
Base de Datos: MariaDB
Frontend: HTML, CSS
Control de versiones: Git
Servidor: 172.25.0.204:8765

🌐 Funcionalidades Principales

🔐 Autenticación
Registro de usuarios
Inicio de sesión
Cierre de sesión

👤 Gestión de Usuarios
Crear usuarios
Editar información
Eliminar usuarios
Listado de usuarios

📍 Gestión de Direcciones
Crear direcciones
Editar direcciones
Eliminar direcciones
Listado de direcciones

🌍 Sistema Multilenguaje
Soporte para Español 🇪🇸 e Inglés 🇺🇸
Selección de idioma desde login o interfaz
Traducción de:
Formularios
Botones
Mensajes
Tablas

🗂️ Estructura del Proyecto
src/
 ├── Controller/
 ├── Model/
 ├── View/
templates/
config/
resources/
 └── locales/
     ├── es/
     └── en/

🛠️ Instalación
Clonar el repositorio:
git clone https://github.com/AndersonCarvajal/tw2-Proyecto.git
Entrar al proyecto:
cd tu-repo
Instalar dependencias:
composer install
Configurar base de datos en:
config/app_local.php
Ejecutar migraciones (si aplica)
Levantar servidor:
bin/cake server

🌐 Uso del Sistema
Acceder a:
http://localhost:8765
Iniciar sesión
Seleccionar idioma
Navegar entre:
Usuarios
Direcciones
🌍 Internacionalización (i18n)

El sistema utiliza archivos .po para manejar múltiples idiomas:

resources/locales/es/default.po
resources/locales/en/default.po

El idioma se guarda en sesión y se aplica globalmente en toda la aplicación.

🧠 Uso de Inteligencia Artificial

Durante el desarrollo se utilizaron herramientas de inteligencia artificial para:

Generación de código
Corrección de errores
Mejora de diseño
Optimización del sistema

Todas las decisiones fueron evaluadas y adaptadas manualmente.

🧪 Pruebas

Se realizaron pruebas para:

Login correcto e incorrecto
CRUD de usuarios
CRUD de direcciones
Cambio de idioma
Persistencia de sesión
🚀 Mejoras Futuras
Agregar más idiomas
Implementar roles de usuario
Notificaciones automáticas
Integración con APIs externas
👨‍💻 Autor

Ander

Estudiante de Ingeniería de Sistemas
Universidad Privada Domingo Savio (UPDS)

📌 Conclusión

Este proyecto demuestra la capacidad de desarrollar aplicaciones web estructuradas con soporte multilingüe, integrando buenas prácticas de programación y herramientas modernas.