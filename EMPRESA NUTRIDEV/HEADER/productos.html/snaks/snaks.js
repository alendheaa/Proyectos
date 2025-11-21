// Desplegar filtros
const btn = document.getElementById("filtrarBtn");
const filtros = document.getElementById("filtrosDesplegables");

btn.addEventListener("click", () => {
    filtros.style.display = filtros.style.display === "flex" ? "none" : "flex";
});

// Ordenar (solo estructura, vos lo completas si querés funcionalidad real)
document.getElementById("ordenar").addEventListener("change", function() {
    alert("Elegiste: " + this.value);
});
