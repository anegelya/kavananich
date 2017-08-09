var titleH1 = document.querySelector(".title-h1"), 
    titleH2 = document.querySelector(".title-h2"),
    soc = document.querySelector(".soc"),
    formElem = document.querySelector("#form"),
    windowHeight = document.documentElement.clientHeight,
    parallaxSpacers = document.getElementsByClassName("section-spacer-img"),
    scrollIndex = windowHeight / 60,
    nav = document.querySelector("nav"),
    navLogo = document.querySelector("#logo"),
    Y = window.pageYOffset,
    preLoad = document.querySelector(".preLoad"),
    postContent = document.querySelector("#post-content");

/*Animate*/
function animate(options) {

  var start = performance.now();

  requestAnimationFrame(function animate(time) {
    // timeFraction от 0 до 1
    var timeFraction = (time - start) / options.duration;
    if (timeFraction > 1) timeFraction = 1;

    // текущее состояние анимации
    var progress = options.timing(timeFraction)

    options.draw(progress);

    if (timeFraction < 1) {
      requestAnimationFrame(animate);
    }

  });
}

function isScrolledIntoView(el) {
    var elemTop = el.getBoundingClientRect().top + 300;
    var elemBottom = el.getBoundingClientRect().bottom - 300;

    var isVisible = (elemTop >= 0) && (elemBottom <= window.innerHeight);
    return isVisible;
}

function setBackgroundImage(el) {
    var data_src = el.getAttribute('data-src');
    el.style.backgroundImage = 'url("' + data_src + '")';
    el.style.opacity = 1;
}

    
window.onload = function () {
    preLoad.style.display = 'none';
    document.body.style.overflow = 'visible';
    
    
    window.onscroll = function() {
        
        
        animate({
            duration: 50,
            timing: function(timeFraction) {
            return timeFraction;
        },
        
        draw: function(progress) {
            
            Y = window.pageYOffset;
            var transform = "matrix(1, 0, 0, 1, 0, " + Y/5 + ")";
            
            for (var i=1; i < parallaxSpacers.length; i++) {
                if(isScrolledIntoView(parallaxSpacers[i])) {
                    setBackgroundImage(parallaxSpacers[i]);
                    var z = (parallaxSpacers[i].getBoundingClientRect().top/2);
                    parallaxSpacers[i].style.transform = "matrix(1, 0, 0, 1, 0, " + -z + ")";
                }
            }
            
            if (Y > windowHeight - 100) {
                nav.style.opacity = 1;
                navLogo.style.opacity = 1;
                nav.style.background = "rgba(255, 255, 255, 0.8)";
                nav.classList.add("white-nav");
            } else if (Y < windowHeight) {
                nav.style.background = "none";
                nav.style.opacity = 0;
                nav.classList.remove("white-nav");
                navLogo.style.opacity = 0;
            }
        
            titleH1.style.top = -(Y / 2) + "px"; 
            titleH1.style.opacity = '' + ( 1 - (2 * Y / 1000)); 
            titleH2.style.top = -(Y / 3) + "px"; 
            titleH2.style.opacity = '' + ( 1 - (3 * Y / 1000));
            soc.style.transform = "matrix(1, 0, 0, 1, 0, -" + Y/4 + ")";
            soc.style.opacity = '' + ( 1 - (2 * Y / 1000));
            parallaxSpacers[0].style.transform = transform;
        }
        });
    }
};

$('#instagram-feed').load("instagram_feed.php");

ytEmbed.init({'block':'youtube-section','key':'AIzaSyDwvEfKAurRT3J_bBQkatLumbs4x_TGI0Q','q':'PLpo0aN3fN4frLWGvM8o-kA74DYelhmOjM','type':'playlist','results':6,'meta':true,'player':'embed','layout':'full'});

/* TRACKLIST */
var numbers = [],
    num;
function listItemAdd(num) {
    return (myObj.list[num].title + '<em> - ' + myObj.list[num].composer + '</em>');
}

function rnd(x) {
    var i = Math.round(Math.random() * x);
    return i;
}

function inListExist(i){
    var listItem = document.createElement('li'),
        num = rnd(myObj.list.length),
        tracklistUL = document.getElementById("tracklist");
    
    function isInList (elem) {
        return(elem == num);
    }
    
    if (numbers.some(isInList)){
        console.log("gotcha!" + num);
        return inListExist(i);
    } else if (numbers.some(isInList) == false) {
        numbers.push(num);
        listItem.innerHTML = listItemAdd(num);
        console.log(numbers);
        if (i < 6) {
            tracklistUL.appendChild(listItem);
        } else if (i == 6) {
            listItem.className = 'container';
            listItem.innerHTML = '<input type="checkbox" id="check_id"><label for="check_id"></label><ul id="ul-wrap"><li>' + myObj.list[num].title + '<em> - ' + myObj.list[num].composer + '</em></li></ul>';
            tracklistUL.appendChild(listItem);
        } else if (i > 6) {
            var tracklistLiUl = document.getElementById("ul-wrap");
            tracklistLiUl.appendChild(listItem);
        }
    }
}

var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        myObj = JSON.parse(this.responseText);
        
        for (var i in myObj.list) {
            inListExist(i);
        }
    }
};

xmlhttp.open("GET", "tracklist.json", true);
xmlhttp.send();