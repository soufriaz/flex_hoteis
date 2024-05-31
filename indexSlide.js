let contagem = 1;

document.getElementById("radio1").checked = true

setInterval( ()=>{

    nextImage();

}, 5000)


function nextImage(){
    contagem++;
    if(contagem > 4){
        contagem = 1;
    }

    document.getElementById("radio"+contagem).checked = true;

}