$(document).ready(function(){
    $.get('/recipelist', function(res){
        $('#recipes').append(res);
    });
});