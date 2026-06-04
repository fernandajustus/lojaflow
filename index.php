<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>FLOW • Ballet e Dança</title>

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
}

body{
font-family:Arial, Helvetica, sans-serif;
background:#ffffff;
color:#444;
}

/* FAIXA SUPERIOR */

.topbar{
background:#f7eef1;
padding:10px;
text-align:center;
font-size:12px;
letter-spacing:1px;
color:#777;
}

/* HEADER */

header{
background:white;
border-bottom:1px solid #f0f0f0;
}

/* TOPO */

.header-top{
max-width:1400px;
margin:auto;
padding:25px 5%;
display:flex;
justify-content:space-between;
align-items:center;
}

.header-esquerda,
.header-direita{
width:180px;
display:flex;
align-items:center;
}

.header-direita{
justify-content:flex-end;
gap:20px;
}

.header-direita a{
text-decoration:none;
color:#666;
font-size:14px;
transition:.3s;
}

.header-direita a:hover{
color:#b87c88;
}

.logo{
flex:1;
text-align:center;
}

.logo img{
width:280px;
max-width:90%;
}

/* PESQUISA */

.pesquisa-area{
padding:0 5% 25px;
display:flex;
justify-content:center;
}

.pesquisa{
width:100%;
max-width:550px;
padding:15px 25px;
border:1px solid #ececec;
border-radius:50px;
background:#fafafa;
outline:none;
font-size:14px;
}

.pesquisa:focus{
border-color:#d8a7b1;
}

/* MENU */

.menu{
display:flex;
justify-content:center;
gap:35px;
padding:18px;
border-top:1px solid #f6f6f6;
}

.menu a{
text-decoration:none;
font-size:13px;
font-weight:600;
letter-spacing:1px;
color:#555;
transition:.3s;
}

.menu a:hover{
color:#b87c88;
}

/* BANNER */

.banner{
position:relative;
}

.banner img{
width:100%;
height:750px;
object-fit:cover;
}

.banner-conteudo{
position:absolute;
top:50%;
left:50%;
transform:translate(-50%,-50%);
text-align:center;
color:white;
width:90%;
}

.banner-conteudo span{
letter-spacing:3px;
font-size:14px;
}

.banner-conteudo h1{
font-size:90px;
font-weight:300;
margin:20px 0;
}

.banner-conteudo p{
font-size:22px;
margin-bottom:35px;
}

.btn-banner{
background:white;
color:#b87c88;
padding:16px 40px;
text-decoration:none;
font-weight:bold;
letter-spacing:2px;
border-radius:50px;
transition:.3s;
}

.btn-banner:hover{
background:#f7eef1;
}

/* BENEFICIOS RAPIDOS */

.info-rapida{
padding:60px 5%;
display:grid;
grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
gap:30px;
max-width:1300px;
margin:auto;
}

.info-box{
text-align:center;
}

.info-box h3{
font-size:18px;
font-weight:500;
margin-bottom:10px;
color:#b87c88;
}

.info-box p{
font-size:14px;
line-height:1.8;
color:#777;
}

/* TITULOS */

.titulo{
text-align:center;
font-size:42px;
font-weight:300;
letter-spacing:2px;
color:#b87c88;
margin-top:80px;
margin-bottom:40px;
}

/* RESPONSIVO */

@media(max-width:900px){

.header-top{
flex-direction:column;
gap:20px;
}

.header-esquerda{
display:none;
}

.header-direita{
width:auto;
}

.menu{
flex-wrap:wrap;
gap:15px;
}

.banner img{
height:550px;
}

.banner-conteudo h1{
font-size:55px;
}

.banner-conteudo p{
font-size:18px;
}

}

</style>

</head>

<body>

<div class="topbar">
FRETE PARA TODO O BRASIL • PARCELAMENTO EM ATÉ 12X SEM JUROS
</div>

<header>

<div class="header-top">

<div class="header-esquerda"></div>

<div class="logo">

<img
src="https://i.ibb.co/vncsHRN/img-flow.png"
alt="FLOW">

</div>

<div class="header-direita">

<a href="#">♡ Favoritos</a>

<a href="#">🛒 Carrinho</a>

<a href="#">Entrar</a>

</div>

</div>

<div class="pesquisa-area">

<input
type="text"
class="pesquisa"
placeholder="Pesquisar produtos...">

</div>

<nav class="menu">

