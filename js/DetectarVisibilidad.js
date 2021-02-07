// configuración


/**
 * @file Esta biblioteca define cuatro funciones globales para simular un evento inexistente que permite detectar cuando un elemento cualquiera de la página entra o sale del área visible de la misma.
 * @author José Manuel Alarcón - www.JASoft.org - www.campusMVP.es
 * @version 1.0
 * @tutorial http://www.jasoft.org/Blog/post/Detectar-la-aparicion-y-desaparicion-de-un-elemento-evento-inViewport.aspx
 */

/**
 * Determina si el elemento que se le pasa como parámetro está completamente visible en la ventana del navegador o no.
 * @param {object} elto - El elemento cuya visibilidad nos interesa determinar
 * @returns {boolean} true si el elemento está visible por completo, false si no lo está
 */
function isElementTotallyVisible(elto) {
    var anchoViewport = window.innerWidth || document.documentElement.clientWidth;
    var alturaViewport = window.innerHeight || document.documentElement.clientHeight;
    //Posición de la caja del elemento
    if (elto != null) {
        var caja = elto.getBoundingClientRect();
        return (caja.top >= 0 &&
            caja.bottom <= alturaViewport &&
            caja.left >= 0 &&
            caja.right <= anchoViewport);
    }

}

/**
 * Determina si el elemento que se le pasa como parámetro está visiblea aunque sea parcialmente en la ventana del navegador o no.
 * @param {object} elto - El elemento cuya visibilidad nos interesa determinar
 * @returns {boolean} true si el elemento está visible aunque sea parcialmente, false si no lo está
 */
function isElementPartiallyVisible(elto) {
    var anchoViewport = window.innerWidth || document.documentElement.clientWidth;
    var alturaViewport = window.innerHeight || document.documentElement.clientHeight;
    //Posición de la caja del elemento
    if (elto != null) {
        
        var caja = elto.getBoundingClientRect();
        var cajaDentroH = (caja.left >= 0 && caja.left <= anchoViewport) ||
            (caja.right >= 0 && caja.right <= anchoViewport);
        var cajaDentroV = (caja.top >= 0 && caja.top <= alturaViewport) ||
            (caja.bottom >= 0 && caja.bottom <= alturaViewport);

        return (cajaDentroH && cajaDentroV);
    }


}

/**
 * Define un manejador para poder detectar automáticamente cuando un determinado elemento cambia de visibilidad en la página. Esta versión considera que el elemento es visible si cualquier parte del mismo está en el área visible de la página.
 * @param {object} elto - El elemento cuya visibilidad nos interesa determinar
 * @param {function} handler - La función a la que se llamará para determinar que el elemento ha cambiado su estado de visibilidad. Se le pasa un booleano para indicar si es o no visible, y una referencia al elemento que ha cambiado la visibilidad.
 * @returns {boolean} Devuelve true si hay algo (por poco que sea) del elemento en el área visible de la página, y devuelve false si el elemento desaparece por completo del área visible.
 */
function inViewportPartially(elto, handler) {
    var anteriorVisibilidad = isElementPartiallyVisible(elto); //crea una clausura para el manejador de este evento concreto
    //Defino un manejador para determinar posibles cambios
    function detectarPosibleCambio() {
        var esVisible = isElementPartiallyVisible(elto);
        if (esVisible != anteriorVisibilidad) { //ha cambiado el estado de visibilidad del elemento
            anteriorVisibilidad = esVisible;
            if (typeof handler == "function")
                handler(esVisible, elto);
        }
    }
    //Asocio esta función interna a los diversos eventos que podrían producir un cambio en la visibilidad
    window.addEventListener("load", detectarPosibleCambio);
    window.addEventListener("resize", detectarPosibleCambio);
    window.addEventListener("scroll", detectarPosibleCambio);
}

