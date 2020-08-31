<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of arquetipos
 *
 * @author fabricio
 */

namespace App\Http\Controllers\Services;

class Arquetipos {

    public function getArquetipos() {
        $arquetipo = array();
        $arquetipo[] = 'Arquiteto - Você constrói um futuro melhor.';
        $arquetipo[] = 'Autocrata - Você deseja estar no controle.';
        $arquetipo[] = 'Bon Vivant - Vida é para se ter prazer.';
        $arquetipo[] = 'Bravo - Força é tudo que importa.';
        $arquetipo[] = 'Filantropo - Todos precisam de cuidados.';
        $arquetipo[] = 'Celebrante - Você existe para sua paixão.';
        $arquetipo[] = 'Criança - Não terá alguém para cuidar de você?';
        $arquetipo[] = 'Competidor - Você deve ser o melhor.';
        $arquetipo[] = 'Conformista - Você segue e assiste.';
        $arquetipo[] = 'Esperto - Outros existem para seu benefício.';
        $arquetipo[] = 'Ranzinza - Nada vale a pena.';
        $arquetipo[] = 'Excêntrico - Você existe para o prazer de mais ninguém além do seu.';
        $arquetipo[] = 'Diretor - Você supervisiona o que deve ser feito.';
        $arquetipo[] = 'Sonhador - Você tem altas aspirações.';
        $arquetipo[] = 'Fanático - A causa é tudo que importa.';
        $arquetipo[] = 'Galante - Você não assiste ao espetáculo, você É o espetáculo.';
        $arquetipo[] = 'Jogador - Você brinca com a sorte em todas as coisas.';
        $arquetipo[] = 'Juiz - A verdade está lá fora.';
        $arquetipo[] = 'Solitário - Você faz seu próprio caminho.';
        $arquetipo[] = 'Mártir - Você sofre pelo bem de todos.';
        $arquetipo[] = 'Masoquista - Você testa seus limites a cada noite.';
        $arquetipo[] = 'Monstro - você é um amaldiçoado, aja como um.';
        $arquetipo[] = 'Pedagogo - Você salva os outros através de conhecimento.';
        $arquetipo[] = 'Penitente - Vida é uma maldição a ser suportada.';
        $arquetipo[] = 'Perfectionista - Nada é bom o bastante.';
        $arquetipo[] = 'Rebelde - Você não segue as regras de ninguém.';
        $arquetipo[] = 'Durão - Os que podem, vencem. Os que não pode, perdem. Você pode.';
        $arquetipo[] = 'Sobrevivente - Nada bota você pra baixo.';
        $arquetipo[] = 'Caçador de emoções - A sensação é tudo que importa.';
        $arquetipo[] = 'Tradicionalista - Como sempre foi, assim deve ser.';
        $arquetipo[] = 'Comediante - Rir é o melhor remédio.';
        $arquetipo[] = 'Visionário - Tem algo além de tudo isto.';
        return $arquetipo;
    }

}
