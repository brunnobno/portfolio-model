<?php
use PHPMailer\PHPMailer\PHPMailer;
include __DIR__ . '/app.php';
include __DIR__ . '/config-content.php';

$error = getFlash('error');
$success = getFlash('success');
?>

            <!-- About-->
            <section class="resume-section" id="about">
                <div class="resume-section-content">                 
                    <h1 class="mb-0"><?= CONTENT['name']; ?><span class="text-primary"> <?= CONTENT['last-name']; ?></span>
                    </h1>
                    <div class="subheading mb-5">
                    <?= CONTENT['sub-description']; ?>
                        <a href="#"></a>
                    </div>
                    <p class="lead mb-5"><?= CONTENT['description']; ?></p>
                    <div class="social-icons">
                        <?= CONTENT['facebook'] ? '<a class="social-icon" href="'.CONTENT['facebook'].'"><i class="fab fa-facebook"></i></a>' : null ?>
                        <?= CONTENT['instagram'] ? '<a class="social-icon" href="'.CONTENT['instagram'].'"><i class="fab fa-instagram"></i></a>' : null ?>
                        <?= CONTENT['twitter'] ? '<a class="social-icon" href="'.CONTENT['twitter'].'"><i class="fab fa-twitter"></i></a>' : null ?>
                        <?= CONTENT['linkedin'] ? '<a class="social-icon" href="'.CONTENT['linkedin'].'"><i class="fab fa-linkedin-in"></i></a>' : null ?>
                        <?= CONTENT['youtube'] ? '<a class="social-icon" href="'.CONTENT['youtube'].'"><i class="fab fa-youtube"></i></a>' : null ?>
                        <?= CONTENT['github'] ? '<a class="social-icon" href="'.CONTENT['github'].'"><i class="fab fa-github"></i></a>' : null ?>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Experience-->
            <section class="resume-section" id="experience">
                <div class="resume-section-content">
                    <h2 class="mb-5">Experiência</h2>
                    <?php                    
                    foreach(CONTENT['experience'] as $experience) {
                    ?>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0"><?= $experience['title'] ?></h3>
                            <div class="subheading mb-3"><?= $experience['company'] ?></div>
                            <p><?= $experience['description'] ?></p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary"><?= $experience['since'] ?></span></div>
                    </div>
                    <?php 
                    } 
                    ?>                    
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
                                <img src="/include/assets/img/site.png" class="card-img-top" style="width: 100%; height: 100%;">
                                <div class="card-body">
                                    <p class="card-text"></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 m-3">
                            <div class="card shadow-sm rounded" style="width: 15rem; height: 20rem;">
                                <img src="/include/assets/img/site2.png" class="card-img-top object-fit-cover" style="width: 100%; height: 100%;">
                                <div class="card-body">
                                    <p class="card-text"></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 m-3">
                            <div class="card shadow-sm rounded" style="width: 15rem; height: 20rem;">
                                <img src="/include/assets/img/site3.png" class="card-img-top" style="width: 100%; height: 100%;">
                                <div class="card-body">
                                    <p class="card-text"></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 m-3">
                            <div class="card shadow-sm rounded" style="width: 15rem; height: 20rem;">
                                <img src="/include/assets/img/site4.png" class="card-img-top" style="width: 100%; height: 100%;">
                                <div class="card-body">
                                    <p class="card-text"></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 m-3">
                            <div class="card shadow-sm rounded" style="width: 15rem; height: 20rem;">
                                <img src="/include/assets/img/site5.png" class="card-img-top" style="width: 100%; height: 100%;">
                                <div class="card-body">
                                    <p class="card-text"></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 m-3">
                            <div class="card shadow-sm rounded" style="width: 15rem; height: 20rem;">
                                <img src="/include/assets/img/site6.png" class="card-img-top" style="width: 100%; height: 100%;">
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
