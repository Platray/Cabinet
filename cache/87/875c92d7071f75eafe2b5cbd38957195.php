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

/* services.twig */
class __TwigTemplate_ba6ecde57fbf85318efff89d6e10b216 extends Template
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
        $this->parent = $this->loadTemplate("base.twig", "services.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "    <title>Nos Services</title>
";
        return; yield '';
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        yield "<style>
    .card {
        display: flex;
        flex-direction: row;
        border: none;
        transition: transform 0.5s;
        margin-bottom: 20px;
    }

    .card-img-wrapper {
        flex: 0 0 200px; /* Largeur fixe pour l'image */
        height: 200px; /* Hauteur fixe pour l'image */
        overflow: hidden;
    }

    .card-img-left {
        width: 100%;
        height: 100%;
        object-fit: cover; /* Assure que l'image couvre toute la zone */
        transition: opacity 0.5s;
    }

    .card-body {
        flex: 1;
        padding: 20px;
        position: relative;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .card-title {
        font-size: 1.25rem;
        margin-bottom: 0.75rem;
    }

    .card-text {
        flex: 1;
        margin-bottom: 0;
    }

    .pagination {
        margin-top: 20px;
    }

    .pagination .page-item.active .page-link {
        background-color: #007bff;
        border-color: #007bff;
        color: white;
    }

    .pagination .page-link {
        color: #007bff;
    }

    .pagination .page-link:hover {
        color: #0056b3;
    }
</style>

<br><br><br><br><br>

<section id=\"services\" class=\"home-section paddingtop-80\">
    <div class=\"container\">

    <p><h3> Nos différents services proposé par Mr Dupont : </h3></p>
        ";
        // line 74
        if (($context["services"] ?? null)) {
            // line 75
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["services"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
                // line 76
                yield "                <div class=\"row mb-4\">
                    <div class=\"col-md-12\">
                        <div class=\"card d-flex flex-row\">
                            
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">";
                // line 81
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "title", [], "any", false, false, false, 81), "html", null, true);
                yield "</h5>
                                <p class=\"card-text\">";
                // line 82
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "description", [], "any", false, false, false, 82), "html", null, true);
                yield "</p>
                            </div>
                        </div>
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            yield "        ";
        } else {
            // line 89
            yield "            <div class=\"row\">
                <div class=\"col-md-12\">
                    <p>Aucun service disponible pour le moment.</p>
                </div>
            </div>
        ";
        }
        // line 95
        yield "        
        
    </div>
</section>

";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "services.twig";
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
        return array (  170 => 95,  162 => 89,  159 => 88,  147 => 82,  143 => 81,  136 => 76,  131 => 75,  129 => 74,  61 => 8,  57 => 7,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.twig' %}

{% block title %}
    <title>Nos Services</title>
{% endblock %}

{% block body %}
<style>
    .card {
        display: flex;
        flex-direction: row;
        border: none;
        transition: transform 0.5s;
        margin-bottom: 20px;
    }

    .card-img-wrapper {
        flex: 0 0 200px; /* Largeur fixe pour l'image */
        height: 200px; /* Hauteur fixe pour l'image */
        overflow: hidden;
    }

    .card-img-left {
        width: 100%;
        height: 100%;
        object-fit: cover; /* Assure que l'image couvre toute la zone */
        transition: opacity 0.5s;
    }

    .card-body {
        flex: 1;
        padding: 20px;
        position: relative;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .card-title {
        font-size: 1.25rem;
        margin-bottom: 0.75rem;
    }

    .card-text {
        flex: 1;
        margin-bottom: 0;
    }

    .pagination {
        margin-top: 20px;
    }

    .pagination .page-item.active .page-link {
        background-color: #007bff;
        border-color: #007bff;
        color: white;
    }

    .pagination .page-link {
        color: #007bff;
    }

    .pagination .page-link:hover {
        color: #0056b3;
    }
</style>

<br><br><br><br><br>

<section id=\"services\" class=\"home-section paddingtop-80\">
    <div class=\"container\">

    <p><h3> Nos différents services proposé par Mr Dupont : </h3></p>
        {% if services %}
            {% for service in services %}
                <div class=\"row mb-4\">
                    <div class=\"col-md-12\">
                        <div class=\"card d-flex flex-row\">
                            
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">{{ service.title }}</h5>
                                <p class=\"card-text\">{{ service.description }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            {% endfor %}
        {% else %}
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <p>Aucun service disponible pour le moment.</p>
                </div>
            </div>
        {% endif %}
        
        
    </div>
</section>

{% endblock %}
", "services.twig", "D:\\xampp\\htdocs\\Cabinet\\views\\services.twig");
    }
}