/**
 * Define un manejador para poder detectar automáticamente cuando un determinado elemento cambia de visibilidad en la página.
 * @param {object} elto - El elemento cuya visibilidad nos interesa determinar
 * @param {function} handler - La función a la que se llamará para determinar que el elemento ha cambiado su estado de visibilidad. Se le pasa un booleano para indicar si es o no visible, y una referencia al elemento que ha cambiado la visibilidad.
 * @returns {boolean} Devuelve true si el elemento completo está en el área visible de la página, y devuelve false si cualquier parte del mismo (por pequeña que sea)desaparece del área visible.
 */
function inViewportTotally(elto, handler) {
    var anteriorVisibilidad = isElementTotallyVisible(elto); //crea una clausura para el manejador de este evento concreto
    //Defino un manejador para determinar posibles cambios
    function detectarPosibleCambio() {
        var esVisible = isElementTotallyVisible(elto);
        if (esVisible != anteriorVisibilidad) { //ha cambiado el estado de visibilidad del elemento
            anteriorVisibilidad = esVisible;
            if (typeof handler == "function")
                handler(esVisible, elto);
        }
    }
    //Asocio esta función interna a los diversos eventos que podrían producir un cambio en la visibilidad
    window.addEventListener("load", detectarPosibleCambio);
    window.addEventListener("resize", detectarPosibleCambio);
    window.addEventListener("scroll", detectarPosibleCambio);
}

function isElementTotallyVisible1(elto) {
    var anchoViewport = window.innerWidth || document.documentElement.clientWidth;
    var alturaViewport = window.innerHeight || document.documentElement.clientHeight;
    //Posición de la caja del elemento
    if (elto != null) {
    var caja = elto.getBoundingClientRect();
    return (caja.top >= 0 &&
        caja.bottom <= alturaViewport &&
        caja.left >= 0 &&
        caja.right <= anchoViewport);
    }
}

/**
 * Determina si el elemento que se le pasa como parámetro está visiblea aunque sea parcialmente en la ventana del navegador o no.
 * @param {object} elto - El elemento cuya visibilidad nos interesa determinar
 * @returns {boolean} true si el elemento está visible aunque sea parcialmente, false si no lo está
 */
function isElementPartiallyVisible1(elto) {
    var anchoViewport = window.innerWidth || document.documentElement.clientWidth;
    var alturaViewport = window.innerHeight || document.documentElement.clientHeight;
    //Posición de la caja del elemento
    if (elto != null) {
    var caja = elto.getBoundingClientRect();
    var cajaDentroH = (caja.left >= 0 && caja.left <= anchoViewport) ||
        (caja.right >= 0 && caja.right <= anchoViewport);
    var cajaDentroV = (caja.top >= 0 && caja.top <= alturaViewport) ||
        (caja.bottom >= 0 && caja.bottom <= alturaViewport);

    return (cajaDentroH && cajaDentroV);
    }
}

/**
 * Define un manejador para poder detectar automáticamente cuando un determinado elemento cambia de visibilidad en la página. Esta versión considera que el elemento es visible si cualquier parte del mismo está en el área visible de la página.
 * @param {object} elto1 - El elemento cuya visibilidad nos interesa determinar
 * @param {function} handler - La función a la que se llamará para determinar que el elemento ha cambiado su estado de visibilidad. Se le pasa un booleano para indicar si es o no visible, y una referencia al elemento que ha cambiado la visibilidad.
 * @returns {boolean} Devuelve true si hay algo (por poco que sea) del elemento en el área visible de la página, y devuelve false si el elemento desaparece por completo del área visible.
 */
