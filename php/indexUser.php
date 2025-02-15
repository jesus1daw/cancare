<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=person" />
 <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <!-- Importar SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php

session_start();

// Recuperar los datos de sesión
$userName = $_SESSION['userName'] ?? null;
$reserva = $_SESSION['reserva'] ?? null;

// Mostrar el mensaje de bienvenida si el usuario está logueado y no hay reserva pendiente
if ($userName && !$reserva) {
    echo "<script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                title: '¡Bienvenido, $userName!',
                text: '¡No dudes en reservar tu cita!',
                icon: 'success',
                confirmButtonText: 'Aceptar'
            });
        });
    </script>";
     // Eliminar para evitar que el mensaje se repita
}

// Mostrar el mensaje de la reserva si la variable 'reserva' está definida
if ($reserva) {
    echo "<script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Tu reserva ha sido guardada',
                showConfirmButton: false,
                timer: 1500
            });
        });
    </script>";
    unset($_SESSION['reserva']);  // Eliminar para evitar que el mensaje se repita
}
?>

</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&family=PT+Serif+Caption:ital@0;1&family=Puppies+Play&family=Quintessential&family=Roboto+Slab:wght@100..900&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&family=PT+Serif+Caption:ital@0;1&family=Puppies+Play&family=Quintessential&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&family=Roboto+Slab:wght@100..900&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Bentham&display=swap');
    </style>
