
var str = "<p>Stefhany Oliveira, </br> <span class='text-green-600 text-5xl'>Front-End Developer</span></p>",
    i = 0,
    isTag,
    text;

(function initTypewriter() {
    text = str.slice(0, ++i);
    if (text === str) return;
    
    document.getElementById('text-typewriter').innerHTML = text;

    var char = text.slice(-1);
    if( char === '<' ) isTag = true;
    if( char === '>' ) isTag = false;

    if (isTag) return initTypewriter();
    setTimeout(initTypewriter, 80);
}());