function inViewportPartially1(elto1, handler) {
    var anteriorVisibilidad1 = isElementPartiallyVisible(elto1); //crea una clausura para el manejador de este evento concreto
    //Defino un manejador para determinar posibles cambios
    function detectarPosibleCambio1() {
        var esVisible1 = isElementPartiallyVisible1(elto1);
        if (esVisible1 != anteriorVisibilidad1) { //ha cambiado el estado de visibilidad del elemento
            anteriorVisibilidad1 = esVisible1;
            if (typeof handler == "function")
                handler(esVisible1, elto1);
        }
    }
    //Asocio esta función interna a los diversos eventos que podrían producir un cambio en la visibilidad
    window.addEventListener("load", detectarPosibleCambio1);
    window.addEventListener("resize", detectarPosibleCambio1);
    window.addEventListener("scroll", detectarPosibleCambio1);
}

/**
 * Define un manejador para poder detectar automáticamente cuando un determinado elemento cambia de visibilidad en la página.
 * @param {object} elto1 - El elemento cuya visibilidad nos interesa determinar
 * @param {function} handler - La función a la que se llamará para determinar que el elemento ha cambiado su estado de visibilidad. Se le pasa un booleano para indicar si es o no visible, y una referencia al elemento que ha cambiado la visibilidad.
 * @returns {boolean} Devuelve true si el elemento completo está en el área visible de la página, y devuelve false si cualquier parte del mismo (por pequeña que sea)desaparece del área visible.
 */
function inViewportTotally1(elto1, handler) {
    var anteriorVisibilidad1 = isElementTotallyVisible1(elto1); //crea una clausura para el manejador de este evento concreto
    //Defino un manejador para determinar posibles cambios
    function detectarPosibleCambio1() {
        var esVisible1 = isElementTotallyVisible1(elto1);
        if (esVisible1 != anteriorVisibilidad1) { //ha cambiado el estado de visibilidad del elemento
            anteriorVisibilidad1 = esVisible1;
            if (typeof handler == "function")
                handler(esVisible1, elto1);
        }
    }
    //Asocio esta función interna a los diversos eventos que podrían producir un cambio en la visibilidad
    window.addEventListener("load", detectarPosibleCambio1);
    window.addEventListener("resize", detectarPosibleCambio1);
    window.addEventListener("scroll", detectarPosibleCambio1);
}
// 2
function isElementTotallyVisible2(elto) {
    var anchoViewport = window.innerWidth || document.documentElement.clientWidth;
    var alturaViewport = window.innerHeight || document.documentElement.clientHeight;
    //Posición de la caja del elemento
    if (elto != null) {
    var caja = elto.getBoundingClientRect();
    return (caja.top >= 0 &&
        caja.bottom <= alturaViewport &&
        caja.left >= 0 &&
        caja.right <= anchoViewport);
    }
}

/**
 * Determina si el elemento que se le pasa como parámetro está visiblea aunque sea parcialmente en la ventana del navegador o no.
 * @param {object} elto - El elemento cuya visibilidad nos interesa determinar
 * @returns {boolean} true si el elemento está visible aunque sea parcialmente, false si no lo está
 */
function isElementPartiallyVisible2(elto) {
    var anchoViewport = window.innerWidth || document.documentElement.clientWidth;
    var alturaViewport = window.innerHeight || document.documentElement.clientHeight;
    //Posición de la caja del elemento
    if (elto != null) {
    var caja = elto.getBoundingClientRect();
    var cajaDentroH = (caja.left >= 0 && caja.left <= anchoViewport) ||
        (caja.right >= 0 && caja.right <= anchoViewport);
    var cajaDentroV = (caja.top >= 0 && caja.top <= alturaViewport) ||
        (caja.bottom >= 0 && caja.bottom <= alturaViewport);

    return (cajaDentroH && cajaDentroV);
    }
}

/**
 * Define un manejador para poder detectar automáticamente cuando un determinado elemento cambia de visibilidad en la página. Esta versión considera que el elemento es visible si cualquier parte del mismo está en el área visible de la página.
 * @param {object} elto2 - El elemento cuya visibilidad nos interesa determinar
 * @param {function} handler - La función a la que se llamará para determinar que el elemento ha cambiado su estado de visibilidad. Se le pasa un booleano para indicar si es o no visible, y una referencia al elemento que ha cambiado la visibilidad.
 * @returns {boolean} Devuelve true si hay algo (por poco que sea) del elemento en el área visible de la página, y devuelve false si el elemento desaparece por completo del área visible.
 */
