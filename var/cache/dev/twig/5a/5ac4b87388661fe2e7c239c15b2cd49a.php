<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* home/accueil.html.twig */
class __TwigTemplate_07f1e057ba080efc1db3dfbc60b78bb7 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/accueil.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/accueil.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/accueil.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Accueil!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "
    <main class=\"main-container\">
        <!-- Slider main container -->
        <div class=\"swiper\">
            <!-- Additional required wrapper -->
            <div class=\"swiper-wrapper\">
                <!-- Slides -->
                <div class=\"swiper-slide\">
                    <img src=\"assets/images/slide_1.jpg\" alt=\"\" class=\"image\">
                    <div class=\"slide-content\">
                        <p class=\"wow animate__animated animate__fadeInUp animate__delay-0_5s\">Profitez des meilleures
                            offres</p>
                        <h1 class=\"wow animate__animated animate__fadeInUp animate__delay-0_5s\">Commandez vos
                            produits<br> au meilleur prix</h1>
                        <a href=\"product.html\"
                           class=\"btn wow animate__animated animate__fadeInUp animate__delay-0_5s\">Acheter</a>
                    </div>
                </div>
                <div class=\"swiper-slide\">
                    <img src=\"assets/images/photorealistic-portrait-african-woman.jpg\" alt=\"\" class=\"image\">
                    <div class=\"slide-content\">
                        <p class=\"wow animate__animated animate__fadeInUp animate__delay-0_5s\">Des articles inspirants
                            pour vous</p>
                        <h1 class=\"wow animate__animated animate__fadeInUp animate__delay-0_5s\">Découvrez nos
                            conseils,<br>tendances et actualités</h1>
                        <a href=\"blog.html\" class=\"btn wow animate__animated animate__fadeInUp animate__delay-0_5s\">Lire
                            les articles</a>
                    </div>
                </div>
                <div class=\"swiper-slide\">
                    <img src=\"assets/images/e-commerce-8676523_1920.jpg\" alt=\"\" class=\"image\">
                    <div class=\"slide-content\">
                        <p class=\"wow animate__animated animate__fadeInUp animate__delay-0_5s\">Ne manquez pas les
                            événements à venir</p>
                        <h1 class=\"wow animate__animated animate__fadeInUp animate__delay-0_5s\">Réservez votre
                            place<br>pour des expériences uniques</h1>
                        <a href=\"evenement.html\"
                           class=\"btn wow animate__animated animate__fadeInUp animate__delay-0_5s\">Voir les
                            événements</a>
                    </div>
                </div>

            </div>
            <!-- If we need pagination -->
            <div class=\"swiper-pagination\"></div>

            <!-- If we need navigation buttons -->
            <div class=\"swiper-button-prev\"></div>
            <div class=\"swiper-button-next\"></div>

            <!-- If we need scrollbar -->
            <div class=\"swiper-scrollbar\"></div>
        </div>

        <section class=\"about\" id=\"about\">

            <h1 class=\"heading wow animate__animated animate__fadeInUp animate__delay-0_5s\">A propos de nous !</h1>
            <p class=\"paragraph wow animate__animated animate__fadeInUp animate__delay-0_5s\">
                Promouvoir la culture et l'art au cœur de l'innovation
            </p>
            <div class=\"container\">
                <div class=\"about-image wow animate__animated animate__fadeInUp animate__delay-0_5s\">
                    <img src=\"assets/images/photorealistic-portrait-african-woman.jpg\" alt=\"\">
                </div>
                <div class=\"about-content\">
                    <p class=\"wow animate__animated animate__fadeInUp animate__delay-0_5s\">
                        Sant'art est une entreprise culturelle engagée dans la promotion des activités culturelles et
                        touristiques. Nous nous spécialisons dans la mise en valeur du talent des jeunes artistes en
                        organisant des spectacles culturels à travers diverses régions. Notre activité s'étend également
                        à la vente de produits artisanaux traditionnels, comme des instruments de musique, des tissus
                        artistiques et des tableaux d'art. Parallèlement, nous offrons des tours touristiques guidés
                        dans des lieux exceptionnels, alliant esthétique, art et histoire, pour une expérience immersive
                        et enrichissante.
                    </p>
                    <p class=\"wow animate__animated animate__fadeInUp animate__delay-0_5s\">
                        Sant'art œuvre également pour le développement des industries culturelles et créatives en
                        formant les jeunes talents aux différents métiers du secteur. Nos programmes de formation visent
                        à préparer la nouvelle génération à intégrer des secteurs créatifs dynamiques et en pleine
                        expansion. Nous innovons sans cesse en proposant des projets culturels uniques, soutenant les
                        artistes émergents tout en enrichissant le patrimoine culturel local et mondial. Grâce à notre
                        approche inclusive et notre engagement pour la valorisation culturelle, nous participons
                        activement à la préservation et la transmission de notre héritage artistique.
                    </p>
                </div>
            </div>
            <a href=\"about.html\" class=\"btn wow animate__animated animate__fadeInUp animate__delay-0_5s\">
                Lire plus...
            </a>
        </section>

        <section class=\"product\" id=\"product\">
            <h1 class=\"heading wow animate__animated animate__fadeInUp animate__delay-0_3s\">Nos produits</h1>
            <p class=\"paragraph wow animate__animated animate__fadeInUp animate__delay-0_4s\">
                Découvrez nos produits artisanaux uniques, alliant tradition et savoir-faire local. Des créations
                authentiques pour enrichir votre quotidien.
            </p>

            <div class=\"container\">
                <div class=\"box-product wow animate__animated animate__fadeInUp animate__delay-0_2s\">
                    <div class=\"image\">
                        <img src=\"assets/images/products/product-img-1.jpg\" alt=\"\" width=\"150px\">
                        <h3><a href=\"#\">Chaussure</a></h3>
                    </div>
                    <p class=\"price\">Prix : <span>5000 CFA</span></p>
                    <div class=\"btn-buy\">Acheter</div>
                </div>

                <div class=\"box-product wow animate__animated animate__fadeInUp animate__delay-0_3s\">
                    <div class=\"image\">
                        <img src=\"assets/images/products/product-img-2.jpg\" alt=\"\" width=\"150px\">
                        <h3><a href=\"#\">Chaussure</a></h3>
                    </div>
                    <p class=\"price\">Prix : <span>5000 CFA</span></p>
                    <div class=\"btn-buy\">Acheter</div>
                </div>

                <div class=\"box-product wow animate__animated animate__fadeInUp animate__delay-0_4s\">
                    <div class=\"image\">
                        <img src=\"assets/images/products/product-img-3.jpg\" alt=\"\" width=\"150px\">
                        <h3><a href=\"#\">Chaussure</a></h3>
                    </div>
                    <p class=\"price\">Prix : <span>5000 CFA</span></p>
                    <div class=\"btn-buy\">Acheter</div>
                </div>

                <div class=\"box-product wow animate__animated animate__fadeInUp animate__delay-0_5s\">
                    <div class=\"image\">
                        <img src=\"assets/images/products/product-img-4.jpg\" alt=\"\" width=\"150px\">
                        <h3><a href=\"#\">Chaussure</a></h3>
                    </div>
                    <p class=\"price\">Prix : <span>5000 CFA</span></p>
                    <div class=\"btn-buy\">Acheter</div>
                </div>

                <div class=\"box-product wow animate__animated animate__fadeInUp animate__delay-0_6s\">
                    <div class=\"image\">
                        <img src=\"assets/images/products/product-img-5.jpg\" alt=\"\" width=\"150px\">
                        <h3><a href=\"#\">Chaussure</a></h3>
                    </div>
                    <p class=\"price\">Prix : <span>5000 CFA</span></p>
                    <div class=\"btn-buy\">Acheter</div>
                </div>

                <div class=\"box-product wow animate__animated animate__fadeInUp animate__delay-0_7s\">
                    <div class=\"image\">
                        <img src=\"assets/images/products/product-img-5.jpg\" alt=\"\" width=\"150px\">
                        <h3><a href=\"#\">Chaussure</a></h3>
                    </div>
                    <p class=\"price\">Prix : <span>5000 CFA</span></p>
                    <div class=\"btn-buy\">Acheter</div>
                </div>
            </div>
        </section>


        <section class=\"blog\" id=\"blog\">
            <h1 class=\"heading wow animate__animated animate__fadeInUp\">Dernières Nouvelles</h1>
            <p class=\"paragraph wow animate__animated animate__fadeInUp animate__delay-0_2s\">
                Explorez nos articles récents sur l'art, la culture et les événements à venir pour rester inspiré et
                informé.
            </p>

            <div class=\"container\">
                <div class=\"card wow animate__animated animate__fadeInUp animate__delay-0_2s\">
                    <div class=\"card-imag\">
                        <img src=\"assets/images/blog/blog-2.jpg\" alt=\"blog image\">
                        <div class=\"image-overlay\">
                            <a href=\"#\" class=\"read-more-btn\">Lire plus</a>
                        </div>
                    </div>
                    <div class=\"card-body\">
                        <span class=\"tag tag-tech\">Technologie</span>
                        <h4>How to stay fresh ?</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit...</p>
                        <div class=\"user\">
                            <img src=\"assets/images/blog/blog-author-2.jpg\" alt=\"image utilisateur\">
                            <div class=\"user-info\">
                                <h5>Bah Mamadou</h5>
                                <small>4h ago</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"card wow animate__animated animate__fadeInUp animate__delay-0_4s\">
                    <div class=\"card-imag\">
                        <img src=\"assets/images/blog/blog-1.jpg\" alt=\"blog image\">
                        <div class=\"image-overlay\">
                            <a href=\"#\" class=\"read-more-btn\">Lire plus</a>
                        </div>
                    </div>
                    <div class=\"card-body\">
                        <span class=\"tag tag-tech\">Technologie</span>
                        <h4>How to stay fresh ?</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit...</p>
                        <div class=\"user\">
                            <img src=\"assets/images/blog/blog-author-2.jpg\" alt=\"image utilisateur\">
                            <div class=\"user-info\">
                                <h5>Bah Mamadou</h5>
                                <small>4h ago</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"card wow animate__animated animate__fadeInUp animate__delay-0_6s\">
                    <div class=\"card-imag\">
                        <img src=\"assets/images/blog/blog-2.jpg\" alt=\"blog image\">
                        <div class=\"image-overlay\">
                            <a href=\"#\" class=\"read-more-btn\">Lire plus</a>
                        </div>
                    </div>
                    <div class=\"card-body\">
                        <span class=\"tag tag-tech\">Technologie</span>
                        <h4>How to stay fresh ?</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit...</p>
                        <div class=\"user\">
                            <img src=\"assets/images/blog/blog-author-3.jpg\" alt=\"image utilisateur\">
                            <div class=\"user-info\">
                                <h5>Bah Mamadou</h5>
                                <small>4h ago</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"card wow animate__animated animate__fadeInUp animate__delay-0_8s\">
                    <div class=\"card-imag\">
                        <img src=\"assets/images/blog/blog-3.jpg\" alt=\"blog image\">
                        <div class=\"image-overlay\">
                            <a href=\"#\" class=\"read-more-btn\">Lire plus</a>
                        </div>
                    </div>
                    <div class=\"card-body\">
                        <span class=\"tag tag-tech\">Technologie</span>
                        <h4>How to stay fresh ?</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit...</p>
                        <div class=\"user\">
                            <img src=\"assets/images/blog/blog-author-4.jpg\" alt=\"image utilisateur\">
                            <div class=\"user-info\">
                                <h5>Bah Mamadou</h5>
                                <small>4h ago</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"card wow animate__animated animate__fadeInUp animate__delay-1s\">
                    <div class=\"card-imag\">
                        <img src=\"assets/images/blog/blog-4.jpg\" alt=\"blog image\">
                        <div class=\"image-overlay\">
                            <a href=\"#\" class=\"read-more-btn\">Lire plus</a>
                        </div>
                    </div>
                    <div class=\"card-body\">
                        <span class=\"tag tag-tech\">Technologie</span>
                        <h4>How to stay fresh ?</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit...</p>
                        <div class=\"user\">
                            <img src=\"assets/images/blog/blog-author-2.jpg\" alt=\"image utilisateur\">
                            <div class=\"user-info\">
                                <h5>Bah Mamadou</h5>
                                <small>4h ago</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class=\"gallery\" id=\"gallery\">
            <h1 class=\"heading\">Notre Galérie</h1>
            <p class=\"paragraph\">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi rerum nobis ipsa
                reiciendis consequuntur
                fugiat voluptate</p>

            <div class=\"gallery-grid\">
                <a data-fancybox=\"gallery\" href=\"https://lipsum.app/id/60/1200x800\">
                    <img src=\"https://lipsum.app/id/60/400x300\" alt=\"Image 1\">
                </a>
                <a data-fancybox=\"gallery\" href=\"https://lipsum.app/id/61/1200x800\">
                    <img src=\"https://lipsum.app/id/61/400x300\" alt=\"Image 2\">
                </a>
                <a data-fancybox=\"gallery\" href=\"https://lipsum.app/id/62/1200x800\">
                    <img src=\"https://lipsum.app/id/62/400x300\" alt=\"Image 3\">
                </a>
                <a data-fancybox=\"gallery\" href=\"https://lipsum.app/id/63/1200x800\">
                    <img src=\"https://lipsum.app/id/63/400x300\" alt=\"Image 4\">
                </a>
                <a data-fancybox=\"gallery\" href=\"https://lipsum.app/id/64/1200x800\">
                    <img src=\"https://lipsum.app/id/64/400x300\" alt=\"Image 5\">
                </a>
                <a data-fancybox=\"gallery\" href=\"https://lipsum.app/id/65/1200x800\">
                    <img src=\"https://lipsum.app/id/65/400x300\" alt=\"Image 6\">
                </a>
            </div>

        </section>
        <section class=\"team\" id=\"team\">
            <h1 class=\"heading wow animate__animated animate__fadeInUp animate__delay-0_5s\">Notre équipe</h1>
            <p class=\"paragraph wow animate__animated animate__fadeInUp animate__delay-0_7s\">Necessitatibus eius
                consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            <div class=\"container\">
                <div class=\"our-team wow animate__animated animate__fadeInUp animate__delay-1s\">
                    <div class=\"pic\">
                        <img src=\"assets/images/team/team-2.jpg\" alt=\"team\">
                    </div>
                    <h3 class=\"title\">Bah Mamadou Bhoye</h3>
                    <span class=\"post\">CEO</span>
                    <ul class=\"social\">
                        <li><a href=\"#\" class=\"fa-brands fa-linkedin\"></a></li>
                        <li><a href=\"#\" class=\"fa-brands fa-facebook\"></a></li>
                        <li><a href=\"#\" class=\"fa-brands fa-square-instagram\"></a></li>
                    </ul>
                </div>
                <div class=\"our-team wow animate__animated animate__fadeInUp animate__delay-1s\">
                    <div class=\"pic\">
                        <img src=\"assets/images/team/team-2.jpg\" alt=\"team\">
                    </div>
                    <h3 class=\"title\">Bah Mamadou Bhoye</h3>
                    <span class=\"post\">CEO</span>
                    <ul class=\"social\">
                        <li><a href=\"#\" class=\"fa-brands fa-linkedin\"></a></li>
                        <li><a href=\"#\" class=\"fa-brands fa-facebook\"></a></li>
                        <li><a href=\"#\" class=\"fa-brands fa-square-instagram\"></a></li>
                    </ul>
                </div>
                <div class=\"our-team wow animate__animated animate__fadeInUp animate__delay-1s\">
                    <div class=\"pic\">
                        <img src=\"assets/images/team/team-2.jpg\" alt=\"team\">
                    </div>
                    <h3 class=\"title\">Bah Mamadou Bhoye</h3>
                    <span class=\"post\">CEO</span>
                    <ul class=\"social\">
                        <li><a href=\"#\" class=\"fa-brands fa-linkedin\"></a></li>
                        <li><a href=\"#\" class=\"fa-brands fa-facebook\"></a></li>
                        <li><a href=\"#\" class=\"fa-brands fa-square-instagram\"></a></li>
                    </ul>
                </div>
                <div class=\"our-team wow animate__animated animate__fadeInUp animate__delay-1s\">
                    <div class=\"pic\">
                        <img src=\"assets/images/team/team-2.jpg\" alt=\"team\">
                    </div>
                    <h3 class=\"title\">Bah Mamadou Bhoye</h3>
                    <span class=\"post\">CEO</span>
                    <ul class=\"social\">
                        <li><a href=\"#\" class=\"fa-brands fa-linkedin\"></a></li>
                        <li><a href=\"#\" class=\"fa-brands fa-facebook\"></a></li>
                        <li><a href=\"#\" class=\"fa-brands fa-square-instagram\"></a></li>
                    </ul>
                </div>
            </div>
        </section>


    </main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "home/accueil.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accueil!{% endblock %}

