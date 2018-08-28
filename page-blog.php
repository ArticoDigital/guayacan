<?php get_header(); ?>
 <main class="row container Blog">
     <div class="col-16 col-l-10">
         <article class="col-16 Home-blogNew">
             <figure>
                 <img src="<?php bloginfo('template_url'); ?>/public/images/1.jpg" alt="">
             </figure>
             <div class="Home-blogNewText">
                 <h3>Bogotá Patrimonio cultural</h3>
                 <p>Lorem ipsum dolor amet hammock shoreditch ennui kitsch, bitters microdosing street art
                     meggings. Scenester vinyl crucifix ramps taxidermy hoodie. Normcore kitsch gochujang, viral
                     selfies pok pok vinyl meh activated charcoal synth. Venmo twee tilde salvia lo-fi semiotics
                     single-origin coffee vape, PBR&B echo park waistcoat shabby chic swag tote bag keytar.</p>
                 <div class="row justify-end">
                     <a href="">LEER MÁS...</a>
                 </div>
             </div>
         </article>
     </div>
     <div class="col-16 col-l-6">
        <section>
            <h2>suscríbase a nuestro blog</h2>
            <p>
                Suscribase con su correo eléctronico  a nuestro blog y reciba notificaciones de nuestros post y noticias.
            </p>
            <input type="text" placeholder="correo eléctronico">
            <button type="submit">inscribirse</button>
        </section>
     </div>
 </main>
<?php get_footer();
