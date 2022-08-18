function firstfunction () {
const loader = document.getElementById("my");
loader.classList.add("l"); 

}
firstfunction();


window.onload = (event) => {
    const loader = document.getElementById("my").classList.add("hiding"); 
    var spin = document.querySelectorAll(".container");  
    const nodeList = document.querySelectorAll(".container");
    for (let i = 0; i < nodeList.length; i++) {
    nodeList[i].removeAttribute("hidden");
    }
  };
console.log('page is fully loaded');






