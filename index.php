<?php
    require_once 'vendor/autoload.php'; // composer autoload
    $dicio = new jozuemarsh\Dicio\Engine;

    $q = $dicio::search('dicionario'); // palavra a ser pesquisada

    $tit = $q->titulo;
//     retorna:
//     (
//         [0] => Significado de Dicionário
//     )
      
    $des = $q->descricao;
//     retorna:
//     (
//         [0] => Compilação que contém as palavras de uma língua, apresentando seu significado, utilização, etimologia, sinônimos, antônimos ou com a tradução para outra língua: dicionário de português; dicionário de português-inglês.
//     )

    $sig = $q->significado;
//     retorna:
//     (
//         [0] => Compilação que contém as palavras de uma língua, apresentando seu significado, utilização, etimologia, sinônimos, antônimos ou com a tradução para outra língua: dicionário de português; dicionário de português-inglês.
//         [1] => Livro, meio eletrônico ou outro suporte que possui as informações presentes nessa compilação: O Dicio é um dicionário on-line de língua portuguesa.
//     )
  
    $def = $q->definicao;
//     retorna:
//     (
//         [0] => substantivo masculino
//         [1] => di-ci-o-ná-ri-o
//         [2] => dicionários
//     )

    $rev = $q->revisao;
//     retorna:
//     (
//         [0] => Conteúdo revisto em março de 2018. Lexicógrafa responsável: Débora Ribeiro
//     )
  
    $url = $q->url;
//     http://www.dicio.com.br/dicionario

    $mea = $q->meaning;
//     retorna:
//     (
//         [0] => Livro, meio eletrônico ou outro suporte que possui as informações presentes nessa compilação: O Dicio é um dicionário on-line de língua portuguesa.
//         [1] => [Por Extensão] Reunião dos vocábulos ou termos que fazem parte dessa compilação: esta palavra não consta no dicionário.
//         [2] => [Por Extensão] Indivíduo que tem um conhecimento excessivo sobre variadas coisas: meu professor é um dicionário que fala.
//     )

    $ety = $q->etymology;
//     Do latim medieval. dictionaium; pelo francês dictionnaire.

    $syn = $q->synonyms;
//     retorna:
//     (
//         [0] => léxico
//         [1] => glossário
//     )
  
    $exa = $q->examples;
//     retorna:
//     (
//         [0] => O único lugar onde o sucesso vem antes do trabalho é no dicionário.- Albert Einstein
//         [1] => Também leio livros, muitos livros: mas com eles aprendo menos do que com a vida. Apenas um livro me ensinou muito: o dicionário. Oh, o dicionário, adoro-o. Mas também adoro a estrada, um dicionário muito mais maravilhoso.- Ettore Petrolini
//         [2] => Um dicionário da língua chinesa que unifique o diferente uso feito do idioma na China e em Taiwan é debatido no 5º Fórum Econômico, Comercial e Cultural dos Dois Lados do Estreito, inaugurado hoje pelo presidente do Kuomintang (KMT, governante em Taiwan), Wu Poh-hsiung. Folha de S.Paulo, 11/07/2009
//         [3] => Foi eleita a palavra de 2013 pelo mesmo dicionário pela alta de 17. Folha de S.Paulo, 01/12/2013
//         [4] => O dicionário (PR) - Uma alegoria - uma fantasia muito calcada na realidade - que satiriza todo e qualquer autoritarismo. Folha de S.Paulo, 12/08/2009
//     )
  
    $ext = $q->extras;
//     retorna:
//     (
//         [0] => a i o
//         [1] => c d n r
//     )
  
    $htm = $q->html_card[0];

