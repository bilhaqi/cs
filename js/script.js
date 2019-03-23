$(document).ready(function(){

$("#login").submit(function(event){
    // cancels the form submission
    event.preventDefault();
    submitLogin();
});

	function submitLogin(){
    // Initiate Variables With Form Content
    let username = $("#username").val();
    let password = $("#password").val();
    
    $.ajax({
        url:'library/cek_login.php',
        dataType:'json',
        type :'post',
        data:{
            'username':username,
            'password':password
        },
        success: function(result){
            if(!result){
                alert('Username/Password Not Valid');
            }else{
                alert('Login Success');
                document.location.href='user/client.php';
            }
        }
    });
 
   
}

$("#formSearch").submit(function(event){
    // cancels the form submission
    event.preventDefault();
    submitSearch();
});
function submitSearch(){
    $("#box").html(`<br>`);
    let listSearch = $("#list-search").val();
    console.log(listSearch);
    $.ajax({
        url:'../library/searchUser.php',
        dataType:'json',
        type :'get',
        data:{
            'listSearch':listSearch
            
        },
        success: function(result){
            console.log(result);
            if(!result){
                $("#box").html(`
                    <h1 class='text-center' style="color:#5bc0de;">Not Found !!!</h1>
                    `);
            }else{
                console.log(result);
               $.each(result, function(i,data){
                    $('#box').append(`

                                <div class="col-sm-5 col-md-4">
                                <div class="thumbnail">
                                 <img src="../images/`+data.foto_user+`"  alt="" width="258px" />
                                    <div class="caption">
                                    <h3>`+ data.nama_user +`</h3>
                                    <p>`+ data.tgl_lahir +`</p>
                                <p><a href="?page=send&id_user=`+data.id_user+`" class="btn btn-default" role="button">Send Message</a> <a href="?page=view_profile&id_user=`+data.id_user+`" class="btn btn-info" role="button">View Profile</a></p>
                                </div>
                                 </div>
                            </div>
                        `);
               });
            }
        }
    });

}

$("#formSend").submit(function(event){
    // cancels the form submission
    event.preventDefault();
    submitMessage();
});

    function submitMessage(){
    // Initiate Variables With Form Content
    let message = $("#message").val();
    let pengirim = $("#pengirim").val();
    let penerima = $("#penerima").val();
    console.log(message,pengirim,penerima);
    
    $.ajax({
        url:'../chat/message/proses_message.php',
        dataType:'text',
        type :'post',
        data:{
            'message':message,
            'penerima':penerima,
            'pengirim':pengirim
        },
        success: function(){
           $("#message").val(" ");
        }
    });
    
 
   
}

});

$(window).on('load',function(){

    $('.tutup').addClass('muncul'); 
   
});
