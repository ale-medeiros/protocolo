<div class="row">
    <?php
    $sections = [
        "Mando" => [
            "1. Emite 2 palavras, sinais ou PECS, porém pode precisar de dica ecóica, imitativa ou outras dicas, desde que não físicas.(O/T)",
            "2. Emite 4 mandos diferentes sem dicas (exceto pela dica verbal “O que você quer?”). O item desejado pode estar presente (e.g., música, comida, bola). (O/T)",
            "3. Generaliza 6 mandos entre duas pessoas, dois ambientes e entre dois tipos diferentes de um mesmo reforçador (e.g., emite mandos para bolinhas de sabão tanto para a mãe quanto para o pai, dentro e fora da casa e em um pote plástico vermelho ou azul). (O/T)",
            "4. Espontaneamente (sem dica verbal) emite 5 mandos. O item desejado pode estar presente. (OC 60 min)",
            "5. Emite 10 mandos diferentes sem dicas (exceto pela dica ”O que você quer”). O item desejado pode estar presente (e.g., maça, balanço, carro, suco)."
        ],
        "Tato" => [
            "1. Emite 2 tatos com dica ecóica ou imitativa (e.g., pessoas, bichos de estimação, personagens ou objetos favoritos). (T)",
            "2. Emite tatos para 4 itens quaisquer sem dica ecóica ou imitativa (e.g., pessoas, bichos de estimação, personagens ou outros objetos). (T)",
            "3. Tateia 6 itens não-reforçadores (e.g., sapato, chapéu, colher, carrinho, copo, cama). (T)",
            "4. Emite tatos espontaneamente (sem dicas verbais) para 2 itens diferentes. (OC: 60 min)",
            "5. Emite tatos para 10 itens (objetos comuns, pessoas, partes do corpo ou figuras). (T)"
        ],
        "Ouvinte" => [
            "1. Atenta para a voz de um falante ao estabelecer contato visual com ele por 5 vezes. (OC 30 min)",
            "2. Responde ao ouvir seu nome 5 vezes (e. g ., olha para o falante). (T)",
            "3. Criança olha, toca ou aponta para o membro correto da família, bicho de estimação ou outro reforçador quando esses estímulos são apresentados em arranjos de dois, para 5 reforçadores diferentes (e.g., “Onde está o Elmo?” ou “ Onde está mamãe? ”). (O/T)",
            "4. Executa 4 ações motoras diferentes quando solicitada e não necessita de uma dica visual (e.g., Você pode pular?, Mostre-me como se bate palmas?). (T)",
            "5. Seleciona o item correto em um arranjo de 4 estímulos para 20 objetos e figuras diferentes (e.g., Mostre-me o gato, toque no sapato). (T)"
        ],
        "VP/MTS" => [
            "1. Segue visualmente um estímulo móvel por 2 segundos, por 5 vezes. (OC 30 min)",
            "2. Pega pequenos objetos com o polegar, indicador e dedo médio (movimento de pinça). (O)",
            "3. Atenta visualmente para um brinquedo ou livro por 30 segundos (não vale se o item é utilizado para auto estimulação). (O)",
            "4. Coloca 3 itens em um recipiente, empilha 3 blocos ou coloca 3 anéis em uma haste. Verificar se a criança realiza duas destas atividades ou atividades similares. (O/T)",
            "5. Emparelha quaisquer 10 itens idênticos (e.g., quebra-cabeças, brinquedos ou figuras). (O/T)"
        ],
        "Brincar" => [
            "1. Manipula e explora objetos por 1 minuto (e.g., olha para um brinquedo, vira o brinquedo, aperta botões). (OC 30 min.)",
            "2. Mostra variação na brincadeira ao interagir de forma independente com 5 itens diferentes (e.g., brinca com anéis, depois com uma bola, depois blocos). (OC 30 min)",
            "3. Demonstra generalização ao engajar-se em movimentos exploratórios e brincadeira com brinquedos em um novo ambiente por 2 minutos (e.g., em uma nova brinquedoteca). (OC 30 min)",
            "4. Envolve-se de forma independente em brincadeiras de movimento por 2 minutos (e.g., balançar, dançar, pular, balançar, escalar, correr). (OC 30 min)",
            "5. Envolve-se de forma independente em brincadeiras de causa e efeito por 2 minutos (e.g., esvaziar recipientes, brincar com brinquedos que pulam, empurrar brinquedos, etc.). (OC 30 min)"
        ],
        "Social" => [
            "1. Faz contato visual como forma de mando por 05 vezes. (OC 30 min)",
            "2.Indica que quer ser segurada ou que brinquem fisicamente com ela por 2 vezes (e.g., subir no colo da mãe). (OC 60 min)",
            "3.Espontaneamente estabelece contato visual com outras crianças por 5 vezes. (OC 30 min).",
            "4.Espontaneamente se envolve em brincadeira paralela perto de outras crianças por um total de 2 minutos (e.g., senta na caixa de areia perto de outras crianças). (OC 30 min)",
            "5.Espontaneamente segue colegas ou imita o comportamento motor deles por 2 vezes (e.g., segue um colega numa casa de brincar). (OC 30 min)"
        ],
        "Imitação" => [
            "1.Imita 2 movimentos motores grossos com a dica “Faça isso “ (e.g., bater palmas, levantar braços). (T)",
            "2.Imita 4 movimentos motores grossos com a dica “Faça isso”. (T)",
            "3.Imita 8 movimentos motores, 2 dos quais envolvendo objetos (e.g., balançar um chocalho, bater pauzinhos). (T)",
            "4.Imita espontaneamente o comportamento motor de outros em 5 ocasiões. (O)",
            "5.Imita 20 movimentos motores de qualquer tipo (e.g., motor fino, motor grosso, imitação com objetos). (T)"
        ],
        "Ecóico" => [
            "1. Pontuação de no mínimo 2 no subteste APCE. (T)",
            "2. Pontuação de no mínimo 5 no subteste APCE. (T)",
            "3. Pontuação de no mínimo 10 no subteste APCE. (T)",
            "4. Pontuação de no mínimo 15 no subteste APCE. (T)",
            "5. Pontuação de no mínimo 25 no subteste APCE ( ao menos 20 do grupo1)"
        ],
        "Vocal" => [
            "1. Emissão espontânea de em média 5 sons por hora (OC: 60 min).",
            "2. Emissão espontânea de 5 sons diferentes, com uma média total de 10 sons a cada hora (OC: 60 min).",
            "3. Emissão espontânea de 10 sons diferentes, com variação de entonação, com uma média total de 25 sons a cada hora (OC: 60 min).",
            "4. Emissão espontânea de 15 palavras inteiras ou frases com entonação apropriada e ritmo. (OC:60 min).",
            "5. Vocalização espontânea de 15 palavras inteiras ou frases com entonação apropriada e ritmo (OC: 60 min)."
        ]
    ];

    $first = true;

    foreach ($sections as $section => $questions) {
        $sectionId = strtolower($section) . "-1";
        echo "<div class='col-md-6'>";
        echo "<div class='accordion p-0'>";
        echo "<div class='accordion-item'>";
        echo "<h2 class='accordion-header'>";
        echo "<button class='accordion-button mb-1' type='button' data-bs-toggle='collapse' data-bs-target='#$sectionId' aria-expanded='" . ($first ? "true" : "false") . "' aria-controls='$sectionId'>$section</button>";
        echo "</h2>";
        echo "<div class='collapse " . ($first ? "show" : "") . "' id='" . strtolower($section) . "-1'>";
        foreach ($questions as $question) {
            echo "<div class='container my-1 p-1 border border-1 border-dark rounded-2'>";
            echo "<div class='row'>";
            echo "<div class='col-9'>$question</div>";
            echo "<div class='col-3'>";
            for ($i = 1; $i <= 4; $i++) {
                $colors = ['success', 'primary', 'danger', 'warning'];
                echo "<label for='' class='bg-{$colors[$i - 1]} px-1'>$i</label>";
                echo "<input class='w-25 me-1' type='text'>";
                if ($i % 2 == 0)
                    echo "<div class='w-100 mb-1'></div>";
            }
            echo "</div>";
            echo "</div>";
            echo "</div>";
        }
        echo "</div>";
        echo "</div>";
        echo "</div>";
        echo "</div>";

        $first = false;
    }
    ?>
</div>