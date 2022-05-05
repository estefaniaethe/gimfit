/* se inicializa script con codigo de https://github.com/ComputerWolf/SlickNav */
jQuery(document).ready( $ => {
    $('.site-header .menu-principal .menu').slicknav({
        label: '',
        appendTo: '.site-header'
    });
 
    $('.listado-testimoniales').bxSlider({
        auto: true,
        mode: 'fade',
        controls: false
    });

    // Mapa de Leaflet
    var map = L.map('mapa').setView([51.505, -0.09], 13);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    L.marker([51.5, -0.09]).addTo(map)
        .bindPopup('A pretty CSS3 popup.<br> Easily customizable.')
        .openPopup();


});