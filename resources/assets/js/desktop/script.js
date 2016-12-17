// Menu Mobile
$(window).load(function(){
   	$(".menum").hide();
   	$(".mobilemenu").show();
    $('.mobilemenu').click(function(){
		$(".menum").slideToggle();
    });
});

// Top Nav Member Shopping Cart
function DropDown(el) {
  this.dd = el;
  this.initEvents();
}
DropDown.prototype = {
  initEvents : function() {
    var obj = this;

    obj.dd.on('click', function(event){
      $(this).toggleClass('active');
      event.stopPropagation();
    });
  }
}
$(function() {
  var dd = new DropDown( $('#dd') );
  $(document).click(function() {
    $('.shopping-dropdown').removeClass('active');
  });
});
