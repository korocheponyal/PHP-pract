 function overAge() {
    $('#age-verify').addClass('hidden active ');
    $.cookie('Ruslan', 'Doroshnikov');
    
  }
  
function underAge() {
    $('#age-verify').addClass('under');
  }
  
function goBack() {
      window.history.back();
  }
