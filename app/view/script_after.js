$(document).ready(function(){
  $('.dropdown-submenu a.menudown').on("mouseover", function(e){
	  document.getElementById('m1' ).style.display = 'none';
	  document.getElementById('m2' ).style.display = 'none';
	  document.getElementById('m3' ).style.display = 'none';
	  document.getElementById('m4' ).style.display = 'none';
	  document.getElementById('m5' ).style.display = 'none';
	  document.getElementById('m6' ).style.display = 'none';
    e.stopPropagation();
    e.preventDefault();
    $(this).next('ul').toggle();
  });
});

