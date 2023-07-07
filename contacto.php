<?php
require 'includes/funciones.php';
incluirTemplate('header', $inicio=false);

?>

        <main class="contenedor seccion">
            <section class="imagen-contactar">
                <h2>¡Contacta con nosotros!</h2>
                <p>Y encuentra la casa de tus sueños</p>
            </section>
            <h2 style="margin-top: 20px;">Formulario de contacto</h2>
            <div style="margin-top: 30px;"class="seccion-contacto">
                <div>
                    <form class="formulario">
                        <fieldset>
                            <legend>Información personal</legend>
                            
                            <label for="nombre">Nombre</label>
                            <input id="nombre" type="text" placeholder="Ingresa tu nombre">
                            
                            <label for="email">Email</label>
                            <input id="email" type="email" placeholder="Ingresa tu email">
                            
                            <label for="telefono">Telefono</label>
                            <input id="telefono" type="tel" placeholder="Ingresa tu telefono">
                        
                            <label for="mensaje">Mensaje</label>
                            <textarea id="mensaje" placeholder="Ingresa mensaje"></textarea>
                        </fieldset>

                        <fieldset>
                            <legend>Información sobre propiedad</legend>

                            <label for="opciones">Compra o vende</label>
                            <select for="opciones">
                                <option value="" disabled selected>Seleccione opción</option>
                                <option value="Compra">Compra</option>
                                <option value="Vende">Vende</option>
                            </select>
                            <label for="presupuesto">Precio o presupuesto</label>
                            <input id="presupuesto"type="number" placeholder="Tu precio o presupuesto" id="presupuesto">
                        </fieldset>

                        <fieldset>
                            <legend>Contacto</legend>

                            <p>Como desea ser contactado</p>

                            <div class="forma-contacto">
                                <label for="contacto-telefono">Telefono</label>
                                <input type="radio" id="contacto-telefono" name="contacto" value="telefono" />

                                <label for="contacto-email">Email</label>
                                <input type="radio" id="contacto-email" name="contacto" value="email" />
                                
                            </div>
                            <p>Si eligió telefono indique fecha y hora</p>

                            <label for="fecha">Fecha</label>
                            <input type="date" id="fecha" name="fecha" required >

                            <label for="hora">Hora</label>
                            <input type="time" id="hora" min="9:00" max="18:00">
                        </fieldset>
                        <div style="display: flex;justify-content: center;">
                            <input type="submit" class="boton-amarillo">
                        </div>
                        
                    </form>
                </div>
                <div class="redes" style="margin-top:30px;">
                    <div class="iconos-redes">
                        <ul style="list-style: none;" class="iconos-redes">
                            <li>
                                <img loading="lazy" style="width:70px;" src="build/img/fb.webp" alt="iconowater">
                            </li>
                            <li>
                                <img loading="lazy" style="width:70px;" src="build/img/ig.webp" alt="icono_estacionamiento">
                            </li>
                            <li>
                                <img loading="lazy" style="width:70px;" src="build/img/wsp.webp" alt="icono_estacionamiento">
                            </li>
                        </ul>
                    </div>
                    <div class="adress">
                        <p><i>Población yobilo, nuevo horizonte 1023</i></p>
                    </div>
                </div>
               
            </div>
        </main>
    
        <?php
    incluirTemplate('footer');
    ?>
    

    <script src="build/js/bundle.min.js"></script>
    
</body>
</html>