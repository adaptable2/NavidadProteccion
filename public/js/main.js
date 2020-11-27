$(document).ready(function() {
  AOS.init();
  $('.scroll-down').click(function() {
    var href;
    href = $(this).attr('href');
    return $('html, body').animate({
      scrollTop: $(href).offset().top
    }, 500);
  });
  return $('.option').click(function() {
    var classChange;
    $('.option').removeClass('active');
    $(this).addClass('active');
    classChange = $(this).attr('id');
    return $('.content-card').attr('id', classChange);
  });

});

function limit(element, max) {
    var max_chars = max;

    if (element.value.length > max_chars) {
        element.value = element.value.substr(0, max_chars);
    }
}

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
            $(".selected-image").attr("src", e.target.result);
        };

        reader.readAsDataURL(input.files[0]); // convert to base64 string
    }
}

$("#file").change(function() {
    readURL(this);
});

//# sourceMappingURL=main.js.map