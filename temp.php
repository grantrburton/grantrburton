<!--<link rel='stylesheet' href='http://club18-30uncovered.com/wp-content/themes/designpile/style.css' type='text/css' media='screen' />-->
<!-- begin header-->
<!--<div id='header'>
    <div id='logo'>
        <a href='http://club18-30uncovered.com/'>
            <img src='http://club18-30uncovered.com/wp-content/uploads/2011/01/blog11.png' alt='Club 18-30 Blog' />
        </a>
    </div>-->
    <!-- begin top menu -->
    <!--<div id='topMenuCont' class='clearfix'><ul>
            <li><a href='http://club18-30uncovered.com/contact-us/'>Contact Us</a></li> 
            <li><a href='http://club18-30uncovered.com/about/'>About</a></li> 
            <li><a href='http://www.club18-30.com'>Book a Holiday</a></li> 
            <li><a href='http://club18-30uncovered.com'>Home</a></li> 
            <li><a href='http://club18-30uncovered.com/gallery-2/'>Gallery</a></li> 
        </ul></div>			-->
    <!-- end top menu -->
<!--</div>-->
<!-- end header -->

<?php
echo "1- Instalar el DOSBox 0.73

2- Pegar el archivo 'dosbox-0.73 en el directorio: (vale la aclaracion que la carpeta 'Configuracion local' esta oculta)

C:\Documents and Settings\Administrador\Configuración local\Datos de programa\DOSBox


3- Instalar el juego Z en el disco rigido. Precisamente crea una carpeta que sea:

C:\Games\Z 
(cuando ejecutes el programa de instalacion solo tenes que agregar el comando '\Games\Z' sin el 'c:')
(Al momento de configurar el Sonido MIDI y digital selecciona ambos como 'Sound Blaster or compatible 100%' y que se configure de forma automatica)


4- Copia todos los archivos del CD (imagen) creando una nueva carpeta CD, quedandote de esta manera:

C:\Games\Z\CD 


5- Abri el archivo 'Z.bat' del directorio donde instalaste el juego con el bloc de notas. Te va a aparecer esto:

@Echo Por favor espera - Cargando ......
@ZED.EXE /CD:X /spa /yesuv %1 %2 %3 %4 %5


6- Del texto que aparece ahi solo borra el '/yesuv' quedandote asi: (presta atencion a la letra X que mas adelante vas a tener que modificar)

@Echo Por favor espera - Cargando ......
@ZED.EXE /CD:X /spa %1 %2 %3 %4 %5

7- Guarda el archivo Z.bat,....ahora vamos abrir el archivo que pegamos al principio de la instalacion del DOSBox, el archivo 'dosbox-0.73'

8- Una vez abierto el archivo abajo del todo vas a ver las siguientes lineas:


[autoexec]
# Lines in this section will be run at startup.

mount C C:\Games\z

mount X C:\Games\Z\CD -t cdrom
C:


9- PASO IMPORTANTE: En esas lineas que se muestran hay que cambiar la letra X por la letra de donde se encuentre la imagen del CD (ya sea E: F:, etc)
...tanto en el archivo 'Z.bat' como el 'dosbox-0.73' en ambos casos tienen que figurar la unidad del disco virtual...vamos al ejemplo:

*********ARCHIVO 'Z.bat' 

@Echo Por favor espera - Cargando ......
@ZED.EXE /CD:G /spa /yesuv %1 %2 %3 %4 %5

*********ARCHIVO 'dosbox-0.73'

[autoexec]
# Lines in this section will be run at startup.

mount C C:\Games\z

mount G C:\Games\Z\CD -t cdrom
C:

10- En ambos fue modificada la letra X por la G de mi disco virtual y en donde se encuentra la imagen, una vez realizado todos estos pasos solo queda
 ejecutar el programa DOSBox y teclear la letra Z y apretar enter.




Apretando 'CTRL F11' o 'CTRL F12' le bajas o subis la velocidad del juego.



Eso es todo, que lo disfruten!!!

By Moyo®";
