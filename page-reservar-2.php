<?php get_header(); ?>
    <section class="Contact">
        <h1>FORMULAIRE DE CONTACT</h1>
        <div class="Contact-divisorTop"></div>
    </section>
<?php echo do_shortcode("[rev_slider alias='reserve']"); ?>
    <section class="Form ">
        <div class="Contact-divisorTopForm"></div>
        <form action="" id="FormReserve" class="container">
            <article>
                <p class="margin-top-12"> <?php _e('Conscients que chaque personne a des préférences distinctes à l´heure de voyager, nous avons décidé de créer le « séjour sur mesure » dans lequel nous prenons le temps de comprendre vos désirs afin de créer pour vous l’itinéraire idéal qui prendra en compte des facteurs comme la durée de votre séjour, les destinations envisagées, les activités souhaitées et votre budget. Que vous cherchiez l’aventure, la culture, le sport, les paysages naturels, GUAYACAN TRACE vous aide à monter un séjour qui s’ajuste à vos attentes.','guayacan') ?>
                </p>
                <p>
                    <?php _e('Pour recevoir une proposition de « séjour sur mesure », veuillez remplir le formulaire suivant. Vous recevrez une proposition de séjour qui s’ajuste le mieux possible à votre profil. ','guayacan') ?> </p>

                <h3><?php _e('Información personal','guayacan') ?></h3>
                <input type="text" placeholder="<?php _e('Nombre y Apellido','guayacan') ?>">
                <input type="text" placeholder="<?php _e('Correo electrónico','guayacan') ?>">
                <input type="text" placeholder="<?php _e('No de contacto','guayacan') ?> ">
                <input type="text" placeholder="<?php _e('País de residencia','guayacan') ?>">
                <div class="row middle-items">
                    <label for="" class="col-7"><?php _e('Langue ','guayacan') ?></label>
                    <div class="col-9">
                        <input id="language1" name="language" type="radio"> <label for="language1"><?php _e('Francés','guayacan') ?></label>
                        <input id="language2" name="language" type="radio"> <label for="language2"><?php _e('Español','guayacan') ?></label>
                        <input id="language3" name="language" type="radio"> <label for="language3"><?php _e('Inglés','guayacan') ?></label>
                        <input id="language4" name="language" value="otro" type="radio"> <label
                                for="language4"><?php _e('Otro','guayacan') ?></label>
                    </div>
                </div>
                <input type="text" placeholder="¿Cuál idioma?" class="hide" id="langNew">
            </article>
            <article>
                <h3><?php _e('Información de viaje','guayacan') ?></h3>
                <label for="" class="row middle-items">
                    <span class="col-7"><?php _e('¿Cuánto tiempo planea estar en Colombia?','guayacan') ?></span>
                    <input type="text" class="datePicker col-9">
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
                    <label class="col-7" for="">¿Tenez vous absolument à avair une chambre individuelle ?</label>
                    <div class="col-9">
                        <input id="share1" name="share" type="radio"> <label for="share1">oui</label>
                        <input id="share2" name="share" type="radio"> <label for="share2">Non</label>
                    </div>
                </div>
            </article>
            <article>
                <h3><?php _e('¿Qué le interesa?','guayacan') ?></h3>


                <div class="row margin-top-8">
                    <label for="" class="col-7 margin-top-8"><?php _e('Usted se define como una persona que…','guayacan') ?></label>
                    <div class="col-9">
                        <input id="define1" name="define" type="radio"> <label for="define1"><?php _e('Le gusta el confort y la tranquilidad','guayacan') ?></label><br>
                        <input id="define2" name="define" type="radio"> <label for="define2"><?php _e('Le gusta la aventura y desafiar sus limites','guayacan') ?> </label><br>
                        <input id="define3" name="define" type="radio"> <label for="define3"><?php _e('Le gusta ser sorprendido y vivir de manera diferente','guayacan') ?></label>

                    </div>
                </div>
                <div class="row margin-top-8">
                    <label for="" class="col-7 margin-top-8"><?php _e('¿Qué tipo de experiencias busca para su viaje?','guayacan') ?></label>
                    <div class="col-9">
                        <input id="experience1" name="experience" type="radio"> <label for="experience1"><?php _e('Contacto con la naturaleza','guayacan') ?></label><br>
                        <input id="experience2" name="experience" type="radio"> <label for="experience2"><?php _e('Contacto con comunidades locales','guayacan') ?></label><br>
                        <input id="experience3" name="experience" type="radio"> <label for="experience3"><?php _e('Conocer la cultura colombiana','guayacan') ?> </label><br>
                        <input id="experience4" name="experience" type="radio"> <label for="experience4"><?php _e('Practicar deporte','guayacan') ?></label>

                    </div>
                </div>
                <div class="row margin-top-8">
                    <label for="" class="col-7 margin-top-8"><?php _e('¿Qué clase de lugares le gustaría visitar en Colombia?','guayacan') ?></label>
                    <div class="col-9">
                        <input id="places1" name="places" type="radio"> <label for="places1"><?php _e('Playas','guayacan') ?></label><br>
                        <input id="places2" name="places" type="radio"> <label for="places2"><?php _e('Montañas','guayacan') ?></label><br>
                        <input id="places3" name="places" type="radio"> <label for="places3"><?php _e('Selva','guayacan') ?></label><br>
                        <input id="places4" name="places" type="radio"> <label for="places4"><?php _e('Centros Urbanos','guayacan') ?></label>

                    </div>
                </div>
                <div class="row margin-top-8">
                    <label for="" class="col-7 margin-top-8"><?php _e('Durant votre séjour en Colombie, quel rythme souhaitez-vous adopter ?','guayacan') ?> </label>
                    <div class="col-9">
                        <input id="placeTransport1" name="placeTransport" type="radio"> <label for="placeTransport1"><?php _e('Quiero conocer varios lugares, sin recorrer largas distancias.','guayacan') ?></label><br>
                        <input id="placeTransport2" name="placeTransport" type="radio"> <label for="placeTransport2"><?php _e('Quiero ir a varios lugares, sin importar la distancia entre el uno y el otro.','guayacan') ?></label><br>
                        <input id="placeTransport3" name="placeTransport" type="radio"> <label for="placeTransport3"><?php _e('Quiero conocer un solo lugar','guayacan') ?></label><br>

                    </div>
                </div>

                <div class="row margin-top-8">
                    <label for="" class="col-7 margin-top-8"><?php _e('¿Es importante para usted tener en su itinerario tiempos de descanso y relajación?','guayacan') ?>
                    </label>
                    <div class="col-9">
                        <input id="timeSleep1" name="timeSleep" type="radio"> <label for="timeSleep1"><?php _e('Me gustaría relajarme en un solo lugar','guayacan') ?></label><br>
                        <input id="timeSleep2" name="timeSleep" type="radio"> <label for="timeSleep2"><?php _e('Me gustaría visitar varios lugares con tiempos de descanso en cada uno','guayacan') ?></label><br>
                        <input id="timeSleep3" name="timeSleep" type="radio"> <label for="timeSleep3"><?php _e('Quiero conocer varios lugares sin importar el descanso ','guayacan') ?> </label><br>

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
                    <label for="" class="col-7 margin-top-8"><?php _e('¿Desearía contar con un intérprete durante su viaje?','guayacan') ?> </label>
                    <div class="col-9">
                        <input id="translate1" name="translate" type="radio" value="si"> <label for="translate1"><?php _e('Si','guayacan') ?></label>
                        <input id="translate2" name="translate" type="radio" value="no"> <label for="translate2"><?php _e('No','guayacan') ?></label>
                    </div>
                </div>
                <div id="LangT" class="hide">
                    <div class="row middle-items">
                        <label for="" class="col-7"><?php _e('Idioma','guayacan') ?></label>
                        <div class="col-9">
                            <input id="langW1" name="langW" type="radio"> <label for="langW1"><?php _e('Francés','guayacan') ?></label>
                            <input id="langW2" name="langW" type="radio"> <label for="langW2"><?php _e('Español','guayacan') ?> </label>
                            <input id="langW3" name="langW" type="radio"> <label for="langW3"><?php _e('Inglés','guayacan') ?></label>
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
            <div class="row justify-end margin-top-12   ">
                <button type="submit"><?php _e('Enviar','guayacan') ?></button>
            </div>
        </form>
    </section>
<?php get_footer();