function inViewportPartially2(elto2, handler) {
    var anteriorVisibilidad2 = isElementPartiallyVisible(elto2); //crea una clausura para el manejador de este evento concreto
    //Defino un manejador para determinar posibles cambios
    function detectarPosibleCambio2() {
        var esVisible2 = isElementPartiallyVisible2(elto2);
        if (esVisible2 != anteriorVisibilidad2) { //ha cambiado el estado de visibilidad del elemento
            anteriorVisibilidad2 = esVisible2;
            if (typeof handler == "function")
                handler(esVisible2, elto2);
        }
    }
    //Asocio esta función interna a los diversos eventos que podrían producir un cambio en la visibilidad
    window.addEventListener("load", detectarPosibleCambio2);
    window.addEventListener("resize", detectarPosibleCambio2);
    window.addEventListener("scroll", detectarPosibleCambio2);
}

/**
 * Define un manejador para poder detectar automáticamente cuando un determinado elemento cambia de visibilidad en la página.
 * @param {object} elto2 - El elemento cuya visibilidad nos interesa determinar
 * @param {function} handler - La función a la que se llamará para determinar que el elemento ha cambiado su estado de visibilidad. Se le pasa un booleano para indicar si es o no visible, y una referencia al elemento que ha cambiado la visibilidad.
 * @returns {boolean} Devuelve true si el elemento completo está en el área visible de la página, y devuelve false si cualquier parte del mismo (por pequeña que sea)desaparece del área visible.
 */
function inViewportTotally2(elto2, handler) {
    var anteriorVisibilidad2 = isElementTotallyVisible2(elto2); //crea una clausura para el manejador de este evento concreto
    //Defino un manejador para determinar posibles cambios
    function detectarPosibleCambio2() {
        var esVisible2 = isElementTotallyVisible2(elto2);
        if (esVisible2 != anteriorVisibilidad2) { //ha cambiado el estado de visibilidad del elemento
            anteriorVisibilidad2 = esVisible2;
            if (typeof handler == "function")
                handler(esVisible2, elto2);
        }
    }
    //Asocio esta función interna a los diversos eventos que podrían producir un cambio en la visibilidad
    window.addEventListener("load", detectarPosibleCambio2);
    window.addEventListener("resize", detectarPosibleCambio2);
    window.addEventListener("scroll", detectarPosibleCambio2);
}

// 3
function isElementTotallyVisible3(elto) {
    var anchoViewport = window.innerWidth || document.documentElement.clientWidth;
    var alturaViewport = window.innerHeight || document.documentElement.clientHeight;
    //Posición de la caja del elemento
    if (elto != null) {
    var caja = elto.getBoundingClientRect();
    return (caja.top >= 0 &&
        caja.bottom <= alturaViewport &&
        caja.left >= 0 &&
        caja.right <= anchoViewport);
    }
}

/**
 * Determina si el elemento que se le pasa como parámetro está visiblea aunque sea parcialmente en la ventana del navegador o no.
 * @param {object} elto - El elemento cuya visibilidad nos interesa determinar
 * @returns {boolean} true si el elemento está visible aunque sea parcialmente, false si no lo está
 */
function isElementPartiallyVisible3(elto) {
    var anchoViewport = window.innerWidth || document.documentElement.clientWidth;
    var alturaViewport = window.innerHeight || document.documentElement.clientHeight;
    //Posición de la caja del elemento
    if (elto != null) {
    var caja = elto.getBoundingClientRect();
    var cajaDentroH = (caja.left >= 0 && caja.left <= anchoViewport) ||
        (caja.right >= 0 && caja.right <= anchoViewport);
    var cajaDentroV = (caja.top >= 0 && caja.top <= alturaViewport) ||
        (caja.bottom >= 0 && caja.bottom <= alturaViewport);

    return (cajaDentroH && cajaDentroV);
    }
}

