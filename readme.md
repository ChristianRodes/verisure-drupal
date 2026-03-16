# 🛡️ Mini Proyecto Drupal: Dashboard Verisure

Este repositorio contiene la configuración y personalización de un panel de control operativo para la gestión de incidencias y mantenimiento preventivo, desarrollado sobre **Drupal 11**.

---

## 🏗️ Arquitectura y Entorno

El proyecto se ha estructurado utilizando un flujo de trabajo basado en contenedores para asegurar la portabilidad:

* **Motor:** `Docker Desktop`
* **Orquestación:** `DDEV` para la gestión del entorno local.
* **Core:** Instalación limpia de `Drupal 11.3`.

---

## 🎨 Interfaz de Administración

He descargado e implementado los siguientes componentes:

* **Gin Admin Theme:** Instalación y configuración de la capa de administración para proporcionar una interfaz limpia.
* **Gin Toolbar:** Optimización de la barra de herramientas para facilitar la navegación durante la configuración.

---

## 📊 Dashboard de Operaciones (UI/UX)

El objetivo central ha sido crear una landing page funcional en `/landing` que actúe como un **NOC (Network Operations Center)**:

* **KPIs Corporativos:** Tarjetas de indicadores clave con diseño personalizado (Incidencias, distribución por CCAA y revisiones).
* **Visualización de Datos:** Implementación de una barra de distribución segmentada para representar el reparto geográfico de alertas.
* **Optimización de Filtros:** Desacoplamiento de filtros expuestos situándolos en una región inferior para mejorar la jerarquía visual.

---

## 🧠 Lógica de Negocio y Estructura

He utilizado la interfaz de administración para estructurar y organizar el contenido, gestionando de forma integral los tipos de datos, bloques y vistas necesarios para el proyecto.

1.  **Modelado de Datos:** Tipos de contenido para Clientes e Incidencias con relaciones mediante *Entity Reference*.
2.  **Vistas Dinámicas:** Filtros avanzados por Comunidad Autónoma y tipología de incidencia.
3.  **Mantenimiento Preventivo:** Lógica en Vistas para identificar automáticamente dispositivos que requieren revisión (antigüedad > 1 año).

---

## 🛠️ Notas de Desarrollo y Mejoras Pendientes

Actualmente, las tarjetas de métricas superiores (KPIs) están implementadas mediante HTML/CSS estático para definir la propuesta visual. En una fase productiva, el planteamiento para dinamizarlas sería:

* **Automatización de métricas:** Uso de la función de **Agregación** en las Vistas de Drupal para contar incidencias en tiempo real.
* **Cálculo dinámico:** Integración de módulos de gráficos (o scripts ligeros) para que la barra de CCAA responda automáticamente a la base de datos.
* **Sincronización:** Vinculación directa entre el contador de revisiones y el estado de los nodos para una actualización instantánea.

---

## 🚀 Instalación

Para replicar este entorno localmente, sigue estos pasos:

1.  **Clonar** el repositorio.
2.  Iniciar el entorno:
    ```bash
    ddev start
    ```
3.  Importar configuración:
    ```bash
    ddev drush cim -y
    ```
4.  Acceder al sitio:
    ```bash
    ddev launch
    ```
