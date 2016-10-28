/**
* @Author: ananayarora
* @Date:   2016-10-25T11:17:35+05:30
* @Last modified by:   ananayarora
* @Last modified time: 2016-10-25T13:30:41+05:30
*/

$(document).ready(function(){

    $(".watch").animate({
        'opacity':1
    }, function(){
        $(".watch_bg").animate({
            'opacity':0.6
        }, function() {
            $(".welcome_time").animate({
                'opacity':1
            }, function(){
                $(".glass").animate({
                    'opacity':1
                });
            });
        });
    });


    function addZero(n) {
        if (n <= 9) {
            return "0"+n;
        } else {
            return n;
        }
    }

    var cool = setInterval(function(){
        var d = new Date();
        var min = d.getMinutes();
        var sec = d.getSeconds();
        var hours = d.getHours();
        $(".welcome_time").html(addZero(hours)+":"+addZero(min)+":"+addZero(sec));
    }, 1);

    $(".glass").click(function(){
        $(".welcome_time,.tap").animate({
            'opacity':0
        }).hide();
        $(".main_screen").show().animate({
            'opacity':1
        }, function() {
            $(".profile_pic").animate({
                'opacity':1
            });
        });
        $(".watch_bg").animate({
            'opacity':0.3
        });
    });

    $(".story").slideUp();

    $(".card").click(function(){
        // $(this).find('.story').slideDown();
        // alert('y');
    });

    $(document).keydown(function(e){
        if (e.keyCode == 40) {
            $(".content").animate({
                'marginTop':'-=40px'
            });
        }
        if (e.keyCode == 38) {
            $(".content").animate({
                'marginTop':'+=40px'
            })
        }
    });


});
