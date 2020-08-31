<script>
    
    var vampiro01 = `<img class="visible-lg" src="{{ asset('images/gerais/vampiro/vampiro01.jpg') }}" alt="logo" align="right"/>`;
    var vampiro02 = `<img class="visible-lg" src="{{ asset('images/gerais/vampiro/vampiro02.jpg') }}" alt="logo" align="left"/>`;
    var vampiro03 = `<img class="visible-lg" src="{{ asset('images/gerais/vampiro/vampiro03.jpg') }}" alt="logo" align="right"/>`;
    var vampiro04 = `<img class="visible-lg" src="{{ asset('images/gerais/vampiro/vampiro04.jpg') }}" alt="logo" align="left"/>`;
    var vampiro05 = `<img class="visible-lg" src="{{ asset('images/gerais/vampiro/vampiro05.jpg') }}" alt="logo" align="right"/>`;
    var vampiro06 = `<img class="visible-lg" src="{{ asset('images/gerais/vampiro/vampiro06.jpg') }}" alt="logo" align="left"/>`;
    var vampiro07 = `<img class="visible-lg" src="{{ asset('images/gerais/vampiro/vampiro07.jpg') }}" alt="logo" align="right"/>`;
    var vampiro08 = `<img class="visible-lg" src="{{ asset('images/gerais/vampiro/vampiro08.jpg') }}" alt="logo" align="left"/>`;
    var vampiro09 = `<img class="visible-lg" src="{{ asset('images/gerais/vampiro/vampiro09.jpg') }}" alt="logo" align="right"/>`;
    var vampiro10 = `<img class="visible-lg" src="{{ asset('images/gerais/vampiro/vampiro10.jpg') }}" alt="logo" align="left"/>`;
    var lobisomem01 = `<img class="visible-lg" src="{{ asset('images/gerais/lobisomem/lobisomem01.jpg') }}" alt="logo" align="right"/>`;
    var lobisomem02 = `<img class="visible-lg" src="{{ asset('images/gerais/lobisomem/lobisomem02.jpg') }}" alt="logo" align="right"/>`;
    var lobisomem03 = `<img class="visible-lg" src="{{ asset('images/gerais/lobisomem/lobisomem03.jpg') }}" alt="logo" align="left"/>`;
    var lobisomem04 = `<img class="visible-lg" src="{{ asset('images/gerais/lobisomem/lobisomem04.jpg') }}" alt="logo" align="right"/>`;
    var lobisomem05 = `<img class="visible-lg" src="{{ asset('images/gerais/lobisomem/lobisomem05.jpg') }}" alt="logo" align="left"/>`;
    var lobisomem06 = `<img class="visible-lg" src="{{ asset('images/gerais/lobisomem/lobisomem06.jpg') }}" alt="logo" align="right"/>`;
    var lobisomem07 = `<img class="visible-lg" src="{{ asset('images/gerais/lobisomem/lobisomem07.jpg') }}" alt="logo" align="left"/>`;
    var lobisomem08 = `<img class="visible-lg" src="{{ asset('images/gerais/lobisomem/lobisomem08.jpg') }}" alt="logo" align="right"/>`;
    var lobisomem09 = `<img class="visible-lg" src="{{ asset('images/gerais/lobisomem/lobisomem09.jpg') }}" alt="logo" align="left"/>`;
    var lobisomem10 = `<img class="visible-lg" src="{{ asset('images/gerais/lobisomem/lobisomem10.jpg') }}" alt="logo" align="right"/>`;
    var mago01 = `<img class="visible-lg" src="{{ asset('images/gerais/mago/mago01.jpg') }}" alt="logo" align="right"/>`;
    var mago02 = `<img class="visible-lg" src="{{ asset('images/gerais/mago/mago02.jpg') }}" alt="logo" align="right"/>`;
    var mago03 = `<img class="visible-lg" src="{{ asset('images/gerais/mago/mago03.jpg') }}" alt="logo" align="right"/>`;
    var mago04 = `<img class="visible-lg" src="{{ asset('images/gerais/mago/mago04.jpg') }}" alt="logo" align="left"/>`;
    var mago05 = `<img class="visible-lg" src="{{ asset('images/gerais/mago/mago05.jpg') }}" alt="logo" align="right"/>`;
    var mago06 = `<img class="visible-lg" src="{{ asset('images/gerais/mago/mago06.jpg') }}" alt="logo" align="left"/>`;
    var mago07 = `<img class="visible-lg" src="{{ asset('images/gerais/mago/mago07.jpg') }}" alt="logo" align="right"/>`;
    var mago08 = `<img class="visible-lg" src="{{ asset('images/gerais/mago/mago08.jpg') }}" alt="logo" align="left"/>`;
    var mago09 = `<img class="visible-lg" src="{{ asset('images/gerais/mago/mago09.jpg') }}" alt="logo" align="right"/>`;
    var mago10 = `<img class="visible-lg" src="{{ asset('images/gerais/mago/mago10.jpg') }}" alt="logo" align="left"/>`;
    //colocando o efeito de menu retrátil nos tópicos da descrição
    var textoClasse = document.getElementById('classe').innerHTML;
    textos = textoClasse.split('%*1');
    i = 0;
    textoClasse = '<div class="accordion" id="myAccordion">';
    function substituir(item){
        if(i==0){
            textoClasse=textoClasse+item;
        }else{
            item = '<a data-toggle="collapse" href="#descricao-'+i+'">' + item;
            item = item.replace('%1*', '</a><div id="descricao-'+i+'" class="col-md-12 collapse" data-parent="#myAccordion">');
            item = item.replace('1%*', '</div>');
            textoClasse=textoClasse+item;
        }
        i++;
    }
    textos.forEach(substituir);
    textoClasse=textoClasse+'</div>'
    //colocando o efeito de menu retrátil nos tópicos da descrição
    var textoPoderes = document.getElementById('poderes').innerHTML;
    textos = textoPoderes.split('%*1');
    i = 0;
    textoPoderes = '<div class="accordion" id="myAccordion-p">';
    function substituirPoderes(item){
        if(i==0){
            textoPoderes=textoPoderes+item;
        }else{
            item = '<a data-toggle="collapse" href="#descricao-p-'+i+'">' + item;
            item = item.replace('%1*', '</a><div id="descricao-p-'+i+'" class="col-md-12 collapse" data-parent="#myAccordion-p">');
            item = item.replace('1%*', '</div>');
            textoPoderes=textoPoderes+item;
        }
        i++;
    }
    textos.forEach(substituirPoderes);
    textoPoderes=textoPoderes+'</div>'
    document.getElementById('poderes').innerHTML=textoPoderes;
    
    textoComImagem = textoClasse.replace('vampiro01', vampiro01);
    textoComImagem = textoComImagem.replace('vampiro02', vampiro02);
    textoComImagem = textoComImagem.replace('vampiro03', vampiro03);
    textoComImagem = textoComImagem.replace('vampiro04', vampiro04);
    textoComImagem = textoComImagem.replace('vampiro05', vampiro05);
    textoComImagem = textoComImagem.replace('vampiro06', vampiro06);
    textoComImagem = textoComImagem.replace('vampiro07', vampiro07);
    textoComImagem = textoComImagem.replace('vampiro08', vampiro08);
    textoComImagem = textoComImagem.replace('vampiro09', vampiro09);
    textoComImagem = textoComImagem.replace('vampiro10', vampiro10);
    textoComImagem = textoComImagem.replace('lobisomem01', lobisomem01);
    textoComImagem = textoComImagem.replace('lobisomem02', lobisomem02);
    textoComImagem = textoComImagem.replace('lobisomem03', lobisomem03);
    textoComImagem = textoComImagem.replace('lobisomem04', lobisomem04);
    textoComImagem = textoComImagem.replace('lobisomem05', lobisomem05);
    textoComImagem = textoComImagem.replace('lobisomem06', lobisomem06);
    textoComImagem = textoComImagem.replace('lobisomem07', lobisomem07);
    textoComImagem = textoComImagem.replace('lobisomem08', lobisomem08);
    textoComImagem = textoComImagem.replace('lobisomem09', lobisomem09);
    textoComImagem = textoComImagem.replace('lobisomem10', lobisomem10);
    textoComImagem = textoComImagem.replace('mago01', mago01);
    textoComImagem = textoComImagem.replace('mago02', mago02);
    textoComImagem = textoComImagem.replace('mago03', mago03);
    textoComImagem = textoComImagem.replace('mago04', mago04);
    textoComImagem = textoComImagem.replace('mago05', mago05);
    textoComImagem = textoComImagem.replace('mago06', mago06);
    textoComImagem = textoComImagem.replace('mago07', mago07);
    textoComImagem = textoComImagem.replace('mago08', mago08);
    textoComImagem = textoComImagem.replace('mago09', mago09);
    textoComImagem = textoComImagem.replace('mago10', mago10);
    document.getElementById('classe').innerHTML=textoComImagem;
</script>