<a href="#">INÍCIO</a>

<a href="#">NOVIDADES</a>

<a href="#">COLLANTS</a>

<a href="#">SAPATILHAS</a>

<a href="#">SAIAS</a>

<a href="#">BOLSAS</a>

<a href="#">ACESSÓRIOS</a>

<a href="#">PROMOÇÕES</a>

<a href="#">SOBRE</a>

<a href="#">CONTATO</a>

</nav>

</header>

<section class="banner">

<img
src="https://images.unsplash.com/photo-1508804185872-d7badad00f7d?auto=format&fit=crop&w=1600&q=80">

<div class="banner-conteudo">

<span>COLEÇÃO FLOW 2026</span>

<h1>Elegância em Movimento</h1>

<p>
Produtos desenvolvidos para acompanhar cada passo da sua dança.
</p>

<a href="#" class="btn-banner">
COMPRAR AGORA
</a>

</div>

</section>

<section class="info-rapida">

<div class="info-box">

<h3>Entrega Nacional</h3>

<p>
Enviamos para todo o Brasil com rapidez e segurança.
</p>

</div>

<div class="info-box">

<h3>Qualidade Premium</h3>

<p>
Produtos selecionados para máximo conforto e desempenho.
</p>

</div>

<div class="info-box">

<h3>Compra Segura</h3>

<p>
Proteção dos seus dados durante toda a compra.
</p>

</div>

<div class="info-box">

<h3>Atendimento Especializado</h3>

<p>
Suporte para ajudar na escolha do produto ideal.
</p>

</div>

</section>
    <style>

/* PRODUTOS */

.produtos{
max-width:1400px;
margin:auto;
padding:20px 5% 100px;
display:grid;
grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
gap:40px;
}

.card-produto{
text-align:center;
transition:.3s;
}

.card-produto:hover{
transform:translateY(-5px);
}

.card-produto img{
width:100%;
height:380px;
object-fit:cover;
border-radius:8px;
}

.categoria{
margin-top:15px;
font-size:11px;
letter-spacing:2px;
color:#999;
text-transform:uppercase;
}

.nome-produto{
margin-top:10px;
font-size:18px;
font-weight:500;
color:#444;
}

.preco{
margin-top:12px;
font-size:22px;
font-weight:bold;
color:#b87c88;
}

.estrelas{
margin:12px 0;
color:#d8a7b1;
letter-spacing:2px;
}

.btn-comprar{
display:inline-block;
margin-top:10px;
padding:14px 35px;
background:#d8a7b1;
color:white;
text-decoration:none;
border-radius:40px;
font-size:13px;
font-weight:bold;
letter-spacing:1px;
transition:.3s;
}

.btn-comprar:hover{
background:#c795a0;
}

.links-produto{
margin-top:15px;
display:flex;
justify-content:center;
gap:20px;
}

.links-produto a{
text-decoration:none;
font-size:14px;
color:#888;
}

.links-produto a:hover{
color:#b87c88;
}

/* BANNER INTERMEDIÁRIO */

.banner-secundario{
position:relative;
margin:80px 0;
}

.banner-secundario img{
width:100%;
height:500px;
object-fit:cover;
}

.banner-texto2{
position:absolute;
top:50%;
left:50%;
transform:translate(-50%,-50%);
text-align:center;
color:white;
width:90%;
}

.banner-texto2 h2{
font-size:60px;
font-weight:300;
margin-bottom:20px;
}

.banner-texto2 p{
font-size:20px;
margin-bottom:25px;
}

.btn-banner2{
display:inline-block;
padding:15px 35px;
background:white;
color:#b87c88;
text-decoration:none;
border-radius:40px;
font-weight:bold;
}

/* RESPONSIVO */

@media(max-width:768px){

.banner-texto2 h2{
font-size:38px;
}

.banner-texto2 p{
font-size:16px;
}

}

</style>

<!-- LANÇAMENTOS -->

<h2 class="titulo">
LANÇAMENTOS
</h2>

<section class="produtos">

<div class="card-produto">

<img src="https://cdn.awsli.com.br/600x700/619/619252/produto/145340113/facc017f1d.jpg">

<div class="categoria">
COLLANT
</div>

<h3 class="nome-produto">
Collant Clássico Premium
</h3>

<div class="estrelas">
★★★★★
</div>

<div class="preco">
R$ 179,90
</div>

