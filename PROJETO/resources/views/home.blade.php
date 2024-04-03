<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- font awesome cdn link  -->
    
    <!-- custom css file link -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])    
</head>
<body>
    
    <!-- header section starts -->

    <header class="header">

        <div id="menu-btn" class="fas fa-bars"></div>

        <a href="#" class="image"><img src="{{asset('images/Logo.jpg')}}"alt=></a>


        <nav class="navbar">
            <div id="close-navbar" class="fas fa-times"></div>
            <a href="#home">Página principal</a>
            <a href="#about">Quem somos</a>
            <a href="#services">Notícia</a>
            <a href="#packages"> Contato</a>
            <a href="#gallery">Galeria</a>
            
        </nav>

        <a href="#book" class="btn"> Sobre nossa etec</a>

    </header>

    <!-- header section ends -->

    <!-- home section starts -->

    <section class="home" id="home">

        <div class="content">
           
            
           
        </div>

        


        <img src="{{ asset('images/logoetec.jpg')}}" alt="Image" height="500" width="500">

        </div>

    </section>


    <!-- home section ends -->

    <!-- about section starts -->

    <section class="about" id="about">

        <h1 class="heading">Sobre nós</h1>

        <div class="container">

            <div class="image-container">
                <img src="{{asset('images/fotoescola.jpg')}}"alt="" class="image">
                <div class="controls">
                    <span class="control-btn" data-src="images/about-1.jpg"></span>
                    <span class="control-btn" data-src="images/about-2.jpg"></span>
                    <span class="control-btn" data-src="images/about-3.jpg"></span>
                </div>
            </div>

            <div class="content">
                <span>Descubra um futuro brilhante na ETEC Zona Leste</span>
                <h3>Descubra esta nova jornada</h3>
                <p>Na ETEC Zona Leste, estamos comprometidos com a excelência educacional, colocando-a como nossa prioridade máxima. Nossos cursos técnicos são conduzidos por professores altamente qualificados, oferecendo uma educação que não só fortalece os fundamentos acadêmicos, mas também desenvolve habilidades práticas essenciais para o mercado de trabalho.</p>
                <a href="#" class="btn"> read more</a>    
            </div>

        </div>

    </section>

    <!-- about section ends -->

    <!-- services section starts -->

    <section class="services" id="services">
    <h1 class="heading">Sobre nossos cursos</h1>
    <div class="box-container">
        <div class="container">
          
            <div class="box">
                <img src="{{ asset('images/DS.png')}}" alt="">
                <h3>Novotec Desenvolvimento de Sistemas AMS</h3>
                <p>Modalidade totalmente presencial permite que, em um período de cinco anos, o estudante conclua os ensinos nos níveis Médio, Técnico (ETEC) e Superior (FATEC).</p>
                <a href="#" class="btn">Saiba Mais</a>
            </div>
            <div class="box">
                <img src="{{ asset('images/ADM.png')}}" alt="">
                <h3>Administração</h3>
                <p>Desvendando os Segredos do Mundo Empresarial: Curso Técnico de Administração – Conectando Passado, Presente e Futuro!.</p>
                <a href="#" class="btn">Saiba Mais</a>
            </div>
            <div class="box">
                <img src="{{ asset('images/LOGÍSTICA.png')}}" alt="">
                <h3>Logística</h3>
                <p>Rumo à Eficiência: Explorando os Segredos da Logística com Matemática, Geografia e Física!</p>
                <a href="#" class="btn">Saiba Mais</a>
            </div>
        </div>
        <div class="box">
            <div class="card">
                <img src="{{ asset('images/escrita.jpg')}}" alt="Imagem Ilustrativa">
                <div class="container">
                    <h3>Processo Seletivo Simplificado para Professor de Ensino Médio e Técnico</h3>
                    <p>Estão em andamento concursos públicos para contratação de 2,7 mil docentes e servidores administrativos para atuar em Escolas Técnicas (Etecs), Faculdades de Tecnologia (Fatecs) do Estado e na Administração Central do Centro Paula Souza (CPS). Os certames foram autorizados em junho de 2022 e as admissões ocorrem em 2023. O calendário do concurso para os cargos administrativos e os editais para docentes, que são liberados em lotes, estão disponíveis nos links abaixo.</p>
                    <p>A previsão é contratar 993 professores de Ensino Médio e Técnico, 594 docentes de Ensino Superior, 887 agentes técnicos e administrativos, 227 bibliotecários e 6 especialistas em planejamento educacional. Foi autorizado, ainda, o aproveitamento de 80 vagas de professores remanescentes de concursos anteriores.</p>
                </div>
            </div>
        </div>
        <div class="box">
            <h3>Contato</h3>
            <img src="{{ asset('images/contato.png')}}" alt="">
            <p>Opções de serviço: Serviços no local · Não oferece aulas on-line</p>
            <p>Localizado em: FATEC Zona Leste</p>
            <p>Endereço: Av. Águia de Haia, 2633 - Cidade Antônio Estêvão de Carvalho, São Paulo - SP, 03694-000</p>
            <p>Telefone: (11) 2045-4000</p>
        </div>
    </div>
</section>

  
   

</body>
</html>
