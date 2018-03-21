function logo() {
    var relativeOffset = anime.timeline();
    relativeOffset
    .add({
        targets: '.logo',
        rotate: '180deg',
        duration: 1000
    })
    .add({
        targets: '.logo',
        rotate: '0deg',
        duration: 1000,
        complete: function(anim) {
            window.location.href = "home.php";
        }
    })
}

function breathing() {
    var relativeOffset = anime.timeline({
        loop: true,
        duration: 2500
    });
    relativeOffset
    .add({
        targets: '.logoImage',
        scale: 0.9
    })
    .add({
        targets: '.logoImage',
        scale: 1
    })
}

function buttonInflate(inflate) {
    var basicTimeline = anime.timeline();

    if (inflate) {
        basicTimeline
        .add({
            targets: '.continueButton',
            scale: 1.5
        })
    }
    else {
        basicTimeline
        .add({
            targets: '.continueButton',
            scale: 1
        })
    }
}

function circleSpin() {
    var infiniteLoop = anime({
        targets: '.circleSpin',
        rotate: '1turn',
        easing: 'linear',
        duration: 10000,
        direction: 'reverse',
        loop: true
    });
}

$(document).ready(function() {
    circleSpin();
    breathing();

    function toggleSidebar() {
        $(".button").toggleClass("active");
        $("main").toggleClass("move-to-left");
        $(".sidebar-item").toggleClass("active");
    }

    $(".button").on("click tap", function() {
        toggleSidebar();
    });

    $(document).keyup(function(e) {
        if (e.keyCode === 27) {
            toggleSidebar();
        }
    });

});

