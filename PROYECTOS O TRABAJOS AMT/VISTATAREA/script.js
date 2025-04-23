function agregartarea(){
    const tareaInput=document.getElementById("nueva-tarea");
    const tareaTexto=tareaInput.value.trim();

if (tareaTexto === ""){

    alert("POR FAVOR, escribi una tarea");
    return;

}    
const nuevaTarea=document.getElementById("li");

nuevaTarea.innerHTML=`
${tareaTexto}
<button class="eliminar" onclick="eliminarTarea(this)">Eliminar</button>;

nuevaTarea.addEventlistener("click", function()){

    nuevaTarea.classList.tooggle("Completada);
});

document.getElementById("lista-tarea").appendChild(nuevaTarea)

tareaInput.value="";
}
function eliminarTarea(boton){
    const tarea=boton.parentElement;
    tarea.remove();
}