<a href="#" class="btn-comprar">
COMPRAR
</a>

<div class="links-produto">
<a href="#">♡ Favoritar</a>
<a href="#">🛒 Carrinho</a>
</div>

</div>

<div class="card-produto">

<img src="https://imperiodadanca.com.br/content/images/thumbs/0004670_500-ponta-pirouette-evidence_600.jpeg">

<div class="categoria">
SAPATILHA
</div>

<h3 class="nome-produto">
Sapatilha de Ponta
</h3>

<div class="estrelas">
★★★★★
</div>

<div class="preco">
R$ 346,90
</div>

<a href="#" class="btn-comprar">
COMPRAR
</a>

<div class="links-produto">
<a href="#">♡ Favoritar</a>
<a href="#">🛒 Carrinho</a>
</div>

</div>

<div class="card-produto">

<img src="https://acdn-us.mitiendanube.com/stores/001/342/307/products/13-426ccb3c08c87839ab17254631016070-480-0.webp">

<div class="categoria">
SAIA
</div>

<h3 class="nome-produto">
Saia Tule Premium
</h3>

<div class="estrelas">
★★★★★
</div>

<div class="preco">
R$ 199,90
</div>

<a href="#" class="btn-comprar">
COMPRAR
</a>

<div class="links-produto">
<a href="#">♡ Favoritar</a>
<a href="#">🛒 Carrinho</a>
</div>

</div>

<div class="card-produto">

<img src="https://lojasodanca.vtexassets.com/arquivos/ids/703377/SD2417_1626_F.jpg?v=639143586171600000">

<div class="categoria">
TOP
</div>

<h3 class="nome-produto">
Top Flow Active
</h3>

<div class="estrelas">
★★★★★
</div>

<div class="preco">
R$ 199,90
</div>

<a href="#" class="btn-comprar">
COMPRAR
</a>

<div class="links-produto">
<a href="#">♡ Favoritar</a>
<a href="#">🛒 Carrinho</a>
</div>

</div>

</section>

<!-- BANNER SECUNDÁRIO -->

<section class="banner-secundario">

<img src="https://images.unsplash.com/photo-1518834107812-67b0b7c58434?auto=format&fit=crop&w=1600&q=80">

<div class="banner-texto2">

<h2>
Coleção Ballet Clássico
</h2>

<p>
Peças desenvolvidas para unir conforto, leveza e elegância.
</p>

<a href="#" class="btn-banner2">
VER COLEÇÃO
</a>

</div>

</section>

<!-- MAIS VENDIDOS -->

<h2 class="titulo">
MAIS VENDIDOS
</h2>

<section class="produtos">

<div class="card-produto">

<img src="https://decathlonpro.vtexassets.com/arquivos/ids/159077130/velvet-dance-bag-pnk-no-size-rosa-velho-Unico1.jpg?v=638591747868300000">

<div class="categoria">
BOLSA
</div>

<h3 class="nome-produto">
Bolsa Velvet Dance
</h3>

<div class="estrelas">
★★★★★
</div>

<div class="preco">
R$ 189,90
</div>

<a href="#" class="btn-comprar">
COMPRAR
</a>

</div>

<div class="card-produto">

<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTA5jF0kw3VOkhq5AF-9K-bRJ3gSJN1s0TvUw&s">

<div class="categoria">
POLAINA
</div>

<h3 class="nome-produto">
Polaina Ballet
</h3>

<div class="estrelas">
★★★★★
</div>

<div class="preco">
R$ 79,90
</div>

<a href="#" class="btn-comprar">
COMPRAR
</a>

</div>

<div class="card-produto">

<img src="https://cdn.awsli.com.br/2500x2500/1421/1421519/produto/221069039/meia-cal-a-balle-lz8n2f2tax.jpg">

<div class="categoria">
MEIA-CALÇA
</div>

<h3 class="nome-produto">
Meia-Calça Ballet
</h3>

<div class="estrelas">
★★★★★
</div>

<div class="preco">
R$ 59,90
</div>

<a href="#" class="btn-comprar">
COMPRAR
</a>

</div>

<div class="card-produto">

<img src="https://images.tcdn.com.br/img/img_prod/633103/jaqueta_feminina_puffer_inverno_bolha_nylon_3_cores_5395_1_60208a4bff4ca4430f3df9a27f0c470b.jpg">

