<?php
include_once 'header.php';
?>


    <main>
        <!-- Bloque principal -->
        <section id="bienvenida">
            <h1>¡Hola! Soy Alba</h1>
            <p>Bienvenido a mi currículum web. Aquí encontrarás información sobre mis habilidades, experiencia y proyectos destacados.</p>
        </section>

        <!-- Bloque Sobre Mí -->
        <section id="sobre-mi">
            <h2>Sobre mí</h2>
            <div>
                <p>Soy una apasionada de la informáticacon experiencia en administración/configuracion de servidores windows/linux, mantenimiento y configuración de equipos. Me encanta resolver problemas y penerme retos a la hora de elaborar nuevas tareas.</p>
                <p>Además de mi comienzo en la programación con experiencia en tecnologías como HTML, CSS, JavaScript y PHP. Me encanta aprender cosas nuevas cada día e ir actualizandome continuamente.</p>
                <p>También he comenzado a adentrarme en el mundo de la Inteligencia Artificial. Me parece una oportunidad única e interesante de aprender tantas cosas que puede incluir tanto en el ambito personal como laboral.</p>
            </div>
        </section>

        <!-- Bloque Proyectos -->
        <section id="proyectos">
            <h2>Proyectos Destacados</h2>
            <div class="proyectos-grid">
                <!-- Proyecto 1 -->
                <div class="proyecto">
                    <h3>Nombre del Proyecto</h3>
                    <img src="vista/media/proyecto1.png" alt="Imagen del proyecto">
                    <p>Descripción breve del proyecto. <a href="#">Ver más</a></p>
                </div>
                <!-- Proyecto 2 -->
                <div class="proyecto">
                    <h3>Nombre del Proyecto</h3>
                    <img src="vista/media/proyecto2.png" alt="Imagen del proyecto">
                    <p>Descripción breve del proyecto. <a href="#">Ver más</a></p>
                </div>
                <!-- Puedes agregar más proyectos -->
            </div>
        </section>

<?php
include_once 'footer.php';
?>