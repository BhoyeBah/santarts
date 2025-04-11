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

/* base.html.twig */
class __TwigTemplate_fe6a33cf2ea68e993d136ecf41ee8298 extends Template
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

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>

<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 6
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>

    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.compat.min.css\" rel=\"stylesheet\">
    <link rel=\"icon\" href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/santart.jpg"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css\"
          integrity=\"sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==\"
          crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css\" />
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css\" />
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css\" />
</head>

<body>
    <!-- header start-->
    <header class=\"header\">

        <div class=\"header-top\">
            <div class=\"info\">00221777215233|santartbusiness@gmail.com</div>
            <div class=\"social-icons\">
                <a href=\"#\" class=\"social-icon facebook\"><i class=\"fa-brands fa-facebook\"></i></a>
                <a href=\"#\" class=\"social-icon instagram\"><i class=\"fa-brands fa-square-instagram\"></i></a>
                <a href=\"#\" class=\"social-icon twitter\"><i class=\"fa-brands fa-twitter\"></i></a>
                <a href=\"#\" class=\"social-icon linkedin\"><i class=\"fa-brands fa-linkedin\"></i></a>
            </div>
        </div>
        <div class=\"header-nav\">

            <a href=\"/\">
                <img src=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/santart.png"), "html", null, true);
        yield "\" alt=\"\" width=\"100px\" height=\"100px\">
            </a>
            <nav class=\"navbar\">
                <ul>
                    <li><a href=\"/\">Accueil</a></li>
                    <li><a href=\"";
        // line 40
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_about");
        yield "\">A propos</a></li>
                    <li><a href=\"";
        // line 41
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product");
        yield "\">Produit</a></li>
                    <li><a href=\"";
        // line 42
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event");
        yield "\">Evenement</a></li>
                    <li><a href=\"";
        // line 43
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_blog");
        yield "\">Blog</a></li>
                    <li><a href=\"";
        // line 44
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_gallery");
        yield "\">Gallery</a></li>
                    <li><a href=\"";
        // line 45
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        yield "\">Contact</a></li>
                </ul>
            </nav>
            <div class=\"navbar-icons\">
                <div class=\"cart\">
                    <a href=\"#\" class=\"fas fa-shopping-cart\"></a>
                    <span>0</span>
                </div>
            </div>
            <div class=\"menu-bars\">
                <span id=\"menu-toggle\" class=\"fas fa-bars\"></span>
            </div>

        </div>

    </header>
    <!-- header end-->

    ";
        // line 63
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 64
        yield "

    <!-- footer start  -->
    <footer class=\"footer\">
        <div class=\"footer-container\">
            <div class=\"footer-box\">
                <img src=\"";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/santart.png"), "html", null, true);
        yield "\" alt=\"santartbusiness\" class=\"footer-logo\">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    Numquam non hic atque corporis soluta quis quibusdam delectus voluptate aliquid.
                </p>
            </div>
            <div class=\"footer-box\">
                <h3 class=\"footer-title\">Liens rapides</h3>
                <ul>
                    <li>
                        <a href=\"#\" class=\"btn-link\">Accueil</a>
                    </li>
                    <li>
                        <a href=\"#\" class=\"btn-link\">À propos</a>
                    </li>
                    <li>
                        <a href=\"#\" class=\"btn-link\">Produits</a>
                    </li>
                    <li>
                        <a href=\"#\" class=\"btn-link\">Événements</a>
                    </li>
                    <li>
                        <a href=\"#\" class=\"btn-link\">Contact</a>
                    </li>
                </ul>
            </div>
            <div class=\"footer-box\">
                <h3 class=\"footer-title\">Newsletter</h3>
                <p>Abonnez-vous pour recevoir nos dernières actualités et offres spéciales.</p>
                <form action=\"#\" class=\"newsletter-form\">
                    <div class=\"input-group mb-3\">
                        <input type=\"email\" class=\"form-control\" placeholder=\"Votre email\" required
                            aria-label=\"Votre email\" aria-describedby=\"email\">
                        <span class=\"input-group-text\" id=\"email\">
                            <i class=\"fa fa-paper-plane\"></i>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <div class=\"footer-bottom\">
            <div class=\"left\">
                <p>
                    &copy; 2025 Santart'Art-Business, Tout droits réservés.
                </p>
            </div>
            <div class=\"right\">
                <p>
                    Design by Bhoye
                </p>
            </div>
        </div>
    </footer>
    <!-- footer end  -->


    <script src=\"";
        // line 125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/main.js"), "html", null, true);
        yield "\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js\"></script>
    <script>
        Fancybox.bind('[data-fancybox=\"gallery\"]', {
            // Options pour les fonctionnalités de Fancybox
            loop: true, // Permet de revenir au début lorsque vous atteignez la dernière image
            arrows: true, // Affiche les flèches de navigation
            toolbar: true, // Affiche la barre d'outils
            infinite: true, // Permet à la galerie de boucler indéfiniment
            Thumbs: {
                autoStart: true, // Démarre les vignettes
            },
        });
    </script>

