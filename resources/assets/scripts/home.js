
const buttons = document.querySelectorAll('.home_header_button');
console.log(buttons);

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
  if (!element.classList.contains('second_button')) {
    document.querySelector('.slide').classList.add('notActive');
  }
  else {
    document.querySelector('.slide').classList.remove('notActive');
  }
}