// retorna:
//
//             <div class="title-header">
//             <div class="box-social">
//                 <div class="sg-social-hidden sg-social" data-url="/dicionario/" data-text="dicionário: s.m. Compilação que contém as palavras de uma língua, apresentando seu significado, utilização, etimologia, sinônimos, antônimos ou com a tradução para outra língua: dicionário de português; dicionário de português-inglês.
// Livro, meio eletrônico ou outro suporte que possui as informações presentes nessa compilação: O Dicio é um dicionário on-line de língua portuguesa.
// P.ext. Reunião dos vocábulos ou termos que fazem parte dessa compilação: esta palavra não consta no dicionário.
// P.ext. Indivíduo que tem um conhecimento excessivo sobre variadas coisas: meu professor é um dicionário que fala.
// (Etm. do latim medieval. dictionaium; pelo francês: dictionnaire)"><div class="sg-facebook-share"><button class="sg-facebook-btn" title="Compartilhar | Facebook">
//                         <span class="icon-sg-social icon-sg-social-facebook"></span>
//                         <span class="text-sg-social">Compartilhar</span>
//                     </button></div><div class="sg-twitter-share"><button class="sg-twitter-btn sg-icon-only" title="Tweetar">
//                         <span class="icon-sg-social icon-sg-social-twitter"></span>
                        
//                     </button></div><div class="sg-whatsapp-share"><button class="sg-whatsapp-btn sg-icon-only" title="Enviar | WhatsApp">
//                         <span class="icon-sg-social icon-sg-social-whatsapp"></span>
                        
//                     </button></div></div>            </div>

//             <h1 itemprop="name">dicionário</h1>
//             </div>
            
//                                 <h2 class="tit-significado">Significado de Dicionário</h2>
//                 <p itemprop="description" class="significado textonovo"><span class="cl">substantivo masculino</span> <span>Compilação que contém as palavras de uma língua, apresentando seu significado, utilização, etimologia, sinônimos, antônimos ou com a tradução para outra língua: dicionário de português; dicionário de português-inglês.</span><br><span>Livro, meio eletrônico ou outro suporte que possui as informações presentes nessa compilação: O Dicio é um dicionário on-line de língua portuguesa.</span><br><span><span class="tag">[Por Extensão]</span> Reunião dos vocábulos ou termos que fazem parte dessa compilação: esta palavra não consta no dicionário.</span><br><span><span class="tag">[Por Extensão]</span> Indivíduo que tem um conhecimento excessivo sobre variadas coisas: meu professor é um dicionário que fala.</span><br><span class="etim">Etimologia (origem da palavra <i>dicionário</i>). Do latim medieval. dictionaium; pelo francês dictionnaire.</span></p>

                
                
                
                
//                                         <h2 class="h3 subtitle-significado">Sinônimos de Dicionário</h2>
//                         <p class="adicional sinonimos">
//                             Dicionário é sinônimo de: <span class="wrapper">
//                             <a href="/lexico/">léxico</a><span class="hidden-xs">, </span><a href="/glossario/">glossário</a>                        </span>
//                         </p>
                    
//                                     <h2 class="tit-section">Definição de Dicionário</h2>
//                 <p class="adicional">
//                                             Classe gramatical: <b>substantivo masculino</b><br>
//                                             Separação silábica: <b>di-ci-o-ná-ri-o</b><br>
//                     Plural:                             <b><a href="/dicionarios/">dicionários</a></b>
//                                                 <br></p>
            
