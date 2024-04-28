const icon = document.getElementById('open-nav')
const navDropdown = document.querySelector('.nav-dropdown')

icon.addEventListener('click', () =>
{
    navDropdown.classList.toggle('open')
})