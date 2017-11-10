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


/* Show and randomize tracklist */

var xmlhttp = new XMLHttpRequest();

xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        var myObj = JSON.parse(this.responseText);
    
        var tracklist = shuffle(myObj.list);
        addList(tracklist, '#tracklist');
        
        openClose(".show-list", "#tracklist");
    }
};

xmlhttp.open("GET", "tracklist.json", true);
xmlhttp.send();

function shuffle(array) {
  var m = array.length, t, i;

  while (m) {
    i = Math.floor(Math.random() * m--);

    t = array[m];
    array[m] = array[i];
    array[i] = t;
  }
  return array;
}

function addList(array, target) {
    var tracklistUL = document.querySelector(target);
    
    array.forEach(function(item, i){
        var listItem = document.createElement('li'),
            videoLink = '';
        
        if(item.url){
            var videoLink = '<a href="' + item.url + '" title="' + item.title + ' у виконанні kavananich на YouTube"><svg viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414"><path fill="currentColor" d="M0 7.345c0-1.294.16-2.59.16-2.59s.156-1.1.636-1.587c.608-.637 1.408-.617 1.764-.684C3.84 2.36 8 2.324 8 2.324s3.362.004 5.6.166c.314.038.996.04 1.604.678.48.486.636 1.588.636 1.588S16 6.05 16 7.346v1.258c0 1.296-.16 2.59-.16 2.59s-.156 1.102-.636 1.588c-.608.638-1.29.64-1.604.678-2.238.162-5.6.166-5.6.166s-4.16-.037-5.44-.16c-.356-.067-1.156-.047-1.764-.684-.48-.487-.636-1.587-.636-1.587S0 9.9 0 8.605v-1.26zm6.348 2.73V5.58l4.323 2.255-4.32 2.24z"/></svg></a>';
        }
        listItem.innerHTML = item.title + '<em> - ' + item.composer + '</em>' + videoLink;
        tracklistUL.appendChild(listItem);
    });
}

function openClose(target, elem) {
    var target = document.querySelector(target),
        elem = document.querySelector(elem),
        elemChildsQty = elem.childNodes.length,
        elemChildsHeight = elem.childNodes[1].offsetHeight;
    
    target.addEventListener("click", function(){
        if(elem.classList.contains("open")){
            elem.style.maxHeight = 6 * elemChildsHeight + "px";
            target.innerHTML = "Показати більше";
        } else {
            elem.style.maxHeight = elemChildsQty * elemChildsHeight + "px";
            target.innerHTML = "Приховати";
        }
        elem.classList.toggle('open');
    });
}