$(document).ready(function() {
  AOS.init();
  return $('.option').click(function() {
    var classChange;
    $('.option').removeClass('active');
    $(this).addClass('active');
    classChange = $(this).attr('id');
    return $('.content-card').attr('id', classChange);
  });
});

//# sourceMappingURL=main.js.map