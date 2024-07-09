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

/* services/createservice.twig */
class __TwigTemplate_2472440b5c57b63ada7890169c27faa8 extends Template
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
        $this->parent = $this->loadTemplate("base.twig", "services/createservice.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "    <title>Créer un Service</title>
";
        return; yield '';
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "    <h1>Créer un Service</h1>

    <section id=\"boxes\" class=\"home-section paddingtop-120\">
        <div class=\"container\">
            <div class=\"row\">
                <form method=\"post\" action=\"/createservice\">
                    <div class=\"form-group\">
                        <label for=\"title\">Nom du Service:</label>
                        <input type=\"text\" id=\"title\" name=\"title\" class=\"form-control\" required>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"description\">Description:</label>
                        <textarea id=\"description\" name=\"description\" class=\"form-control\" required></textarea>
                    </div>
                    <button type=\"submit\" class=\"btn btn-primary\">Créer</button>
                </form>
            </div>
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
        return "services/createservice.twig";
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
        return array (  57 => 7,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.twig\" %}

{% block title %}
    <title>Créer un Service</title>
{% endblock %}

{% block body %}
    <h1>Créer un Service</h1>

    <section id=\"boxes\" class=\"home-section paddingtop-120\">
        <div class=\"container\">
            <div class=\"row\">
                <form method=\"post\" action=\"/createservice\">
                    <div class=\"form-group\">
                        <label for=\"title\">Nom du Service:</label>
                        <input type=\"text\" id=\"title\" name=\"title\" class=\"form-control\" required>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"description\">Description:</label>
                        <textarea id=\"description\" name=\"description\" class=\"form-control\" required></textarea>
                    </div>
                    <button type=\"submit\" class=\"btn btn-primary\">Créer</button>
                </form>
            </div>
        </div>
    </section>
{% endblock %}
", "services/createservice.twig", "D:\\xampp\\htdocs\\Cabinet\\views\\services\\createservice.twig");
    }
}
