$(function(){

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    });


    //Upvoted function 
    $(".upvote").click(function(){
        var id = $(this).data('id');
        $("#count"+id).html('<img src="/images/loader.gif" style="margin-left:5px;">');  
        $.ajax({
            type:'POST',
            url:'/voteup',
            data:{ id: id },
            context: this,
            success:function(data){

            $(this).closest('div').find('.downvote').removeClass('downvoted');
            if(data.unauth==1){ window.location.href = '/login'; }
                else
                {
                    (data.class === 'upvoted') ? $(this).addClass(data.class) : $(this).removeClass('upvoted'); 
                     $("#count"+id).html(data.totalVotes);
                }
            }
        });
        
    });  

    $(".downvote").click(function(){
        var id = $(this).data('id');
        $("#count"+id).html('<img src="/images/loader.gif" style="margin-left:5px;">');  
        
        $.ajax({
            type:'POST',
            url:'/votedown',
            data:{ id: id },
            context: this,
            success:function(data){
                
        $("#count"+id).html('<img src="/images/loader.gif" style="margin-left:5px;">');  
             $(this).closest('div').find('.upvote').removeClass('upvoted');
            if(data.unauth==1){ window.location.href = '/login'; }
                else
                {
                    (data.class === 'downvoted') ? $(this).addClass(data.class) : $(this).removeClass('downvoted'); 
                     $("#count"+id).html(data.totalVotes);
                }
            }
        });
        
    });  


});

