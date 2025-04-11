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

/* home/contact.html.twig */
class __TwigTemplate_1b159869cd1677f4947c92180ea11343 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/contact.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/contact.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/contact.html.twig", 1);
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
        yield "
    <main class=\"main-container\">
        <section class=\"page-header\">
            <div class=\"container\">
                <h1 class=\"page-title\">Contactez-nous</h1>
                <!-- <p class=\"page-subtitle\">Une petite description ou un breadcrumb ici</p> -->
                <nav class=\"breadcrumb\">
                    <ul>
                        <li class=\"breadcrumb-item\">
                            <a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Accueil</a>
                        </li>
                        <li class=\"breadcrumb-item active\">
                            <a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        yield "\">Contact</a>
                        </li>
                        <!-- <li class=\"breadcrumb-item\">
                            Détails du Magasin
                        </li> -->
                    </ul>

                </nav>
            </div>
        </section>

        <!-- start contact section  -->
        <section class=\"contact\" id=\"contact\">
            <div class=\"section-title\">
                <h2 class=\"wow animate__animated animate__fadeInUp\">Contact</h2>
                <p class=\"wow animate__animated animate__fadeInUp\">
                    Contactez-nous pour toute demande, notre équipe vous répond dans les plus brefs délais.
                </p>
            </div>
            <div class=\"container\">
                <div class=\"contact-info\">
                    <div class=\"content\">
                        <div class=\"info-item wow animate__animated animate__fadeInUp\">
                            <i class=\"fa fa-map-marker-alt\"></i>
                            <div>
                                <h3>Addresse</h3>
                                <p>
                                    Nord foire cite marine villa nº4
                                </p>
                            </div>
                        </div>
                        <div class=\"info-item wow animate__animated animate__fadeInUp\">
                            <i class=\"fa fa-phone-alt\"></i>
                            <div>
                                <h3>Téléphone</h3>
                                <p>
                                    78 499 67 17 / 78 414 72 63
                                </p>
                            </div>
                        </div>
                        <div class=\"info-item wow animate__animated animate__fadeInUp\">
                            <i class=\"fa fa-envelope\"></i>
                            <div>
                                <h3>Email Us</h3>
                                <p>contact@santartsbusiness.com</p>
                            </div>
                        </div>
                        <iframe
                                src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus\"
                                frameborder=\"0\" style=\"border:0; width: 100%; height: 270px;\" allowfullscreen=\"\" loading=\"lazy\"
                                referrerpolicy=\"no-referrer-when-downgrade\"></iframe>
                    </div>
                </div>
                <div class=\"contact-form\">
                    ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 69, $this->source); })()), "flashes", ["success"], "method", false, false, false, 69));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 70
            yield "                        <div class=\"alert alert-success\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        yield "                    ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), 'form_start');
        yield "

                    <div class=\"form-row\">
                        <div class=\"form-group half-width wow animate__animated animate__fadeInUp\">
                            ";
        // line 76
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "name", [], "any", false, false, false, 76), 'label', ["label" => "Nom complet"]);
        yield "
                            ";
        // line 77
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "name", [], "any", false, false, false, 77), 'widget', ["attr" => ["id" => "name-field"]]);
        yield "
                            ";
        // line 78
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "name", [], "any", false, false, false, 78), 'errors');
        yield "
                        </div>

                        <div class=\"form-group half-width wow animate__animated animate__fadeInUp\">
                            ";
        // line 82
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "email", [], "any", false, false, false, 82), 'label', ["label" => "Email"]);
        yield "
                            ";
        // line 83
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "email", [], "any", false, false, false, 83), 'widget', ["attr" => ["id" => "email-field"]]);
        yield "
                            ";
        // line 84
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "email", [], "any", false, false, false, 84), 'errors');
        yield "
                        </div>
                    </div>

                    <div class=\"form-group wow animate__animated animate__fadeInUp\">
                        ";
        // line 89
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "subject", [], "any", false, false, false, 89), 'label', ["label" => "Sujet"]);
        yield "
                        ";
        // line 90
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "subject", [], "any", false, false, false, 90), 'widget', ["attr" => ["id" => "subject-field"]]);
        yield "
                        ";
        // line 91
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "subject", [], "any", false, false, false, 91), 'errors');
        yield "
                    </div>

                    <div class=\"form-group wow animate__animated animate__fadeInUp\">
                        ";
        // line 95
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "message", [], "any", false, false, false, 95), 'label', ["label" => "Message"]);
        yield "
                        ";
        // line 96
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "message", [], "any", false, false, false, 96), 'widget', ["attr" => ["id" => "message-field", "rows" => "15"]]);
        yield "
                        ";
        // line 97
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "message", [], "any", false, false, false, 97), 'errors');
        yield "
                    </div>

                    <div class=\"submit-btn wow animate__animated animate__fadeInUp\">
                        ";
        // line 101
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "envoyer", [], "any", false, false, false, 101), 'widget');
        yield "
                    </div>

                    ";
        // line 104
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), 'form_end');
        yield "
                </div>

            </div>
        </section>
        <!-- end contact section  -->
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
        return "home/contact.html.twig";
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
        return array (  238 => 104,  232 => 101,  225 => 97,  221 => 96,  217 => 95,  210 => 91,  206 => 90,  202 => 89,  194 => 84,  190 => 83,  186 => 82,  179 => 78,  175 => 77,  171 => 76,  163 => 72,  154 => 70,  150 => 69,  93 => 15,  87 => 12,  76 => 3,  63 => 2,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}

    <main class=\"main-container\">
        <section class=\"page-header\">
            <div class=\"container\">
                <h1 class=\"page-title\">Contactez-nous</h1>
                <!-- <p class=\"page-subtitle\">Une petite description ou un breadcrumb ici</p> -->
                <nav class=\"breadcrumb\">
                    <ul>
                        <li class=\"breadcrumb-item\">
                            <a href=\"{{ path('app_home') }}\">Accueil</a>
                        </li>
                        <li class=\"breadcrumb-item active\">
                            <a href=\"{{ path('app_contact') }}\">Contact</a>
                        </li>
                        <!-- <li class=\"breadcrumb-item\">
                            Détails du Magasin
                        </li> -->
                    </ul>

                </nav>
            </div>
        </section>

        <!-- start contact section  -->
        <section class=\"contact\" id=\"contact\">
            <div class=\"section-title\">
                <h2 class=\"wow animate__animated animate__fadeInUp\">Contact</h2>
                <p class=\"wow animate__animated animate__fadeInUp\">
                    Contactez-nous pour toute demande, notre équipe vous répond dans les plus brefs délais.
                </p>
            </div>
            <div class=\"container\">
                <div class=\"contact-info\">
                    <div class=\"content\">
                        <div class=\"info-item wow animate__animated animate__fadeInUp\">
                            <i class=\"fa fa-map-marker-alt\"></i>
                            <div>
                                <h3>Addresse</h3>
                                <p>
                                    Nord foire cite marine villa nº4
                                </p>
                            </div>
                        </div>
                        <div class=\"info-item wow animate__animated animate__fadeInUp\">
                            <i class=\"fa fa-phone-alt\"></i>
                            <div>
                                <h3>Téléphone</h3>
                                <p>
                                    78 499 67 17 / 78 414 72 63
                                </p>
                            </div>
                        </div>
                        <div class=\"info-item wow animate__animated animate__fadeInUp\">
                            <i class=\"fa fa-envelope\"></i>
                            <div>
                                <h3>Email Us</h3>
                                <p>contact@santartsbusiness.com</p>
                            </div>
                        </div>
                        <iframe
                                src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus\"
                                frameborder=\"0\" style=\"border:0; width: 100%; height: 270px;\" allowfullscreen=\"\" loading=\"lazy\"
                                referrerpolicy=\"no-referrer-when-downgrade\"></iframe>
                    </div>
                </div>
                <div class=\"contact-form\">
                    {% for message in app.flashes('success') %}
                        <div class=\"alert alert-success\">{{ message }}</div>
                    {% endfor %}
                    {{ form_start(form) }}

                    <div class=\"form-row\">
                        <div class=\"form-group half-width wow animate__animated animate__fadeInUp\">
                            {{ form_label(form.name, 'Nom complet') }}
                            {{ form_widget(form.name, {'attr': {'id': 'name-field'}}) }}
                            {{ form_errors(form.name) }}
                        </div>

                        <div class=\"form-group half-width wow animate__animated animate__fadeInUp\">
                            {{ form_label(form.email, 'Email') }}
                            {{ form_widget(form.email, {'attr': {'id': 'email-field'}}) }}
                            {{ form_errors(form.email) }}
                        </div>
                    </div>

                    <div class=\"form-group wow animate__animated animate__fadeInUp\">
                        {{ form_label(form.subject, 'Sujet') }}
                        {{ form_widget(form.subject, {'attr': {'id': 'subject-field'}}) }}
                        {{ form_errors(form.subject) }}
                    </div>

                    <div class=\"form-group wow animate__animated animate__fadeInUp\">
                        {{ form_label(form.message, 'Message') }}
                        {{ form_widget(form.message, {'attr': {'id': 'message-field', 'rows': '15'}}) }}
                        {{ form_errors(form.message) }}
                    </div>

                    <div class=\"submit-btn wow animate__animated animate__fadeInUp\">
                        {{ form_widget(form.envoyer) }}
                    </div>

                    {{ form_end(form) }}
                </div>

            </div>
        </section>
        <!-- end contact section  -->
    </main>

{% endblock %}", "home/contact.html.twig", "C:\\xampp\\htdocs\\santarts\\templates\\home\\contact.html.twig");
    }
}
