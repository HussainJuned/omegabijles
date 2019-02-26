$(window).on('load', function() {
    $('#loader').fadeOut();
    $('#preloader').delay(350).fadeOut('slow');
    $('body').delay(350).css({ 'overflow': 'visible' });
});

function showInfo2() {
    document.getElementById('info1').style.display = "none";
    document.getElementById('info2').style.display = "block";
}

function showInfo1() {
    document.getElementById('info2').style.display = "none";
    document.getElementById('info1').style.display = "block";
}

//jQuery time
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches

$('.next').click(function() {
    if (animating) return false;
    animating = true;
    $("html, body").animate({ scrollTop: 0 }, "fast");
    current_fs = $(this).parent().parent().parent();
    next_fs = $(this).parent().parent().parent().next();

    $(".progress_bar li").eq($("fieldset").index(next_fs)).addClass("active");

    next_fs.show();

    current_fs.animate({ opacity: 0 }, {
        step: function(now, mx) {
            //as the opacity of current_fs reduces to 0 - stored in "now"
            //1. scale current_fs down to 80%
            scale = 1 - (1 - now) * 0.2;
            //2. bring next_fs from the right(50%)
            left = (now * 50) + "%";
            //3. increase opacity of next_fs to 1 as it moves in
            opacity = 1 - now;
            current_fs.css({
                'transform': 'scale(' + scale + ')',
                'position': 'absolute'
            });
            next_fs.css({ 'left': left, 'opacity': opacity });
        },
        duration: 800,
        complete: function() {
            current_fs.hide();
            animating = false;
        }
    });
});

$(".previous").click(function() {
    if (animating) return false;
    animating = true;
    $("html, body").animate({ scrollTop: 0 }, "fast");
    current_fs = $(this).parent().parent().parent();
    previous_fs = $(this).parent().parent().parent().prev();

    //de-activate current step on progressbar
    $(".progress_bar li").eq($("fieldset").index(current_fs)).removeClass("active");

    //show the previous fieldset
    previous_fs.show();
    //hide the current fieldset with style
    current_fs.animate({ opacity: 0 }, {
        step: function(now, mx) {
            //as the opacity of current_fs reduces to 0 - stored in "now"
            //1. scale previous_fs from 80% to 100%
            scale = 0.8 + (1 - now) * 0.2;
            //2. take current_fs to the right(50%) - from 0%
            left = ((1 - now) * 50) + "%";
            //3. increase opacity of previous_fs to 1 as it moves in
            opacity = 1 - now;
            current_fs.css({ 'left': left });
            previous_fs.css({ 'transform': 'scale(' + scale + ')', 'opacity': opacity });
            previous_fs.css({ 'position': 'relative' });
        },
        duration: 800,
        complete: function() {
            current_fs.hide();
            animating = false;
        }
    });
});

/*Preview Selected Img*/
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
            $('#profile_image').attr('src', e.target.result);
        };
        reader.readAsDataURL(input.files[0]);
    }
}
$("#file-input").change(function() {
    readURL(this);
});

//remove course button
var $removeCourse = $('.bottom-right');
var $course = $('.course');

$(document).on('mouseenter', '.bottom-right', function(e) {
    var $parent = $(this).parent().parent().parent();
    $parent.addClass('hovered');
});

$(document).on('mouseleave', '.bottom-right', function(e) {
    var $parent = $(this).parent().parent().parent();
    $parent.removeClass('hovered');
});



$('#course_container').on('click', '.bottom-right', function() {
    var $parent = $(this).parent().parent().parent();
    $parent.remove();
});

//add course
var $str = $('#select_course option:selected').text();
var $selectCourse = $('#select_course');
$selectCourse.change(function() {
    $str = $('#select_course option:selected').text();
});

$('#modal_button_add').click(function() {

    // let url = 'http://localhost/omegabijles/public/frontEnd/'
    let url = 'http://webprosbd.com/tutor/public/frontEnd/'
    
    if ($str !== '') {
        var classlist = ''
        for(var i=1; i < 7; i++){
            classlist += '<div class="col-sm-7 text-md-left mb-3"><div class="form-check"> <label class="form-check-label"> <input class="form-check-input" type="checkbox" value="'+ i +'" name="course['+ $str +'][]"> Klas '+ i +' </label> </div></div>'
        }
        $appendStr = '<div class="row course"> <div class="col-sm-5 text-center"> <h3>' +
            $str +
            '</h3> </div><div class="col-sm-7"> <div class="row">'+ classlist +'<div class="col-sm-5 bottom-right mb-3">Verwijder vak <img src="'+ url +'img/icons/remove.svg" alt="delete" class="small_icon"></div></div></div></div>';

        $('#course_container').append($appendStr);
        $('.modal').modal('toggle');
    }
});

var filter_btn = $('#filter');
var filter_box = $('#filter_box');
filter_btn.on('click', function() {
    filter_box.toggleClass('show_filter');
    filter_btn.toggleClass('text_danger');
});

$('.sl').on('click', function() {
    $('.sl').css('display', 'none');
    $('.sf').css({ 'display': 'block', 'padding-top': '8px' });
});