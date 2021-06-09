$(document).ready(function() {  
 
    $("#name").on({
        keyup: function(){
            $(this).val($(this).val().toUpperCase());
        }
    })

    $(".select_money").on({
        click: function(){
            $('#money').val($(this).val().replace(/,/g, ''));
        }
    })
    
})
