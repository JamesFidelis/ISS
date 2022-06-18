function myFunction() {
    var x = document.getElementById("myTopnav");
    var y = document.getElementById('topnavhead');
    if (x.className === "topnav") {
        x.className += " responsive";
        y.className += " responsive";
    } else {
        x.className = "topnav";
        y.className = "topnav";
    }
}