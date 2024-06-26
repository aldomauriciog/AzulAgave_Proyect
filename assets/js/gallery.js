const gallery = document.querySelectorAll(".gallery .image"),
previewBox = document.querySelector(".preview-box"),
previewImg = previewBox.querySelector("img"),
closeIcon = document.querySelector(".icon"),
currentImg = document.querySelector(".current-img"),
totalImg = document.querySelector(".total-img"),
shadow = document.querySelector(".shadow"),
details = document.querySelector(".details"),
previewInfo = details.querySelector(".name"),
titleInfo = document.querySelector(".title"),
SelectInfo = document.querySelector(".nav-stick .logo a"),
Icon = document.querySelector(".nav-stick .open i"),
CIcono = document.querySelector(".nav-stick .open"),
NavBody = document.querySelector(".nav-body");

window.onload = ()=>{
    let title = titleInfo.querySelector("h1").innerHTML;
    SelectInfo.innerHTML = title;

    for (let i = 0; i < gallery.length; i++) {
        totalImg.textContent = gallery.length;
        let  newIndex = i
        let clickIngIndex;
        gallery[i].onclick = ()=>{
            clickIngIndex = newIndex;
            console.log(i);
            function preview(){
                currentImg.textContent = newIndex + 1;
                let selectImgUrl = gallery[newIndex].querySelector("img").src;
                let selectImgInfo = gallery[newIndex].querySelector("img").alt;
                previewImg.src = selectImgUrl;
                previewInfo.innerHTML = selectImgInfo;
                console.log(selectImgUrl);
                // console.log(selectImgInfo);
            }

            const prevBtn = document.querySelector(".prev");
            const NextBtn = document.querySelector(".next");

            if(newIndex == 0){
                prevBtn.style.display = "none";
            }
            if(newIndex >= gallery.length - 1){
                NextBtn.style.display = "none";
            }

            prevBtn.onclick = ()=>{
                newIndex--;
                if(newIndex == 0){
                    preview();
                    prevBtn.style.display = "none";
                }
                else{
                    preview();
                    NextBtn.style.display = "block";
                }
            }

            NextBtn.onclick = ()=>{
                newIndex++;
                if(newIndex >= gallery.length - 1){
                    preview();
                    NextBtn.style.display = "none";
                }
                else{
                    preview();
                    prevBtn.style.display = "block";
                }
            }

            preview();
            previewBox.classList.add("show");
            shadow.style.display = "block";
            details.style.display = "block";

            console.log(closeIcon);

            closeIcon.onclick = ()=>{
                newIndex = clickIngIndex;
                prevBtn.style.display = "block";
                NextBtn.style.display = "block";
                previewBox.classList.remove("show");
                shadow.style.display = "none";
                details.style.display = "none";
            }
        }
    }
}

$(document).ready(function(){
    $(Icon).click(function(){
        if (CIcono.className == "open") {
            NavBody.style.transform = "translateX(0%)";
            CIcono.classList.remove("open");
            CIcono.classList.add("close");
        }
        

        else if(CIcono.className == "close"){
            NavBody.style.transform = "translateX(100%)";
            CIcono.classList.add("open");
            CIcono.classList.remove("close");
        }
        
    });
});