<div class="categoria">
JAQUETA
</div>

<h3 class="nome-produto">
Jaqueta Ballet Winter
</h3>

<div class="estrelas">
★★★★★
</div>

<div class="preco">
R$ 229,90
</div>

<a href="#" class="btn-comprar">
COMPRAR
</a>

</div>

</section>
    <style>

/* SOBRE */

.sobre{
max-width:1000px;
margin:120px auto;
padding:0 5%;
text-align:center;
}

.sobre h2{
font-size:42px;
font-weight:300;
color:#b87c88;
margin-bottom:30px;
letter-spacing:2px;
}

.sobre p{
font-size:16px;
line-height:2;
color:#666;
}

/* BENEFÍCIOS */

.beneficios{
background:#faf8f9;
padding:100px 5%;
}

.beneficios-grid{
max-width:1300px;
margin:auto;
display:grid;
grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
gap:40px;
}

.beneficio{
text-align:center;
}

.beneficio h3{
color:#b87c88;
font-size:20px;
margin-bottom:15px;
font-weight:500;
}

.beneficio p{
color:#777;
line-height:1.8;
}

/* DEPOIMENTOS */

.depoimentos{
padding:120px 5%;
}

.depoimentos-grid{
max-width:1300px;
margin:auto;
display:grid;
grid-template-columns:repeat(auto-fit,minmax(300px,1fr));
gap:30px;
}

.depoimento{
padding:35px;
border:1px solid #f0f0f0;
border-radius:10px;
background:white;
}

.depoimento .estrela{
color:#d8a7b1;
font-size:18px;
margin-bottom:15px;
}

.depoimento p{
line-height:1.9;
color:#666;
margin-bottom:15px;
}

.depoimento strong{
color:#b87c88;
}

/* NEWSLETTER */

.newsletter{
background:#faf8f9;
padding:100px 5%;
text-align:center;
}

.newsletter h2{
font-size:42px;
font-weight:300;
color:#b87c88;
margin-bottom:20px;
}

.newsletter p{
color:#777;
margin-bottom:30px;
}

.newsletter form{
max-width:600px;
margin:auto;
}

.newsletter input{
width:100%;
padding:18px;
border:1px solid #eee;
border-radius:50px;
margin-bottom:15px;
outline:none;
}

.newsletter button{
padding:16px 35px;
border:none;
border-radius:50px;
background:#d8a7b1;
color:white;
font-weight:bold;
cursor:pointer;
transition:.3s;
}

.newsletter button:hover{
background:#c796a1;
}

/* FAQ */

.faq{
max-width:1000px;
margin:120px auto;
padding:0 5%;
}

.faq-item{
padding:25px 0;
border-bottom:1px solid #eee;
}

.faq-item h3{
color:#b87c88;
font-size:18px;
margin-bottom:10px;
font-weight:500;
}

.faq-item p{
color:#666;
line-height:1.8;
}

/* INSTAGRAM */

.instagram{
padding:100px 5%;
text-align:center;
}

.instagram-grid{
margin-top:40px;
display:grid;
grid-template-columns:repeat(4,1fr);
gap:15px;
max-width:1200px;
margin-left:auto;
margin-right:auto;
}

.instagram-grid img{
width:100%;
height:250px;
object-fit:cover;
border-radius:8px;
}

/* FOOTER */

footer{
margin-top:100px;
background:#faf8f9;
padding:80px 5% 30px;
}

.footer-grid{
max-width:1300px;
margin:auto;
display:grid;
grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
gap:40px;
}

.footer-col h3{
color:#b87c88;
margin-bottom:20px;
font-size:17px;
}

.footer-col a,
.footer-col p{
display:block;
text-decoration:none;
color:#666;
margin-bottom:12px;
font-size:14px;
}

.footer-col a:hover{
color:#b87c88;
}

.copy{
text-align:center;
margin-top:50px;
padding-top:20px;
border-top:1px solid #e5e5e5;
color:#999;
font-size:13px;
}

.whatsapp{
position:fixed;
right:25px;
bottom:25px;
width:60px;
height:60px;
background:#d8a7b1;
border-radius:50%;
display:flex;
justify-content:center;
align-items:center;
font-size:26px;
text-decoration:none;
color:white;
box-shadow:0 5px 15px rgba(0,0,0,.1);
}

.whatsapp:hover{
background:#c796a1;
}

