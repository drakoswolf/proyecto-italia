<?php require_once "parte_superior.php"?>

    <main>

    <div class="posicion_btn_volver">
        <a href="index.php">
          <svg  xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-big-left btn_volver" viewBox="0 0 40 40"  stroke="#000000" stroke-linecap="round" stroke-linejoin="round">
          <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
          <path d="M20 15h-8v3.586a1 1 0 0 1 -1.707 .707l-6.586 -6.586a1 1 0 0 1 0 -1.414l6.586 -6.586a1 1 0 0 1 1.707 .707v3.586h8a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1z" />
          </svg>
        </a>
    </div>


      <p class="instrucciones_cortas"> ¡Elige un juego!</p>

        <div class="grupo_iconos_juegos_home centrar">

          <a href="niveles_reloj.php" class="">
            <div class="recuadro_fondo_juego_home boton_seleccionable">
              <p class="subtitulo_juego_home"> Aprende a leer el reloj</p>
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-clock fondo-iconos icono_juego_home centrar" viewBox="0 0 24 24" stroke="#000000" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <circle cx="12" cy="12" r="9" />
                        <polyline points="12 7 12 12 15 15" />
                    </svg>
                    <!-- <p class="subtitulo_juego_home">Máxima puntuación:</p>
                  <div class="grupo_iconos_descripcion_juego_home centrar">
                    <img src="imagenes/EstrellaMenos.png" class="centrar"  style="margin-top:10; width:25%;">
                    <img src="imagenes/EstrellaMenos.png" class="centrar"  style="margin-top:10; width:25%;">
                    <img src="imagenes/EstrellaMenos.png" class="centrar"  style="margin-top:10; width:25%;">
                    <img src="imagenes/EstrellaMenos.png" class="centrar"  style="margin-top:10; width:25%;">
                    <img src="imagenes/EstrellaMenos.png" class="centrar"  style="margin-top:10; width:25%;">
                  </div> -->
                  <!-- <p class="subtitulo_juego_home">Niveles completados:</p>
                  <div class="grupo_iconos_descripcion_juego_home centrar">
                  <img src="imagenes/Numeros/0.png" class="centrar"  style="margin-top:10; width:25%;">
                  <img src="imagenes/Separador.png" class="centrar"  style="margin-top:10; width:25%;">
                  <img src="imagenes/Numeros/5.png" class="centrar"  style="margin-top:10; width:25%;">
                </div> -->
          </div>
         </a>

         <a href="niveles_suma.php" class="">
          <div class="recuadro_fondo_juego_home boton_seleccionable">
            <p class="subtitulo_juego_home"> Aprende a sumar y restar</p>
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-math-symbols fondo-iconos icono_juego_home centrar" viewBox="0 0 24 24" stroke="#000000" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                      <line x1="3" y1="12" x2="21" y2="12" />
                      <line x1="12" y1="3" x2="12" y2="21" />
                      <line x1="16.5" y1="4.5" x2="19.5" y2="7.5" />
                      <line x1="19.5" y1="4.5" x2="16.5" y2="7.5" />
                      <line x1="6" y1="4" x2="6" y2="8" />
                      <line x1="4" y1="6" x2="8" y2="6" />
                      <line x1="18" y1="16" x2="18.01" y2="16" />
                      <line x1="18" y1="20" x2="18.01" y2="20" />
                      <line x1="4" y1="18" x2="8" y2="18" />
                  </svg>
                <!-- <p class="subtitulo_juego_home">Niveles completados:</p>
                <div class="grupo_iconos_descripcion_juego_home centrar">
                  <img src="imagenes/Numeros/0.png" class="centrar"  style="margin-top:10; width:25%;">
                  <img src="imagenes/Separador.png" class="centrar"  style="margin-top:10; width:25%;">
                  <img src="imagenes/Numeros/5.png" class="centrar"  style="margin-top:10; width:25%;">
                </div> -->
            </div>
          </a>

          <a href="niveles_contar.php" class="">
            <div class="recuadro_fondo_juego_home boton_seleccionable">
              <p class="subtitulo_juego_home">Aprende a contar</p>
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-sort-ascending-numbers  fondo-iconos icono_juego_home centrar" viewBox="0 0 24 24" stroke="#000000" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                      <path d="M4 15l3 3l3 -3" />
                      <path d="M7 6v12" />
                      <path d="M17 3a2 2 0 0 1 2 2v3a2 2 0 1 1 -4 0v-3a2 2 0 0 1 2 -2z" />
                      <circle cx="17" cy="16" r="2" />
                      <path d="M19 16v3a2 2 0 0 1 -2 2h-1.5" />
                    </svg>
                <!-- <p class="subtitulo_juego_home">Niveles completados:</p>
                <div class="grupo_iconos_descripcion_juego_home centrar">
                  <img src="imagenes/Numeros/0.png" class="centrar"  style="margin-top:10; width:25%;">
                  <img src="imagenes/Separador.png" class="centrar"  style="margin-top:10; width:25%;">
                  <img src="imagenes/Numeros/5.png" class="centrar"  style="margin-top:10; width:25%;">
                </div> -->
            </div>
          </a>

        </div>
    </main>



    
</body>
</html>   