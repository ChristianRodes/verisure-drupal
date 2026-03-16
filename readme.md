Prueba Técnica: Dashboard Operativo Verisure en Drupal
Este repositorio contiene la configuración y personalización de un panel de control operativo para la gestión de incidencias y mantenimiento preventivo, desarrollado sobre Drupal 11.

Arquitectura y Entorno
El proyecto se ha estructurado utilizando un flujo de trabajo moderno basado en contenedores:

Motor: Docker Desktop.

Orquestación: DDEV para la gestión del entorno local.

Core: Instalación de Drupal 11.

Interfaz de Administración
Para mejorar la usabilidad del panel de gestión, se han implementado los siguientes cambios:

Gin Admin Theme: Instalación y configuración de Gin para proporcionar una interfaz de administración moderna y clara.

Gin Toolbar: Configuración de la barra de herramientas para optimizar la navegación interna.

Desarrollo del Dashboard (UI/UX)
El objetivo ha sido crear una landing page funcional en /inicio que sirva como Centro de Operaciones (NOC):

KPIs Corporativos: Implementación de tarjetas de indicadores clave (Incidencias, distribución por CCAA y revisiones) utilizando HTML y CSS.

Visualización de Datos: Creación de una barra de distribución segmentada para representar el reparto geográfico de forma intuitiva.

Optimización de Filtros: Desacoplamiento de los filtros de las Vistas para situarlos en una región superior, mejorando la interacción del usuario.

Lógica de Negocio y Estructura
Modelado de Datos: Creación de tipos de contenido y relaciones entre Clientes e Incidencias.

Vistas Dinámicas: Configuración de filtros por Comunidad Autónoma y tipología.

Mantenimiento Preventivo: Identificación automática de dispositivos que requieren revisión técnica (antigüedad > 1 año).

🛠️ Notas sobre el desarrollo y mejoras pendientes
En esta versión actual, las tarjetas de métricas superiores (KPIs) están implementadas mediante HTML estático para definir la línea visual del proyecto. Para que estos datos fueran 100% dinámicos en una fase posterior, el planteamiento sería:

Automatización de métricas: Sustituiría los números actuales por bloques de "Agregación" de Drupal. Esto permitiría que el sistema cuente automáticamente las incidencias reales de la base de datos y actualice el número sin intervención manual.

Cálculo de porcentajes: Para que la barra de distribución geográfica cambie sola, integraría un pequeño script o usaría un módulo de gráficos que lea directamente las categorías de las incidencias creadas.

Conexión en tiempo real: Vincularía el contador de "Revisiones pendientes" con la vista de filtrado inferior, de modo que si se soluciona una revisión, el número del KPI baje automáticamente.