@media(max-width:768px){

.instagram-grid{
grid-template-columns:repeat(2,1fr);
}

}

</style>

<!-- SOBRE -->

<section class="sobre">

<h2>Sobre a FLOW</h2>

<p>
A FLOW nasceu para oferecer aos bailarinos produtos que unem conforto,
qualidade e elegância. Nossa seleção inclui collants, sapatilhas,
saias, acessórios e itens essenciais para acompanhar cada etapa da
jornada na dança. Trabalhamos com carinho para entregar produtos
que valorizam o desempenho e a beleza de cada movimento.
</p>

</section>

<!-- BENEFÍCIOS -->

<section class="beneficios">

<h2 class="titulo">POR QUE ESCOLHER A FLOW</h2>

<div class="beneficios-grid">

<div class="beneficio">
<h3>Entrega para Todo Brasil</h3>
<p>Envios rápidos e seguros para todas as regiões.</p>
</div>

<div class="beneficio">
<h3>Compra Segura</h3>
<p>Proteção dos seus dados em todas as etapas.</p>
</div>

<div class="beneficio">
<h3>Produtos Selecionados</h3>
<p>Qualidade e conforto para cada apresentação.</p>
</div>

<div class="beneficio">
<h3>Atendimento Humanizado</h3>
<p>Suporte dedicado para ajudar na sua compra.</p>
</div>

</div>

</section>

<!-- DEPOIMENTOS -->

<section class="depoimentos">

<h2 class="titulo">O QUE NOSSOS CLIENTES DIZEM</h2>

<div class="depoimentos-grid">

<div class="depoimento">
<div class="estrela">★★★★★</div>
<p>Produtos lindos e de excelente qualidade.</p>
<strong>Maria Silva</strong>
</div>

<div class="depoimento">
<div class="estrela">★★★★★</div>
<p>Entrega rápida e ótimo atendimento.</p>
<strong>Ana Souza</strong>
</div>

<div class="depoimento">
<div class="estrela">★★★★★</div>
<p>Minha filha adorou as sapatilhas e os acessórios.</p>
<strong>Juliana Martins</strong>
</div>

</div>

</section>

<!-- FAQ -->

<section class="faq">

<h2 class="titulo">Perguntas Frequentes</h2>

<div class="faq-item">
<h3>Qual o prazo de entrega?</h3>
<p>O prazo varia de acordo com sua região e modalidade de frete.</p>
</div>

<div class="faq-item">
<h3>Posso trocar um produto?</h3>
<p>Sim, conforme nossa política de trocas e devoluções.</p>
</div>

<div class="faq-item">
<h3>Quais formas de pagamento são aceitas?</h3>
<p>PIX, boleto bancário e cartões de crédito.</p>
</div>

<div class="faq-item">
<h3>Como acompanhar meu pedido?</h3>
<p>Pela área do cliente após a integração com o sistema.</p>
</div>

</section>

<!-- NEWSLETTER -->

<section class="newsletter">

<h2>Receba Novidades</h2>

<p>
Cadastre-se para receber promoções e lançamentos exclusivos.
</p>

<form>

<input type="text" placeholder="Seu nome">

<input type="email" placeholder="Seu e-mail">

<button type="submit">
CADASTRAR
</button>

</form>

</section>



<footer>

<div class="footer-grid">

<div class="footer-col">
<h3>Institucional</h3>
<a href="#">Sobre Nós</a>
<a href="#">Política de Privacidade</a>
<a href="#">Termos de Uso</a>
<a href="#">Trocas e Devoluções</a>
</div>

<div class="footer-col">
<h3>Categorias</h3>
<a href="#">Collants</a>
<a href="#">Sapatilhas</a>
<a href="#">Saias</a>
<a href="#">Acessórios</a>
</div>

<div class="footer-col">
<h3>Atendimento</h3>
<p>sac@flow.com.br</p>
<p>(41) 99999-9999</p>
<p>Segunda a Sexta • 08h às 18h</p>
</div>

<div class="footer-col">
<h3>Redes Sociais</h3>
<a href="#">Instagram</a>
<a href="#">TikTok</a>
<a href="#">Facebook</a>
<a href="#">YouTube</a>
</div>

</div>

<div class="copy">
© 2026 FLOW • Todos os direitos reservados
</div>

</footer>

<a href="#" class="whatsapp">
✿
</a>

</body>
</html>
