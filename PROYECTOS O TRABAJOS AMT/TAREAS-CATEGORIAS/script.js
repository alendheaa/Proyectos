function agregarTarea() {
    const tareaInput = document.getElementById("nueva-tarea");
    const tareaTexto = tareaInput.value.trim();

    if (tareaTexto === "") {
        alert("Por favor, escribe una tarea.");
        return;
    }

    const nuevaTarea = document.createElement("li");

    nuevaTarea.innerHTML = `
        <span>${tareaTexto} - <strong>${categoria}</strong></span>
        <button class="eliminar" onclick="eliminarTarea(this)">Eliminar</button>
        <button class="pendiente" onclick="pendienteTarea(this)">Pendiente</button>
    `;
    document.getElementById("lista-tareas").appendChild(nuevaTarea);

    tareaInput.value = "";
}

function eliminarTarea(boton) {
    const tarea = boton.parentElement;
    tarea.remove();
}

function toggleCompletar(boton){
    const tarea=boton.parentElement;
    if(tarea.classList.contains("completada")){
        tarea.classList.remove("completada");
        tarea.classList.add("pendiente");
        boton.innerText="pendiente";
    }else{
        tarea.classList.add("completada");
        tarea.classList.remove("pendiente");
        boton.innerText="completada";
    }

}




