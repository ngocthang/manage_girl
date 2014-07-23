$(document).ready(function() {
  $('.normal').autosize();
  $('.animated').autosize({append: "\n"});

$("#icon_upload").click(function () {
       $("#input_img_post").trigger('click');
});

$("#icon_change_cover").click(function () {
       $("#change_cover").trigger('click');
});

$('.comment').emoticonize();
})
