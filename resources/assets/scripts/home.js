
const buttons = document.querySelectorAll('.home_header_button');


buttons.forEach((element) => {
  element.addEventListener('click', () => {
    removeButtonClass(buttons);
    checkElementClass(element);
    element.classList.add('home_header_button_active');
  });
})

function removeButtonClass(wrapper){
  wrapper.forEach((element)=>{
    element.classList.remove('home_header_button_active');
  })
}

function checkElementClass(element){

  const backgroundElem = document.querySelector('.home_wrapper');

  if (!element.classList.contains('first_button')) {
    document.querySelector('.team_wrapper').classList.add('notActive');
  }
  else {
    document.querySelector('.team_wrapper').classList.remove('notActive');
    document.querySelector('.home_slider_title_default').classList.add('home_slider_title_not_active');
    document.querySelector('.home_slider_title_default').classList.remove('home_slider_title');
    document.querySelector('.home_right_column_default').classList.add('home_right_column_not_active');
    document.querySelector('.home_right_column_default').classList.remove('home_right_column');
  }
  if (!element.classList.contains('second_button')) {
    document.querySelector('.slide').classList.add('notActive');
    backgroundElem.style.backgroundImage = 'none';
  }
  else {
    document.querySelector('.slide').classList.remove('notActive');
    backgroundElem.style.backgroundImage = "url('/themes/Iplay/media/images/Fotboll_Magenta.svg')";
  }
  if (!element.classList.contains('third_button')) {
    document.querySelector('.about_wrapper').classList.add('notActive');
  }
  else {
    document.querySelector('.about_wrapper').classList.remove('notActive');
    document.querySelector('.home_slider_title_default').classList.add('home_slider_title_not_active');
    document.querySelector('.home_slider_title_default').classList.remove('home_slider_title');
    document.querySelector('.home_right_column_default').classList.add('home_right_column_not_active');
    document.querySelector('.home_right_column_default').classList.remove('home_right_column');
  }
}

const iplayBtn = document.querySelector('.header_desktop_logo');
iplayBtn.addEventListener('click', () =>{
  document.querySelector('.home_right_column_default').classList.remove('home_right_column_not_active');
  document.querySelector('.home_right_column_default').classList.add('home_right_column');
  document.querySelector('.home_slider_title_default').classList.remove('home_slider_title_not_active');
  document.querySelector('.home_slider_title_default').classList.add('home_slider_title');
  document.querySelector('.team_wrapper').classList.add('notActive');
  document.querySelector('.about_wrapper').classList.add('notActive');
  document.querySelector('.slide').classList.remove('notActive');
  document.querySelector('.home_wrapper').style.backgroundImage = "url('/themes/Iplay/media/images/Fotboll_Magenta.svg')";
  removeButtonClass(buttons);
})
const obj = window.matchMedia("(min-width: 900px)")

function responsiveImg(obj) {
  if (obj.matches) {
    document.querySelector('.home_right_column_default').classList.remove('home_right_column_not_active');
    document.querySelector('.home_right_column_default').classList.add('home_right_column');
  }
  else {
    document.querySelector('.home_right_column_default').classList.remove('home_right_column_not_active');
    document.querySelector('.home_right_column_default').classList.add('home_right_column');
  }
}
