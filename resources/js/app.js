import './bootstrap';

const deleteButtons = document.getElementById('delete-btn');

window.addEventListener("click", mostraMessaggio);

function mostraMessaggio() {
    alert("Sicuro di voler eliminare il Comic?");
}