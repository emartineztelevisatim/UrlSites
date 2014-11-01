$(function(){
  

$('.date-picker').datepicker({
     autoclose: true, 
}).on('changeDate', function(e){
    $('#birthdate').val($(this).data('date'));
    $(this).datepicker('hide');
});


                        
})//fin function