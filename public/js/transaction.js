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
		        	$('.loading').css('display','none');
		            console.log(data,"dsajdjsad");
		            $('.clear').click();
		        },
		        error: function(data) {
		        	$('.loading').css('display','none');
		            console.log(data);
		        }
	        });
	    });
	}
}