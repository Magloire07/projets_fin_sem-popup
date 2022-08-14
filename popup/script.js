
const viewBtn = document.querySelector(".view-modal"); 
const popupBtn = document.querySelector(".popup"); 
const closeBtn = document.querySelector(".close"); 
const field = document.querySelector(".field"); 
const input = document.querySelector("input"); 
const copy = document.querySelector(".copy"); 

viewBtn.addEventListener('click',function(){
    popupBtn.classList.add("show");
})

closeBtn.addEventListener('click',function(){
    viewBtn.click();
})

copy.addEventListener('click',function(e){
    input.select(); //select input value
    if(document.execCommand("copy")){ //if the selected text copy
      field.classList.add("active");
      copy.innerText = "copied";
      setTimeout(()=>{
        window.getSelection().removeAllRanges(); //remove selection from document
        field.classList.remove("active");
        copy.innerText = "Copy";
      }, 3000);
    }
})