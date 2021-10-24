// JavaScript Document
$(document).ready(function(e) {
    $('.delete_user').click( function() {
        
        var id = $(this).attr("id");
      
        if(confirm("Are you sure you want to delete this Record?")){	        
            $.ajax({
            type: "POST",
            url: "theme/ad-process/ad-delete.php",
            data: ({id: id}),
            cache: false,
            success: function(html){
            $(".del"+id).fadeOut('slow'); 
			var delay = 3000;
			setTimeout(function(){ window.location = '?page=user'  }, delay);
            } 
            }); 
            }else{
            return false;}
        });                
});

$(document).ready(function(e) {
    $('.delete_guest').click( function() {
        
        var id = $(this).attr("id");
      
        if(confirm("Are you sure you want to delete this Record?")){	        
            $.ajax({
            type: "POST",
            url: "theme/ad-process/ad-delete_g.php",
            data: ({id: id}),
            cache: false,
            success: function(html){
            $(".del"+id).fadeOut('slow'); 
			var delay = 3000;
			setTimeout(function(){ window.location = '?page=customer'  }, delay);
            } 
            }); 
            }else{
            return false;}
        });                
});

$(document).ready(function(e) {
    $('.delete_category').click( function() {
        
        var id = $(this).attr("id");
      
        if(confirm("Are you sure you want to delete this Record?")){	        
            $.ajax({
            type: "POST",
            url: "theme/ad-process/ad-delete_c.php",
            data: ({id: id}),
            cache: false,
            success: function(html){
            $(".del"+id).fadeOut('slow'); 
			var delay = 3000;
			setTimeout(function(){ window.location = '?page=category'  }, delay);
            } 
            }); 
            }else{
            return false;}
        });                
});

$(document).ready(function(e) {
    $('.delete_room').click( function() {
        
        var id = $(this).attr("id");
      
        if(confirm("Are you sure you want to delete this Record?")){	        
            $.ajax({
            type: "POST",
            url: "theme/ad-process/ad-delete_r.php",
            data: ({id: id}),
            cache: false,
            success: function(html){
			$(".del"+id).fadeOut('slow');
            } 
            }); 
            }else{
            return false;}
        });                
});

$(document).ready(function(e) {
    $('.delete_promo').click( function() {
        
        var id = $(this).attr("id");
      	var prom = $('#prom').val();
        if(confirm("Are you sure you want to delete this Record?")){	        
            $.ajax({
            type: "POST",
            url: "theme/ad-process/ad-delete_p.php",
            data: ({id: id}),
            cache: false,
            success: function(html){
			$(".del"+id).fadeOut('slow');
			var delay = 3000;
			setTimeout(function(){ window.location = '?page=promo&id='+prom  }, delay);
            } 
            }); 
            }else{
            return false;}
        });                
});


$(document).ready(function(e) {
    $('.delete_entrance').click( function() {
        
        var id = $(this).attr("id");
      
        if(confirm("Are you sure you want to delete this Record?")){	        
            $.ajax({
            type: "POST",
            url: "theme/ad-process/ad-delete_e.php",
            data: ({id: id}),
            cache: false,
            success: function(html){
			$(".del"+id).fadeOut('slow');
			var delay = 3000;
			setTimeout(function(){ window.location = '?page=entrance'  }, delay);
            } 
            }); 
            }else{
            return false;}
        });                
});

$(document).ready(function(e) {
    $('.delete_message').click( function() {
        
        var id = $(this).attr("id");
      
        if(confirm("Are you sure you want to delete this Record?")){	        
            $.ajax({
            type: "POST",
            url: "theme/ad-process/ad-delete_m.php",
            data: ({id: id}),
            cache: false,
            success: function(html){
			$(".del"+id).fadeOut('slow');
			var delay = 3000;
			setTimeout(function(){ window.location = '?page=message'  }, delay);
            } 
            }); 
            }else{
            return false;}
        });                
});


$(document).ready(function(e) {
    $('.delete_slider').click( function() {
        
        var id = $(this).attr("id");
      
        if(confirm("Are you sure you want to delete this Record?")){	        
            $.ajax({
            type: "POST",
            url: "theme/ad-process/ad-delete_s.php",
            data: ({id: id}),
            cache: false,
            success: function(html){
			$(".del"+id).fadeOut('slow');
            } 
            }); 
            }else{
            return false;}
        });                
});