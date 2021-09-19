const inpFile = document.getElementById("inpFile");
const previewContainer = document.getElementById("imagePreview");
const previewImage = previewContainer.querySelector(".image-preview__image");
const previewDefaultText = previewContainer.querySelector(".image-preview__default_text");
const previewsend =document.querySelector(".send_image");

inpFile.addEventListener("change", function () {
    const file = this.files[0];
    if (file) {
        const reader = new FileReader();
        previewContainer.style.background = "unset";
        previewImage.style.display = "block";
        previewsend.style.visibility="visible";

        reader.addEventListener("load", function () {
            previewImage.setAttribute("src",this.result);
                
            });
            reader.readAsDataURL(file);
        
    }

});
