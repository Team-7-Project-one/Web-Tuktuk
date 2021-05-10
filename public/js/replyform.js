$(document).ready(function () {
  $('.replyform').hide();

  $('#reply-message').click(function () {
    $('.replyform').slideToggle();
  });
});
