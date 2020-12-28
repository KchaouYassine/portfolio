$(function(){

    "use strict";

    

    /* begin navbar*/
    $('.navbar-nav .nav-link').click(function(e){
        e.preventDefault();
        console.log($(this).data('scroll')),
        e.preventDefault();
        $('html , body').animate({
            scrollTop: $($(this).data('scroll')).offset().top + 1
            
            
        }, 1000);
    });
    
    $('.navbar-nav .nav-link').hover(function(){
        $(this).addClass('active').parent().siblings().find('a').removeClass('active');
       
    });

    /* end navbar*/
    /* begin scroll_to_top*/
    var scrollToTop = $('.scrollToTop');

    $(window).scroll(function(){
        

        if ($(window).scrollTop() >= 606) {

            scrollToTop.fadeIn();
        }else{

            scrollToTop.fadeOut();
            
        }
    });
    scrollToTop.click(function(event){
        event.preventDefault();
        $('html,body').animate({
            scrollTop:0
        })
    });
    /* end scroll_to_top*/

    /* begin contact form*/
    $('.contact .theform input,.contact .theform textarea').each(function(){
        $(this).parent().prepend('<span class="etoil">*</span>')
    });
    $('.etoil').parent().css({'position':'relative'});
    $('.etoil').each(function(){
        $(this).css({
            'position':'absolute',
            'color':'rgb(177, 4, 4)',
            'font-size':'29px',
            'top':'-3px',
            'left': $(this).next().width()+'px',
        });
    });
        

    $('.theform .user,.theform .mail,.theform .msg').blur(function(){
        if($(this).val()===''){
            $(this).prev().fadeIn(1000)
            $(this).css({
                'border':'2px solid rgb(177, 4, 4)'
               
            })
        }else{
            $(this).prev().fadeOut(1000);
            $(this).css({
                'border':'2px solid rgb(3, 117, 161)'
            })
        }
    });

    /* end contact form*/
    /* begin loading*/
    $(window).load(function(){
        
        $('.loadingOverlay .spinner').fadeOut(2000,function(){
            $(this).parent().fadeOut(2000,function(){
                $(this).remove();
                $('body').css({'overflow':'auto'});
            });
        });
    });

    /* end loading*/


    

});