function preview(e)
{
    document.getElementById("avatar").value = e.files[0].name;
    let file = e.files[0],
        fileReader = new FileReader();  
    
    if(file)
    {
        fileReader.readAsDataURL(file);
    }

    fileReader.addEventListener('load', ()=>{
        let img = new Image();
        img.src = fileReader.result;

        document.getElementById("image").src=img.src;
    });
}