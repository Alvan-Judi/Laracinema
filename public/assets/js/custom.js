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

})(jQuery);

