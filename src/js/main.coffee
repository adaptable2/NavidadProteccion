$(document).ready ->
  AOS.init()
  $('.option').click ->
    $('.option').removeClass 'active'
    $(this).addClass 'active'
    classChange = $(this).attr 'id'
    $('.content-card').attr('id',classChange)