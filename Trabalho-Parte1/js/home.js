function validaBusca() {
if (document.querySelector('#q').value == '') {
/*alert('Não podia ter deixado em branco a busca!');*/
document.querySelector('#form-busca').style.background = 'red';
return false;
}
}



document.querySelector('#form-busca').onsubmit = validaBusca;
document.querySelector('#form-busca').onsubmit = function() {
if (document.querySelector('#q').value == '') {
document.querySelector('#form-busca').style.background = 'red';
return false;
}
};

var banners = ["img/destaque-home.png", "img/destaque-home-2.png"];
var bannerAtual = 0;
function trocaBanner() {
bannerAtual = (bannerAtual + 1) % 2;
document.querySelector('.destaque img').src = banners[bannerAtual];
}
setInterval(trocaBanner, 4000);
