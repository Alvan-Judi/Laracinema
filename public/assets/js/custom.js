'use strict';
//  Author: AdminDesigns.com
// 
//  This file is reserved for changes made by the use. 
//  Always seperate your work from the theme. It makes
//  modifications, and future theme updates much easier 
// 

(function($) {


    $('body').on('click keyup', function(e){

        var key = e.keyCode || e.which;

        var title = $('#title').val();
        var titlePreview = $('#preview h1');

        var imageUrl = $('#image').val();
        var imgPreview = $('#img-preview');

        var synopsis = $('#synopsis').val();
        var synPreview = $('#syn-preview');



        var errorArea = $('#error ul');

        if(imageUrl != ''){
            $.ajax({
                url: imageUrl,
                type:'HEAD',
                error: function(){
                    errorArea.fadeIn(200);
                    errorArea.html("<li>L'image n'existe pas</li>");
                    imgPreview.attr('src', 'http://www.allomac.fr/images/comment.jpg');

                },
                success:function(){
                    errorArea.fadeOut(200);
                    imgPreview.fadeIn(700);
                    imgPreview.attr('src', imageUrl);
                }
            });
        }

        if(title != ''){
                titlePreview.fadeIn();
                titlePreview.html(title);
        }

        if(synopsis != ''){
            synPreview.fadeIn();
            synPreview.html(synopsis);
        }
    });



    //MESSAGE AJAX


    var chat = $('#chat');

    chat.on('submit',function(){

        var dataSubmit = chat.attr('action');
        var ajax = chat.attr('data-ajax');
        var messageArea = $('#messages_area');
        $.ajax({
            method: 'POST',
            url : dataSubmit,
            data: $('#chat').serialize(),
            success : function(){
                $.ajax({
                    method: 'GET',
                    url: ajax,
                    success: function(data){
                        var pseudo = data.lastMessage.pseudo;
                        var message = data.lastMessage.message;

                        var html = '<p class=""><span class="text-danger">'+ pseudo+' </span>: '+message+'</p>';

                        messageArea.append(html);


                            var height = messageArea[0].scrollHeight;
                            messageArea.animate({

                                scrollTop: height

                            }, '500');


                        $('#message').val('');


                    }
                });
            }//end success

        });//end first ajax

        return false;
    });//end chat on submit


    var favorite = $('.favorite');

    favorite.click(function(){

        var dataLink = $(this).attr('href');
        var current = $(this);
        var recentActivityNb = $('#recentActivityNb');
        var recentVal = recentActivityNb.text();

        $.ajax({
            url: dataLink,
            success: function(){
                if(current.hasClass('text-danger')){
                    current.removeClass('text-danger').addClass('text-muted');
                    recentActivityNb.text(recentVal - 1);
                }
                else{
                    current.removeClass('text-muted').addClass('text-danger');
                    recentActivityNb.text(parseInt(recentVal) + 1);
                }
            }
        });

        return false
    });


})(jQuery);

