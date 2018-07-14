$( document ).ready(function() {
    //new note field
    $('.new').on('click', function () {
        $('.newNote').fadeIn('slow');
    });
    //closing field
    $('.close').on('click', function () {
        $('.newNote').fadeOut('slow');
    });

    //esc

    $('body').keydown(function(event){
        // если код клавиши 27, значит нажата клавиша ESC
        if (event.keyCode == 27) {

            $('.newNote').fadeOut('slow');
        }

    });

    //sort notes AJAX
    $flag = 0;
    $('.latest').on('click', function () {
        if($flag === 0) {
            $(this).css('color', '#e117b2');
            $flag = 1;
            $.ajax({
                type: "POST",
                url: "../sort.php",
                data: {
                    action: 'desc'
                }
            }).done(function( result )
            {
                $(".grid").html( result );
            });
        }
        else{
            $(this).css('color', '#515A5F');
            $flag = 0;
            $.ajax({
                type: "POST",
                url: "../sort.php",
                data: {
                    action: 'asc'
                }
            }).done(function( result )
            {
                $(".grid").html(result);
            });
        }
    });


});