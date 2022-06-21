<?php
use PHPMailer\PHPMailer\PHPMailer;
include __DIR__ . '/app.php';
$error = getFlash('error');
$success = getFlash('success');
?>

            <!-- About-->
            <section class="resume-section" id="about">
                <div class="resume-section-content">
                    <?php 
                        if(isset($_GET['msg']) && $_GET['msg'] === 'sucesso') {  
                            echo "<div class='alert alert-success' role='alert'> Sua mensagem foi enviada com sucesso!</div>";
                            }  
                     ?>                   
                    <h1 class="mb-0">Brunno<span class="text-primary"> Hernandez</span>
                    </h1>
                    <div class="subheading mb-5">
                        empreendedor, marketing digital, developer web e especialista SEO.
                        <a href="#"></a>
                    </div>
                    <p class="lead mb-5">I am experienced in leveraging agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition.</p>
                    <div class="social-icons">
                        <a class="social-icon" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        <a class="social-icon" href="#!"><i class="fab fa-github"></i></a>
                        <a class="social-icon" href="#!"><i class="fab fa-twitter"></i></a>
                        <a class="social-icon" href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a class="social-icon" href="#!"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Experience-->
            <section class="resume-section" id="experience">
                <div class="resume-section-content">
                    <h2 class="mb-5">Experiência</h2>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Empresário</h3>
                            <div class="subheading mb-3">Kesia Transportes</div>
                            <p>Paralelo ao mundo digital eu administro uma empresa do ramo de transporte rodoviario desde 2004. Talves esse seja meu maior legado e o que me garantiu bagagem no mundo corporativo, liderança, criatividade para inovar sempre e capacidade para soluções de problemas. </p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">Ativo desde 2004</span></div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Marketing digital</h3>
                            <div class="subheading mb-3">Lançamentos / Estratégia</div>
                            <p>Experiência no Marketing digital, atuando diretamente em lançamentos (vendas em grande escala) e vendas perpétuas. Conhecimento em estratégias digitais e na execução de todo o processo. Atingindo grandes resultados como 7em1, 6em1, 6em6 e 7em6 e trabalhando com grandes profissionais de comunicação.</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">Atuação de 2018 - 2021</span></div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Web Developer</h3>
                            <div class="subheading mb-3">Criação e desenvolvimento de sites</div>
                            <p>Desenvolvimento e criação de site em geral. Execução de grandes projetos como sites institucionais até landpages para demandas pontuais. Tecnologia usadas de acordo com cada projeto (Wordpress, Html, Css e JavaScript).</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">Atuação de 2018 - 2022</span></div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Developer Junior</h3>
                            <div class="subheading mb-3">Programador Web</div>
                            <p>Desenvolvedor Junior. Atuando em sistemas e aplicações mais robustas que envolvem banco de dados, APIs, segurança, painel de administração, área restrita, conteúdo personalizado e outros.</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">Em evolução desde 2020 - Ativo</span></div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Hospedagem / domínio / dns</h3>
                            <div class="subheading mb-3">contratações e configurações</div>
                            <p>Expericia com</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">September 2008 - June 2010</span></div>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Education-->
            <section class="resume-section" id="education">
                <div class="resume-section-content">
                    <h2 class="mb-5">Alguns projetos</h2>
                    
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 m-3">
                            <div class="card shadow-sm rounded" style="width: 15rem; height: 20rem;">
                                <img src="./assets/img/site.png" class="card-img-top" style="width: 100%; height: 100%;">
                                <div class="card-body">
                                    <p class="card-text"></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 m-3">
                            <div class="card shadow-sm rounded" style="width: 15rem; height: 20rem;">
                                <img src="./assets/img/site2.png" class="card-img-top object-fit-cover" style="width: 100%; height: 100%;">
                                <div class="card-body">
                                    <p class="card-text"></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 m-3">
                            <div class="card shadow-sm rounded" style="width: 15rem; height: 20rem;">
                                <img src="./assets/img/site3.png" class="card-img-top" style="width: 100%; height: 100%;">
                                <div class="card-body">
                                    <p class="card-text"></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 m-3">
                            <div class="card shadow-sm rounded" style="width: 15rem; height: 20rem;">
                                <img src="./assets/img/site4.png" class="card-img-top" style="width: 100%; height: 100%;">
                                <div class="card-body">
                                    <p class="card-text"></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 m-3">
                            <div class="card shadow-sm rounded" style="width: 15rem; height: 20rem;">
                                <img src="./assets/img/site5.png" class="card-img-top" style="width: 100%; height: 100%;">
                                <div class="card-body">
                                    <p class="card-text"></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 m-3">
                            <div class="card shadow-sm rounded" style="width: 15rem; height: 20rem;">
                                <img src="./assets/img/site6.png" class="card-img-top" style="width: 100%; height: 100%;">
                                <div class="card-body">
                                    <p class="card-text"></p>
                                </div>
                            </div>
                        </div>
                          
                    </div>
                </div>
            </section>

            <hr class="m-0" />
            <!-- Skills-->
            <section class="resume-section" id="skills">
                <div class="resume-section-content">
                    <h2 class="mb-5">Skills</h2>
                    <div class="subheading mb-3">Front-End, Back-End e Ferramentas</div>
                    <ul class="list-inline dev-icons">
                        <li class="list-inline-item"><i class="fab fa-html5"></i></li>
                        <li class="list-inline-item"><i class="fab fa-css3-alt"></i></li>
                        <li class="list-inline-item"><i class="fab fa-bootstrap"></i></li>
                        <li class="list-inline-item"><i class="fab fa-js-square"></i></li>
                        <li class="list-inline-item"><i class="fab fa-wordpress"></i></li>
                        <li class="list-inline-item"><i class="fab fa-php"></i></li>
                        <li class="list-inline-item"><i class="fab fa-laravel"></i></li>
                        <li class="list-inline-item"><i class="fab fa-github"></i></li>
                        <li class="list-inline-item"><i class="fab fa-cpanel"></i></li>
                        <li class="list-inline-item"><i class="fas fa-server"></i></li>
                        
                    </ul>
                    <div class="subheading mb-3">Workflow</div>
                    <ul class="fa-ul mb-0">
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            Design responsivo para dispositivos mobile.
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            Criação, desenvolvimento e manutenção de projetos.
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            Configuração e manutenção de todo serviço de hospedagem.
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            Equipe qualificada para todas as etapas do projeto.
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            Desenvolvimento ágil e com práticas de segurança.
                        </li>
                    </ul>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Interests-->
            <section class="resume-section" id="interests">
                <div class="resume-section-content">
                    <h2 class="mb-5">Conheça os meus produtos/serviços</h2>
                    <p>Apart from being a web developer, I enjoy most of my time being outdoors. In the winter, I am an avid skier and novice ice climber. During the warmer months here in Colorado, I enjoy mountain biking, free climbing, and kayaking.</p>
                    <p class="mb-0">When forced indoors, I follow a number of sci-fi and fantasy genre movies and television shows, I am an aspiring chef, and I spend a large amount of my free time exploring the latest technology advancements in the front-end web development world.</p>
                </div>
                
                
            </section>
            <hr class="m-0" />
            <!-- Awards-->
            <section class="resume-section" id="contact">
                <div class="resume-section-content">
                    <h2 class="mb-5">Quer falar comigo?</h2>
                    <div class="row">
                        <div class="col-12 col-sm-8 col-md-6">
                        <form action="/contact-send" name="form" method="POST">                       
                            <?= $error ?? null ?>                      
                            <?= $success ?? null ?>
                        
                            <div class="mb-3">                                    
                                <input type="text" class="form-control" name="name" placeholder="Seu nome completo *" required>
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control" name="email" placeholder="Seu e-mail *" required>
                                
                            </div>
                            <div class="mb-3">                                    
                                <input type="tel" class="form-control" name="whatsapp" placeholder="(DDD) + Whatsapp *" required>
                            </div>
                            <div class="mb-3">                                   
                                <textarea class="form-control" style="height: 100px;" placeholder="Deixe a sua mensagem *"name="message" required></textarea>
                                <span class="text-small text-muted">Seu e-mail está seguro e jamais será repassado para outra pessoa.</span>

                            </div>
                            <button type="submit" name="enviar" class="btn btn-primary text-light">Enviar mensagem</button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>

<?php include 'footer.php'; ?>