
function myFun() {
    let dialog = document.getElementById("my-dialog-5");
    dialog.showModal();
    document.getElementById("close5").onclick = function(){
        dialog.close();
    }
}