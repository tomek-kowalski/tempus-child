function closePopup() {
  const popup    = document.querySelector('.full-screen');
  const slider   = document.querySelectorAll(".container-row");
  const nav      = document.getElementById('site-navigation');
  const img      = document.querySelector('.single-wear-item');   
  const product  = document.querySelector('.product-half');  
  const showbtn  = document.querySelector('.btn-control');  


  if (nav.style.display       == "" || "none") {
    nav.style.display         = "flex";
    popup.classList.add('hidden');
    img.style.display         = "block";
    product.style.display     = "block";
    showbtn.style.display     = "block";
    

    for (let i = 0; i < slider.length; i++) {
    slider[i].style.display   = "block";
    }
    
  }}
