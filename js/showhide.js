$(document).ready(function(){
    $('.pass_show').append('<span class="ptxt">Show</span>');
    // $('.pass_show').append('<span class="fa fa-copy fa-lg errspan"></span>');
});

$(document).on('click','.pass_show .ptxt', function(){

    $(this).text($(this).text() == "Show" ? "Hide" : "Show");

    $(this).prev().attr('type', function(index, attr){return attr == 'password' ? 'text' : 'password'; });

});

function copythis(gotid) {
    var copyText = document.getElementById(gotid);
    copyText.setAttribute("type", "text");
    copyText.select();
    document.execCommand("copy");
    copyText.setAttribute("type", "password");
}