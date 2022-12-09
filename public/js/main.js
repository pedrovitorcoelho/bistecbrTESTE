//Menu mobile ---------------------------------------------------------------------------
const verificaTela = () => {
    //ajusta para o menu se adequar conforme a mudança da tela
    let w = window, e = document.documentElement, g = document.getElementsByTagName('body')[0],
    x = w.innerWidth || e.clientWidth || g.clientWidth,
    y = w.innerHeight|| e.clientHeight|| g.clientHeight; 
    //IMAGENS

    if(window.matchMedia("(min-width: 621px), (max-width: 769px)").matches){
        document.getElementById('img-banner').removeAttribute('src')
        document.getElementById('img-banner').setAttribute('src',`https://ik.imagekit.io/bistecbr/banner_bistecbr.png?tr=w-${(x-20)*2},h-${y*0.88}`) //?tr=w-${ (x - 20) * 2 },h-${ y * 2 }
    }

    if(window.matchMedia("(min-width: 770px)").matches){
        document.getElementById('img-banner').removeAttribute('src')
        document.getElementById('img-banner').setAttribute('src',`https://ik.imagekit.io/bistecbr/banner_bistecbr.png?tr=w-${(x-20)*2},h-${y*1.98}`) //?tr=w-${ (x - 20) * 2 },h-${ y * 2 }
    }

    if(window.matchMedia("(max-width: 620px)").matches) {
        document.getElementById('img-banner').removeAttribute('src')
        document.getElementById('img-banner').setAttribute('src',`https://ik.imagekit.io/bistecbr/banner_bistecbr.png?tr=w-${(x-1)*2},h-${y*0.75}`) //?tr=w-${ (x - 20) * 2 },h-${ y * 2 }
    } 

    //RECOMPOE MENU AO ALTERAR TAMANHO DA TELA ENTRE MOBILE E OUTRO
    // let menu = document.getElementsByClassName('normal-menu')[0]
    // if(!window.matchMedia("(min-width: 951px)").matches)
    //     menu.style.display = 'none'
    // else
    //     menu.style.display = 'inherit'
}
window.onresize = verificaTela
window.onload = verificaTela

//abre e fecha menu mobile
document.getElementsByName('menu-outline')[0].addEventListener('click', menuResponsive)
function menuResponsive(){
    let menu = document.getElementsByClassName('normal-menu')[0]
    if(menu.style.display == 'inherit'){
        menu.style.display = 'none'
    }else{
        menu.style.display = 'inherit'
    }
<<<<<<< HEAD
}
=======
}

// abrir e fechar botão portfólio
// document.getElementsByClassName('click_portfolio_mobile')[0].addEventListener('click', portfolioMobile)
// function portfolioMobile(){
//         let clickportfolio = document.getElementsByClassName('normal-submenu')[0]
//         let store = document.getElementsByClassName('button')[0]
//         let support = document.getElementsByClassName('button_support')[0]
//         if(clickportfolio.style.display == 'block'){
//             clickportfolio.style.display = 'none';
//             store.style.display = 'block';
//             support.style.display = 'block';
//         }else{
//             clickportfolio.style.display = 'block';
//             store.style.display = 'none';
//             support.style.display = 'none';
//         }
//         // console.log('teste');
// }
>>>>>>> origin/gui-laravel1
