(function () {
    "use strict";

    // TOGGLE NAVBAR
    var burger = document.querySelector('.burger');
    var nav = document.querySelector('#'+burger.dataset.target);
    burger.addEventListener('click', function () {
        burger.classList.toggle('is-active');
        nav.classList.toggle('is-active');
    });

    // WRAP SELECTS IN WIDGET
    var selectWrap = null;
    var getSelect = document.querySelectorAll('.widget select');
    for (var i = 0; i < getSelect.length > 0; i++) {
        selectWrap = document.createElement('div');
        selectWrap.classList.add('select');
        getSelect[i].parentNode.insertBefore(selectWrap, getSelect[i]);
        selectWrap.appendChild(getSelect[i]);
    }

})();