/**
 * Define un manejador para poder detectar automáticamente cuando un determinado elemento cambia de visibilidad en la página. Esta versión considera que el elemento es visible si cualquier parte del mismo está en el área visible de la página.
 * @param {object} elto3 - El elemento cuya visibilidad nos interesa determinar
 * @param {function} handler - La función a la que se llamará para determinar que el elemento ha cambiado su estado de visibilidad. Se le pasa un booleano para indicar si es o no visible, y una referencia al elemento que ha cambiado la visibilidad.
 * @returns {boolean} Devuelve true si hay algo (por poco que sea) del elemento en el área visible de la página, y devuelve false si el elemento desaparece por completo del área visible.
 */
function inViewportPartially3(elto3, handler) {
    var anteriorVisibilidad3 = isElementPartiallyVisible(elto3); //crea una clausura para el manejador de este evento concreto
    //Defino un manejador para determinar posibles cambios
    function detectarPosibleCambio3() {
        var esVisible3 = isElementPartiallyVisible3(elto3);
        if (esVisible3 != anteriorVisibilidad3) { //ha cambiado el estado de visibilidad del elemento
            anteriorVisibilidad3 = esVisible3;
            if (typeof handler == "function")
                handler(esVisible3, elto3);
        }
    }
    //Asocio esta función interna a los diversos eventos que podrían producir un cambio en la visibilidad
    window.addEventListener("load", detectarPosibleCambio3);
    window.addEventListener("resize", detectarPosibleCambio3);
    window.addEventListener("scroll", detectarPosibleCambio3);
}

/**
 * Define un manejador para poder detectar automáticamente cuando un determinado elemento cambia de visibilidad en la página.
 * @param {object} elto3 - El elemento cuya visibilidad nos interesa determinar
 * @param {function} handler - La función a la que se llamará para determinar que el elemento ha cambiado su estado de visibilidad. Se le pasa un booleano para indicar si es o no visible, y una referencia al elemento que ha cambiado la visibilidad.
 * @returns {boolean} Devuelve true si el elemento completo está en el área visible de la página, y devuelve false si cualquier parte del mismo (por pequeña que sea)desaparece del área visible.
 */
function inViewportTotally3(elto3, handler) {
    var anteriorVisibilidad3 = isElementTotallyVisible3(elto3); //crea una clausura para el manejador de este evento concreto
    //Defino un manejador para determinar posibles cambios
    function detectarPosibleCambio3() {
        var esVisible3 = isElementTotallyVisible3(elto3);
        if (esVisible3 != anteriorVisibilidad3) { //ha cambiado el estado de visibilidad del elemento
            anteriorVisibilidad3 = esVisible3;
            if (typeof handler == "function")
                handler(esVisible3, elto3);
        }
    }
    //Asocio esta función interna a los diversos eventos que podrían producir un cambio en la visibilidad
    window.addEventListener("load", detectarPosibleCambio3);
    window.addEventListener("resize", detectarPosibleCambio3);
    window.addEventListener("scroll", detectarPosibleCambio3);
}

// dinamico
function isElementTotallyVisible4(elto) {
    var anchoViewport = window.innerWidth || document.documentElement.clientWidth;
    var alturaViewport = window.innerHeight || document.documentElement.clientHeight;
    //Posición de la caja del elemento
    var caja = elto.getBoundingClientRect();
    return (caja.top >= 0 &&
        caja.bottom <= alturaViewport &&
        caja.left >= 0 &&
        caja.right <= anchoViewport);
}

