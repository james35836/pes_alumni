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
    
});