const root = document.documentElement;
const firstColor = getComputedStyle(root).getPropertyValue('--first-color');

document.querySelector('#first-color').value = firstColor;

document.querySelector('#first-color').addEventListener('input', event => {
  root.style.setProperty('--first-color', event.target.value);
  localStorage.setItem('firstColor', event.target.value);
});

document.addEventListener('DOMContentLoaded', () => {
  const savedFirstColor = localStorage.getItem('firstColor');
  if (savedFirstColor) {
    root.style.setProperty('--first-color', savedFirstColor);
    document.querySelector('#first-color').value = savedFirstColor;
  }
});
