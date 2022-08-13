$(document).ready(function() {
  
 
  $('body').on('click','.apto-trigger-dropdown', function(e){
    
  
     
   $(this).closest('.apto-dropdown-wrapper').find('.dropdown-menu').toggleClass('show');
  });
  
  
 
  
});

