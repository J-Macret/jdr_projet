$(document).ready(function(){

    $('#toggle_navbar').on('click', function(){
        $('.header').css('left','0')
        $('.header').css('box-shadow','0 0 5px #202020')
        
    })
    $('#hide_navbar').on('click', function(){
        $('.header').css('left','-18em')
        $('.header').css('box-shadow','none')
    })

    $('.dropdown-perso-toggle').on('click', function(){
        if( $('.dropdown-perso').css('display') == 'block') {
            $('.dropdown-perso').slideUp()
        } else {
            $('.dropdown-perso').slideDown()
        }
    })
})