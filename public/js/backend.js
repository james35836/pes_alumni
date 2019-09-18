$(document).ready(function(){

    $(".copy-text-table").click(function(){
        var $id = $(this).attr('data-id');
        var $temp = $("<input>");
        $("body").append($temp);
        $temp.val($("#"+$id).text()).select();
        document.execCommand("copy");
        $temp.remove();
        


        $(this).html('Copied');

    });

    $("body").on('click','.delete-button',function(){
			console.log("delete")
			var container = $(this).closest('.delete-container');

			var link      	= $(this).attr('link');

			$(this).html('<i class="fa fa-spinner fa-spin" aria-hidden="true"></i>');

			$.get(link, function( data ) {
				setTimeout(function(){ container.remove(); }, 3000);
			  	
			});
			
           
        });
    
});