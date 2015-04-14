$('.nav').on('click', '.off-canvas__toggle-button', function(e) {
  e.preventDefault();
  var $el = $(this);
  var direction = $el.parents('.off-canvas__container').data('off-canvas-direction');
  $('.off-canvas').toggleClass('off-canvas--' + direction);
});

$('.off-canvas__content').on('click', '.nav__item__title:not(:only-child)', function(e) {
  e.preventDefault();
  $item = $(this).parent('.nav__item');
  var itemIsOpen = false;
  var $openItems = $item.parents('.nav__item-container').find('.nav__item--open');
  
  // Check if already open
  if ($item.hasClass('nav__item--open')) {
    itemIsOpen = true;
  }
  
  $openItems.removeClass('nav__item--open');
  
  if ( ! itemIsOpen) {
    $item.addClass('nav__item--open');
  }
});