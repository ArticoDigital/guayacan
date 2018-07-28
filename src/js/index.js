import '../scss/index.scss';
import zoomMap from './ZoomMap';

if (document.querySelector('#svg-id'))
    zoomMap('#svg-id');

const choachi = document.querySelector('#Choachi');


console.log(choachi);
choachi.addEventListener('click', function () {
    console.log('raro');
});