//                                         <div id="gooad_palavra" class="desktop">
//                     <div class="dfp-mrec">
//                         <div id="div-gpt-ad-1415207157080-0" class="ad-unit ad-unit--pt-br"></div>                    </div>
//                 </div>
//                             <h3 class="tit-frases"><span></span>Frases com a palavra dicionário</h3>
//                 <div class="frases">
//                     <div class="fonte">Fonte: Pensador</div>
//                                             <div class="frase">
//                             <span>O único lugar onde o sucesso vem antes do trabalho é no dicionário.<br><em>- Albert Einstein</em></span>
//                         </div>
//                                             <div class="frase">
//                             <span>Também leio livros, muitos livros: mas com eles aprendo menos do que com a vida. Apenas um livro me ensinou muito: o dicionário. Oh, o dicionário, adoro-o. Mas também adoro a estrada, um dicionário muito mais maravilhoso.<br><em>- Ettore Petrolini</em></span>
//                         </div>
//                                     </div>
//                             <h3 class="tit-exemplo"><span></span>Exemplos com a palavra dicionário</h3>
//                 <div class="frases">
//                                             <div class="frase">
//                             Um <strong>dicionário</strong> da língua chinesa que unifique o diferente uso feito do idioma na China e em Taiwan é debatido no 5º Fórum Econômico, Comercial e Cultural dos Dois Lados do Estreito, inaugurado hoje pelo presidente do Kuomintang (KMT, governante em Taiwan), Wu Poh-hsiung. <em>Folha de S.Paulo, 11/07/2009</em>                        </div>
//                                             <div class="frase">
//                             Foi eleita a palavra de 2013 pelo mesmo <strong>dicionário</strong> pela alta de 17. <em>Folha de S.Paulo, 01/12/2013</em>                        </div>
//                                             <div class="frase">
//                             O <strong>dicionário</strong> (PR) - Uma alegoria - uma fantasia muito calcada na realidade - que satiriza todo e qualquer autoritarismo. <em>Folha de S.Paulo, 12/08/2009</em>                        </div>
//                                     </div>
//                             <picture><!--[if IE 9]><video style="display: none;"><![endif]--><source media="(max-width: 400px)" srcset="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-srcset="https://s.dicio.com.br/dicionario-sm.jpg"><source srcset="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-srcset="https://s.dicio.com.br/dicionario.jpg"><!--[if IE 9]></video><![endif]--><img data-src="https://s.dicio.com.br/dicionario.jpg" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="dicionário" class="imagem-palavra lazyload" onclick="ga('send', 'event', 'image', 'left click', 'dicionário', true)" oncontextmenu="ga('send', 'event', 'image', 'right click', 'dicionário', true)"></source></source></picture><h3 class="tit-other">Outras informações sobre a palavra</h3>

//             <p class="adicional">
//                 <span>Possui 10 letras</span><br>
//                                     Possui as vogais: <span>a i o</span><br>
//                                     Possui as consoantes: <span>c d n r</span><br>
                
//                 A palavra escrita ao contrário: oiránoicid<br></p>

//                             <h3 class="tit-other">Rimas com dicionário</h3>
//                 <ul class="list col-4-row small"><li><a href="/rosario/">rosário</a></li>
//                                                     <li><a href="/estagiario/">estagiário</a></li>
//                                                     <li><a href="/trintanario/">trintanário</a></li>
//                                                     <li><a href="/mobiliario/">mobiliário</a></li>
//                                                     <li><a href="/diario/">diário</a></li>
//                                                     <li><a href="/salario/">salário</a></li>
//                                                     <li><a href="/belisario/">belisário</a></li>
//                                                     <li><a href="/breviario/">breviário</a></li>
//                                                     <li><a href="/corolario/">corolário</a></li>
//                                                     <li><a href="/armario/">armário</a></li>
//                                                     <li><a href="/proprietario/">proprietário</a></li>
//                                                     <li><a href="/cenario/">cenário</a></li>
//                                                     <li><a href="/velario/">velário</a></li>
//                                                     <li><a href="/comanditario/">comanditário</a></li>
//                                                     <li><a href="/comunitario/">comunitário</a></li>
//                                                     <li><a href="/sacrario/">sacrário</a></li>
//                                                     <li><a href="/solitario/">solitário</a></li>
//                                                     <li><a href="/mario-2/">mário</a></li>
//                                                     <li><a href="/pecuniario/">pecuniário</a></li>
//                                                     <li><a href="/temerario/">temerário</a></li>
//                                                     <li><a href="/dromedario/">dromedário</a></li>
//                                                     <li><a href="/involuntario/">involuntário</a></li>
//                                                     <li><a href="/ervanario/">ervanário</a></li>
//                                                     <li><a href="/universitario/">universitário</a></li>
//                                         </ul><br><h3 class="tit-other">Anagramas de dicionário</h3>
//                 <ul class="list col-4-row small"><li>idiocronia</li>                </ul><div class=" reviewer">
//                     Conteúdo revisto em março de 2018.
//                     Lexicógrafa responsável: <a href="https://www.dicio.com.br/autor/debora-ribeiro/">Débora Ribeiro</a>
//                 </div>
            
        

    print_r($htm); //mostrando a variável $htm que é o html da div.card

?>
