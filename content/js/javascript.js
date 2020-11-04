const seccionesPaginas = new fullpage('#fullpage',{
 		
 		 autoScrolling: true, // Se activa el scroll.
		 fitToSection: true, // Acomoda el scroll automaticamente para que la seccion se muestre en pantalla.
		 fitToSectionDelay: 3000, // Delay antes de acomodar la seccion automaticamente.
		 easing: 'easeInOutCubic', // Funcion de tiempo de la animacion.
		 scrollingSpeed: 800, // Velocidad del scroll. Valores: en milisegundos.
		 css3: true, // Si usara CSS3 o javascript.
		 easingcss3: 'ease-out', // Curva de velocidad del efecto.
		 loopBottom: true, // Regresa a la primera seccion siempre y cuando se ya haya llegado a la ultima sección y el ususario siga scrolleando.
  		
  		 navigation: true, // Muesta la barra de navegación.
		 menu: '#menu', // Menu de navegación.
		 anchors: ['inicio','somos','servicios','sesion','contactos'], // Anclas, las usamos para identificar cada seccion y poder acceder a ellas con el menu.
		 navigationTooltips: ['Inicio', '¿Quienes Somos?', 'Servicios','Inicio de Sesion','Contactos'], // Tooltips que mostrara por cada boton.
		 showActiveTooltip: false, // Mostrar tooltip activa.

		 sectionsColor : ['#000', '#c2c2c2', '#000'], // Color de fondo de cada seccion.
		 verticalCentered: true, // Si alineara de forma vertical los contenidos de cada seccion.
});