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
			add_transaction();
        	update_transaction();
        	delete_transaction();
        	search_submit();
        	submit_transaction();
        });
	}
	function add_transaction()
	{
		$("body").on('click','.add-transaction',function()
		{
			$('.alert').css('display','none');
			$('.name').val($(this).data('')); 
            $('.email').val($(this).data('')); 
			$('.modal-dialog').addClass('modal-md');
            $('.modal-title').html('ADD transaction');
            $('.modal-link').val('/transaction/add');
            
            $('.modal').modal('show');
            $('.modal-body').css('display','block');
            
        });
	}

	function update_transaction()
	{
		$("body").on('click','.update-transaction',function()
		{
			$('.alert').css('display','none');
            $('.id').val($(this).data('id')); 
            $('.name').val($(this).data('name')); 
            $('.email').val($(this).data('email')); 
            $('.modal-dialog').addClass('modal-md');
            $('.modal-title').html('UPDATE INFORMATION');
            $('.modal-link').val('/transaction/update');
            $('.modal').modal('show');
            $('.modal-body').css('display','block');
            
        });
	}

	

	function delete_transaction()
	{
		$("body").on('click','.delete-transaction',function()
		{
            $('.id').val($(this).data('id'));
            $('.alert').css('display','none');
            $('.modal-dialog').addClass('modal-sm');
            $('.modal-title').html('ARE YOU SURE YOU WANT TO PROCEED?');
            $('.modal-link').val('/transaction/delete');
            $('.modal').modal('show');
            $('.modal-body').css('display','none');
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
    	$('form').submit(function(evt) 
    	{
    		$('.loading').css('display','block');
	        evt.preventDefault();
	        current_target = $(this);
	        var formData = new FormData(this);

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
		            $('.clear').click();
		            current_target.find('.form-control').val('');
		        },
		        error: function(data) {
		        	$('.loading').css('display','none');
		        }
	        });
	    });
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