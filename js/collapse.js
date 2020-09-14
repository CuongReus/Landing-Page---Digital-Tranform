const contents = document.querySelectorAll('.js-more');
const buttons = document.querySelectorAll('.js-btn-more');
const maxHeight = 140;

for (let i = 0; i < contents.length; i++) {
    let content = contents[i];
    if (content) {
        let contentHeight = content.offsetHeight;
        if (contentHeight >= maxHeight) {
            content.style.height = maxHeight + 'px';
            content.style.overflow  = 'hidden';
            content.nextElementSibling.style.display = 'block';
        }
    }
}
for (let i = 0; i < buttons.length; i++) {
    let button = buttons[i];
    if (button) {
        button.addEventListener('click',function(){
            button.previousElementSibling.style.height = 'auto';
            button.style.display = 'none';
        });
    }
}