/**
 * Determina si el elemento que se le pasa como parámetro está visiblea aunque sea parcialmente en la ventana del navegador o no.
 * @param {object} elto - El elemento cuya visibilidad nos interesa determinar
 * @returns {boolean} true si el elemento está visible aunque sea parcialmente, false si no lo está
 */
function isElementPartiallyVisible4(elto) {
    var anchoViewport = window.innerWidth || document.documentElement.clientWidth;
    var alturaViewport = window.innerHeight || document.documentElement.clientHeight;
    //Posición de la caja del elemento
    var caja = elto.getBoundingClientRect();
    var cajaDentroH = (caja.left >= 0 && caja.left <= anchoViewport) ||
        (caja.right >= 0 && caja.right <= anchoViewport);
    var cajaDentroV = (caja.top >= 0 && caja.top <= alturaViewport) ||
        (caja.bottom >= 0 && caja.bottom <= alturaViewport);

    return (cajaDentroH && cajaDentroV);
}

/**
 * Define un manejador para poder detectar automáticamente cuando un determinado elemento cambia de visibilidad en la página. Esta versión considera que el elemento es visible si cualquier parte del mismo está en el área visible de la página.
 * @param {object} elto4 - El elemento cuya visibilidad nos interesa determinar
 * @param {function} handler - La función a la que se llamará para determinar que el elemento ha cambiado su estado de visibilidad. Se le pasa un booleano para indicar si es o no visible, y una referencia al elemento que ha cambiado la visibilidad.
 * @returns {boolean} Devuelve true si hay algo (por poco que sea) del elemento en el área visible de la página, y devuelve false si el elemento desaparece por completo del área visible.
 */
function inViewportPartially4(elto4, handler) {
    var anteriorVisibilidad4 = isElementPartiallyVisible(elto4); //crea una clausura para el manejador de este evento concreto
    //Defino un manejador para determinar posibles cambios
    function detectarPosibleCambio4() {
        var esVisible4 = isElementPartiallyVisible4(elto4);
        if (esVisible4 != anteriorVisibilidad4) { //ha cambiado el estado de visibilidad del elemento
            anteriorVisibilidad4 = esVisible4;
            if (typeof handler == "function")
                handler(esVisible4, elto4);
        }
    }
    //Asocio esta función interna a los diversos eventos que podrían producir un cambio en la visibilidad
    window.addEventListener("load", detectarPosibleCambio4);
    window.addEventListener("resize", detectarPosibleCambio4);
    window.addEventListener("scroll", detectarPosibleCambio4);
}

/**
 * Define un manejador para poder detectar automáticamente cuando un determinado elemento cambia de visibilidad en la página.
 * @param {object} elto4 - El elemento cuya visibilidad nos interesa determinar
 * @param {function} handler - La función a la que se llamará para determinar que el elemento ha cambiado su estado de visibilidad. Se le pasa un booleano para indicar si es o no visible, y una referencia al elemento que ha cambiado la visibilidad.
 * @returns {boolean} Devuelve true si el elemento completo está en el área visible de la página, y devuelve false si cualquier parte del mismo (por pequeña que sea)desaparece del área visible.
 */
function inViewportTotally4(elto4, handler) {
    var anteriorVisibilidad4 = isElementTotallyVisible4(elto4); //crea una clausura para el manejador de este evento concreto
    //Defino un manejador para determinar posibles cambios
    function detectarPosibleCambio4() {
        var esVisible4 = isElementTotallyVisible4(elto4);
        if (esVisible4 != anteriorVisibilidad4) { //ha cambiado el estado de visibilidad del elemento
            anteriorVisibilidad4 = esVisible4;
            if (typeof handler == "function")
                handler(esVisible4, elto4);
        }
    }
    //Asocio esta función interna a los diversos eventos que podrían producir un cambio en la visibilidad
    window.addEventListener("load", detectarPosibleCambio4);
    window.addEventListener("resize", detectarPosibleCambio4);
    window.addEventListener("scroll", detectarPosibleCambio4);
}