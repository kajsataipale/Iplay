
const buttons = document.querySelectorAll('.home_header_button');
console.log(buttons);

buttons.forEach((item) => {
  item.addEventListener('click', () => {
    removeButtonClass(buttons);
    item.classList.add('home_header_button_active');
  });
})

function removeButtonClass(wrapper){
  wrapper.forEach((item)=>{
    item.classList.remove('home_header_button_active');
  })
}
