function confirmDelete(self) {
    let id = self.getAttribute('id');
    document.getElementById('confirm').innerHTML = self.getAttribute('data-confirm');
    document.getElementById('form-delete-teacher').id.value = id;
    document.getElementById("myPopup").style.display = "block";
}

function closePopup() {
    document.getElementById("myPopup").style.display = "none";
}