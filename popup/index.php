<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Popup Share Modal | CodingNepal</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css">

</head>
<body>
  <button class="view-modal">View Modal </button>
<div class="popup">
<header>
  <span>share modal</span>
  <div class="close"><i class="uil uil-times"></i></div>
</header>
<div class="content">
  <p>chare this link via</p>
  <ul class="icons">
    <a href="#"><i class="fab fa-facebook-f"></i></a>
    <a href="#"><i class="fab fa-twitter"></i></a>
    <a href="#"><i class="fab fa-instagram"></i></a>
    <a href="#"><i class="fab fa-whatsapp"></i></a>
    <a href="#"><i class="fab fa-telegram-plane"></i></a>
  </ul>
  <p> Or copy link </p>
  <div class="field">
    <i class="uil uil-link"> </i>
    <input type="text" value="exemple.com/share-link">
    <button class="copy">Copy</button>
  </div>
</div>
</div>

<script>

  const viewBtn = document.querySelector(".view-modal"); 
  const popupBtn = document.querySelector(".popup"); 
  const closeBtn = document.querySelector(".close"); 
  const field = document.querySelector(".field"); 
  const input = document.querySelector("input"); 
  const copy = document.querySelector(".copy"); 

  viewBtn.onclick= ()=>{
    popupBtn.classList.toggle("show")
  }
 closeBtn.onclick= ()=>{
  viewBtn.click()
 }
 copy.onclick = ()=>{
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
    }
</script>

<!-- <script src="script.js"></script> -->

</body>
</html>