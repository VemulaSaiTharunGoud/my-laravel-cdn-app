// CDN-loaded JS
console.log('CDN JS loaded');
document.addEventListener('DOMContentLoaded', function () {
  const button = document.querySelector('button');
  button.addEventListener('click', () => {
    alert('Hello from CDN JS!');
  });
});

