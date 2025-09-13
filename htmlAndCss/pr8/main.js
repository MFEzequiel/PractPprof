const d = document;
const $ = s => d.querySelector(s);
const $$ = s => d.querySelectorAll(s);

const btTh = $('.button-theme')
const btH = $('.button-hamburger')
const cont = $('.header-container')
const nav = $('.header-nav')
const btL = $$('.button-line')

const html = d.documentElement
let theme = window.matchMedia('(prefers-color-scheme:dark)') ? 'dark' : 'light'
btTh.textContent = `Tema: ${theme}`

btH.addEventListener('click', () => {
  btL.forEach(el => {
    el.classList.toggle('line-active')
  })
  nav.classList.toggle('header-nav-active')
  cont.classList.toggle('header-container-active')
})

btTh.addEventListener('click', () => {
  const newTheme = theme === 'light' ? 'dark' : 'light';
  setTheme(newTheme);  
  theme = newTheme
  btTh.textContent = `Tema: ${newTheme}`
})

function setTheme(newTheme) {
  html.setAttribute('data-theme', newTheme)
}

setTheme(theme)