function openModal() {
  document.getElementById("eventModal").style.display = "block";
}

// Close the Modal
function closeModal() {
  document.getElementById("eventModal").style.display = "none";
}

window.addEventListener("load", (event) => {
  openModal();
});
