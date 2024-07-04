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

/* login.twig */
class __TwigTemplate_786d15f5fe85104badeb4f6e67354470 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.twig", "login.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "\t<head>
\t\t<title>Page de Connexion</title>

\t\t<link rel=\"stylesheet\" href=\"https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
        
\t</head>
";
        return; yield '';
    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        yield "
<!-- Section: intro -->
    <section id=\"intro\" class=\"intro\">
\t\t<div class=\"intro-content\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<div class=\"form-wrapper\">
\t\t\t\t\t\t\t<div class=\"wow fadeInRight\" data-wow-duration=\"2s\" data-wow-delay=\"0.2s\">

\t\t\t\t\t\t\t\t<div class=\"panel panel-skin\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t\t<h3 class=\"panel-title\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-pencil-square-o\"></span>
\t\t\t\t\t\t\t\t\t\t\tIdentifiez-vous pour prendre rendez-vous !
\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">
                                    ";
        // line 29
        if (($context["error"] ?? null)) {
            // line 30
            yield "                                        <p style=\"color: red;\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["error"] ?? null), "html", null, true);
            yield "</p>
                                    ";
        }
        // line 32
        yield "\t\t\t\t\t\t\t\t\t\t<form method=\"post\" action=\"/login\" role=\"form\" class=\"lead\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row d-flex-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-6 col-sm-6 col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Votre mail</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"email\" name=\"email\" id=\"email\" class=\"form-control input-md\" required>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row d-flex-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-6 col-sm-6 col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Votre mot de passe</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"password\" name=\"password\" id=\"password\" class=\"form-control input-md\" required>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>

                                            
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row d-flex-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-skin btn-lg flex-right\" style=\"margin-left: 10px;\"> Connexion</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
                                            <p class=\"lead-footer\">Pas encore inscrit ?
                                                <div class=\"row d-flex-center\">
                                                    <button type=\"submit\" class=\"btn btn-skin btn-lg flex-right\" onclick=\"window.location.href='/register'\">
                                                    Inscription
                                                    </button>
                                                </div>
                                            </p>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 63
        if (($context["error_message"] ?? null)) {
            // line 64
            yield "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row d-flex-center lead-footer\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"error-message\">";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["error_message"] ?? null), "html", null, true);
            yield "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 71
        yield "\t\t\t\t\t\t\t\t\t\t\t<p class=\"lead-footer\"></p>
\t\t\t\t\t\t\t\t\t\t</form>


\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t</div>\t\t
\t\t\t</div>
\t\t</div>\t\t
    </section>
\t
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "login.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  141 => 71,  134 => 67,  129 => 64,  127 => 63,  94 => 32,  88 => 30,  86 => 29,  66 => 11,  62 => 10,  48 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.twig' %}
{% block title %}
\t<head>
\t\t<title>Page de Connexion</title>

\t\t<link rel=\"stylesheet\" href=\"https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
        
\t</head>
{% endblock %}
{% block body %}

<!-- Section: intro -->
    <section id=\"intro\" class=\"intro\">
\t\t<div class=\"intro-content\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<div class=\"form-wrapper\">
\t\t\t\t\t\t\t<div class=\"wow fadeInRight\" data-wow-duration=\"2s\" data-wow-delay=\"0.2s\">

\t\t\t\t\t\t\t\t<div class=\"panel panel-skin\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t\t<h3 class=\"panel-title\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-pencil-square-o\"></span>
\t\t\t\t\t\t\t\t\t\t\tIdentifiez-vous pour prendre rendez-vous !
\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">
                                    {% if error %}
                                        <p style=\"color: red;\">{{ error }}</p>
                                    {% endif %}
\t\t\t\t\t\t\t\t\t\t<form method=\"post\" action=\"/login\" role=\"form\" class=\"lead\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row d-flex-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-6 col-sm-6 col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Votre mail</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"email\" name=\"email\" id=\"email\" class=\"form-control input-md\" required>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row d-flex-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-6 col-sm-6 col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Votre mot de passe</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"password\" name=\"password\" id=\"password\" class=\"form-control input-md\" required>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>

                                            
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row d-flex-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-skin btn-lg flex-right\" style=\"margin-left: 10px;\"> Connexion</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
                                            <p class=\"lead-footer\">Pas encore inscrit ?
                                                <div class=\"row d-flex-center\">
                                                    <button type=\"submit\" class=\"btn btn-skin btn-lg flex-right\" onclick=\"window.location.href='/register'\">
                                                    Inscription
                                                    </button>
                                                </div>
                                            </p>
\t\t\t\t\t\t\t\t\t\t\t{% if error_message %}
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row d-flex-center lead-footer\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"error-message\">{{ error_message }}</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t<p class=\"lead-footer\"></p>
\t\t\t\t\t\t\t\t\t\t</form>


\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t</div>\t\t
\t\t\t</div>
\t\t</div>\t\t
    </section>
\t
{% endblock %}

                        ", "login.twig", "D:\\xampp\\htdocs\\Cabinet\\views\\login.twig");
    }
}
