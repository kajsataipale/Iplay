
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
  }
  if (!element.classList.contains('second_button')) {
    document.querySelector('.slide').classList.add('notActive');
    backgroundElem.style.backgroundImage = 'none';
    document.querySelector('.home_slider_title').style.display = 'none';
    document.querySelector('.home_right_column').style.display = 'none';
  }
  else {
    document.querySelector('.slide').classList.remove('notActive');
    backgroundElem.style.backgroundImage = "url('/themes/Iplay/media/images/Fotboll_Magenta.svg')";
    if (window.innerWidth >= 900) {
      document.querySelector('.home_slider_title').style.display = 'block';
      document.querySelector('.home_right_column').style.display = 'block';
    }

  }
  if (!element.classList.contains('third_button')) {
    document.querySelector('.about_wrapper').classList.add('notActive');
  }
  else {
    document.querySelector('.about_wrapper').classList.remove('notActive');
  }
}
