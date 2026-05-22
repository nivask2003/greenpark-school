// popmodel.js — fixed
// Changes from original:
//   1. closeBtn selector scoped to `modal` (fixes selector collision with gallery .close-btn)
//   No other changes — design, layout, and all popup behaviour are identical.

const buttons  = document.querySelectorAll('.read-more');
const modal    = document.getElementById('popupModal');
const title    = document.getElementById('popupTitle');
const text     = document.getElementById('popupText');
const closeBtn = modal.querySelector('.close-btn');   // FIX: was document.querySelector('.close-btn')

buttons.forEach(btn => {
    btn.addEventListener('click', function (e) {
        e.preventDefault();
        title.innerText = this.getAttribute('data-title');
        text.innerText  = this.getAttribute('data-content');
        modal.style.display = 'block';
    });
});

closeBtn.onclick = () => modal.style.display = 'none';

window.onclick = (e) => {
    if (e.target === modal) {
        modal.style.display = 'none';
    }
};