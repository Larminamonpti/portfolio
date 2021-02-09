
let bouton = document.getElementById('bouton')
let height = (window.screen.height - (window.screen.height/3.8))/2;
let midHeight = height/2;
let speed = 1700;
let moving_frequency = 1;
let links = document.querySelectorAll(".ancre"); 
let href;
let header = document.getElementById('header');
let replace = document.getElementById('replace');
let projets = document.querySelectorAll('.maquette');


bouton.addEventListener('click', function(e){
    e.preventDefault();
    toBalle()
    setTimeout(scroll, 1400)
    setTimeout(toDrop, 700);
    setTimeout(toUp, 1400);
    setTimeout(toDrop, 2400)
    setTimeout(toBase, 4000)
    
    
    return false;
});
function toBalle(){
    bouton.style.height = '50px';
    bouton.style.width = '65px';
    bouton.style.borderRadius = '100%';
    bouton.style.border = '3px solid white';
    bouton.style.backgroundColor = 'white'
    bouton.textContent = '';   
}

function toDrop(){
    bouton.style.top = height + 'px';
}
function toUp(){
    bouton.style.top = midHeight + 'px';
}
function toBase(){
    bouton.style.height = '';
    bouton.style.width = '';
    bouton.style.borderRadius = '';
    bouton.style.border = '';
    bouton.style.backgroundColor = ''
    bouton.style.top = '0px'
    bouton.textContent = 'Decouvrez mon travail';   
}
function scroll(){
    let element;
    let href = bouton.attributes.href.nodeValue.toString();
    if(element = document.getElementById(href.substr(1)))
    {
        let hop_count = speed/moving_frequency
        let getScrollTopDocumentAtBegin = getScrollTopDocument();
        let gap = (getScrollTopElement(element) - getScrollTopDocumentAtBegin) / hop_count;
        
        for(let j = 1; j <= hop_count; j++)
        {
            (function()
            {
                let hop_top_position = gap*j;
                setTimeout(function(){  window.scrollTo(0, hop_top_position + getScrollTopDocumentAtBegin); }, moving_frequency*j);
            })();
        }
    }
    
    return false;
}

(function()
{
    let speed2 = 400;
    for(let i=0; i<links.length; i++)
    {   
        href = (links[i].attributes.href === undefined) ? null : links[i].attributes.href.nodeValue.toString();
        
        if(href !== null && href.length > 1 && href.substr(0, 1) == '#')
        {
            links[i].onclick = function()
            {
                let element;
                let href = this.attributes.href.nodeValue.toString();
                if(element = document.getElementById(href.substr(1)))
                {
                    let hop_count = speed2/moving_frequency
                    let getScrollTopDocumentAtBegin = getScrollTopDocument();
                    let gap = (getScrollTopElement(element) - getScrollTopDocumentAtBegin) / hop_count;
                    
                    for(let j = 1; j <= hop_count; j++)
                    {
                        (function()
                        {
                            let hop_top_position = gap*j;
                            setTimeout(function(){  window.scrollTo(0, hop_top_position + getScrollTopDocumentAtBegin); }, moving_frequency*j);
                        })();
                    }
                }
                
                return false;
            };
        }
    }
    

})();

let getScrollTopElement =  function (e)
{
    let top = 0;
    
    while (e.offsetParent != undefined && e.offsetParent != null)
    {
        top += e.offsetTop + (e.clientTop != null ? e.clientTop : 0);
        e = e.offsetParent;
    }
    
    return top;
};

let getScrollTopDocument = function()
{
    return document.documentElement.scrollTop + document.body.scrollTop;
};

window.addEventListener('scroll', function(){
    if(window.scrollY > (screen.height - 100 )){
        header.style.position = 'fixed';
        header.style.backgroundColor = 'rgba(4, 0, 26, 0.51)';
        document.getElementById('fleche').style.opacity = '1';
        if (!window.matchMedia("(max-width: 576px)").matches){
            replace.style.display = 'block';
        }

    }else{
        header.style.position = '';
        replace.style.display = 'none',
        header.style.backgroundColor = 'rgba(4, 0, 26, 0.9)';
        document.getElementById('fleche').style.opacity = '0';
    }
    if(window.scrollY > ((screen.height - 100)*0.5)){
        document.getElementById('html').style.width = '70%';
        document.getElementById('css').style.width = '65%';
        document.getElementById('php').style.width = '70%';
        document.getElementById('js').style.width = '65%';
        document.getElementById('symfo').style.width = '70%';
        document.getElementById('lara').style.width = '50%';
        document.getElementById('node').style.width = '40%';
        document.getElementById('react').style.width = '50%';
        document.getElementById('monImage').style.opacity = '1';
        
    }
    if(window.scrollY > ((screen.height - 100)*1.5)){
        if (!window.matchMedia("(max-width: 576px)").matches){
        document.getElementById('df').style.top = '0px';
        document.getElementById('mg').style.left = '0px';
        document.getElementById('pz').style.top = document.getElementById('deFilsEnTetines').clientHeight +'px';
        document.getElementById('pz').style.left = '0px';
        document.getElementById('dv').style.top =document.getElementById('memoryGame').clientHeight +'px'; 
        document.getElementById('deFilsEnTetines').style.opacity = '1';
        document.getElementById('memoryGame').style.opacity = '1';
        document.getElementById('puzzle').style.opacity = '1';
        document.getElementById('divinity').style.opacity = '1';
        }
    }
})
if (!window.matchMedia("(max-width: 576px)").matches){

    for(projet of projets){
        
        projet.addEventListener('mouseover', function(e){
            e.preventDefault()
            this.querySelector('img').style.opacity = '0.1';
            this.querySelector('.surcouche').style.display = 'block';
            this.querySelector('.surcouche').style.opacity = '1';
            this.querySelector('.surcouche span').style.top =  (this.querySelector('img').clientHeight/10) + 'px';;
            this.querySelector('.surcouche p').style.top =  (this.querySelector('img').clientHeight/10) + 'px';;
            this.querySelector('.surcouche a').style.top = (this.querySelector('img').clientHeight/3) + 'px';
            
            
        })
        projet.addEventListener('mouseout', function(){
            this.querySelector('img').style.opacity = '1';
            this.querySelector('.surcouche').style.display = 'none';
            this.querySelector('.surcouche').style.opacity = '0';
            this.querySelector('.surcouche span').style.top =  '-50px';;
            this.querySelector('.surcouche p').style.top =  '-50px';;
            this.querySelector('.surcouche a').style.top =  '200px';
            
            
        })
        
        
    }
}

