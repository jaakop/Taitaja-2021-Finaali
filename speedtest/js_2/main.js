// Your code here
window.onscroll = function(e) {
    if(document.documentElement.scrollTop >= 200) {
        document.getElementById("popup").style.display = "block";
    }
    else {
        document.getElementById("popup").style.display = "none";
    }
}