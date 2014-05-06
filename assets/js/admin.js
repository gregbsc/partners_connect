jQuery( document ).ready(function() {

  // Handler for .ready() called.
  jQuery(".view-details").click( function() {

  	jQuery(this).parent().next("ul.hiddenul").toggle();

  });


});