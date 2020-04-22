$(function() {
  //desktop-tabs
  $('ul.tabs__caption').on('click', 'li:not(.active)', function() {
    if ($('div.tabs').length === 0) {
      $(this)
        .addClass('active').siblings().removeClass('active')
        .closest('div.tabs-blue').find('div.tabs__content').removeClass('active').eq($(this).index()).addClass('active');
    } else {
      $(this)
        .addClass('active').siblings().removeClass('active')
        .closest('div.tabs').find('div.tabs__content').removeClass('active').eq($(this).index()).addClass('active');
    }
  });

  //mobile-tabs
  $( '#tab-select' ).change('click', function() {
    $('.tabs__content-mobile').css('display','none');
    let tab = $('#'+$('#tab-select').val());
    tab.css('display','flex');
  });
});
