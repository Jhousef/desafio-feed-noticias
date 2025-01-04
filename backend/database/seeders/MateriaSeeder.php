<?php

namespace Database\Seeders;

use DB;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MateriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $now = Carbon::now();

        DB::table('materias')->insert([
            [
                "titulo" => "cachorro pode ver no escuro",
                "descricao" => "Os cães possuem uma visão adaptada para ambientes de pouca luminosidade devido ao grande número de bastonetes em seus olhos.",
                "texto_completo" => "Os cães têm uma visão adaptada para ambientes de pouca luz, o que lhes permite enxergar em condições de luminosidade reduzida. Essa capacidade é devido ao grande número de bastonetes em seus olhos, que são células especializadas em detectar luz em baixa intensidade. Essa adaptação tem origem nos lobos, ancestrais dos cães, que caçavam durante o crepúsculo e a noite. Mesmo com a evolução, os cães mantiveram essa característica, embora sua capacidade de visão noturna possa diminuir com a idade. É importante ressaltar que, apesar dessa habilidade, os cães não possuem uma visão perfeita no escuro e ainda precisam de alguma quantidade de luz para enxergar com clareza.",
                "imagem" => "https://irisveterinaria.com.br/wp-content/uploads/2022/10/Confira-5-curiosidades-sobre-como-e-a-visao-do-cachorro.jpg",
                "data_de_publicacao" => "2022-10-18 00:00:00",
                "created_at" => $now,
                "updated_at" => $now
              ],
              [
                "titulo" => "Descoberta nova espécie de borboleta na Amazônia",
                "descricao" => "Cientistas encontram uma nova espécie de borboleta com padrões de asas únicos na região da Amazônia.",
                "texto_completo" => "Um grupo de cientistas descobriu uma nova espécie de borboleta na densa floresta amazônica. Essa borboleta possui padrões de asas nunca antes observados, o que a torna única entre as espécies conhecidas. A descoberta foi resultado de uma expedição de pesquisa destinada a estudar a biodiversidade da Amazônia e destaca a importância da preservação desse ecossistema único.",
                "imagem" => "https://abori.com.br/wp-content/uploads/2023/09/WhatsApp-Image-2023-09-12-at-14.53.28-1279x720.jpeg",
                "data_de_publicacao" => "2022-10-18 00:00:00",
                "created_at" => $now,
                "updated_at" => $now
              ],
              [
                "titulo" => "Novo planeta descoberto fora do sistema solar",
                "descricao" => "Astrônomos detectam um exoplaneta com características semelhantes à Terra em uma região distante da Via Láctea.",
                "texto_completo" => "Astrônomos anunciaram a descoberta de um novo planeta localizado fora do nosso sistema solar. O exoplaneta, denominado Kepler-452b, está localizado em uma região distante da Via Láctea e possui características semelhantes à Terra. Ele orbita uma estrela semelhante ao Sol em uma zona habitável, o que sugere a possibilidade de existência de água líquida em sua superfície. A descoberta é considerada um marco na busca por planetas semelhantes à Terra e aumenta as esperanças de encontrar vida extraterrestre.",
                "imagem" => "https://s2-g1.glbimg.com/aXRQfriZB6dfApXU1YdZlKzvr6s=/0x0:1024x575/600x0/smart/filters:gifv():strip_icc()/i.s3.glbimg.com/v1/AUTH_59edd422c0c84a879bd37670ae4f538a/internal_photos/bs/2020/k/U/GXcbsnTBCXmZRvub5KRQ/000-1ni3f2.jpg",
                "data_de_publicacao" => "2022-10-18 00:00:00",
                "created_at" => $now,
                "updated_at" => $now
              ],
              [
                "titulo" => "Pesquisa revela os benefícios do café para a saúde",
                "descricao" => "Estudo científico mostra que o consumo moderado de café pode estar associado a uma redução do risco de certas doenças.",
                "texto_completo" => "Um estudo científico recente analisou os efeitos do consumo de café na saúde e descobriu uma série de benefícios associados a essa bebida popular. De acordo com os pesquisadores, o consumo moderado de café pode estar relacionado a uma redução do risco de doenças como diabetes tipo 2, doenças cardíacas e alguns tipos de câncer. Além disso, o café também pode melhorar o desempenho cognitivo e aumentar a energia. No entanto, os especialistas alertam que o consumo excessivo de café pode ter efeitos negativos na saúde e recomendam moderação.",
                "imagem" => "https://diarioenfermero.es/wp-content/uploads/2018/04/cafe-espresso-clasico-en-la-pequena-taza-de-ceramica-blanca-sobre-fondo-vibrante-azul_1220-1735.jpg",
                "data_de_publicacao" => "2022-10-18 00:00:00",
                "created_at" => $now,
                "updated_at" => $now
              ],
              [
                "titulo" => "Nova tecnologia promete revolucionar a indústria automotiva",
                "descricao" => "Empresa lança um novo sistema de propulsão que promete reduzir significativamente as emissões de carbono dos veículos.",
                "texto_completo" => "Uma empresa de tecnologia automotiva anunciou o lançamento de uma nova tecnologia que promete revolucionar a indústria automotiva. O sistema de propulsão, denominado PowerDrive, utiliza uma combinação de energia elétrica e hidrogênio para alimentar os veículos, reduzindo assim significativamente as emissões de carbono. Além disso, o",
                "imagem" => "https://blogdaslocadoras.com.br/wp-content/uploads/2018/10/sizisjz0j.jpg",
                "data_de_publicacao" => "2022-10-18 00:00:00",
                "created_at" => "2024-03-03 00:11:00",
                "updated_at" => "2024-03-03 00:11:00",
                "created_at" => $now,
                "updated_at" => $now
              ],
              [
                "titulo" => "Cientistas descobrem nova espécie de planta na Amazônia",
                "descricao" => "Uma expedição científica revela uma nova espécie de planta com propriedades medicinais na região amazônica.",
                "texto_completo" => "Uma equipe de cientistas realizou uma expedição na Amazônia em busca de novas espécies de plantas com potencial medicinal. Durante a expedição, os pesquisadores descobriram uma nova espécie de planta com propriedades terapêuticas surpreendentes. A planta, denominada Amazônia Vera, possui compostos bioativos que mostraram promessas no tratamento de várias doenças, incluindo câncer e diabetes. Essa descoberta representa um avanço significativo na busca por novos tratamentos à base de plantas na medicina moderna e destaca a importância da preservação da biodiversidade da Amazônia.",
                "imagem" => "https://img.freepik.com/fotos-premium/folhas-da-planta-da-borracha-sobre-fundo-azul-vista-do-topo_51524-7699.jpg",
                "data_de_publicacao" => "2022-10-18 00:00:00",
                "created_at" => $now,
                "updated_at" => $now
              ],
              [
                "titulo" => "Arqueólogos descobrem cidade perdida no Egito",
                "descricao" => "Arqueólogos encontram os restos de uma antiga cidade egípcia enterrada sob as areias do deserto.",
                "texto_completo" => "Uma equipe de arqueólogos anunciou a descoberta dos restos de uma antiga cidade egípcia perdida há milhares de anos. A cidade, que remonta à era do faraó Amenófis III, foi encontrada enterrada sob as areias do deserto na região de Luxor. Os arqueólogos ficaram surpresos com a extensão e a preservação dos artefatos encontrados, incluindo templos, casas e uma grande necrópole. A descoberta lança nova luz sobre a vida cotidiana no Egito antigo e promete revelar insights importantes sobre a história e a cultura da civilização egípcia.",
                "imagem" => "https://segredosdomundo.r7.com/wp-content/uploads/2021/06/luxor-conheca-a-cidade-perdida-do-egito-antigo-de-3-000-anos.jpg",
                "data_de_publicacao" => "2022-10-18 00:00:00",
                "created_at" => $now,
                "updated_at" => $now
              ],
              [
                "titulo" => "Estudo mostra os benefícios da meditação para a saúde mental",
                "descricao" => "Pesquisa científica demonstra os efeitos positivos da meditação na redução do estresse e da ansiedade.",
                "texto_completo" => "Um estudo científico recente investigou os efeitos da meditação na saúde mental e descobriu uma série de benefícios associados a essa prática milenar. De acordo com os pesquisadores, a meditação regular pode ajudar a reduzir o estresse, a ansiedade e os sintomas de depressão, além de melhorar o bem-estar emocional e a qualidade de vida. Os resultados do estudo destacam o potencial da meditação como uma ferramenta eficaz no tratamento de distúrbios mentais e no cultivo da saúde mental.",
                "imagem" => "https://amazonasatual.com.br/wp-content/uploads/2022/08/Meditacao-2.jpg",
                "data_de_publicacao" => "2022-10-18 00:00:00",
                "created_at" => $now,
                "updated_at" => $now
              ],
              [
                "titulo" => "NASA anuncia nova missão para explorar a Lua",
                "descricao" => "A agência espacial dos Estados Unidos planeja enviar uma nova missão tripulada para a Lua com o objetivo de estabelecer uma base permanente.",
                "texto_completo" => "A NASA revelou planos para uma nova missão tripulada à Lua como parte de seu programa Artemis, que visa levar humanos de volta à superfície lunar até 2024. A missão, denominada Artemis III, será a primeira a pousar na região polar sul da Lua, onde os cientistas acreditam que existam reservas de água congelada. O objetivo da missão é estabelecer uma base lunar permanente que servirá como plataforma de lançamento para futuras missões espaciais, incluindo viagens tripuladas a Marte. A NASA está trabalhando em colaboração com parceiros internacionais e empresas privadas para alcançar esse ambicioso objetivo.",
                "imagem" => "https://gizmodo.uol.com.br/wp-content/blogs.dir/8/files/2022/08/nasa-artemis-1.png",
                "data_de_publicacao" => "2022-10-18 00:00:00",
                "created_at" => $now,
                "updated_at" => $now
              ],
              [
                "titulo" => "Empresa anuncia lançamento de carro elétrico acessível",
                "descricao" => "Fabricante de automóveis revela um novo modelo de carro elétrico com preço acessível para tornar a mobilidade sustentável mais acessível.",
                "texto_completo" => "Uma grande fabricante de automóveis anunciou o lançamento de um novo modelo de carro elétrico",
                "imagem" => "https://clickpetroleoegas.com.br/wp-content/uploads/2023/11/Stellantis-o-gigante-automotivo-anuncia-parceria-com-empresa-chinesa-para-lancar-o-carro-eletrico-mais-barato-do-mundo.jpg",
                "data_de_publicacao" => "2022-10-18 00:00:00",
                "created_at" => $now,
                "updated_at" => $now
              ],
              [
                "titulo" => "Empresa revela novo método para reciclagem de plásticos",
                "descricao" => "Uma empresa de tecnologia ambiental apresenta um processo inovador de reciclagem de plásticos que reduz significativamente o impacto ambiental.",
                "texto_completo" => "Uma empresa de tecnologia ambiental anunciou o desenvolvimento de um novo método de reciclagem de plásticos que promete revolucionar a indústria de resíduos. O processo, denominado ReciPlast, utiliza uma combinação de técnicas avançadas de separação e purificação para transformar resíduos plásticos em matéria-prima de alta qualidade para novos produtos. Além de reduzir a quantidade de plástico descartado em aterros sanitários e oceanos, o ReciPlast também contribui para a economia circular, promovendo a sustentabilidade e a conservação de recursos naturais.",
                "imagem" => "https://img.freepik.com/fotos-premium/garrafas-de-plastico-vazias-em-um-fundo-azul-reciclagem-de-plastico-reciclavel-protecao-do-meio-ambiente_721474-241.jpg",
                "data_de_publicacao" => "2022-10-18 00:00:00",
                "created_at" => $now,
                "updated_at" => $now
              ],
              [
                "titulo" => "Startup lança plataforma de aprendizado de idiomas acessível",
                "descricao" => "Uma startup de tecnologia educacional apresenta uma nova plataforma online que oferece cursos de idiomas acessíveis e de alta qualidade para estudantes em todo o mundo.",
                "texto_completo" => "Uma startup de tecnologia educacional lançou uma plataforma inovadora de aprendizado de idiomas chamada LinguaNova, que visa tornar o ensino de línguas estrangeiras mais acessível e eficaz para pessoas de todas as idades. A plataforma oferece uma ampla variedade de cursos de idiomas, incluindo inglês, espanhol, francês e mandarim, com aulas interativas, exercícios práticos e suporte personalizado de instrutores qualificados. Com preços acessíveis e flexibilidade de horários, a LinguaNova está se tornando uma opção popular entre estudantes que desejam aprender um novo idioma de forma conveniente e econômica.",
                "imagem" => "https://ciaidiomas.edu.co/wp-content/uploads/2022/11/Beneficios-de-dominar-el-ingles.png",
                "data_de_publicacao" => "2022-10-18 00:00:00",
                "created_at" => $now,
                "updated_at" => $now
              ],
              [
                "titulo" => "Pesquisadores desenvolvem vacina eficaz contra a malária",
                "descricao" => "Cientistas anunciam o desenvolvimento de uma vacina inovadora que se mostra altamente eficaz na prevenção da malária, uma das doenças mais mortais do mundo.",
                "texto_completo" => "Após anos de pesquisa intensiva, uma equipe internacional de cientistas conseguiu desenvolver uma vacina promissora contra a malária, uma doença transmitida por mosquitos que afeta milhões de pessoas em todo o mundo, principalmente em regiões tropicais e subtropicais. Os testes clínicos mostraram que a vacina, chamada Malariavax, é capaz de induzir uma resposta imunológica forte e duradoura, proporcionando proteção significativa contra a infecção pelo parasita da malária. Essa conquista representa um marco importante na luta contra a malária e oferece esperança para o controle e a erradicação da doença no futuro.",
                "imagem" => "https://img.olhardigital.com.br/wp-content/uploads/2023/07/vacina-malaria.jpg",
                "data_de_publicacao" => "2022-10-18 00:00:00",
                "created_at" => $now,
                "updated_at" => $now
              ],
              [
                "titulo" => "Startup lança aplicativo de mobilidade urbana para bicicletas elétricas",
                "descricao" => "Empresa inovadora apresenta uma solução de transporte sustentável com o lançamento de um aplicativo que permite alugar bicicletas elétricas em áreas urbanas.",
                "texto_completo" => "Uma startup dedicada à mobilidade urbana anunciou o lançamento de um aplicativo inovador que oferece um serviço de aluguel de bicicletas elétricas em cidades ao redor do mundo. Com o aplicativo, os usuários podem localizar, desbloquear e alugar bicicletas elétricas de forma conveniente, ajudando a promover um estilo de vida mais ativo e sustentável. Além de oferecer uma opção de transporte ecologicamente correta, o serviço também contribui para reduzir o congestionamento nas vias urbanas e melhorar a qualidade do ar nas cidades.",
                "imagem" => "https://s2.glbimg.com/VdwQyD6swCXn3E1OCRb7nZril3M=/620x430/e.glbimg.com/og/ed/f/original/2020/10/28/design_sem_nome_-_2020-10-28t123606.991_pVlwiv9.jpg",
                "data_de_publicacao" => "2022-10-18 00:00:00",
                "created_at" => $now,
                "updated_at" => $now
              ]
            ]);
    }
}
