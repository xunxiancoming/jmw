$.fn.UiSearch = function(){
  var ui = $(this);
  $('.ui-search-selected',ui).on('click',function(){
    $('.ui-search-selected-list').show();
    return false;
  });
  $('.ui-search-selected-list a',ui).on('click',function(){
    $('.ui-search-selected').text($(this).text());
    $('.ui-search-selected-list').hide();
    return false;
  })
  $('body').on('click',function(){
    $('.ui-search-selected-list').hide();
  })
}

$(function(){
  $('.ui-search').UiSearch();
})