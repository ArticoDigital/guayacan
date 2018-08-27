<?php get_header(); ?>
    <section class="Contact">
        <h1>Formulario de contacto</h1>
        <div class="Contact-divisorTop"></div>
    </section>
<?php echo do_shortcode("[rev_slider alias='reserve']"); ?>
    <section class="Form ">
        <div class="Contact-divisorTopForm"></div>
        <form action="" class="container">
            <article>
                <h3>Información personal</h3>
                <input type="text" placeholder="País de residencia">
                <input type="text" placeholder="Idioma">
                <input type="text" placeholder="Correo electrónico">
                <input type="text" placeholder="Teléfono de contacto">
            </article>
            <article>
                <h3>Información de viaje</h3>
                <label for="" class="row middle-items">
                    <span class="col-7">Periodo de estadía en Colombia</span>
                    <input type="text" class="datePicker col-9">
                </label>
                <label for="" class="row middle-items">
                    <span class=" col-7">Periodo de estadía en Bogotá </span>
                    <input type="text" class="col-9 datePicker">
                </label>

                <div class="row middle-items">
                    <label for="" class="col-7">Ud Viaja... </label>
                    <div class="col-9"><input id="travel1" name="travel" type="radio"> <label
                                for="travel1">Pareja</label>
                        <input id="travel2" name="travel" type="radio"> <label for="travel2">Familia</label>
                        <input id="travel3" name="travel" type="radio"> <label for="travel3">Grupo</label>
                    </div>
                </div>
                <div class="row middle-items">

                    <label class="col-7" for="">¿Ya tiene reservado alojamiento?</label>
                    <div class="col-9">
                        <input id="lodging1" name="lodging" type="radio"> <label for="lodging1">Si</label>
                        <input id="lodging2" name="lodging" type="radio"> <label for="lodging2">No</label>
                    </div>
                </div>
            </article>
            <article>
                <h3>¿Qué le interesa?</h3>
                <div class="row middle-items">
                    <label class="col-3" for="">Bogotá</label>
                    <div class="col-13">
                        <input id="bogota1" name="bogota" type="radio"> <label for="bogota1">Un día</label>
                        <input id="bogota2" name="bogota" type="radio"> <label for="bogota2">Medio día</label>
                        <a href="">Ver plan</a>
                    </div>
                </div>
                <div class="row middle-items">
                    <label class="col-3" for="">Guatavita</label>
                    <div class="col-13">
                        <input id="guatavita1" name="guatavita" type="radio"> <label for="guatavita1">Un día</label>
                        <a href="">Ver plan</a>
                    </div>
                </div>
                <div class="row middle-items">
                    <label class="col-3" for="">Choachi</label>
                    <div class="col-13">
                        <input id="choachi1" name="choachi" type="radio"> <label for="choachi1">Un día</label>
                        <input id="choachi2" name="choachi" type="radio"> <label for="choachi2">Medio día</label>
                        <a href="">Ver plan</a>
                    </div>
                </div>
            </article>
            <div class="row justify-end margin-top-12   ">
                <button type="submit">Enviar</button>
            </div>
        </form>
    </section>
<?php get_footer();
