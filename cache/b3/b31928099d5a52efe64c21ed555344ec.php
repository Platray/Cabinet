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

/* services/listservice.twig */
class __TwigTemplate_5dfb11c2940af7e7dc96e0c08ddf8c2f extends Template
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
        $this->parent = $this->loadTemplate("base.twig", "services/listservice.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "    <title>Liste des Services</title>
";
        return; yield '';
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        yield "    <h1>Liste des Services</h1>

    <section id=\"boxes\" class=\"home-section paddingtop-120\">
        <div class=\"container\">
            <div class=\"row\">
                <a href=\"/createservice\" class=\"btn btn-primary\">Ajouter un service</a>
                ";
        // line 14
        if ((array_key_exists("services", $context) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["services"] ?? null)) > 0))) {
            // line 15
            yield "                    <div class=\"table-responsive\">
                        <table class=\"table table-bordered table-striped\">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nom du Service</th>
                                    <th>Description</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["services"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
                // line 27
                yield "                                    <tr>
                                        <td>";
                // line 28
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "service_id", [], "any", false, false, false, 28), "html", null, true);
                yield "</td>
                                        <td>";
                // line 29
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "title", [], "any", false, false, false, 29), "html", null, true);
                yield "</td>
                                        <td>";
                // line 30
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "description", [], "any", false, false, false, 30), "html", null, true);
                yield "</td>
                                        <td>
                                            <form method=\"post\" action=\"/editservice/";
                // line 32
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "service_id", [], "any", false, false, false, 32), "html", null, true);
                yield "\" style=\"display:inline;\">
                                                <button type=\"submit\" class=\"btn btn-primary\">Modifier</button>
                                            </form>
                                            <form method=\"post\" action=\"/deleteservice/";
                // line 35
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "service_id", [], "any", false, false, false, 35), "html", null, true);
                yield "\" style=\"display:inline;\">
                                                <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
                                            </form>
                                        </td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            yield "                            </tbody>
                        </table>
                    </div>
                ";
        } else {
            // line 45
            yield "                    <p>Aucun service disponible.</p>
                ";
        }
        // line 47
        yield "            </div>
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
        return "services/listservice.twig";
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
        return array (  132 => 47,  128 => 45,  122 => 41,  110 => 35,  104 => 32,  99 => 30,  95 => 29,  91 => 28,  88 => 27,  84 => 26,  71 => 15,  69 => 14,  61 => 8,  57 => 7,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.twig\" %}

{% block title %}
    <title>Liste des Services</title>
{% endblock %}

{% block body %}
    <h1>Liste des Services</h1>

    <section id=\"boxes\" class=\"home-section paddingtop-120\">
        <div class=\"container\">
            <div class=\"row\">
                <a href=\"/createservice\" class=\"btn btn-primary\">Ajouter un service</a>
                {% if services is defined and services|length > 0 %}
                    <div class=\"table-responsive\">
                        <table class=\"table table-bordered table-striped\">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nom du Service</th>
                                    <th>Description</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for service in services %}
                                    <tr>
                                        <td>{{ service.service_id  }}</td>
                                        <td>{{ service.title }}</td>
                                        <td>{{ service.description }}</td>
                                        <td>
                                            <form method=\"post\" action=\"/editservice/{{ service.service_id  }}\" style=\"display:inline;\">
                                                <button type=\"submit\" class=\"btn btn-primary\">Modifier</button>
                                            </form>
                                            <form method=\"post\" action=\"/deleteservice/{{ service.service_id  }}\" style=\"display:inline;\">
                                                <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
                                            </form>
                                        </td>
                                    </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    </div>
                {% else %}
                    <p>Aucun service disponible.</p>
                {% endif %}
            </div>
        </div>
    </section>
{% endblock %}
", "services/listservice.twig", "D:\\xampp\\htdocs\\Cabinet\\views\\services\\listservice.twig");
    }
}
