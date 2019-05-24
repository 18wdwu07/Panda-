$ = jQuery;

$(document).ready(function(){

    $('.conditionalField').hide();

    $(document).on('change','#post-format-selector-0', function(){
        console.log($(this).val());
    });

})
