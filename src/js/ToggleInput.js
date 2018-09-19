export default function (opt) {

    const lang = document.querySelectorAll('[name=' + opt.name + ']');
    lang.forEach((el) => {
        el.addEventListener('click', () => {
            if (document.querySelector('[name=' + opt.name + ']:checked').value === opt.value) {
                document.querySelector('#' + opt.id + '').classList.remove('hide')
                console.log( document.querySelector('#' + opt.id + ''))
            } else {
                document.querySelector('#' + opt.id + '').classList.add('hide')
            }
        })
    });

};