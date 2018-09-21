import '../scss/index.scss';
import zoomMap from './ZoomMap';
import flatpickr from "flatpickr";
import animateScrollTo from 'animated-scroll-to';
import modalClick from './modal';

import {
    Spanish
} from "flatpickr/dist/l10n/es.js"
import ToggleInput from "./ToggleInput"


if (document.querySelector('#svg-id'))
    zoomMap('#svg-id');
if (document.querySelector('#Choachi')) {
    const mapClick = document.querySelectorAll('.Map-click'),
        modal = document.querySelector('.Modal-info'),
        modalClose = document.querySelector('.Modal-close');
    mapClick.forEach(function (el) {
        el.addEventListener('click', function () {
            modal.classList.add('show');
            modalClick(el.dataset.city)
        });
    });
    if(modalClose){
        modalClose.addEventListener('click', function () {
            modal.classList.remove('show')
        });
    }

}
flatpickr(".datePicker", {
    "locale": Spanish
});

document.querySelector('.contactID').addEventListener('click', function () {
    animateScrollTo(document.querySelector('footer'));
    document.querySelector('.mobile').classList.remove('open')

});
const Form = document.querySelector('#FormReserve');
if (Form) {

    ToggleInput({
        name: 'language',
        id: 'langNew',
        value: 'otro'
    });

    ToggleInput({
        name: 'travel',
        id: 'grupo',
        value: 'grupo'
    });

    ToggleInput({
        name: 'advisory',
        id: 'otro',
        value: 'otro'
    });

    ToggleInput({
        name: 'translate',
        id: 'LangT',
        value: 'si'
    });

}

document.querySelector('.mobile-menuLine').addEventListener('click', function () {
    document.querySelector('.mobile').classList.toggle('open')
});