 $(window).on('hashchange', function() {
        if (window.location.hash) {
            var page = window.location.hash.replace('#', '');
            if (page == Number.NaN || page <= 0) {
                return false;
            }else{
                getData(page);
            }
        }
    
$(document).ready(function(){
	 $(document).on('click', '.pagination a',function(event)
        {
            event.preventDefault();
  
            $('li').removeClass('active');
            $(this).parent('li').addClass('active');
  
            var myurl = $(this).attr('href');
            var page=$(this).attr('href').split('page=')[1];
  
            getData(page);
        });
  
    function getData(page){
        $.ajax(
        {
            url: '?page=' + page,
            type: "get",
            datatype: "html"
        }).done(function(data){
            $("#tag_container").empty().html(data);
            location.hash = page;
        }).fail(function(jqXHR, ajaxOptions, thrownError){
              alert('No response from server');
        });
    }
	// Activate tooltip
	$('[data-toggle="tooltip"]').tooltip();
	
	// Select/Deselect checkboxes
	var checkbox = $('table tbody input[type="checkbox"]');
	$("#selectAll").click(function(){
		if(this.checked){
			checkbox.each(function(){
				this.checked = true;                        
			});
		} else{
			checkbox.each(function(){
				this.checked = false;                        
			});
		} 
	});
	checkbox.click(function(){
		if(!this.checked){
			$("#selectAll").prop("checked", false);
		}
	});
	$('#location').on('mouseover', function(){
		if($('#location > option').length ==1){
			$.ajax({
				url: "/getLocations", 
				success: function(result){
					$('#location').html('');
					for(let key in result){
						$('#location').append('<option value="'+result[key].id+'">'+result[key].location+'</option>')
					}
	  			}
	  		});
		}			
	})
	$('#age').on('mouseover', function(){
		if($('#age > option').length ==1){
			$.ajax({
				url: "/getAges", 
				success: function(result){
					$('#age').html('');
					for(let key in result){
						$('#age').append('<option value="'+result[key].id+'">'+result[key].ageGroup+'</option>')
					}
	  			}
	  		});
		}			
	})
});
});