{% block body %}

    <main class=\"main-container\">
        <!-- Slider main container -->
        <div class=\"swiper\">
            <!-- Additional required wrapper -->
            <div class=\"swiper-wrapper\">
                <!-- Slides -->
                <div class=\"swiper-slide\">
                    <img src=\"assets/images/slide_1.jpg\" alt=\"\" class=\"image\">
                    <div class=\"slide-content\">
                        <p class=\"wow animate__animated animate__fadeInUp animate__delay-0_5s\">Profitez des meilleures
                            offres</p>
                        <h1 class=\"wow animate__animated animate__fadeInUp animate__delay-0_5s\">Commandez vos
                            produits<br> au meilleur prix</h1>
                        <a href=\"product.html\"
                           class=\"btn wow animate__animated animate__fadeInUp animate__delay-0_5s\">Acheter</a>
                    </div>
                </div>
                <div class=\"swiper-slide\">
                    <img src=\"assets/images/photorealistic-portrait-african-woman.jpg\" alt=\"\" class=\"image\">
                    <div class=\"slide-content\">
                        <p class=\"wow animate__animated animate__fadeInUp animate__delay-0_5s\">Des articles inspirants
                            pour vous</p>
                        <h1 class=\"wow animate__animated animate__fadeInUp animate__delay-0_5s\">Découvrez nos
                            conseils,<br>tendances et actualités</h1>
                        <a href=\"blog.html\" class=\"btn wow animate__animated animate__fadeInUp animate__delay-0_5s\">Lire
                            les articles</a>
                    </div>
                </div>
                <div class=\"swiper-slide\">
                    <img src=\"assets/images/e-commerce-8676523_1920.jpg\" alt=\"\" class=\"image\">
                    <div class=\"slide-content\">
                        <p class=\"wow animate__animated animate__fadeInUp animate__delay-0_5s\">Ne manquez pas les
                            événements à venir</p>
                        <h1 class=\"wow animate__animated animate__fadeInUp animate__delay-0_5s\">Réservez votre
                            place<br>pour des expériences uniques</h1>
                        <a href=\"evenement.html\"
                           class=\"btn wow animate__animated animate__fadeInUp animate__delay-0_5s\">Voir les
                            événements</a>
                    </div>
                </div>

            </div>
            <!-- If we need pagination -->
            <div class=\"swiper-pagination\"></div>

            <!-- If we need navigation buttons -->
            <div class=\"swiper-button-prev\"></div>
            <div class=\"swiper-button-next\"></div>

            <!-- If we need scrollbar -->
            <div class=\"swiper-scrollbar\"></div>
        </div>

        <section class=\"about\" id=\"about\">

            <h1 class=\"heading wow animate__animated animate__fadeInUp animate__delay-0_5s\">A propos de nous !</h1>
            <p class=\"paragraph wow animate__animated animate__fadeInUp animate__delay-0_5s\">
                Promouvoir la culture et l'art au cœur de l'innovation
            </p>
            <div class=\"container\">
                <div class=\"about-image wow animate__animated animate__fadeInUp animate__delay-0_5s\">
                    <img src=\"assets/images/photorealistic-portrait-african-woman.jpg\" alt=\"\">
                </div>
                <div class=\"about-content\">
                    <p class=\"wow animate__animated animate__fadeInUp animate__delay-0_5s\">
                        Sant'art est une entreprise culturelle engagée dans la promotion des activités culturelles et
                        touristiques. Nous nous spécialisons dans la mise en valeur du talent des jeunes artistes en
                        organisant des spectacles culturels à travers diverses régions. Notre activité s'étend également
                        à la vente de produits artisanaux traditionnels, comme des instruments de musique, des tissus
                        artistiques et des tableaux d'art. Parallèlement, nous offrons des tours touristiques guidés
                        dans des lieux exceptionnels, alliant esthétique, art et histoire, pour une expérience immersive
                        et enrichissante.
                    </p>
                    <p class=\"wow animate__animated animate__fadeInUp animate__delay-0_5s\">
                        Sant'art œuvre également pour le développement des industries culturelles et créatives en
                        formant les jeunes talents aux différents métiers du secteur. Nos programmes de formation visent
                        à préparer la nouvelle génération à intégrer des secteurs créatifs dynamiques et en pleine
                        expansion. Nous innovons sans cesse en proposant des projets culturels uniques, soutenant les
                        artistes émergents tout en enrichissant le patrimoine culturel local et mondial. Grâce à notre
                        approche inclusive et notre engagement pour la valorisation culturelle, nous participons
                        activement à la préservation et la transmission de notre héritage artistique.
                    </p>
                </div>
            </div>
            <a href=\"about.html\" class=\"btn wow animate__animated animate__fadeInUp animate__delay-0_5s\">
                Lire plus...
            </a>
        </section>

        <section class=\"product\" id=\"product\">
            <h1 class=\"heading wow animate__animated animate__fadeInUp animate__delay-0_3s\">Nos produits</h1>
            <p class=\"paragraph wow animate__animated animate__fadeInUp animate__delay-0_4s\">
                Découvrez nos produits artisanaux uniques, alliant tradition et savoir-faire local. Des créations
                authentiques pour enrichir votre quotidien.
            </p>

            <div class=\"container\">
                <div class=\"box-product wow animate__animated animate__fadeInUp animate__delay-0_2s\">
                    <div class=\"image\">
                        <img src=\"assets/images/products/product-img-1.jpg\" alt=\"\" width=\"150px\">
                        <h3><a href=\"#\">Chaussure</a></h3>
                    </div>
                    <p class=\"price\">Prix : <span>5000 CFA</span></p>
                    <div class=\"btn-buy\">Acheter</div>
                </div>

                <div class=\"box-product wow animate__animated animate__fadeInUp animate__delay-0_3s\">
                    <div class=\"image\">
                        <img src=\"assets/images/products/product-img-2.jpg\" alt=\"\" width=\"150px\">
                        <h3><a href=\"#\">Chaussure</a></h3>
                    </div>
                    <p class=\"price\">Prix : <span>5000 CFA</span></p>
                    <div class=\"btn-buy\">Acheter</div>
                </div>

                <div class=\"box-product wow animate__animated animate__fadeInUp animate__delay-0_4s\">
                    <div class=\"image\">
                        <img src=\"assets/images/products/product-img-3.jpg\" alt=\"\" width=\"150px\">
                        <h3><a href=\"#\">Chaussure</a></h3>
                    </div>
                    <p class=\"price\">Prix : <span>5000 CFA</span></p>
                    <div class=\"btn-buy\">Acheter</div>
                </div>

                <div class=\"box-product wow animate__animated animate__fadeInUp animate__delay-0_5s\">
                    <div class=\"image\">
                        <img src=\"assets/images/products/product-img-4.jpg\" alt=\"\" width=\"150px\">
                        <h3><a href=\"#\">Chaussure</a></h3>
                    </div>
                    <p class=\"price\">Prix : <span>5000 CFA</span></p>
                    <div class=\"btn-buy\">Acheter</div>
                </div>

                <div class=\"box-product wow animate__animated animate__fadeInUp animate__delay-0_6s\">
                    <div class=\"image\">
                        <img src=\"assets/images/products/product-img-5.jpg\" alt=\"\" width=\"150px\">
                        <h3><a href=\"#\">Chaussure</a></h3>
                    </div>
                    <p class=\"price\">Prix : <span>5000 CFA</span></p>
                    <div class=\"btn-buy\">Acheter</div>
                </div>

                <div class=\"box-product wow animate__animated animate__fadeInUp animate__delay-0_7s\">
                    <div class=\"image\">
                        <img src=\"assets/images/products/product-img-5.jpg\" alt=\"\" width=\"150px\">
                        <h3><a href=\"#\">Chaussure</a></h3>
                    </div>
                    <p class=\"price\">Prix : <span>5000 CFA</span></p>
                    <div class=\"btn-buy\">Acheter</div>
                </div>
            </div>
        </section>


        <section class=\"blog\" id=\"blog\">
            <h1 class=\"heading wow animate__animated animate__fadeInUp\">Dernières Nouvelles</h1>
            <p class=\"paragraph wow animate__animated animate__fadeInUp animate__delay-0_2s\">
                Explorez nos articles récents sur l'art, la culture et les événements à venir pour rester inspiré et
                informé.
            </p>

            <div class=\"container\">
                <div class=\"card wow animate__animated animate__fadeInUp animate__delay-0_2s\">
                    <div class=\"card-imag\">
                        <img src=\"assets/images/blog/blog-2.jpg\" alt=\"blog image\">
                        <div class=\"image-overlay\">
                            <a href=\"#\" class=\"read-more-btn\">Lire plus</a>
                        </div>
                    </div>
                    <div class=\"card-body\">
                        <span class=\"tag tag-tech\">Technologie</span>
                        <h4>How to stay fresh ?</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit...</p>
                        <div class=\"user\">
                            <img src=\"assets/images/blog/blog-author-2.jpg\" alt=\"image utilisateur\">
                            <div class=\"user-info\">
                                <h5>Bah Mamadou</h5>
                                <small>4h ago</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"card wow animate__animated animate__fadeInUp animate__delay-0_4s\">
                    <div class=\"card-imag\">
                        <img src=\"assets/images/blog/blog-1.jpg\" alt=\"blog image\">
                        <div class=\"image-overlay\">
                            <a href=\"#\" class=\"read-more-btn\">Lire plus</a>
                        </div>
                    </div>
                    <div class=\"card-body\">
                        <span class=\"tag tag-tech\">Technologie</span>
                        <h4>How to stay fresh ?</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit...</p>
                        <div class=\"user\">
                            <img src=\"assets/images/blog/blog-author-2.jpg\" alt=\"image utilisateur\">
                            <div class=\"user-info\">
                                <h5>Bah Mamadou</h5>
                                <small>4h ago</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"card wow animate__animated animate__fadeInUp animate__delay-0_6s\">
                    <div class=\"card-imag\">
                        <img src=\"assets/images/blog/blog-2.jpg\" alt=\"blog image\">
                        <div class=\"image-overlay\">
                            <a href=\"#\" class=\"read-more-btn\">Lire plus</a>
                        </div>
                    </div>
                    <div class=\"card-body\">
                        <span class=\"tag tag-tech\">Technologie</span>
                        <h4>How to stay fresh ?</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit...</p>
                        <div class=\"user\">
                            <img src=\"assets/images/blog/blog-author-3.jpg\" alt=\"image utilisateur\">
                            <div class=\"user-info\">
                                <h5>Bah Mamadou</h5>
                                <small>4h ago</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"card wow animate__animated animate__fadeInUp animate__delay-0_8s\">
                    <div class=\"card-imag\">
                        <img src=\"assets/images/blog/blog-3.jpg\" alt=\"blog image\">
                        <div class=\"image-overlay\">
                            <a href=\"#\" class=\"read-more-btn\">Lire plus</a>
                        </div>
                    </div>
                    <div class=\"card-body\">
                        <span class=\"tag tag-tech\">Technologie</span>
                        <h4>How to stay fresh ?</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit...</p>
                        <div class=\"user\">
                            <img src=\"assets/images/blog/blog-author-4.jpg\" alt=\"image utilisateur\">
                            <div class=\"user-info\">
                                <h5>Bah Mamadou</h5>
                                <small>4h ago</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"card wow animate__animated animate__fadeInUp animate__delay-1s\">
                    <div class=\"card-imag\">
                        <img src=\"assets/images/blog/blog-4.jpg\" alt=\"blog image\">
                        <div class=\"image-overlay\">
                            <a href=\"#\" class=\"read-more-btn\">Lire plus</a>
                        </div>
                    </div>
                    <div class=\"card-body\">
                        <span class=\"tag tag-tech\">Technologie</span>
                        <h4>How to stay fresh ?</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit...</p>
                        <div class=\"user\">
                            <img src=\"assets/images/blog/blog-author-2.jpg\" alt=\"image utilisateur\">
                            <div class=\"user-info\">
                                <h5>Bah Mamadou</h5>
                                <small>4h ago</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class=\"gallery\" id=\"gallery\">
            <h1 class=\"heading\">Notre Galérie</h1>
            <p class=\"paragraph\">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi rerum nobis ipsa
                reiciendis consequuntur
                fugiat voluptate</p>

            <div class=\"gallery-grid\">
                <a data-fancybox=\"gallery\" href=\"https://lipsum.app/id/60/1200x800\">
                    <img src=\"https://lipsum.app/id/60/400x300\" alt=\"Image 1\">
                </a>
                <a data-fancybox=\"gallery\" href=\"https://lipsum.app/id/61/1200x800\">
                    <img src=\"https://lipsum.app/id/61/400x300\" alt=\"Image 2\">
                </a>
                <a data-fancybox=\"gallery\" href=\"https://lipsum.app/id/62/1200x800\">
                    <img src=\"https://lipsum.app/id/62/400x300\" alt=\"Image 3\">
                </a>
                <a data-fancybox=\"gallery\" href=\"https://lipsum.app/id/63/1200x800\">
                    <img src=\"https://lipsum.app/id/63/400x300\" alt=\"Image 4\">
                </a>
                <a data-fancybox=\"gallery\" href=\"https://lipsum.app/id/64/1200x800\">
                    <img src=\"https://lipsum.app/id/64/400x300\" alt=\"Image 5\">
                </a>
                <a data-fancybox=\"gallery\" href=\"https://lipsum.app/id/65/1200x800\">
                    <img src=\"https://lipsum.app/id/65/400x300\" alt=\"Image 6\">
                </a>
            </div>

        </section>
        <section class=\"team\" id=\"team\">
            <h1 class=\"heading wow animate__animated animate__fadeInUp animate__delay-0_5s\">Notre équipe</h1>
            <p class=\"paragraph wow animate__animated animate__fadeInUp animate__delay-0_7s\">Necessitatibus eius
                consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            <div class=\"container\">
                <div class=\"our-team wow animate__animated animate__fadeInUp animate__delay-1s\">
                    <div class=\"pic\">
                        <img src=\"assets/images/team/team-2.jpg\" alt=\"team\">
                    </div>
                    <h3 class=\"title\">Bah Mamadou Bhoye</h3>
                    <span class=\"post\">CEO</span>
                    <ul class=\"social\">
                        <li><a href=\"#\" class=\"fa-brands fa-linkedin\"></a></li>
                        <li><a href=\"#\" class=\"fa-brands fa-facebook\"></a></li>
                        <li><a href=\"#\" class=\"fa-brands fa-square-instagram\"></a></li>
                    </ul>
                </div>
                <div class=\"our-team wow animate__animated animate__fadeInUp animate__delay-1s\">
                    <div class=\"pic\">
                        <img src=\"assets/images/team/team-2.jpg\" alt=\"team\">
                    </div>
                    <h3 class=\"title\">Bah Mamadou Bhoye</h3>
                    <span class=\"post\">CEO</span>
                    <ul class=\"social\">
                        <li><a href=\"#\" class=\"fa-brands fa-linkedin\"></a></li>
                        <li><a href=\"#\" class=\"fa-brands fa-facebook\"></a></li>
                        <li><a href=\"#\" class=\"fa-brands fa-square-instagram\"></a></li>
                    </ul>
                </div>
                <div class=\"our-team wow animate__animated animate__fadeInUp animate__delay-1s\">
                    <div class=\"pic\">
                        <img src=\"assets/images/team/team-2.jpg\" alt=\"team\">
                    </div>
                    <h3 class=\"title\">Bah Mamadou Bhoye</h3>
                    <span class=\"post\">CEO</span>
                    <ul class=\"social\">
                        <li><a href=\"#\" class=\"fa-brands fa-linkedin\"></a></li>
                        <li><a href=\"#\" class=\"fa-brands fa-facebook\"></a></li>
                        <li><a href=\"#\" class=\"fa-brands fa-square-instagram\"></a></li>
                    </ul>
                </div>
                <div class=\"our-team wow animate__animated animate__fadeInUp animate__delay-1s\">
                    <div class=\"pic\">
                        <img src=\"assets/images/team/team-2.jpg\" alt=\"team\">
                    </div>
                    <h3 class=\"title\">Bah Mamadou Bhoye</h3>
                    <span class=\"post\">CEO</span>
                    <ul class=\"social\">
                        <li><a href=\"#\" class=\"fa-brands fa-linkedin\"></a></li>
                        <li><a href=\"#\" class=\"fa-brands fa-facebook\"></a></li>
                        <li><a href=\"#\" class=\"fa-brands fa-square-instagram\"></a></li>
                    </ul>
                </div>
            </div>
        </section>


    </main>
{% endblock %}
", "home/accueil.html.twig", "C:\\xampp\\htdocs\\santarts\\templates\\home\\accueil.html.twig");
    }
}
