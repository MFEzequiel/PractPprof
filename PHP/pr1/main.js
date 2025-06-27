const btTheme = document.querySelector('.button-theme')
const html = document.documentElement

let theme = window.matchMedia('(prefers-color-scheme: dark') ? 'dark' : 'light'

btTheme.addEventListener('click', () => {
  let newTheme = theme === 'light' ? 'dark' : 'light'
  setTheme(newTheme)
  theme = newTheme
})

function setTheme(newTheme) {
  html.setAttribute('data-theme', theme)
}

setTheme(theme)