</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 6
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

        yield "Sant'Art-Business";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 63
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.html.twig";
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
        return array (  265 => 63,  242 => 6,  212 => 125,  154 => 70,  146 => 64,  144 => 63,  123 => 45,  119 => 44,  115 => 43,  111 => 42,  107 => 41,  103 => 40,  95 => 35,  67 => 10,  63 => 9,  57 => 6,  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>

<head>
    <meta charset=\"UTF-8\">
    <title>{% block title %}Sant'Art-Business{% endblock %}</title>

    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.compat.min.css\" rel=\"stylesheet\">
    <link rel=\"icon\" href=\"{{ asset('assets/images/santart.jpg') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/style.css') }}\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css\"
          integrity=\"sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==\"
          crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css\" />
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css\" />
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css\" />
</head>

<body>
    <!-- header start-->
    <header class=\"header\">

        <div class=\"header-top\">
            <div class=\"info\">00221777215233|santartbusiness@gmail.com</div>
            <div class=\"social-icons\">
                <a href=\"#\" class=\"social-icon facebook\"><i class=\"fa-brands fa-facebook\"></i></a>
                <a href=\"#\" class=\"social-icon instagram\"><i class=\"fa-brands fa-square-instagram\"></i></a>
                <a href=\"#\" class=\"social-icon twitter\"><i class=\"fa-brands fa-twitter\"></i></a>
                <a href=\"#\" class=\"social-icon linkedin\"><i class=\"fa-brands fa-linkedin\"></i></a>
            </div>
        </div>
        <div class=\"header-nav\">

            <a href=\"/\">
                <img src=\"{{ asset('assets/images/santart.png')}}\" alt=\"\" width=\"100px\" height=\"100px\">
            </a>
            <nav class=\"navbar\">
                <ul>
                    <li><a href=\"/\">Accueil</a></li>
                    <li><a href=\"{{ path('app_about') }}\">A propos</a></li>
                    <li><a href=\"{{ path('app_product') }}\">Produit</a></li>
                    <li><a href=\"{{ path('app_event') }}\">Evenement</a></li>
                    <li><a href=\"{{ path('app_blog') }}\">Blog</a></li>
                    <li><a href=\"{{ path('app_gallery') }}\">Gallery</a></li>
                    <li><a href=\"{{ path('app_contact') }}\">Contact</a></li>
                </ul>
            </nav>
            <div class=\"navbar-icons\">
                <div class=\"cart\">
                    <a href=\"#\" class=\"fas fa-shopping-cart\"></a>
                    <span>0</span>
                </div>
            </div>
            <div class=\"menu-bars\">
                <span id=\"menu-toggle\" class=\"fas fa-bars\"></span>
            </div>

        </div>

    </header>
    <!-- header end-->

    {% block body %}{% endblock %}


    <!-- footer start  -->
    <footer class=\"footer\">
        <div class=\"footer-container\">
            <div class=\"footer-box\">
                <img src=\"{{ asset('assets/images/santart.png')}}\" alt=\"santartbusiness\" class=\"footer-logo\">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    Numquam non hic atque corporis soluta quis quibusdam delectus voluptate aliquid.
                </p>
            </div>
            <div class=\"footer-box\">
                <h3 class=\"footer-title\">Liens rapides</h3>
                <ul>
                    <li>
                        <a href=\"#\" class=\"btn-link\">Accueil</a>
                    </li>
                    <li>
                        <a href=\"#\" class=\"btn-link\">À propos</a>
                    </li>
                    <li>
                        <a href=\"#\" class=\"btn-link\">Produits</a>
                    </li>
                    <li>
                        <a href=\"#\" class=\"btn-link\">Événements</a>
                    </li>
                    <li>
                        <a href=\"#\" class=\"btn-link\">Contact</a>
                    </li>
                </ul>
            </div>
            <div class=\"footer-box\">
                <h3 class=\"footer-title\">Newsletter</h3>
                <p>Abonnez-vous pour recevoir nos dernières actualités et offres spéciales.</p>
                <form action=\"#\" class=\"newsletter-form\">
                    <div class=\"input-group mb-3\">
                        <input type=\"email\" class=\"form-control\" placeholder=\"Votre email\" required
                            aria-label=\"Votre email\" aria-describedby=\"email\">
                        <span class=\"input-group-text\" id=\"email\">
                            <i class=\"fa fa-paper-plane\"></i>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <div class=\"footer-bottom\">
            <div class=\"left\">
                <p>
                    &copy; 2025 Santart'Art-Business, Tout droits réservés.
                </p>
            </div>
            <div class=\"right\">
                <p>
                    Design by Bhoye
                </p>
            </div>
        </div>
    </footer>
    <!-- footer end  -->


    <script src=\"{{ asset('assets/js/main.js')}}\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js\"></script>
    <script>
        Fancybox.bind('[data-fancybox=\"gallery\"]', {
            // Options pour les fonctionnalités de Fancybox
            loop: true, // Permet de revenir au début lorsque vous atteignez la dernière image
            arrows: true, // Affiche les flèches de navigation
            toolbar: true, // Affiche la barre d'outils
            infinite: true, // Permet à la galerie de boucler indéfiniment
            Thumbs: {
                autoStart: true, // Démarre les vignettes
            },
        });
    </script>

</body>

</html>", "base.html.twig", "C:\\xampp\\htdocs\\santarts\\templates\\base.html.twig");
    }
}
