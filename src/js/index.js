import '../scss/index.scss';
import zoomMap from './ZoomMap';
import flatpickr from "flatpickr";
import animateScrollTo from 'animated-scroll-to';
import {Spanish} from "flatpickr/dist/l10n/es.js"


if (document.querySelector('#svg-id'))
    zoomMap('#svg-id');
if (document.querySelector('#Choachi')) {
    const choachi = document.querySelector('#Choachi'),
        modal = document.querySelector('.Modal-info'),
        modalClose = document.querySelector('.Modal-close');
    choachi.addEventListener('click', function () {
        modal.classList.add('show')
    });
    modalClose.addEventListener('click', function () {
        modal.classList.remove('show')
    });

}
flatpickr(".datePicker", {"locale": Spanish, mode: "range"});

document.querySelector('.contactID').addEventListener('click', function () {
    animateScrollTo(document.querySelector('footer'));
});

