$(document).ready(function () {


   $('.sidebar-group-link').click(function () {
      // e.stopPropagation();

      if ($(this).hasClass('sidebar-group-link-active')) {

         $(this).removeClass('sidebar-group-link-active');
         $(this).children('.sidebar-dropdown-toggle').children('.angle').removeClass('fa-angle-down');
         $(this).children('.sidebar-dropdown-toggle').children('.angle').addClass('fa-angle-left');

      }
      else{
         $(this).addClass('sidebar-group-link-active');
         $(this).children('.sidebar-dropdown-toggle').children('.angle').removeClass('fa-angle-left');
         $(this).children('.sidebar-dropdown-toggle').children('.angle').addClass('fa-angle-down');
   

      }





     


   });



});