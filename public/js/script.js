$(document).ready(function() {
    
  $(window).keydown(function(event){
    if(event.keyCode == 13) {
      event.preventDefault();
      return false;
    }
  });
    
//  $('#tva_check').change(function(){
//      if(this.checked)
//          $('#tva').disabled = false;
//  });
    
});