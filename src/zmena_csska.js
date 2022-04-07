/*Zmena css 500px */
var cssId_500 = 'css_500';  
if (!document.getElementById(cssId_500))
{
    var head  = document.getElementsByTagName('head')[0];
    var link  = document.createElement('link');
    link.id   = cssId_500;
    link.rel  = 'stylesheet';
    link.type = 'text/css';
    link.href = '../css/css_500px.css';
    link.media = 'all';
    head.appendChild(link);
    console.log("Zmena csska na 500px bola uspesne nacitana");
}

/*Zmena css 750px */
var cssId_750 = 'css_750';  
if (!document.getElementById(cssId_750))
{
    var head  = document.getElementsByTagName('head')[0];
    var link  = document.createElement('link');
    link.id   = cssId_750;
    link.rel  = 'stylesheet';
    link.type = 'text/css';
    link.href = '../css/css_750px.css';
    link.media = 'all';
    head.appendChild(link);
    console.log("Zmena csska na 750px bola uspesne nacitana");
}

/*Zmena css 1200px */
var cssId_1200 = 'css_1200';  
if (!document.getElementById(cssId_1200))
{
    var head  = document.getElementsByTagName('head')[0];
    var link  = document.createElement('link');
    link.id   = cssId_1200;
    link.rel  = 'stylesheet';
    link.type = 'text/css';
    link.href = '../css/css_1200px.css';
    link.media = 'all';
    head.appendChild(link);
    console.log("Zmena csska na 1200px bola uspesne nacitana");
}

/*Zmena css 1600px */
var cssId_1600 = 'css_1600';  
if (!document.getElementById(cssId_1600))
{
    var head  = document.getElementsByTagName('head')[0];
    var link  = document.createElement('link');
    link.id   = cssId_1600;
    link.rel  = 'stylesheet';
    link.type = 'text/css';
    link.href = '../css/css_1600px.css';
    link.media = 'all';
    head.appendChild(link);
    console.log("Zmena csska na 1600px bola uspesne nacitana");
}


