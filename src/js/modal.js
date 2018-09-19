const infoModal = {
        'bogota': {
            'title': 'Bogotá',
            'subtitle': '2600 metros mas cerca de las estrellas',
            'content': 'A la sombra de Monserrate (3152 m), la capital colombiana se agita de sol a sol. El visitante quedará sorprendido por esta ciudad variopinta entre los rascacielos modernos y el barrio colonial de la Candelaria, que fue en gran parte destruido por una muchedumbre furiosa después del asesinato del muy popular líder liberal Gaitán en 1948 (El Bogotazo).',
            'url': 'http://guayacantrace.com/bogota/',
            'image': 'http://guayacantrace.com/wp-content/uploads/2018/09/slide-Bogota-2-e1536265838952.jpg'
        },
        'villa': {
            'title': 'Villa de Leyva',
            'subtitle': 'Origen de la leyenda del dorado',
            'content': 'Fundada en 1572, Villa de Leyva, pueblo situado a 160 km al Nord-Este de Bogotá (3h00), es una de las joyas arquuitectónicas del pasado colonial de Colombia con sus balcones, sus calles empedradas y su inmensa plaza central de inigualable encanto. Fue en este pequeño pueblo en el que florecen hoy restaurantes y salones de té donde los libertadores Simón Bolívar, Antonio Nariño y Camilo Torres firmaron en 1812 las leyes de la Primera República Colombiana. ',
            'url': 'http://guayacantrace.com/villa-de-leyva/',
            'image': 'http://guayacantrace.com/wp-content/uploads/2018/09/slide-villa-de-leyva-1.jpg'
        },
        'choachi': {
            'title': 'Choachi',
            'subtitle': 'Ventana de la Luna',
            'content': '¡Cambio total de paisajes a unos pocos kilómetros de Bogotá ! En unos cuantos minutos, la ciudad se esfuma por entre las montañas y deja lugar a los paisajes lunares del páramo, verdadera inmensidad silenciosa y brumosa que le da a uno ganas de perderse y olvidarse por un momento de la efervescencia del diario vivir y la civilización. Andar por unos caminos de piedra seculares (caminos reales) transformados en arroyos… Caminar hacia manantiales y lagunas… Subir a las cumbres… Senderistas principiantes o experimentados, cada uno quedará satisfecho por unas cuantas horas.',
            'url': 'http://guayacantrace.com/choachi/',
            'image': 'http://guayacantrace.com/wp-content/uploads/2018/09/slide-choachi-1-e1536340938271.jpg'
        },
        'guatavita': {
            'title': 'Guatavita',
            'subtitle': 'Origen de la leyenda del dorado\n',
            'content': 'Descubran el lago sagrado de los indígenas muisca que dio su origen al mito de El Dorado, a 75 km al Norte de Bogotá (1h30 de carretera).\n' +
            '\n' +
            'Durante su toma de poder, el cacique muisca se cubría de polvo de oro antes de lanzarse al agua desde una balsa en medio del lago ante la mirada de la comunidad que echaba objetos de oro al agua como ofrendas. En el Siglo XVI, el rito despertó las fantasías de los europeos que multiplicaron los intentos para recuperar el precioso metal que se había acumulado a través de los tiempos.',
            'url': 'http://guayacantrace.com/guatavita/',
            'image': 'http://guayacantrace.com/wp-content/uploads/2018/09/slide-Guatavita-1-e1536342467799.jpg'
        },
        'trait': {
            'title': 'Senderismo / Trail',
            'subtitle': 'Desafía tus limites',
            'content': '¿Quién nunca ha soñado con praticar su pasión por el senderismo caminando por la selva tropical siguiendo las huellas de las civilizaciones precolombinas ? ¿Qué corredor no se ha imaginado un día recorriendo a buen paso los senderos de las montañas andinas ? GUAYACAN TRACE les propone experimentar la aventura colombiana mediante su pasión. En dos semanas, visiten los sitios naturales y culturales ineludibles de Colombia mientras va practicando su deporte favorito. Descubran primero Bogotá y sus alrededores. Caminatas deportivas, salidas de trail, tomen altura para admirar los paisajes andinos a más de 3500 metros de altura.',
            'url': 'http://guayacantrace.com/senderismo-trail/',
            'image': 'http://guayacantrace.com/wp-content/uploads/2018/09/foto-corredores-3.jpg'
        },
    },
    title = document.querySelector('#Modal-title'),
    subtitle = document.querySelector('#Modal-subtitle'),
    content = document.querySelector('#Modal-content'),
    image = document.querySelector('#Modal-image'),
    url = document.querySelector('#Modal-url');

export default function (city) {
    title.innerHTML = infoModal[city].title;
    subtitle.innerHTML = infoModal[city].subtitle;
    content.innerHTML = infoModal[city].content;
    url.setAttribute('href', infoModal[city].url);
    image.style.backgroundImage = "url('" + infoModal[city].image + "')"
};