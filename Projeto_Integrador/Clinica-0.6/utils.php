<?php function getExames(){
    $array = array();
    $retino = array();
    $retino ['exame']= "Exame de Retinografia";
    $retino ['funcao'] = "É uma técnica de exame que consiste em fotografar o fundo do olho, principalmente estruturas como a retina, nervo óptica e vasos sanguíneos podem ser observadas.As principais indicações são para o diagnóstico e acompanhamento das doenças vítreoretinianas, glaucoma, diabetes, oclusões vasculares, vasculopatias retinianas, doenças do nervo óptico etc.";
    $retino ['comofeito'] = "A pupila será dilatada com colírio específico para melhor visualização. Através do equipamento denominado, retinógrafo, fotos são capturadas do fundo do olho e depois analisadas pelo médico.";
    $retino ['orientacao'] = "Aconselhamos ir acompanhado em virtude da dilatação da pupila. Paciente usuário de lente de contato deve retirá-la no momento do atendimento.";
    array_push($array, $retino);
    
    $mapeamento = array();
    $mapeamento ['exame'] = "Exame de Mapeamento de Retina";
    $mapeamento ['funcao'] = "Este exame tem como função analisar a superfície da retina, permitindo o diagnóstico de diversas doenças oculares. Principalmente os aspectos gerais da retina. Este exame é indicado para: Miopia, diabéticos, hipertenso e pacientes que realização procedimentos cirúrgicos. Analisa principalmente a superfície da retina, permitindo observar oclusões vasculares, deslocamento de retina, tumores, hemorragias e outras patologias retinianas.";
    $mapeamento ['comofeito'] = "O mapeamento de retina é realizado com um oftalmoscópio indireto, o que permite analisar as estruturas do fundo do olho. Uma luz é projetada no fundo do olho e através de uma lente o médico avalia a imagem refletida.";
    $mapeamento ['orientacao'] = "É necessária a dilatação da pupila, portanto recomenda-se acompanhamento. Não utilizar lentes de contato no dia do exame.";
    array_push($array, $mapeamento);
    
    $pentacam = array();
    $pentacam ['exame'] = "Exame de Ceratoscopia Computarizada (PENTACAM)";
    $pentacam ['funcao'] = "É um equipamento que reproduz imagens do segmento anterior do olho, possibilitando análise precisa e profunda da superfície corneana e da tomográfica do segmento anterior. Cirurgia refrativa, cirurgia de catarata avaliação do cristalino, córnea, ceratocone e qualquer alteração que acomete a parte anterior do olho.";
    $pentacam ['comofeito'] = "O Pentacam possui uma câmera rotatória, que fotografa o segmento anterior do olho em 360°, em terceira dimensão, com tomadas de até 50 imagens com 25 mil pontos de elevação, em poucos segundos. A partir deste exame é possível avaliar a espessura da córnea na sua totalidade, sendo apresentada na forma de um mapa colorido.";
    $pentacam ['orientacao'] = "Usuários de lente de contato gelatinosa devem permanecer 5 dias sem utilizá-las, caso seja rígida a lente de contato, devem permanecer 14 dias. Não precisa de dilatação. Exame é de não-contato.";
    array_push($array, $pentacam);
    return $array;
}
