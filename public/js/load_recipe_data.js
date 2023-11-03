$(document).ready(function(){
    var recipeId = $('#recipe_id').text();
    $.get('/ingredients/' + recipeId, function(res){
        $('#ingredients').html(res);
    });
    $.get('/instructions/' + recipeId, function(res){
        $('#instructions').html(res);
    });
});