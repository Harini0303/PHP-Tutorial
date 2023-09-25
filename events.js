const vv=document.querySelector('button');
vv.addEventListener('click',()=>{
    console.log('You just clicked');
});

const items=document.querySelectorAll('li');
items.forEach(items=>{
    items.addEventListener('click',()=>{
        items.style.color='red';
    });
});