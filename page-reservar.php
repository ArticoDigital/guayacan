<?php get_header(); ?>
    <section class="Contact">
        <h1>Formulario de contacto</h1>
        <div class="Contact-divisorTop"></div>
    </section>
<?php echo do_shortcode("[rev_slider alias='reserve']"); ?>
    <section class="Form ">
        <div class="Contact-divisorTopForm"></div>
        <form action="" id="FormReserve" class="container">
            <article>
                <p class="margin-top-12">Comprendemos que cada persona tiene preferencias distintas a la hora de viajar,
                    por esta razón decidimos crear el producto “Viajes a la Medida” en el cual nos tomamos el tiempo
                    para comprender tus deseos y expectativas, con el fin de crear el itinerario ideal, teniendo en
                    cuenta factores como el tiempo, los destinos, las actividades y el presupuesto; todo esto con el fin
                    de ayudarte a crear un itinerario que se ajuste a tus expectativas, logrando la mezcla perfecta de
                    experiencias, aventura, cultura, deporte y paisajes naturales.
                </p>
                <p>
                    Si estas interesado en recibir una propuesta de los viajes a la medida que ofrecemos, por favor
                    llena el siguiente formulario y te estaremos enviando de vuelta una propuesta con los posibles
                    itinerarios que más se ajustan a tu perfil.</p>
                <h3>Información personal</h3>
                <input type="text" placeholder="Nombre y Apellido">
                <input type="text" placeholder="Correo electrónico">
                <input type="text" placeholder="No de contacto">
                <input type="text" placeholder="País de residencia">
                <div class="row middle-items">
                    <label for="" class="col-7">Idioma. </label>
                    <div class="col-9">
                        <input id="language1" name="language" type="radio"> <label for="language1">Francés</label>
                        <input id="language2" name="language" type="radio"> <label for="language2">Español </label>
                        <input id="language3" name="language" type="radio"> <label for="language3">Inglés</label>
                        <input id="language4" name="language" value="otro" type="radio"> <label
                                for="language4">Otro</label>
                    </div>
                </div>
                <input type="text" placeholder="¿Cuál idioma?" class="hide" id="langNew">
            </article>
            <article>
                <h3>Información de viaje</h3>
                <label for="" class="row middle-items">
                    <span class="col-7">¿Cuánto tiempo planea estar en Colombia?</span>
                    <input type="text" class="datePicker col-9">
                </label>

                <div class="row middle-items">
                    <label for="" class="col-7">Su viaje lo realizaría… </label>
                    <div class="col-9">
                        <input id="travel1" name="travel" type="radio"> <label for="travel1">Solo</label>
                        <input id="travel2" name="travel" type="radio"> <label for="travel2">Pareja</label>
                        <input id="travel3" name="travel" type="radio"> <label for="travel3">Familia</label>
                        <input id="travel4" name="travel" type="radio" value="grupo"> <label for="travel4">Grupo</label>
                    </div>
                    <input type="text" id="grupo" class="hide" placeholder="Número de personas">
                </div>
                <div class="row margin-top-8">
                    <label for="" class="col-7 margin-top-8">¿Le gustaría viajar con otros grupos de personas?</label>
                    <div class="col-9">
                        <input id="group1" name="travel" type="radio"> <label for="group1">No me incomoda </label><br>
                        <input id="group2" name="travel" type="radio"> <label for="group2">Prefiero hacerlo solo</label><br>
                        <input id="group3" name="travel" type="radio"> <label for="group3">Viajo con mi grupo</label>

                    </div>
                </div>
                <div class="row middle-items">
                    <label class="col-7" for="">¿Estaría dispuesto a compartir la habitación con otras personas?</label>
                    <div class="col-9">
                        <input id="share1" name="share" type="radio"> <label for="share1">Si</label>
                        <input id="share2" name="share" type="radio"> <label for="share2">No</label>
                    </div>
                </div>
            </article>
            <article>
                <h3>¿Qué le interesa?</h3>


                <div class="row margin-top-8">
                    <label for="" class="col-7 margin-top-8"> Usted se define como una persona que…</label>
                    <div class="col-9">
                        <input id="define1" name="define" type="radio"> <label for="define1">Le gusta el confort y la
                            tranquilidad</label><br>
                        <input id="define2" name="define" type="radio"> <label for="define2">Le gusta la aventura y
                            desafiar sus limites</label><br>
                        <input id="define3" name="define" type="radio"> <label for="define3">Le gusta ser sorprendido y
                            vivir de manera diferente</label>

                    </div>
                </div>
                <div class="row margin-top-8">
                    <label for="" class="col-7 margin-top-8">¿Qué tipo de experiencias busca para su viaje?</label>
                    <div class="col-9">
                        <input id="experience1" name="experience" type="radio"> <label for="experience1">Contacto con la
                            naturaleza</label><br>
                        <input id="experience2" name="experience" type="radio"> <label for="experience2">Contacto con
                            comunidades locales</label><br>
                        <input id="experience3" name="experience" type="radio"> <label for="experience3">Conocer la
                            cultura colombiana</label><br>
                        <input id="experience4" name="experience" type="radio"> <label for="experience4">Practicar
                            deporte</label>

                    </div>
                </div>
                <div class="row margin-top-8">
                    <label for="" class="col-7 margin-top-8">¿Qué clase de lugares le gustaría visitar en
                        Colombia?</label>
                    <div class="col-9">
                        <input id="places1" name="places" type="radio"> <label for="places1">Playas</label><br>
                        <input id="places2" name="places" type="radio"> <label for="places2">Montañas</label><br>
                        <input id="places3" name="places" type="radio"> <label for="places3">Selva </label><br>
                        <input id="places4" name="places" type="radio"> <label for="places4">Centros urbanos</label>

                    </div>
                </div>
                <div class="row margin-top-8">
                    <label for="" class="col-7 margin-top-8">¿Durante su estadía en Colombia, le gustaría transportarse
                        a varios lugares sin importar la distancia o prefiere estar en un solo lugar?
                    </label>
                    <div class="col-9">
                        <input id="placeTransport1" name="placeTransport" type="radio"> <label for="placeTransport1">Quiero
                            conocer varios lugares, sin recorrer largas distancias.</label><br>
                        <input id="placeTransport2" name="placeTransport" type="radio"> <label for="placeTransport2">Quiero
                            ir a varios lugares, sin importar la distancia entre el uno y el otro.</label><br>
                        <input id="placeTransport3" name="placeTransport" type="radio"> <label for="placeTransport3">Quiero
                            conocer un solo lugar </label><br>

                    </div>
                </div>

                <div class="row margin-top-8">
                    <label for="" class="col-7 margin-top-8">¿Es importante para usted tener en su itinerario tiempos de
                        descanso y relajación?
                    </label>
                    <div class="col-9">
                        <input id="timeSleep1" name="timeSleep" type="radio"> <label for="timeSleep1">Me gustaría
                            relajarme en un solo lugar</label><br>
                        <input id="timeSleep2" name="timeSleep" type="radio"> <label for="timeSleep2">Me gustaría
                            visitar varios lugares con tiempos de descanso en cada uno</label><br>
                        <input id="timeSleep3" name="timeSleep" type="radio"> <label for="timeSleep3">Quiero conocer
                            varios lugares sin importar el descanso </label><br>

                    </div>
                </div>
                <div class="row margin-top-8">
                    <label for="" class="col-7 margin-top-8">¿Cuál el rango de presupuesto para su itinerario en
                        Colombia? Sin incluir tiketes aéreos</label>
                    <div class="col-9">
                        <input id="budget1" name="budget" type="radio"> <label for="budget1">US$1000 –
                            US$2000</label><br>
                        <input id="budget2" name="budget" type="radio"> <label for="budget2">US$2000 –
                            US$3000</label><br>
                        <input id="budget3" name="budget" type="radio"> <label for="budget3">US$3000 –
                            US$4.000</label><br>
                        <input id="budget4" name="budget" type="radio"> <label for="budget4">Mas de US$4.000</label><br>

                    </div>

                </div>
                <div class="row margin-top-8">
                    <label for="" class="col-7 margin-top-8"> ¿Desearía contar con un intérprete durante su
                        viaje?</label>
                    <div class="col-9">
                        <input id="translate1" name="translate" type="radio" value="si"> <label for="translate1">Si</label>
                        <input id="translate2" name="translate" type="radio" value="no"> <label for="translate2">No</label>
                    </div>
                </div>
                <div id="LangT" class="hide">
                    <div class="row middle-items">
                        <label for="" class="col-7">¿Qué Idioma?</label>
                        <div class="col-9">
                            <input id="langW1" name="langW" type="radio"> <label for="langW1">Francés</label>
                            <input id="langW2" name="langW" type="radio"> <label for="langW2">Español </label>
                            <input id="langW3" name="langW" type="radio"> <label for="langW3">Inglés</label>
                        </div>
                    </div>
                </div>
                <div class="row middle-items">
                    <textarea name="" id=""
                              placeholder=" ¿Que otro tipo de información considera que es importante para tener en cuenta en su itinerario?"
                              cols="30" rows="10"></textarea>
                </div>
                <div class="row middle-items">
                    <label class="col-10" for="">He leído y acepto la política de confidencialidad </label>
                    <div class="col-6">
                        <input id="policies" name="policies" type="radio"> <label for="policies"></label>
                        <a href="">Ver políticas</a>
                    </div>
                </div>
            </article>
            <div class="row justify-end margin-top-12   ">
                <button type="submit">Enviar</button>
            </div>
        </form>
    </section>
<?php get_footer();
