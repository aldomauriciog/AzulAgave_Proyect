const gallery = document.querySelectorAll(".gallery .image"),
previewBox = document.querySelector(".preview-box"),
previewImg = previewBox.querySelector("img"),
closeIcon = document.querySelector(".icon"),
currentImg = document.querySelector(".current-img"),
totalImg = document.querySelector(".total-img"),
shadow = document.querySelector(".shadow"),
details = document.querySelector(".details");

window.onload = ()=>{
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
                previewImg.src = selectImgUrl;
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
            details.style.opacity = "1";

            closeIcon.onclick = ()=>{
                newIndex = clickIngIndex;
                prevBtn.style.display = "block";
                NextBtn.style.display = "block";
                previewBox.classList.remove("show");
                shadow.style.display = "none";
                details.style.opacity = "0";
            }
        }
    }
}