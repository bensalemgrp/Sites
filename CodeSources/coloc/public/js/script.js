function previewFiles() {
    var preview = document.querySelector('div.preview');
    var files = document.querySelector('input[type=file]').files;
    var avatar = document.querySelector('div.preview.avatar');



    function readAndPreview(file) {
        document.getElementById("avatar").style.display = "none";
        if (/\.(jpe?g|png)$/i.test(file.name)) {
            if (file.size < 10 * 1024 * 1024) { // MAX 10 mb
                var reader = new FileReader();
                var spc = '\u00A0';

                function returnFileSize(n) {
                    if (n < 1024) {
                        return n + ' octets';
                    } else if (n >= 1024 && n < 1048576) {
                        return (n / 1024).toFixed(1) + spc + 'Ko';
                    } else if (n >= 1048576) {
                        return (n / 1048576).toFixed(1) + spc + 'Mo';
                    }
                }



                reader.addEventListener("load", function() {
                    var div = document.createElement('div');
                    div.setAttribute('class', 'Imgpreview mb-3'); // animated zoomIn
                    preview.appendChild(div);

                    div.style.width = "240px";
                    div.style.border = "0.5px solid #ebebeb";
                    div.style.width = "150px";


                    div.style.borderRadius = "17px";

                    var i = document.createElement('i');
                    i.setAttribute('class', 'material-icons remove');
                    i.textContent = "X";

                    (div).appendChild(i);


                    if (/\.(jpe?g|png)$/i.test(file.name)) {
                        var image = new Image();

                        image.setAttribute('data-tippy-content', file.name + spc + '\u002f' + spc + 'file size' + spc + returnFileSize(file.size));
                        image.setAttribute('onclick', 'this.classList.toggle("Imgpreview-zoom");');
                        image.src = this.result;
                        div.appendChild(image);
                        image.style.width = "140px";
                    }
                    $(i).click(function() {

                        div.style.display = "none"
                    });
                }, false);
                reader.readAsDataURL(file);
            }
        }
    }
    if (files) {
        [].forEach.call(files, readAndPreview);
    }
}
