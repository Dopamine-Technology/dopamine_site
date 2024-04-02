$(document).ready(function () {





    $('nav a').click(function () {
        removeActiveLinks();
        $(this).addClass('text-[#425CA8]');
        $(this).removeClass('text-[#494949]');
    });

    //if you want to worek on the link on scroll work on this it's bugy but still working
    // $(window).scroll(function () {
    //
    //     // Get the position of the top of each section
    //     var positions = {};
    //     $('section').each(function () {
    //         positions[$(this).attr('id')] = $(this).offset().top - 400;
    //     });
    //
    //     // Find the section that the user is currently in
    //     var currentSection = null;
    //     var scrollPosition = $(window).scrollTop();
    //     $.each(positions, function (section, position) {
    //         if (scrollPosition >= position) {
    //             currentSection = section;
    //         }
    //     });
    //
    //     // Remove the active-link class from all links
    //     $('nav a').removeClass('text-[#494949]');
    //     // Add the active-link class to the link for the current section
    //     $('nav a[href="#' + currentSection + '"]').addClass('text-[#425CA8]');
    //     activateLinkBySection(currentSection);
    //
    // });


});

function activateLinkBySection(section) {
    if (section == 'hero') {
        removeActiveLinks();
        $('#home_link').addClass('text-[#425CA8]');
        $('#home_link').removeClass('text-[#494949]');

    }
    if (section == 'services_section') {
        // alert('services_section');
    }
    if (section == 'aboutus_section') {
        // alert('aboutus_section');
    }
    if (section == 'porfolio_section') {
        // alert('porfolio_section');
    }
    if (section == 'testimonial_section') {
        // alert('testimonial_section');
    }
    if (section == 'blog_section') {
        // alert('blog_section');
    }
    if (section == 'contact_us_section') {
        // alert('contact_us_section');
    }

}


function removeActiveLinks() {
    $('#home_link').removeClass('text-[#425CA8]');
    $('#home_link').addClass('text-[#494949]');

    $('#services_link').removeClass('text-[#425CA8]');
    $('#services_link').addClass('text-[#494949]');


    $('#aboutus_link').removeClass('text-[#425CA8]');
    $('#aboutus_link').addClass('text-[#494949]');


    $('#portfolio_link').removeClass('text-[#425CA8]');
    $('#portfolio_link').addClass('text-[#494949]');


    $('#testimonial_link').removeClass('text-[#425CA8]');
    $('#testimonial_link').addClass('text-[#494949]');


    $('#blog_link').removeClass('text-[#425CA8]');
    $('#blog_link').addClass('text-[#494949]');

    $('#contact_link').removeClass('text-[#425CA8]');
    $('#contact_link').addClass('text-[#494949]');

    // $(this).addClass('text-[#425CA8]');
}
