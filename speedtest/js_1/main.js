// Your code here
let counter = 0;
document.addEventListener("click", function(e) {
    if(e.target.className === "box") {
        setInterval(() => {
            if(counter < 500){
                e.target.style.marginLeft = counter + "px";
                counter++;
            }  
        }, 5);
    }
})