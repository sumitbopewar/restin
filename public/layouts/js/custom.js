// navbar

document.addEventListener("DOMContentLoaded", function() {
    var contentToToggle = $('#navbarSupportedContent');
    var toggleButton = $('.navbar-toggler');
    var contentToToggle2 = $('.navbar-nav');
    var isHidden = true;
    
    toggleButton.on('click', function() {
        if (isHidden) {
            contentToToggle.slideDown();
            contentToToggle2.slideDown();
        } else {
            contentToToggle.slideUp();
            contentToToggle2.slideUp();
        }
        isHidden = !isHidden;
    });
});
// navbar

// home page
$(document).ready(function() {
    
    $('.product_id').click(function() {
        let pid = $(this).attr('value');
        // console.log(pid);
        $.ajax({
            url: '/get_product_detail',
            type: 'GET',
            data: {
                'pid': pid,
            },
            success: function(result) {
                console.log(result);
                var home_mattress = JSON.stringify(result['home_mattress']);
                // console.log(home_mattress);

                sessionStorage.setItem('home_mattress', home_mattress);

                window.location.href = '/get_view_product';

            }
        });

    });
    
    
    
    var tab = document.querySelector('.OP');
    var count = document.querySelectorAll('.tabs').length;

    for (let i = 0; i < count; i++) {
        document.querySelectorAll('.tabs')[i].addEventListener('click', () => {
            let head = document.querySelectorAll('.tabs')[i].innerHTML;
            tab.innerHTML = head;
        })

    }
    
    
    
        const carouselElement = document.getElementById('carouselExampleCaptions');
        
        const carousel = new bootstrap.Carousel(carouselElement, {
            interval: 3000 
        });

});


// home page