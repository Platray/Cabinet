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

/* services/editservice.twig */
class __TwigTemplate_bfb4820e0508697ad0adf6265bc68270 extends Template
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
        $this->parent = $this->loadTemplate("base.twig", "services/editservice.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "    <title>Modifier le Service</title>
";
        return; yield '';
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        yield "    <h1>Modifier le Service</h1>

    <section id=\"intro\" class=\"intro\">
        <div class=\"intro-content\">
            <div class=\"container\">
                <div class=\"wow fadeInDown\" data-wow-offset=\"0\" data-wow-delay=\"0.1s\">
                    <h2 class=\"h-ultra\">Modifier le service</h2>
                </div>

                <div class=\"login-wrap\">
                    <div class=\"login-html\">
                        <div class=\"login-form\">
                            <form id=\"serviceForm\" method=\"post\" action=\"/saveservice/";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["service"] ?? null), "service_id", [], "any", false, false, false, 20), "html", null, true);
        yield "\">
                                <label>ID du Service</label>
                                <input id=\"id\" name=\"id\" type=\"text\" class=\"input\" value=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["service"] ?? null), "service_id", [], "any", false, false, false, 22), "html", null, true);
        yield "\" readonly>
                                
                                <label>Nom du Service</label>
                                <input id=\"title\" name=\"title\" type=\"text\" class=\"input\" value=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["service"] ?? null), "title", [], "any", false, false, false, 25), "html", null, true);
        yield "\" required>
                                                        
                                <label>Description du Service</label>
                                <textarea id=\"description\" name=\"description\" class=\"input\" required>";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["service"] ?? null), "description", [], "any", false, false, false, 28), "html", null, true);
        yield "</textarea>
                                                        
                                
                                <input type=\"submit\" class=\"button\" value=\"Enregistrer\">
                            </form>
                        </div>
                    </div>
                </div>
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
        return "services/editservice.twig";
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
        return array (  92 => 28,  86 => 25,  80 => 22,  75 => 20,  61 => 8,  57 => 7,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.twig\" %}

{% block title %}
    <title>Modifier le Service</title>
{% endblock %}

{% block body %}
    <h1>Modifier le Service</h1>

    <section id=\"intro\" class=\"intro\">
        <div class=\"intro-content\">
            <div class=\"container\">
                <div class=\"wow fadeInDown\" data-wow-offset=\"0\" data-wow-delay=\"0.1s\">
                    <h2 class=\"h-ultra\">Modifier le service</h2>
                </div>

                <div class=\"login-wrap\">
                    <div class=\"login-html\">
                        <div class=\"login-form\">
                            <form id=\"serviceForm\" method=\"post\" action=\"/saveservice/{{ service.service_id }}\">
                                <label>ID du Service</label>
                                <input id=\"id\" name=\"id\" type=\"text\" class=\"input\" value=\"{{ service.service_id }}\" readonly>
                                
                                <label>Nom du Service</label>
                                <input id=\"title\" name=\"title\" type=\"text\" class=\"input\" value=\"{{ service.title }}\" required>
                                                        
                                <label>Description du Service</label>
                                <textarea id=\"description\" name=\"description\" class=\"input\" required>{{ service.description }}</textarea>
                                                        
                                
                                <input type=\"submit\" class=\"button\" value=\"Enregistrer\">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
{% endblock %}
", "services/editservice.twig", "D:\\xampp\\htdocs\\Cabinet\\views\\services\\editservice.twig");
    }
}
