var transaction 	= new transaction();

var transaction_data = new FormData();
function transaction()
{
	init();

	function init()
	{
		ready_document();

	}

	function ready_document()
	{
		$(document).ready(function()
		{
			remove_result();
			add_cart();
			checkout_cart();
        	pin_request();
        	checkout_tabs();
        	search_submit();
        	submit_transaction();
        });
	}
	function remove_result(){
		$('body').on('click','#return_alert',function(e){
			$(this).css('display','none');
		})
	}

	function add_cart()
	{
		$("body").on('click','.addItemToCart',function(e)
		{
			e.preventDefault();

			
			let current_target = $(this);
			var product_id = $(this).attr('data-id');
			$.ajax({
				headers: {
				      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				},

				url:"/cart",
				data:{product_id  : product_id},
				method: "POST",
				success: function(data)
				{
					if(data == 1){
						
						current_target.find('a').text("Item Added");
						current_target.addClass('itemAddedToCart');
						current_target.removeClass('addItemToCart');
						var target = $('body').find("#cart-count-number");
						var val    = parseInt(target.text()) + parseInt(data);
									 target.html(val);
					}
					else{

					}
				}
			});
		});
	}

	function checkout_cart(){
		$('form.form-checkout-cart').submit(function(evt) 
    	{
    		// evt.preventDefault();
    		var x = $(this).serializeArray();
    		var formData = new FormData(this);
    		var error = [];
			$.each(x, function(i, field){
				console.log(field.value)
				if(field.value == ""){
					$('.account-content.checkout-staps .staps').append("<div class='alert alert-danger required-failed-error'>"+field.name+" is required!</div>")
				}else{
					formData.append(field.name ,  field.value);
				}
			    
			});
			console.log(error)


    		// $('.loading').css('display','block');
	     //    // evt.preventDefault();
	     //    current_target = $(this);
	     //    // var formData = new FormData(this);
	     //    var description = $('.note-editable').html();
	     //    if(!description){
	     //    	description = $('.note-editable').val();
	     //    }
	     //    formData.append('description', description);
	     //    $.ajax({
		    //     type: 'POST',
		    //     url: $(this).attr('action'),
		    //     data:formData,
		    //     cache:false,
		    //     contentType: false,
		    //     processData: false,
		    //     success: function(data) {
		    //     	if(current_target.hasClass('feed-create')){
		    //     		showFeedData(data,current_target);
		    //     	}
		    //     	$('.loading').css('display','none');
		    //         $('#return_alert').css('display','block');
		    //         if(!current_target.hasClass('update')){
		    //         	current_target.find('.form-control').val('');
		    //     		current_target.find('.note-editable').html('');
		    //         }
		        	
		    //     },
		    //     error: function(data) {
		    //     	$('.loading').css('display','none');
		    //     }
	     //    });
	    });
	}

	function pin_request()
	{
		$("body").on('click','.pin-request',function(evt)
		{
			$('.loading').css('display','block');
	        evt.preventDefault();
	        var formData = new FormData(this);
	        current_target = $(this);
            formData.append("code", 		$('.code').val());

            $.ajax({
				headers: {
				      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				},

				url:"/pin/get_info",
				data:formData,
				method: "POST",
				contentType:false,
        	    cache:false,
        	    processData:false,
	            success: function(data)
				{
					if(data.code == 1){
						pin_info(data,current_target);
					}
					else{
						$('.pin-alert').append('<h5 style="color:red">Please enter a valid code</h5>');
					}
					$('.loading').css('display','none');
		            
		            
				}
			});
        });
	}

	

	function checkout_tabs()
	{
		$("body").on('click','.required-failed-error',function()
		{	
			$(this).remove();
		});
		$("body").on('click','.checkout_tabs',function()
		{	
			$('.required-failed-error').remove();
			var x = $('.form-checkout-cart').serializeArray();
    		var formData = new FormData(this);
    		var error = [];
			$.each(x, function(i, field){
				if(field.value == ""){
					$('.checkout-staps').prepend("<div class='alert alert-danger required-failed-error'>"+field.name+" is required!<i class='fa fa-times pull-right'></i></div>");
				}
			});

			if($('.required-failed-error').length > 0){
				$('.proceed_checkout_btn').hide();
			}
			else{
				$('.proceed_checkout_btn').show();
			}
			var checkout_tabs 	= $('.checkout_tabs');
			var tab_name 		= $(this).attr('data-tab_name');
			$.each(checkout_tabs,function(index,val){
				$(val).removeClass('active');
				var tab_id		= $(this).attr('data-tab_name');
				$('#'+tab_id).hide();
				
			});
			$("div[data-tab_name='"+tab_name+"']").addClass('active');
			$("#"+tab_name).show();
		});
	}

	function search_submit()
	{
		$("body").on('click','.submit-search',function()
		{
			$('.loading').css('display','block');
            transaction_data.append("key", 		$('.search-key').val());

            $.ajax({
				headers: {
				      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				},

				url:"/search/submit",
				data:transaction_data,
				method: "POST",
				contentType:false,
        	    cache:false,
        	    processData:false,
	            success: function(data)
				{
					$('.loading').css('display','none');
					$('.table-data').html(data);
				}
			});
        });
	}
    

    function submit_transaction()
    {
    	$('form.form-submit').submit(function(evt) 
    	{
    		$('.loading').css('display','block');
	        evt.preventDefault();
	        current_target = $(this);
	        var formData = new FormData(this);
	        var description = $('.note-editable').html();
	        if(!description){
	        	description = $('.note-editable').val();
	        }
	        formData.append('description', description);
	        $.ajax({
		        type: 'POST',
		        url: $(this).attr('action'),
		        data:formData,
		        cache:false,
		        contentType: false,
		        processData: false,
		        success: function(data) {
		        	if(current_target.hasClass('feed-create')){
		        		showFeedData(data,current_target);
		        	}
		        	$('.loading').css('display','none');
		            $('#return_alert').css('display','block');
		            if(!current_target.hasClass('update')){
		            	current_target.find('.form-control').val('');
		        		current_target.find('.note-editable').html('');
		            }
		        	
		        },
		        error: function(data) {
		        	$('.loading').css('display','none');
		        }
	        });
	    });
	}

	function pin_info(data,current_target){
		$('.first_name').val(data.info.user.userinfo.first_name);
		$('.last_name').val(data.info.user.userinfo.last_name);
		$('.email').val(data.info.user.userinfo.email);
		$('.contact').val(data.info.user.userinfo.contact);
		$('.address').val(data.info.user.userinfo.address);
		$('.biography').val(data.info.user.userinfo.biography);

		$('#my-billing-addresses').removeClass('in');
		$('.input-group .form-control').css('z-index',0);
	}

	function showFeedData(data,current_target){
		
  		var html_post = '<div class="chat-message">'
            +'<div class="profile-hdtc">'
                +'<img class="message-avatar" src="'+data.user.user_info.user_profile+'" alt="">'
            +'</div>'
            +'<div class="message">'
                +'<a class="message-author" href="#"> '+data.user.user_info.name+' </a>'
                +'<span class="message-date"> '+data.date_format+' </span>'
                +'<span class="message-content">'+data.description+'</span>'
                +'<div class="m-t-md mg-t-10">'
                    +'<a class="btn btn-xs btn-default"><i class="fa fa-thumbs-up"></i> Like </a>'
                    +'<a class="btn btn-xs btn-success"><i class="fa fa-heart"></i> Love</a>'
                +'</div>'
            +'</div>'
        +'</div>';
		$('.chat-discussion').prepend(html_post);
	}
}