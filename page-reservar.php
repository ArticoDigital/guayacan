<?php get_header(); ?>
    <section class="Contact">
        <h1>Formulario de contacto</h1>
        <div class="Contact-divisorTop"></div>
    </section>
<?php echo do_shortcode("[rev_slider alias='reserve']"); ?>
    <section class="Form ">
        <div class="Contact-divisorTopForm"></div>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" id="FormReserve" method="post"  class="container">
            <article>
                <p class="margin-top-12"> <?php _e('Comprendemos que cada persona tiene preferencias distintas a la hora de viajar,
                    por esta razón decidimos crear el producto “Viajes a la Medida” en el cual nos tomamos el tiempo
                    para comprender tus deseos y expectativas, con el fin de crear el itinerario ideal, teniendo en
                    cuenta factores como el tiempo, los destinos, las actividades y el presupuesto; todo esto con el fin
                    de ayudarte a crear un itinerario que se ajuste a tus expectativas, logrando la mezcla perfecta de
                    experiencias, aventura, cultura, deporte y paisajes naturales.','guayacan') ?>
                </p>
                <p>
                    <?php _e('Si estas interesado en recibir una propuesta de los viajes a la medida que ofrecemos, por favor 
                    llena el siguiente formulario y te estaremos enviando de vuelta una propuesta con los posibles
                    itinerarios que más se ajustan a tu perfil','guayacan') ?> </p>

                <h3><?php _e('Información personal','guayacan') ?></h3>
                <input type="text" name="nameUser" placeholder="<?php _e('Nombre y Apellido','guayacan') ?>">
                <input type="text" name="email" placeholder="<?php _e('Correo electrónico','guayacan') ?>">
                <input type="text" name="numberContact" placeholder="<?php _e('No de contacto','guayacan') ?> ">
                <input type="text" name="country" placeholder="<?php _e('País de residencia','guayacan') ?>">
                <div class="row middle-items">
                    <label for="" name="lang" class="col-7"><?php _e('Idioma.','guayacan') ?></label>
                    <div class="col-9">
                        <input id="language1" name="language" type="radio"> <label for="language1"><?php _e('Francés','guayacan') ?></label>
                        <input id="language2" name="language" type="radio"> <label for="language2"><?php _e('Español','guayacan') ?></label>
                        <input id="language3" name="language" type="radio"> <label for="language3"><?php _e('Inglés','guayacan') ?></label>
                        <input id="language4" name="language" value="otro" type="radio"> <label
                                for="language4"><?php _e('Otro','guayacan') ?></label>
                    </div>
                </div>
                <input type="text" name="otherLang" placeholder="¿Cuál idioma?" class="hide" id="langNew">
            </article>
            <article>
                <h3><?php _e('Información de viaje','guayacan') ?></h3>
                <label for="" class="row middle-items">
                    <span class="col-7"><?php _e('¿Cuánto tiempo planea estar en Colombia?','guayacan') ?></span>
                    <input type="text"  class="datePicker col-9">
                </label>

                <div class="row middle-items">
                    <label for="" class="col-7"><?php _e('Su viaje lo realizaría…','guayacan') ?></label>
                    <div class="col-9">
                        <input id="travel1" name="travel" type="radio"> <label for="travel1"><?php _e('Solo','guayacan') ?></label>
                        <input id="travel2" name="travel" type="radio"> <label for="travel2"><?php _e('Pareja','guayacan') ?></label>
                        <input id="travel3" name="travel" type="radio"> <label for="travel3"><?php _e('Familia','guayacan') ?></label>
                        <input id="travel4" name="travel" type="radio" value="grupo"> <label for="travel4"><?php _e('Grupo','guayacan') ?></label>

                    <input type="text" id="grupo" class="hide" placeholder="Número de personas">
                </div>
                <div class="row margin-top-8">
                    <label for="" class="col-7 margin-top-8"><?php _e('¿Le gustaría viajar con otros grupos de personas?','guayacan') ?></label>
                    <div class="col-9">
                        <input id="group1" name="travel" type="radio"> <label for="group1"><?php _e('No me incomoda','guayacan') ?></label><br>
                        <input id="group2" name="travel" type="radio"> <label for="group2"><?php _e('Prefiero hacerlo solo','guayacan') ?></label><br>
                        <input id="group3" name="travel" type="radio"> <label for="group3"><?php _e('Viajo con mi grupo','guayacan') ?></label>

                    </div>
                </div>
                <div class="row middle-items">
                    <label class="col-7" for="">¿Desea dormir en una habitación individual?</label>
                    <div class="col-9">
                        <input id="share1" name="share" type="radio"> <label for="share1">Si</label>
                        <input id="share2" name="share" type="radio"> <label for="share2">No</label>
                    </div>
                </div>
            </article>
            <article>
                <h3><?php _e('¿Qué le interesa?','guayacan') ?></h3>


                <div class="row margin-top-8">
                    <label for="" class="col-7 margin-top-8"><?php _e('Usted se define como una persona que…','guayacan') ?></label>
                    <div class="col-9">
                        <input id="define1" name="define" type="radio"> <label for="define1"><?php _e('Le gusta el confort y la
                            tranquilidad','guayacan') ?></label><br>
                        <input id="define2" name="define" type="radio"> <label for="define2"><?php _e('Le gusta la aventura y
                            desafiar sus limites','guayacan') ?> </label><br>
                        <input id="define3" name="define" type="radio"> <label for="define3"><?php _e('Le gusta ser sorprendido y vivir de manera diferente','guayacan') ?></label>

                    </div>
                </div>
                <div class="row margin-top-8">
                    <label for="" class="col-7 margin-top-8"><?php _e('¿Qué tipo de experiencias busca para su viaje?','guayacan') ?></label>
                    <div class="col-9">
                        <input id="experience1" name="experience" type="radio"> <label for="experience1"><?php _e('Contacto con la naturaleza','guayacan') ?></label><br>
                        <input id="experience2" name="experience" type="radio"> <label for="experience2"><?php _e('Contacto con comunidades locales','guayacan') ?></label><br>
                        <input id="experience3" name="experience" type="radio"> <label for="experience3"><?php _e('Conocer la
                            cultura colombiana','guayacan') ?> </label><br>
                        <input id="experience4" name="experience" type="radio"> <label for="experience4"><?php _e('Practicar
                            deporte','guayacan') ?></label>

                    </div>
                </div>
                <div class="row margin-top-8">
                    <label for="" class="col-7 margin-top-8"><?php _e('¿Qué clase de lugares le gustaría visitar en Colombia?','guayacan') ?></label>
                    <div class="col-9">
                        <input id="places1" name="places1" type="checkbox" value="Playas"> <label for="places1"><?php _e('Playas','guayacan') ?></label><br>
                        <input id="places2" name="places2" type="checkbox" value="Montañas"> <label for="places2"><?php _e('Montañas','guayacan') ?></label><br>
                        <input id="places3" name="places3" type="checkbox" value="Selva"> <label for="places3"><?php _e('Selva','guayacan') ?></label><br>
                        <input id="places4" name="places4" type="checkbox" value="Centros Urbanos"> <label for="places4"><?php _e('Centros Urbanos','guayacan') ?></label>

                    </div>
                </div>
                <div class="row margin-top-8">
                    <label for="" class="col-7 margin-top-8"><?php _e('¿Durante su estadía en Colombia, le gustaría transportarse a varios lugares sin importar la distancia o prefiere estar en un solo lugar?','guayacan') ?>
                    </label>
                    <div class="col-9">
                        <input id="placeTransport1" name="placeTransport1" value="Quiero conocer varios lugares, sin recorrer largas distancias" type="checkbox"> <label for="placeTransport1"><?php _e('Quiero conocer varios lugares, sin recorrer largas distancias.','guayacan') ?></label><br>
                        <input id="placeTransport2" name="placeTransport2" value="Quiero ir a varios lugares, sin importar la distancia entre el uno y el otro." type="checkbox"> <label for="placeTransport2"><?php _e('Quiero ir a varios lugares, sin importar la distancia entre el uno y el otro.','guayacan') ?></label><br>
                        <input id="placeTransport3" name="placeTransport3" value="Quiero conocer un solo lugar" type="checkbox"> <label for="placeTransport3"><?php _e('Quiero conocer un solo lugar','guayacan') ?></label><br>

                    </div>
                </div>

                <div class="row margin-top-8">
                    <label for="" class="col-7 margin-top-8"><?php _e('¿Es importante para usted tener en su itinerario tiempos de descanso y relajación?','guayacan') ?>
                    </label>
                    <div class="col-9">
                        <input id="timeSleep1" name="restTimes1" type="checkbox" value="Me gustaría relajarme en un solo lugar"> <label for="timeSleep1"><?php _e('Me gustaría relajarme en un solo lugar','guayacan') ?></label><br>
                        <input id="timeSleep2" name="restTimes2" value="Me gustaría visitar varios lugares con tiempos de descanso en cada uno" type="checkbox"> <label for="timeSleep2"><?php _e('Me gustaría visitar varios lugares con tiempos de descanso en cada uno','guayacan') ?></label><br>
                        <input id="timeSleep3" name="restTimes3" value="Quiero conocer varios lugares sin importar el descanso" type="checkbox"> <label for="timeSleep3"><?php _e('Quiero conocer varios lugares sin importar el descanso ','guayacan') ?> </label><br>

                    </div>
                </div>
                <div class="row margin-top-8">
                    <label for="" class="col-7 margin-top-8"><?php _e('¿Cuál el rango de presupuesto para su itinerario en Colombia? Sin incluir tiketes aéreos','guayacan') ?></label>
                    <div class="col-9">
                        <input id="budget1" name="budget" type="radio"> <label for="budget1"><?php _e('US$1000 – 
                            US$2000','guayacan') ?>
                        </label><br>
                        <input id="budget2" name="budget" type="radio"> <label for="budget2"><?php _e('US$2000 –
                            US$3000','guayacan') ?></label><br>
                        <input id="budget3" name="budget" type="radio"> <label for="budget3"><?php _e('US$3000 –
                            US$4.000','guayacan') ?></label><br>
                        <input id="budget4" name="budget" type="radio"> <label for="budget4"><?php _e('Mas de US$4.000','guayacan') ?></label><br>

                    </div>

                </div>
                <div class="row margin-top-8">
                    <label for="" class="col-7 margin-top-8"><?php _e('¿Desearía contar con un intérprete durante su
                        viaje?','guayacan') ?> </label>
                    <div class="col-9">
                        <input id="translate1" name="interpreter" type="radio" value="yes"> <label for="translate1"><?php _e('Si','guayacan') ?></label>
                        <input id="translate2" name="interpreter" type="radio" value="no"> <label for="translate2"><?php _e('No','guayacan') ?></label>
                    </div>
                </div>
                <div id="LangT" class="hide">
                    <div class="row middle-items">
                        <label for="" class="col-7"><?php _e('Idioma','guayacan') ?></label>
                        <div class="col-9">
                            <input id="langW1" name="langFrance" type="checkbox"> <label for="langW1"><?php _e('Francés','guayacan') ?></label>
                            <input id="langW2" name="langSpanish" type="checkbox"> <label for="langW2"><?php _e('Español','guayacan') ?> </label>
                            <input id="langW3" name="langEnglish" type="checkbox"> <label for="langW3"><?php _e('Inglés','guayacan') ?></label>
                        </div>
                    </div>
                </div>
                <div class="row middle-items">
                    <textarea name="" id=""
                              placeholder=" <?php _e('¿Que otro tipo de información considera que es importante para tener en cuenta en su itinerario?','guayacan') ?>"
                              cols="30" rows="10"></textarea>
                </div>
                <div class="row middle-items">
                    <label class="col-10" for=""><?php _e('He leído y acepto la política de confidencialidad ','guayacan') ?></label>
                    <div class="col-6">
                        <input id="policies" name="policies" type="radio"> <label for="policies"></label>
                        <a href=""><?php _e('Ver políticas','guayacan') ?></a>
                    </div>
                </div>
            </article>
            <input type="hidden" name="submitForm" value="1">
            <div class="row justify-end margin-top-12   ">
                <button type="submit"><?php _e('Enviar','guayacan') ?></button>
            </div>
        </form>
    </section>
<?php
$submitForm = $_REQUEST['submitForm'];
if ($submitForm): ?>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.28.10/dist/sweetalert2.all.min.js"></script>
    <script>
        swal({
            type: 'success',
            title: '¡Su mensaje ha sido enviado!',
            showConfirmButton: false,
            timer: 6000
        })
    </script>
<?php endif; ?>
<?php

if ($submitForm):
    echo '<pre>';
    print_r($_REQUEST);
    exit;
    $to = array('juan2ramos@gmail.com');
    $subject = 'Mensaje desde el formulario de contacto';
    $message .= 'Nuevo mensaje desde el formulario de contacto<br/>';
    function wpdocs_set_html_mail_content_type()
    {
        return 'text/html';
    }

    add_filter('wp_mail_content_type', 'wpdocs_set_html_mail_content_type');
    foreach ($_REQUEST as $key => $item) {
        $message .= $key . ': ' . $item . '<br>';
    }
    wp_mail($to, $subject, $message);
endif;
?>
<?php get_footer();
