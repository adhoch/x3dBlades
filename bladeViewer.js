var fileCount=0;
var upclass = document.getElementsByClassName("bginput");
for (var i = 0; i < upclass.length; i++) {
    upclass[i].addEventListener('change', handleFileSelect, false);
    
}



function removeTexture() {
    var myNode = document.getElementById("gisbBlades__firstApp");
    while (myNode.firstChild) {
        myNode.removeChild(myNode.firstChild);
    }
    copyBladeL = $('#gisbBlades__blades').find('Appearance').length;
    copyBlade = $('#gisbBlades__blades').find('Appearance');
    for (i = 0; i < copyBladeL; i++) {
        while (copyBlade[i].firstChild) {
            copyBlade[i].removeChild(copyBlade[i].firstChild);
        }
    }
}

function movieTextureFile(url) {
    removeTexture();
    var myNode = document.getElementById("gisbBlades__firstApp");
    myNode.innerHTML = '<Material DEF="blade_mat" diffuseColor="1 1 1" emissiveColor="0 0 0"></Material><TextureTransform scale=".1429 1" translation="0 0"></TextureTransform><MovieTexture repeatS="false" repeatT="false" loop="true" DEF="blade_image" url="' + url + '"></MovieTexture>'
    copyBladeL = $('#gisbBlades__blades').find('Appearance').length;
    copyBlade = $('#gisbBlades__blades').find('Appearance');
    for (i = 0; i < copyBladeL; i++) {
        j = i + 1
        copyBlade[i].innerHTML = '<Material USE="blade_mat"></Material><TextureTransform scale=".1429 1" translation="' + j + ' 0"></TextureTransform><MovieTexture USE="blade_image"></MovieTexture>'
    }
}

function imageTextureFile(url) {
    removeTexture();
    var myNode = document.getElementById("gisbBlades__firstApp");
    myNode.innerHTML = '<Material DEF="blade_mat" diffuseColor="1 1 1" emissiveColor="0 0 0"></Material><TextureTransform scale="1 .1429" translation="0 0" rotation="-1.5708"></TextureTransform><ImageTexture DEF="blade_image" url="' + url + '"><TextureProperties magnificationFilter="NEAREST_PIXEL" minificationFilter="NEAREST_PIXEL"/></ImageTexture>'
    copyBladeL = $('#gisbBlades__blades').find('Appearance').length;
    copyBlade = $('#gisbBlades__blades').find('Appearance');
    for (i = 0; i < copyBladeL; i++) {
        j = i + 1
        copyBlade[i].innerHTML = '<Material USE="blade_mat"></Material><TextureTransform scale="1 .1429" translation="' + j + ' 0" rotation="-1.5708"></TextureTransform><ImageTexture USE="blade_image"><TextureProperties magnificationFilter="NEAREST_PIXEL" minificationFilter="NEAREST_PIXEL"/></ImageTexture>'
    }
}

function handleFileSelect(evt) {
    // FileList object
    x=evt.target;
    
    fileCount++;
    if($(this)[0].id < fileCount){
        fileCount--;
        $('#latest'+$(this)[0].id).remove();
    }
    else {
    viewAdd=document.getElementById('imageUpload'+fileCount+1);
    viewAdd.style.display='block';}
    var files = evt.target.files;
    
    // Loop through the FileList and render image files as thumbnails.
    for (var i = 0, f; f = files[i]; i++) {
        console.log(f.type);
        // Only process image files.
        if (! f.type.match('image.*') && ! f.type.match('video.*')) {
            continue;
        }
        
        var reader = new FileReader();
        // Closure to capture the file information.
        reader.onload = (function (theFile) {
            return function (e) {
                // Render thumbnail.               
                document.getElementsByClassName('active')[0].classList.remove('active')
                var span = document.createElement('span');
                
                span.setAttribute('id','latest'+fileCount);                
                if (theFile.type.match('video.*')) {
                    vidlength = document.querySelectorAll('[preload=auto]').length;
                    for (vidrem = 0; vidrem < vidlength; vidrem++) {
                        console.log(vidrem);
                        document.querySelectorAll('[preload=auto]')[0].remove();
                    }
                    span.innerHTML =[ '<video onclick="removeTexture();videoClick(this);" class="thumb active video" controls><source title="', escape(theFile.name), '" src="', e.target.result,
                    '" title="', escape(theFile.name), '"</source></video>'].join('');
                    
                    document.getElementById('list').insertBefore(span, null);                    
                    url = e.target.result;
                    movieTextureFile(url);
                }
                
                if (theFile.type.match('image.*')) {
                    span.innerHTML =[ '<img onclick="imageClick(this);" class="thumb active image" src="', e.target.result,
                    '" title="', escape(theFile.name), '" />'].join('');
                
                    document.getElementById('list').insertBefore(span, null);
                    url = e.target.result;
                    imageTextureFile(url);
                }
            }
        })(f);
        
        // Read in the image file as a data URL.
        reader.readAsDataURL(f);
    }
}



function imageClick(elem) {
    document.getElementsByClassName('active')[0].classList.remove('active')
    elem.classList.add('active');
    
    var url = elem.getAttribute("src");
    imageTextureFile(url);
}





function videoClick(elem) {
    vidlength = document.querySelectorAll('[preload=auto]').length;
    for (vidrem = 0; vidrem < vidlength; vidrem++) {
        document.querySelectorAll('[preload=auto]')[0].remove();
    }
    document.getElementsByClassName('active')[0].classList.remove('active')
    elem.classList.add('active');
    url = elem.children[0].getAttribute('src')
    movieTextureFile(url);
}