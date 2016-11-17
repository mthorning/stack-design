   $(function () {
        //to handle the grid direction of the menu on screen resize
        checkSize();
        
        $(window).resize(function () {
            checkSize();
        }); 
        
        //LIGHTBOX
        //to close lightbox
        $("#lightbox").click(function () {
            $("#lightbox").hide();
        });
        
        //to open lightbox
        $(".thumbnail").click(function () {
            var img = $(this).find("img");
            var imgName = img.first().attr("src");
            $("#displayedImg").attr("src", imgName);
            $("#lightbox").show();
        });
       
       //change radio buttons on press of enquire button
       $("#enquireButton").click(function () {
           $("#enquiry").prop("checked", true);
       });
       
       //hide error messages on alert box close
        $('.alert').on('closed.bs.alert',function () {
        $('.error').hide();
        });
       
    
    function checkSize () { 
        var windowWidth = $(window).width() 
        if (windowWidth < 750 ) {
//                console.log(windowWidth);
                $("#navbarNav").css("flex-direction", "column");
                $("#galleryWhenSmall").show();
                $("#galleryWhenLarge").hide();
                $("#workLink").prop("href", "isolatedGallery.php");
            } else {
                $("#navbarNav").css("flex-direction", "row");
                $("#galleryWhenLarge").show();
                $("#galleryWhenSmall").hide();
                $("#workLink").prop("href", "index.php#ourWorkSection");
            }
        }; 
        });