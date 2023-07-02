document.addEventListener('mousemove', e =>{
    Object.assign(document.documentElement,{
        style: `
        --move-x: ${(e.clientX - window.innerWidth / 2) * -0.001}deg;
        --move-y: ${(e.clientY - window.innerHeight / 2) * -0.001}deg;
        `
    })
})

var button = document.getElementById('myButton');
button.addEventListener('mouseover', function(){
    this.style.backgroundColor = 'rgb(100 100 100 / 0.6)';
    this.style.border = "rgb(255 255 255 / 1) 3px solid";
})
button.addEventListener('mouseout', function(){
    this.style.backgroundColor = 'rgb(0 0 0/ 0.6';
    this.style.border = "rgb(0 0 0 / 0.9) 3px solid";
})
var logotype = document.getElementById('logo-div');
logotype.addEventListener('mouseover', function(){
    this.style.backgroundColor = 'rgb(40, 40, 40)';
    this.style.border = 'rgba(0 0 0 / 1) 3px solid';
});
logotype.addEventListener('mouseout', function(){
    this.style.backgroundColor = 'rgba(0, 0, 0, 0.8)';
    this.style.border = 'rgba(255 255 255 / 0.8) 3px solid';
});