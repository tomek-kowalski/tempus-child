function showPopup() {
  const popup    = document.querySelector('.full-screen');
  const slider   = document.querySelectorAll(".container-row");
  const nav      = document.getElementById('site-navigation');
  const img      = document.querySelector('.single-wear-item');   
  const product  = document.querySelector('.product-half');  
  const showbtn  = document.querySelector('.btn-control');  


  if (nav.style.display       == "" || "flex") {
    nav.style.display         = "none";
    popup.classList.remove('hidden');
    img.style.display         = "none";
    product.style.display     = "none";
    showbtn.style.display     = "none";

    for (let i = 0; i < slider.length; i++) {
      slider[i].style.display = "none";
    }
    
  } 
  }


console.log('confirm ok');