if (window.history.replaceState) {
    window.history.replaceState(null, null, window.location.href);
}

function myFunction(target) {
    document.getElementById("avatar").value = target.files[0].name;
}