<body>

    
    <div class="barnav">
        <div class="logo">
            <img src="../img/logoCancareSinBGrecort.png" alt="">
        </div>
        <div class="nav">
            <div class="Inicio"><a href="#inicio">INICIO</a></div>
            <div class="Inicio"><a href="#info">INFO</a></div>
            <div class="Inicio"><a href="#reserva">RESERVA</a></div>
            <div class="Inicio">
                <svg class="iconoLogin" id="iconoLogin" xmlns="http://www.w3.org/2000/svg" height="35px" viewBox="0 -960 960 960" width="35px" fill="#e3faeb">
                <path d="M480-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 
                47ZM160-160v-112q0-34 17.5-62.5T224-378q62-31 126-46.5T480-440q66 0 130 
                15.5T736-378q29 15 46.5 43.5T800-272v112H160Zm80-80h480v-32q0-11-5.5-20T700-306q-54-27-109-40.5T480-360q-56 0-111 
                13.5T260-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T560-640q0-33-23.5-56.5T480-720q-33 0-56.5 23.5T400-640q0 
                33 23.5 56.5T480-560Zm0-80Zm0 400Z"/>
                </svg>
            </div>
            <div id="dropdownMenu" class="contenidoDrop">
                <a href="reservas.php">Mis Reservas</a>
                <a href="../index.php">Cerrar Sesión</a>
            </div>
            
            
        </div>
    </div>
    
    <div class="fondo" id="inicio">
        <video src="../img/854132-hd_1920_1080_25fps.mp4" autoplay loop muted alt="">
        </video>
        <div class="contentFondo">
            <h1>ADIESTRAMIENTO CANINO EN MADRID</h1>
            <p>Adiestramiento Canino para una Convivencia Feliz y Armoniosa</p>
            <p>Transforma el Comportamiento de tu Perro con Técnicas Profesionales</p>
            <button><a href="">¡Pide cita ya!</a></button>
        </div>
        
    </div>
    <div class="inter" id="info"></div>
    <div class="seccInfo">
        
        <div class="info1">
            <div class="img1">
                <img src="../img/pexels-creationhill-1242419.jpg" alt="">
            </div>
            <div class="content1">
                <h1>SERVICIOS PRINCIPALES</h1>
                <img src="../img/pets_23dp_61DB8A_FILL0_wght400_GRAD0_opsz24.svg" alt="">
                <p><b>Obediencia Básica:</b> Entrenamiento de comandos esenciales.</p>
                <img src="../img/pets_23dp_61DB8A_FILL0_wght400_GRAD0_opsz24.svg" alt="">
                <p><b>Control de Comportamiento:</b> Soluciones para 
                    problemas de ladrido excesivo, masticación, agresividad, etc.</p>
                <img src="../img/pets_23dp_61DB8A_FILL0_wght400_GRAD0_opsz24.svg" alt="">
                <p><b>Entrenamiento Avanzado:</b> Para perros que ya 
                    tienen obediencia básica.</p>
                <img src="../img/pets_23dp_61DB8A_FILL0_wght400_GRAD0_opsz24.svg" alt="">
                <p><b>Socialización:</b> Ayuda a que tu perro se 
                    relacione mejor con otros perros y personas.</p>
    
            </div>

        </div>
        <div class="inter2">
            <!-- <img src="/img/wave-haikei (2).svg" alt=""> -->
        </div>
        <div class="info2">
            <div class="div2">
                <div class="img2">
                </div>
            </div>
            <div class="content2">
                <h1>FUNDAMENTOS DEL ADIESTRAMIENTO CANINO</h1>
                <div class="cards">
                    <div class="card">
                        <h1>Adiestramiento canino</h1>
                        <img src="../img/iconPerro.svg" alt="">
                        <p>El adiestramiento canino es el proceso de enseñar 
                            a los perros comportamientos específicos mediante 
                            refuerzo positivo, repetición y consistencia. 
                            Ayuda a aprender comandos básicos, corregir 
                            comportamientos y mejorar la comunicación 
                            entre perro y dueño. Existen métodos adaptados 
                            a las necesidades y temperamento de cada perro.


                        </p>
                    </div>
                    <div class="card">
                        <h1>Refuerzo Positivo</h1>
                        <img src="../img/iconHueso.svg" alt="">
                        <p>El refuerzo positivo es una técnica de adiestramiento canino 
                            que recompensa al perro después de realizar una conducta deseada, 
                            aumentando la probabilidad de que se repita. Las recompensas pueden 
                            ser golosinas, elogios, juguetes o tiempo de juego. Este método 
                            fomenta el aprendizaje sin castigos, 
                            fortaleciendo la confianza entre el perro y su dueño.</p>
                    </div>
                    <div class="card">
                        <h1>Comportamiento Canino</h1>
                        <img src="../img/iconComport.svg" alt="">
                        <p>El comportamiento canino se refiere a cómo los perros reaccionan y 
                            se comunican con su entorno, otros animales y personas. 
                            Cada perro tiene una personalidad única, y el adiestramiento se utiliza para enseñarles a comportarse en diversas situaciones, incluyendo la obediencia, socialización, 
                            corrección de malas conductas y el aprendizaje de nuevas 
                            habilidades.</p>
                    </div>
                </div>
            </div>
        

        </div>

    </div>
    <div class="ubicacion">
        <div class="contentUbi">
            <h1>CERCA Y CONFIABLE</h1>
            <p>Prestamos nuestros servicios en la <b>ZONA NOROESTE</b> de Madrid,
                cubriendo áreas como [nombres de las localidades si es necesario].
                Si te encuentras por estas zonas <b>¡No dudes en contar con nosotros!</b>, podemos ofrecerte 
                 un servicio rápido y cómodo,
                ya sea para paseos, guardería o cuidado a domicilio.
               </p>
        </div>
        <div class="ubi" id="map" ></div>

    </div>
    <div class="interReserv" id="reserva"></div>

    <div class="seccFormulario">
        <div class="formulario">
            <form action="creaReservas.php" method="post">
                <!-- <fieldset> -->
                        <!-- Información del dueño -->
                        <label for="nombre">Nombre del dueño:</label>
                        <input type="text" id="nombre" name="nombre" required> <br>
                
                        <label for="telefono">Teléfono:</label>
                        <input type="tel" id="telefono" name="telefono" required> <br>
                
                        <label for="email">Correo electrónico:</label>
                        <input type="email" id="email" name="email" required> <br>

                        <label for="direc">Dirección de recogida:</label>
                        <input type="text" id="direc" name="direccion" required> <br>

                        <label for="fecha">Fecha:</label>
                        <input type="date" id="fecha" name="fecha" required> <br>

                        <label for="hora">Hora:</label>
                        <input type="time" id="hora" name="hora" required> <br>
                
                        <!-- Información de la mascota -->
                        
                        <label for="notas">Notas adicionales sobre la mascota:</label>
                        <textarea id="notas" name="info" rows="4" placeholder="Información sobre alergias, medicamentos, raza, edad, etc."></textarea> <br>
                
                        <!-- Botón de envío -->
                        <button type="submit">Enviar</button>
                    
                    
                <!-- </fieldset> -->
            </form>
        </div>
        <div class="contentForm">
            <h1>RESERVA EL CUIDADO PERFECTO PARA TU MASCOTA</h1>
            <p>En Cancare, nos apasiona brindar el mejor cuidado a tus compañeros peludos. Ya sea que necesiten paseos diarios,
                 cuidado en casa, o atención especial durante tu ausencia, 
                 estamos aquí para ayudarte.</p>
            <p>¡No esperes más! Llena el formulario ahora y deja que nosotros cuidemos de tu mejor amigo como se merece.</p>

        </div>
    </div>

    <footer>


        
    </footer>
    
</body>






<script src="../js/mapa.js">

    </script>


</html>
