
function add_obrazok(){
    const image = document.createElement("img");
    image.src = '/assets/applevssamsung.jpg'
    image.id = "obrazok_id";
    document.querySelector('#obrazok').appendChild(image);
    image.style.width="50%";
    image.style.width="50%";
}

function zmena_velkosti(){
    document.getElementById("obrazok").style.width="150%";
    document.getElementById("obrazok").style.height="100%";
}

function zmena_obrazka(){
    document.getElementById('obrazok_id').style.marginRight = '50vmin';
}