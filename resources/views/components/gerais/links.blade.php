<table class="table table-striped">
    <tr>
        <th>Lobisomem, o apocalipse</th>
    </tr>
    <tr>
        <td>
            <a href="http://rpgmacaiba.blogspot.com/2014/03/caerns-pronuncia-se-keerns.html" target="_blank">Caerns</a>
        </td>
    </tr>
    <tr>
        <td>
            <a href="http://racasderpgeduardoteixeira.blogspot.com/2010/11/garou-totens-totens-de-sabedoria.html" target="_blank">Tótens garou</a>
        </td>
    </tr>
    <tr>
        <td>
            <a href="http://lobisomemoapocalipse.forumeiros.com/t64-rituais" target="_blank">Rituais Garou</a>
        </td>
    </tr>
    <tr>
        <td>
            <a href="http://lobisomens-apocalise.forumeiros.com/f7-dons-de-tribo" target="_blank">Dons de tribo</a>
        </td>
    </tr>
    <tr>
        <td>
            <a href="http://lobisomens-apocalise.forumeiros.com/f9-dons-de-augurio" target="_blank">Dons de augúrio</a>
        </td>
    </tr>
    <tr>
        <td>
            <a href="http://lobisomens-apocalise.forumeiros.com/f8-dons-de-raca" target="_blank">Dons de raça</a>
        </td>
    </tr>
    <tr>
        <td>
            <a href="https://livrodosespelhos.com/os-dancarinos-da-espiral-negra-lobisomem-o-apocalipse/" target="_blank">Dançarinos da Espiral Negra</a>
        </td>
    </tr>
    <tr>
        <td>
            <a href="http://lobisomemrpg.forumeiros.com/t148-antecedentes" target="_blank">Antecedentes de Lobisomem</a>
        </td>
    </tr>
    <tr>
        <th>
            Gerais
        </th>
    </tr>
    <tr>
        <td>
            <a href="https://sites.google.com/site/bradockrpg/home?authuser=0" target="_blank">Complementos e livros</a>
        </td>
    </tr>
    <tr>
        <td>
            <a href="http://lobisomens-apocalise.forumeiros.com/t88-fetiches" target="_blank">Fetiches</a>
        </td>
    </tr>
    <tr>
        <td>
            <a href="https://alforje.wordpress.com/2013/04/12/plano-de-cronica-storyteller/" target="_blank">Idéias para crônicas</a>
        </td>
    </tr>
    <tr>
        <th>
            Mago, a ascensão
        </th>
    </tr>
    <tr>
        <td>
            <a href="https://livrodosespelhos.com/emporio-alexandrino/" target="_blank">Maravilhas, fetiches e amuletos</a>
        </td>
    </tr>
    <tr>
        <td>
            <a href="https://livrodosespelhos.com/uniao-tecnocratica/" target="_blank">A União tecnocrata</a>
        </td>
    </tr>
    <tr>
        <td>
            <a href="https://livrodosespelhos.com/os-nefandi-guerra-no-inferno-mago-a-ascensao/" target="_blank">Nefandi</a>
        </td>
    </tr>
    <tr>
        <td>
            <a href="https://livrodosespelhos.com/os-desauridos-mago-a-ascensao/" target="_blank">Os desauridos</a>
        </td>
    </tr>
    <tr>
        <td>
            <a href="http://mago-a-ascencao.forumeiros.com/t5-antecedentes" target="_blank">Antecedentes de mago</a>
        </td>
    </tr>
    <tr>
        <th>
            Vampiro, a máscara
        </th>
    </tr>
    <tr>
        <td>
            <a href="https://drive.google.com/drive/folders/1emt8C-OZcnXD3kACpBoxq6ILd7XhL8hP" target="_blank">Exemplos de fichas</a>
        </td>
    </tr>
    <tr>
        <td>
            <a href="https://livrodosespelhos.com/as-linhagens-de-vampiro-a-mascara/" target="_blank">Linhagens vampíricas</a>
        </td>
    </tr>
    <tr>
        <td>
            <a href="http://lobisomens-apocalise.forumeiros.com/t115-abominacoes" target="_blank">Abominações</a>
        </td>
    </tr>
    <tr>
        <td>
            <a href="http://amascararpg.directorioforuns.com/t6-antecedentes" target="_blank">Antecedentes de vampiro</a>
        </td>
    </tr>
    <tr>
        <th>
            Do desenvolvedor
        </th>
    </tr>
    <tr>
        <td>
            <a href="mailto:devanon.kyosha@gmail.com" target="_blank">E-mail do Fabrício: devanon.kyosha@gmail.com</a>
        </td>
    </tr>
    <tr>
        <th>
            Créditos:
        </th>
    </tr>
    <tr>
        <td>
            Cleverson
        </td>
    </tr>
    <tr>
        <td>
            Alexandre
        </td>
    </tr>
    <tr>
        <td>
            Juliano
        </td>
    </tr>
    <tr>
        <td>
            Carlos (vulgo Yuri, não sei por quê, rs)
        </td>
    </tr>
    <tr>
        <td>
            <a href="https://www.worldofdarkness.com/" target="_blank">Site do sistema World of Darkness</a>
        </td>
    </tr>
    <tr>
        <td>
            Brigadão, gente. Sem as idéias de vocês isso não teria avançado. 
            Ainda estou tentando colocar em prática algumas idéias que achei interessantíssimas.
        </td>
    </tr>
    <tr>
        <td>
            <div class="text-center">
                <h3>Número de visitas</h3>
                <div id="visitas"></div>
            </div>
        </td>
    </tr>
</table>
<script>
    var url = "{{ route('visitas') }}";
        fetch(url, {
                    method: 'get' // opcional 
                    })
                            .then(function (response) {
                            response.text()
                                    .then(function (result) {
                                        document.getElementById('visitas').innerHTML=result;
                                    })
                            })
                            .catch(function (err) {
                            console.error(err);
                            });
</script>