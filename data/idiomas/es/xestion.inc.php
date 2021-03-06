<?php
/****************************************************************************
* data/idiomas/es/xestion.inc.php
*
* Textos para el idioma Spanish
*

PHPfileNavigator versi�n 2.2.0

Copyright (C) 2004-2005 Lito <lito@eordes.com>

http://phpfilenavigator.litoweb.net/

Este programa es software libre. Puede redistribuirlo y/o modificarlo bajo los
t�rminos de la Licencia P�blica General de GNU seg�n es publicada por la Free
Software Foundation, bien de la versi�n 2 de dicha Licencia o bien (seg�n su
elecci�n) de cualquier versi�n posterior.

Este programa se distribuye con la esperanza de que sea �til, pero SIN NINGUNA
GARANT�A, incluso sin la garant�a MERCANTIL impl�cita o sin garantizar la
CONVENIENCIA PARA UN PROP�SITO PARTICULAR. V�ase la Licencia P�blica General de
GNU para m�s detalles.

Deber�a haber recibido una copia de la Licencia P�blica General junto con este
programa. Si no ha sido as�, escriba a la Free Software Foundation, Inc., en
675 Mass Ave, Cambridge, MA 02139, EEUU.
*******************************************************************************/

defined('OK') or die();

return array(
	'xestion' => 'Administraci&oacute;n',
	'Xmenu_principal' => 'Men&uacute; Principal',
	'Xcrear_usuario' => 'Crear Usuario',
	'Xcrear_raiz' => 'Crear Ra&iacute;z',
	'Xraices' => 'Raices',
	'Xusuarios' => 'Usuarios',
	'Xmodificar' => 'Modificar',
	'Xnome' => 'Nombre',
	'Xestado' => 'Estado',
	'Xcambiar' => 'Cambiar',
	'Xmodi_raiz' => 'Modificaci&oacute;n de Ra&iacute;z',
	'Xusuarios_relacionados' => 'Usuarios Relacionados',
	'Xpath' => 'Path',
	'Xraiz_web' => 'Ra&iacute;z Web',
	'Xhost' => 'Servidor',
	'Xconf' => 'Configuraci&oacute;n',
	'Xdatos_principales' => 'Datos Principales',
	'Xmodi_usuario' => 'Modificaci&oacute;n de Usuario',
	'Xusuario' => 'Usuario',
	'Xcontrasinal' => 'Contrase&ntilde;a',
	'Xrep_contrasinal' => 'Repite la Contrase&ntilde;a',
	'Xadministrador' => 'Administrador',
	'Xraices_relacionadas' => 'Raices Relacionadas',
	'Xeliminar_usuario' => 'Confirma la eliminaci&oacute;n de este usuario???',
	'Xeliminar_raiz' => 'Confirma la eliminaci&oacute;n de esta ra&iacute;z? Recuerde que no se eliminar&aacute; el directorio f&iacute;sico, solo de la lista del PHPfileNavigator',
	'Xreindexar' => 'Reindexar',
	'Xreindexar_info' => 'Este proceso permite reindexar todos los datos de los ficheros de informaci&oacute;n adicional as&iacute; como las b&uacute;squedas por nombre. Conviene reindexar los datos cada cierto tiempo para que las b&uacute;squedas no contengan errores en los resultados.',
	'Xconfirmar_reindexar' => 'Desea realmente reindexar todo el contenido de esta ra&iacute;z?<br />(Este proceso puede llevar alg&uacute;n tiempo, por favor espere)',
	'Xagarde_reindexar' => 'Este proceso puede llevar alg&uacute;n tiempo, por favor espere',
	'Xok_reindexar' => 'Actualizaci&oacute;n realizada con &eacute;xito. Se ha reindexado un total de:',
	'Xpeso_max' => 'Peso M&aacute;ximo',
	'Xpeso_actual' => 'Peso Actual',
	'Xerros' => array(
		'1' => 'Los campos marcados con <b>*</b> son obligatorios.',
		'2' => 'Ha ocurrido un error guardando el registro, por favor compruebe el informe de errores de MySQL.',
		'3' => 'No se puede desactivar la ra&iacute;z con la que accedi&oacute; al PHPfileNavigator.',
		'4' => 'El directorio data/info/ no tiene permisos de escritura. No se guardar&aacute; el l&iacute;mite de tama&ntilde;o.',
		'5' => 'No se puede eliminar la ra&iacute;z con la que accedi&oacute; al PHPfileNavigator.',
		'6' => 'Ha ocurrido un error eliminando el registro, por favor compruebe el informe de errores de MySQL.',
		'7' => 'No se puede quitar la relaci&oacute;n con el usuario actual, ya que se accedi&oacute; al PHPfileNavigator a trav&eacute;s de esta ra&iacute;z.',
		'8' => 'Ya existe ese Usuario.',
		'9' => 'No se puede quitar la relaci&oacute;n con la ra&iacute;z desde la que accedi&oacute; al PHPfileNavigator.',
		'10' => 'No se puede desactivar el usuario con el que accedi&oacute; al PHPfileNavigator.',
		'11' => 'El campo Contrase&ntilde;a no coincide con el de Repite Contrase&ntilde;a.',
		'12' => 'No se puede quitar la opci&oacute;n de administrador al usuario con el que accedi&oacute; al PHPfileNavigator.',
		'13' => 'No se puede eliminar el usuario con el que accedi&oacute; al PHPfileNAaigator',
		'14' => 'No se puede desactivar el grupo del usuario con el que accedi&oacute; al PHPfileNAaigator',
		'15' => 'Ya existe un Grupo con ese nombre',
		'16' => 'No se puede eliminar el grupo del usuario con el que se accedi&oacute; al PHPfileNavigator',
		'17' => 'No se puede eliminar este grupo por que tiene relaci&oacute;n con alg&uacute;n usuario.',
		'18' => 'El fichero de configuraci&oacute;n seleccionado no existe.',
		'19' => 'El fichero de configuraci&oacute;n seleccionado no tiene permisos de escritura.',
		'20' => 'Debes definir un nombre para el nuevo fichero de configuraci&oacute;n.',
		'21' => 'Ya existe un fichero de configuraci&oacute;n con ese nombre.',
		'22' => 'Ya existe una configuraci&oacute;n con ese nombre.',
		'23' => 'Ocurri&oacute; un error duplicando esta configuraci&oacute;n, por favor revisa el registro de errores de MySQL.',
		'24' => 'Ocurri&oacute; un error duplicando esta configuraci&oacute;n, por favor revisa os permisos del directorio data/conf/',
		'25' => 'El fichero actual no tiene permisos para ser eliminado.',
		'26' => 'No se puede eliminar esta configuraci&oacute;n ya que tiene relaci&oacute;n con alguna ra&iacute;z o grupo, por favor primero elimina estas relaciones.',
		'27' => 'No se puede eliminar este fichero de configuraci&oacute;n ya que es la configuraci&oacute;n por defecto de alg&uacute;n grupo, por favor primero elimine esta relaci&oacute;n.',
		'28' => 'Ha ocurrido un error durante la edici&oacute;n de esta configuraci&oacute;n.',
		'29' => 'No existe o est&aacute; vac&iacute;o el fichero de logs de MySQL.',
		'30' => 'No existe o est&aacute; vac&iacute;o el fichero de logs de Acciones.',
		'31' => 'El directorio "PATH" no existe.',
		'32' => 'El idioma de origen que est&aacute; a seleccionar no existe en esta instalaci&oacute;n.',
		'33' => 'El directorio data/idiomas, el directorio para el idioma de destino o el fichero a traducir seleccionado no tienen permisos de escritura. Por favor comprueba los permisos y establece permiso de escritura para el usuario asignado al servidor web.',
		'34' => 'No fue posible escribir la traducci&oacute;n en el fichero seleccionado. Por favor comprueba los permisos y establece permiso de escritura para el usuario del servidor web.',
		'35' => 'El valor para l&iacute;mite de tama&ntilde;o no es un n&uacute;mero v&aacute;lido.',
		'36' => 'No existe la ra&iacute;z escogida para reindexar.',
	),
	'Xok' => array(
		'1' => 'El registro fue guardado correctamente.',
		'2' => 'El registro fue eliminado correctamente.',
		'3' => 'La configuraci&oacute;n fue duplicada correctamente.',
		'4' => 'La configuraci&oacute;n fue eliminada correctamente.',
		'5' => 'La configuraci&oacute;n fue editada correctamente.',
		'6' => 'La traducci&oacute;n fue guardada correctamente.',
		'7' => 'Los ficheros de logs seleccionados fueron eliminados correctamente.',
	),
	'Xaxuda' => array(
		'raiz_nome' => 'Nombre gen&eacute;rico de la ra&iacute;z, para reconocerla en los listados. <strong>p.j.: Ra&iacute;z Inicial</strong>',
		'raiz_path' => 'Ruta absoluta del directorio desde la ra&iacute;z del servidor. <strong>p.j.: /var/www/html/web/docs/</strong>',
		'raiz_web' => 'Ruta para acceso por web desde la ra&iacute;z del dominio. <strong>p.j.: /docs/</strong>',
		'raiz_host' => 'Nombre del dominio que se va a gestionar. <strong>p.j.: www.dominio.com</strong>',
		'raiz_peso_max' => 'Peso m&aacute;ximo permitido de ocupaci&oacute;n. <strong>p.j.: 50 Megas</strong>',
		'raiz_peso_actual' => 'Peso actual de la ra&iacute;z. Solo existe si la ra&iacute;z tiene un peso m&aacute;ximo.',
		'raiz_estado' => 'Activar o desactivar el acceso a esta ra&iacute;z para todos los usuarios.',
		'usuario_nome' => 'Nome gen&eacute;rico del usuario. <strong>p.j.: Usuario Invitado</strong>',
		'usuario_usuario' => 'Dato de usuario para realizar el acceso. <strong>p.j.: invitado</strong>',
		'usuario_contrasinal' => 'Contrase&ntilde;a de acceso al PHPfileNavigator. <strong>p.j.: n8DMe4whR6</strong>',
		'usuario_rep_contrasinal' => 'Repita la misma contrase&ntilde;a del campo anterior. <strong>p.j.: n8DMe4whR6</strong>',
		'usuario_email' => 'Correo electr&oacute;nico del usuario para futuros envios de informaci&oacute;n o posibilidad de solicitar otra contrase&ntilde;a.',
		'usuario_max_descargas' => 'M&aacute;ximo uso de ancho de banda permitido en megas durante un mes para descargas desde el PHPfileNavigator. <strong>p.j.: 500</strong>',
		'usuario_actual_descargas' => 'Ancho de banda usado durante este mes.',
		'usuario_grupo' => 'Grupo al que pertenece este usuario. <strong>p.j.: Invitados</strong>',
		'usuario_administrador' => 'Si este usuario puede gestionar totalmente todo el PHPfileNavigator. No se recomienda activar esta opci&oacute;n para m&aacute;s de un usuario, ya que otorga control total sobre toda la aplicaci&oacute;n.',
		'usuario_estado' => 'Activar o desactivar el acceso de este usuario al PHPfileNavigator.',
		'grupo_nome' => 'Nombre gen&eacute;rico del grupo. <strong>p.j.: Invitados</strong>',
		'grupo_conf' => 'Configuraci&oacute;n por defecto para este grupo. Para cada ra&iacute;z existente existir&aacute; la posibilidad de asignarle otra configuraci&oacute;n para cada grupo existente. <strong>p.j.: invitados</strong>',
		'grupo_estado' => 'Activar o desactivar el acceso de todos los usuarios de este grupo al PHPfileNavigator.',
		'borrar_inc' => 'Elimina todos los ficheros de informaci&oacute;n adicional de esta ra&iacute;z. No elimina ning&uacute;n fichero personal subido por los usuarios.',
		'borrar_imx' => 'Elimina todas las im&aacute;genes reducidas para la previsualizaci&oacute;n. No elimina ninguna im&aacute;gen personal subida por los usuarios.',
		'revisar_peso_actual' => 'Permite revisar y actualizar el peso de la ra&iacute;z actual.',
		'cambiar_datos' => 'Permitir al usuario recuperar su contrase&ntilde;a en caso de olvido o cambiar datos como el nombre o su contrase&ntilde;a.',
		'revisar_relacions_raices' => 'Si cambia la configuraci&oacute;n por defecto de este grupo marque esta opci&oacute;n para revisar todas las relaciones de ra&iacute;ces-grupos-configuraciones y reasignarle esta configuraci&oacute;n para este grupo en todas las ra&iacute;ces.',
	),
	'Xinformes' => 'Informes',
	'Xtit_mysql' => 'MySQL',
	'Xdesc_mysql' => 'Errores en las consultas de MySQL',
	'Xtit_accions' => 'Acciones',
	'Xdesc_accions' => 'Registro de acciones sobre los ficheros y directorios',
	'Xtit_accesos' => 'Accesos',
	'Xdesc_accesos' => 'Registro de entradas, salidas e intentos en la aplicaci&oacute;n',
	'Xtit_uso_disco' => 'Uso de disco',
	'Xdesc_uso_disco' => 'Permite crear informes de uso de disco para todos los usuarios que tengan limitado el espacio.',
	'Xtit_ancho_banda' => 'Ancho de banda',
	'Xdesc_ancho_banda' => 'Permite visualizar el ancho de banda consumido por los usuarios.',
	'Xescolle_informe' => 'Escoge un informe',
	'Xamosar_lineas' => 'N&uacute;mero de lineas a ense&ntilde;ar',
	'Xbuscar_texto' => 'Buscar texto',
	'Xamosar_entradas' => 'Entradas correctas',
	'Xamosar_saidas' => 'Salidas',
	'Xamosar_erros' => 'Intentos errados',
	'Xamosar_sen_datos' => 'Sesi&oacute;n caducada (sin datos)',
	'Xbuscar_usuario' => 'Buscar usuario',
	'Xamosar_copiar_dir' => 'Copiar directorio',
	'Xamosar_copiar_arq' => 'Copiar fichero',
	'Xamosar_mover_dir' => 'Mover directorio',
	'Xamosar_mover_arq' => 'Mover fichero',
	'Xamosar_eliminar_arq' => 'Borrar fichero',
	'Xamosar_eliminar_dir' => 'Borrar directorio',
	'Xamosar_crear_dir' => 'Crear directorio',
	'Xamosar_subir_arq' => 'Subir fichero',
	'Xamosar_renomear' => 'Renombrar',
	'Xamosar_enlazar_arq' => 'Enlazar fichero',
	'Xamosar_editar' => 'Editar',
	'Xamosar_subir_url' => 'Subir URL',
	'Xamosar_extraer' => 'Descomprimir fichero',
	'Xamosar_enviar_correo' => 'Enviar correo',
	'Xcol_data' => 'Fecha',
	'Xcol_arquivo' => 'Fichero',
	'Xcol_linha' => 'Linea',
	'Xcol_erro' => 'Error',
	'Xcol_raiz' => 'Ra&iacute;z',
	'Xcol_usuario' => 'Usuario',
	'Xcol_accion' => 'Acci&oacute;n',
	'Xcol_login' => 'Usuario',
	'Xcol_ip' => 'IP',
	'Xcol_estado' => 'Estado',
	'Xcol_donde' => 'Donde',
	'Xcol_sesion' => 'ID sesi&oacute;n',
	'Xcol_id' => 'ID',
	'Xcol_nome' => 'Nombre',
	'Xcol_peso_actual' => 'Peso Actual',
	'Xcol_peso_limite' => 'Peso M&aacute;ximo',
	'Xcol_porcent_libre' => '% de Libre',
	'Xcol_ancho_banda_actual' => 'Ancho de Banda Actual',
	'Xcol_ancho_banda_limite' => 'Ancho de Banda M&aacute;ximo',
	'Xarq_conf' => 'Ficheros de Configuraci&oacute;n',
	'Xdetalle' => 'Detalle',
	'Xconf_ver' => 'Detalle de la Configuraci&oacute;n',
	'Xpeso_exacto' => 'Peso Exacto',
	'Xmodificado' => 'Modificado',
	'Xuid' => 'ID Usuario',
	'Xgid' => 'ID Grupo',
	'Xeliminar_conf' => 'Est&aacute; seguro de que desea eliminar este fichero de configuraci&oacute;n?',
	'Xconf_editar' => 'Edici&oacute;n de Configuraci&oacute;n',
	'Xconf_editar_erro' => 'La edici&oacute;n cont&eacute;n alg&uacute;n error',
	'Xcomprobar_sintaxis' => 'Comprobar Sintaxis',
	'Xintro_sintaxis' => 'Proceso de comprobaci&oacute;n de sintaxis de un fichero de configuraci&oacute;n.<br />Si en alg&uacute;n momento da un error, debe revisar y corregir el problema.',
	'Xsintaxis_ok' => 'El fichero de configuraci&oacute;n tiene la sintaxis correcta.',
	'Xeliminar_ok' => 'El fichero de configuraci&oacute;n fue correctamente eliminado.',
	'Xconf_eliminar' => 'Eliminar Configuraci&oacute;n',
	'Xintro_eliminar' => 'La eliminaci&oacute;n del fichero de configuraci&oacute;n devolvi&oacute; el siguiente resultado:',
	'Xduplicar' => 'Nuevo a partir de este',
	'Xnovo_nome' => 'Nombre del nuevo fichero de configuraci&oacute;n:',
	'Xgrupos_relacionados' => 'Grupos Relacionados',
	'Xconfiguracions' => 'Configuraciones',
	'Xconfiguracion' => 'Configuraci&oacute;n',
	'Xgrupos' => 'Grupos',
	'Xgrupo' => 'Grupo',
	'Xmarca_desmarca' => 'Marcar/Desmarcar todos',
	'Xconf_defecto' => 'Configuraci&oacute;n por defecto',
	'Xcrear_grupo' => 'Crear Grupo',
	'Xemail' => 'Email',
	'Xmodi_grupo' => 'Modificaci&oacute;n de Grupo',
	'Xeliminar_grupo' => 'Realmente desea eliminar este Grupo?',
	'Xescolle_raiz' => 'Seleccionar una ra&iacute;z',
	'Xm_crear_raiz' => 'A&ntilde;adir Ra&iacute;z',
	'Xm_crear_usuario' => 'A&ntilde;adir Usuario',
	'Xm_crear_grupo' => 'A&ntilde;adir Grupo',
	'Xm_indexador' => 'Indexar Datos',
	'Xm_informes' => 'Informes',
	'Xm_traduccion' => 'Traducci&oacute;n',
	'Xen_megas' => 'en Megas',
	'Xmax_descargas_mes' => 'M&aacute;ximo de descargas mensual',
	'Xpeso_actual_off' => 'El peso m&aacute;ximo est&aacute; desactivado.',
	'Xtraduccion' => 'Traducci&oacute;n',
	'Xtraduccion_intro' => 'Desde aqu&iacute; puedes traducir o cambiar los textos de traducci&oacute;n que necesites. Solo tienes que escoger un idioma de origen y uno de destino e ir traduciendo los campos que van apareciendo.<br /><br />Los pasos a seguir son los siguientes:<br /><br /><strong>1) Escoge el juego de caracteres.</strong><br /><strong>2) Escoge si listar todo o solo lo que est&aacute; sin traducir.</strong><br /><strong>3) Escoge el fichero a traducir.</strong><br /><strong>4) Escoge el idioma de origen.</strong><br /><strong>5) Escoge el idioma de destino.</strong><br /><br />Cuando te encuentres con algo como <strong>%s</strong> mantenlo igual.<br /><br /><strong>IMPORTANTE: </strong>Dado que la sesi&oacute;n tiene una duraci&oacute;n limitada debes guardar cada cierto tiempo para que no te caduque la sesi&oacute;n y te expulse fuera perdiendo todo lo traducido!!!!.',
	'Xarquivo' => 'Fichero',
	'Xclave' => 'Clave',
	'Xsub_clave' => 'Subclave',
	'Xreiniciar_campos' => 'Volver a la versi&oacute;n Original',
	'Xgardar_idioma' => 'Guardar este idioma',
	'Xlistar' => 'Listar',
	'Xtodas' => 'Todas',
	'Xsen_traducir' => 'Sin traducir',
	'Xcomprobar_traduccions' => 'Comprobar el estado de las traducciones',
	'Xescolle_idioma' => '- Escoge idioma -',
	'Xtraduccion_estado' => 'Ten en cuenta que el proceso puede ser largo ya que se necesita comprobar todos los directorios disponibles de idiomas y todos los ficheros incluidos.<br /><br />El c&oacute;digo de colores para el listado es el siguiente:<br /><br /><table summary=""><tr><td style="background: #6c6; padding: 5px;">El color verde indica que el fichero coincidente en esa celda con el idioma listado tiene el mismo n&uacute;mero de valores que el escogido como origen, con lo cual la traducci&oacute;n es completa.</td></tr><tr><td style="background: #69E; padding: 5px;">El color azul indica que el idioma listado tiene m&aacute;s claves traducidas que el seleccionado como origen.</td></tr><tr><td style="background: #E66; padding: 5px;">El color rojo indica que en el ese fichero del idioma listado faltan algunas claves por traducir.</td></tr><tr><td style="background: #000; color: #FFF; padding: 5px;">El color negro indica que no existe a&uacute;n ese fichero para el idioma listado.</td></tr></table><br /><br />Selecciona el idioma a partir del cual se comparar&aacute; el estado con los otros idiomas.',
	'Xvaciar_inc' => 'Desea eliminar todos los ficheros de informaci&oacute;n adicional y las copias de reducidas de las im&aacute;genes generadas por el PHPfileNavigator? Esta acci&oacute;n no eliminar&aacute; ning&uacute;n fichero personal.',
	'Xm_varios' => 'Varios',
	'Xvarios' => 'Configuraciones diversas',
	'Xver_detalle' => 'Ver Detalle Completo',
	'Xarquivos_logs' => 'Ficheros de LOG',
	'Xlogs_info' => 'Aqu&iacute; te permitir&aacute; eliminar los ficheros de registro con errores de MySQL o de las acciones sobre ficheros y directorios de cada ra&iacute;z.',
	'Xlogs_arq_accions' => 'Registro de acciones de la ra&iacute;z',
	'Xlogs_arq_mysql' => 'Registro de errores de MySQL',
	'Xborrar_inc' => 'Borrar ficheros de<br />informaci&oacute;n adicional',
	'Xborrar_imx' => 'Borrar previsualizaci&oacute;n<br />de im&aacute;genes',
	'Xrevisar_peso_actual' => 'Revisar Peso Actual',
	'Xcambiar_datos' => 'Cambiar Datos',
	'Xm_doazon' => 'Realizar una muy agradecida donaci&oacute;n',
	'Xm_doazon_texto' => 'Este proyecto ha sido desarrollado durante un sin fin de horas libres.<br /><br />Desde Septiembre de 2004 ha estado en continua evoluci&oacute;n pasando por diversas formas, pero siempre encaminadas a facilitar lo m&aacute;ximo posible su uso y disfrute, con mejoras que los propios usuarios han propuesto.<br /><br />Su desarrollo no ha cesado en ning&uacute;n momento y espero que tampoco cese en el futuro.<br /><br />Para continuar con su desarrollo y permitirme dedicarle el tiempo necesario para implementar nuevas funcionalidades, realizar las pruebas necesarias y corregir los problemas encontrados, necesito tu ayuda.<br /><br />Haz una donaci&oacute;n:',
	'Xdoar' => 'Donar',
	'Xdoar_paypal' => 'Donar con PayPal',
	'Xdoar_tarxeta' => 'Donar con tarjeta de cr&eacute;dito/d&eacute;bito',
	'Xrevisar_relacions_raices' => 'Reasignar relaciones',
);
?>
