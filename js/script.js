window.onscroll = function() { scrollFunction() };

function scrollFunction() {
    if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
        document.getElementById("myBtn").style.display = "block";
        document.getElementById("navbar").style.backgroundColor = "rgba(32, 34, 38, 0.9)";
        document.getElementById("navbar").style.transform = "translateY(80px)";
        document.getElementById("navbar").style.transition = "0.8s";
        document.getElementById("navbar").style.overflow = "visible";
        document.getElementById("navbar").style.top = "-80px";
        document.getElementById("navbar").style.position = "fixed";




    } else {
        document.getElementById("myBtn").style.display = "none";
        document.getElementById("navbar").style.backgroundColor = "transparent";
        document.getElementById("navbar").style.position = "static";
        document.getElementById("navbar").style.transition = "0s ease";
        document.getElementById("navbar").style.transform = "translateY(0px)";
    }
}

function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

function openNav() {
    document.getElementById('open-nav').style.width = "100%";
    document.getElementById("open-nav").style.transition = "0.8s";
}

function closeNav() {
    document.getElementById('open-nav').style.width = "0px";
    document.getElementById("open-nav").style.transition = "0.8s";
}