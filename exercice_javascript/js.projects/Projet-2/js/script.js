//array example const colors = ['black', 'white', 'blue', 'yellow', 'pink', 'green']
const button = document.querySelector('button')
const body = document.querySelector('body')
const colors = ['black', 'white', 'blue', 'yellow', 'pink', 'green']
button.addEventListener('click', changeBackground);
function changeBackground(){
 let colorIndex= Math.floor(Math.random()*colors.length);

// let color = "rgb("+ Math.floor(Math.random() * 256) +","+ Math.floor(Math.random() * 256) +","+ Math.floor(Math.random() * 256) +")";
body.style.backgroundColor = colors[colorIndex];
}
    