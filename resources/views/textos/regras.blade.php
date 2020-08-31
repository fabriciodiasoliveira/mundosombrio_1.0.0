@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12 text-center">
        <h1>RPG</h1>
    </div>
    <div class="col-md-12">
        Você já brincou de faz de conta, polícia e ladrão, de médico, de casinha, de padaria. O RPG é exatamente isso, mas com regras definidas. Tenha consciência que as regras para cada gênero são únicas, mas flexíveis. O grupo que irá jogar é livre para determinar suas próprias regras, e essa que é a parte legal do RPG de mesa. Nesse site, tentaremos copiar a dinâmica do RPG de mesa, com resumos dos livros que selecionei.
    </div>
    <div class="col-md-12">
        Os jogadores são os participantes do faz de conta, onde vão separar um deles para criar o cenário, e os outros que serão os personagens que participarão do jogo.
    </div>
    <div class="col-md-12">
        Nesse caso, o criador do cenário será o mestre, e o restante será chamado de jogador. Normalmente esse tipo de jogo é jogado em uma mesa, com um mestre e entre 2 e 6 jogadores (é sugerido um conjunto de regras para isso, pois mais que 6 jogadores costuma ficar difícil administrar, mas como falei, o grupo criará suas próprias regras. Mas todos devem concordar com elas).
    </div>
    <div class="col-md-12 text-center">
        <h1>Considerações</h1>
    </div>
    <div class="col-md-12">
        Aqui, selecionei 3 sistemas do universo World of Darkness, mas saibam que existem outros. Jogaremos aqui Lobisomem, o Apocalipse, Vampiro, a Máscara e Mago, a Ascensão. Mas já vi adaptarem Matrix nesse sistema, e ficou muito legal, então qualquer coisa pode funcionar aqui.
    </div>
    <div class="col-md-12">
        Modifiquei as regras para montagem das fichas para se adequar ao site.
    </div>
    <div class="col-md-12 text-center">
        <h1>O World of Darkness</h1>
    </div>
    <div class="col-md-12">
        Vampiro, a máscara, Lobisomem, o apocalipse, e Mago, a ascensão, são ambientados no World of Darkness. É o mundo atual, imerso na corrupção total, onde tudo tende a ser sombrio. É uma distopia, onde sobrevive o mais apto. Quase tudo conspira contra os personagens, e confiar em alguém é uma faca de dois gumes.
    </div>
    <div class="col-md-12">
        A pessoa pode te ajudar, ou pode trair você, enfim, todos são corruptos em potencial. A confiança nesse universo vale ouro.
    </div>
    <div class="col-md-12">
        Roubos acontecem sempre, assassinatos são corriqueiros, estelionatários estão por todos os lados, traficante de drogas e mafioso são profissões comuns. Continuam sendo crimes, mas a polícia está quase sempre desorientada. Todos são suspeitos, e você pode ser preso ou morto por agentes a qualquer momento. Todo cuidado é pouco.
    </div>
    <div class="col-md-12 text-center">
        <h1>Regras básicas</h1>
    </div>
    <div class="col-md-12">
        Você está brincando de polícia e ladrão. Um toco de madeira é a arma. Os dois fingem um tiroteio. O policial diz, ACERTEI SUA PERNA. O ladrão retruca NÃO ACERTOU NÃO. Temos um impasse.    
    </div>
    <div class="col-md-12">
        No RPG, para eliminar esse impasse, usamos dados. O mestre estipula a dificuldade, e joga os dados. A quantidade de dados que deram um número igual ou maior que a dificuldade é o número de sucessos.
    </div>
    <div class="col-md-12">
        No sistema World of Darkness se usa dados de 10 lados, e o número de dados a se jogar para uma ação, é o valor de um atributo + o valor de uma habilidade. Para ações específicas, as próprias regras já dizem qual característica deve ser jogada.
    </div>
    <div class="col-md-12">
        A dificuldade padrão é:
    </div>
    <div class="col-md-12">
        <ul>
            <li>5 - Incrivelmente fácil, só não consegue se for muito pé frio</li>
            <li>6 - Normal, algo corriqueiro para o personagem</li>
            <li>7 - Um pouco difícil, com algum esforço o personagem consegue</li>
            <li>8 - Complicado, tem grandes chances de dar errado</li>
            <li>9 - Horrivel de se fazer</li>
            <li>10 - Impossível. Se conseguir, pode jogar na mega sena que ganha.</li>
        </ul>
    </div>
    <div class="col-md-12">
        Já os sucessos vão determinar se conseguiu. São quantos dados com um número maior ou igual à dificuldade. 0 é igual a 10 na rolagem.
    </div>
    <div class="col-md-12">
        <ul>
            <li>0 - Não conseguiu</li>
            <li>1 - Conseguiu algo muito ruim, deu certo com problemas</li>
            <li>2 - Conseguiu de raspão, mas não ficou legal</li>
            <li>3 - Conseguiu o que queria</li>
            <li>4 - Conseguiu e quem viu disse 'Ooooohhhhh'</li>
            <li>5 ou mais - Conseguiu e de maneira espetacular, chega a parecer ilusionismo</li>
        </ul>
    </div>
    <div class="col-md-12 text-center">
        <h1>Resultados críticos - 1 no dado</h1>
    </div>
    <div class="col-md-12">
        Isto é uma falha crítica. Não é algo bom. O número 1, anula um sucesso conseguido. O jogador tirou 2 sucessos, mas tirou um 1 nos dados. Agora o jogador conseguiu somente um sucesso.
    </div>
    <div class="col-md-12">
        Se conseguiu mais 1 que sucessos, o mal está sobre o jogador. O jogador não conseguiu e ainda sofreu um acidente muito chato. Fez um corte na mão, furtaram ele sem o jogador ver, ou qualquer coisa relacionado a ação que tentou fazer.
    </div>
    <div class="col-md-12">
        Resumindo, se deu mal.
    </div>
    <div class="col-md-12 text-center">
        <h1>Resultados críticos - 10 no dado</h1>
    </div>
    <div class="col-md-12">
        Isto é um acerto crítico. Isso é muito bom. Se o jogador conseguiu um único 10 na rolagem dos dados, é considerado como se tivesse conseguido cinco sucessos. Pena que falhas críticas podem anular isso.
    </div>
    <div class="col-md-12">
        Nem tudo é perfeito.
    </div>
    <div class="col-md-12 text-center">
        <h1>A força de vontade</h1>
    </div>
    <div class="col-md-12">
        Em World of Darkness, há uma característica especial. A força de vontade. Você especifica ela na montagem da ficha.
    </div>
    <div class="col-md-12">
        Ela representa sua vontade para conseguir, e até mesmo na vida real, um esforço faraônico costuma gerar sucessos. Você tem 2 barras para a força de vontade.
    </div>
    <div class="col-md-12">
        Uma é especificada na montagem da ficha. É o máximo que seu personagem possui. A outra é preenchida no jogo. ela vai até o valor máximo da outra barra.
    </div>
    <div class="col-md-12">
        Você gasta um ponto da barra temporária para anular falhas críticas ou para conseguir sucessos automáticos. Você recupera a força de vontade, agindo de acordo com sua natureza.
    </div>
    <div class="col-md-12">
        Sua força de vontade vai falar muito da sua natureza, principalmente a intensidade. De acordo com os pontos de força de vontade, você pode ser:
        <ol>
            <li>Covarde</li>
            <li>Fraco</li>
            <li>Inseguro</li>
            <li>Hesitante</li>
            <li>Certo</li>
            <li>Confiante</li>
            <li>Determinado</li>
            <li>Controlado</li>
            <li>Vontade de Ferro</li>
            <li>Inabalável</li>
        </ol>
    </div>
    <div class="col-md-12 text-center">
        <h1>Natureza e comportamento</h1>
    </div>
    <div class="col-md-12">
        O personagem é um ser com vontade própria. Ele possui uma natureza, que foi construída durante a existência dele. Como dito, aja de acordo com ela que você recupera a força de vontade. Afinal de contas, ficou satisfeito e vai lutar com mais força.
    </div>
    <div class="col-md-12">
        Já o comportamento, é a máscara que todo mundo usa para se relacionar com os outros. Pode soar como uma mentira, mas eu chamo de normas da sociedade. Muitos tem uma natureza desconfortável, mas aprenderam a refrear seus instintos para se relacionar com os outros.
    </div>
    <div class="col-md-12 text-center">
        <h1>Finalizando</h1>
    </div>
    <div class="col-md-12">
        Regras próprias das raças estão em links próprios, cada uma com uma particularidade. Magos, Vampiros e Lobisomens tem problemas particulares, e na maioria das vezes são inimigos. A não ser que encontrem uma ameaça comum, que os obriguem a cooperar. Nesse caso, o mestre tem a liberdade de criar uma ameaça comum para todos.
    </div>
    <div class="col-md-12">
        E principalmente, não há regras. O grupo é livre para criar os personagens e jogar outra coisa, se o grupo decidir.
    </div>
    <div class="col-md-12 text-center">
        <h1>E lembre-se</h1>
    </div>
    <div class="col-md-12r">
        <ul>
            <li>Não toque</li>
            <li>Não xingue</li>
            <li>Não brigue</li>
            <li>Não insulte</li>
            <li>Sem bullying</li>
            <li>Bom jogo</li>
        </ul>
    </div>
</div>

@component('components.gerais.scripts')@endcomponent
@endsection
