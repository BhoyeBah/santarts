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

/* home/blog.html.twig */
class __TwigTemplate_3f95c699100369f2b7bac585d8843083 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/blog.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/blog.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/blog.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
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

        // line 3
        yield "    <main class=\"main-container\">

        <section class=\"page-header\">
            <div class=\"container\">
                <h1 class=\"page-title\">Titre de la Page</h1>
                <p class=\"page-subtitle\">Une petite description ou un breadcrumb ici</p>
                <nav class=\"breadcrumb\">
                    <ul>
                        <li class=\"breadcrumb-item\">
                            <a href=\"index.html\">Accueil</a>
                        </li>
                        <li class=\"breadcrumb-item active\">
                            <a href=\"index.html\">About</a>
                        </li>
                        <!-- <li class=\"breadcrumb-item\">
                            Détails du Magasin
                        </li> -->
                    </ul>

                </nav>
            </div>
        </section>


        <section class=\"blog\" id=\"blog\">
            <h1 class=\"heading wow animate__animated animate__fadeInUp\">Latest from blog</h1>
            <p class=\"paragraph wow animate__animated animate__fadeInUp animate__delay-0_2s\">
                Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit <br>
                officia consequat duis.
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
        return "home/blog.html.twig";
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
        return array (  76 => 3,  63 => 2,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
    <main class=\"main-container\">

        <section class=\"page-header\">
            <div class=\"container\">
                <h1 class=\"page-title\">Titre de la Page</h1>
                <p class=\"page-subtitle\">Une petite description ou un breadcrumb ici</p>
                <nav class=\"breadcrumb\">
                    <ul>
                        <li class=\"breadcrumb-item\">
                            <a href=\"index.html\">Accueil</a>
                        </li>
                        <li class=\"breadcrumb-item active\">
                            <a href=\"index.html\">About</a>
                        </li>
                        <!-- <li class=\"breadcrumb-item\">
                            Détails du Magasin
                        </li> -->
                    </ul>

                </nav>
            </div>
        </section>


        <section class=\"blog\" id=\"blog\">
            <h1 class=\"heading wow animate__animated animate__fadeInUp\">Latest from blog</h1>
            <p class=\"paragraph wow animate__animated animate__fadeInUp animate__delay-0_2s\">
                Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit <br>
                officia consequat duis.
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
    </main>
{% endblock %}", "home/blog.html.twig", "C:\\xampp\\htdocs\\santarts\\templates\\home\\blog.html.twig");
    }
}
