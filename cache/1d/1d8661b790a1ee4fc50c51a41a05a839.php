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

/* hours/listhour.twig */
class __TwigTemplate_9423806ff5f4623b78002f8c1e19fcc0 extends Template
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
        $this->parent = $this->loadTemplate("base.twig", "hours/listhour.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "    <title>Liste des horaires</title>
";
        return; yield '';
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        yield "    <h1>Liste des Horaires</h1>

    <section id=\"boxes\" class=\"home-section paddingtop-120\">
        <div class=\"container\">
            <div class=\"row\">
                ";
        // line 13
        if ((array_key_exists("hours", $context) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["hours"] ?? null)) > 0))) {
            // line 14
            yield "                    <div class=\"table-responsive\">
                        <table class=\"table table-bordered table-striped\">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Jour</th>
                                    <th>Ouverture</th>
                                    <th>Fermeture</th>
                                    <th>Ouvert</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["hours"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["hour"]) {
                // line 28
                yield "                                    <tr>
                                        <td>";
                // line 29
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hour"], "id", [], "any", false, false, false, 29), "html", null, true);
                yield "</td>
                                        <td>";
                // line 30
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hour"], "day", [], "any", false, false, false, 30), "html", null, true);
                yield "</td>
                                        <td>";
                // line 31
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hour"], "open", [], "any", false, false, false, 31), "html", null, true);
                yield "</td>
                                        <td>";
                // line 32
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hour"], "close", [], "any", false, false, false, 32), "html", null, true);
                yield "</td>
                                        <td>";
                // line 33
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["hour"], "isOpen", [], "any", false, false, false, 33) == 1)) ? ("Oui") : ("Non"));
                yield "</td>
                                        <td>
                                            <form method=\"post\" action=\"/edithour/";
                // line 35
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hour"], "id", [], "any", false, false, false, 35), "html", null, true);
                yield "\" style=\"display:inline;\">
                                                <button type=\"submit\" class=\"btn btn-primary\">Modifier</button>
                                            </form>
                                        </td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hour'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            yield "                            </tbody>
                        </table>
                    </div>
                ";
        } else {
            // line 45
            yield "                    <p>Aucun horaire disponible.</p>
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
        return "hours/listhour.twig";
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
        return array (  135 => 47,  131 => 45,  125 => 41,  113 => 35,  108 => 33,  104 => 32,  100 => 31,  96 => 30,  92 => 29,  89 => 28,  85 => 27,  70 => 14,  68 => 13,  61 => 8,  57 => 7,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.twig\" %}

{% block title %}
    <title>Liste des horaires</title>
{% endblock %}

{% block body %}
    <h1>Liste des Horaires</h1>

    <section id=\"boxes\" class=\"home-section paddingtop-120\">
        <div class=\"container\">
            <div class=\"row\">
                {% if hours is defined and hours|length > 0 %}
                    <div class=\"table-responsive\">
                        <table class=\"table table-bordered table-striped\">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Jour</th>
                                    <th>Ouverture</th>
                                    <th>Fermeture</th>
                                    <th>Ouvert</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for hour in hours %}
                                    <tr>
                                        <td>{{ hour.id }}</td>
                                        <td>{{ hour.day }}</td>
                                        <td>{{ hour.open }}</td>
                                        <td>{{ hour.close }}</td>
                                        <td>{{ hour.isOpen == 1 ? 'Oui' : 'Non' }}</td>
                                        <td>
                                            <form method=\"post\" action=\"/edithour/{{ hour.id }}\" style=\"display:inline;\">
                                                <button type=\"submit\" class=\"btn btn-primary\">Modifier</button>
                                            </form>
                                        </td>
                                    </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    </div>
                {% else %}
                    <p>Aucun horaire disponible.</p>
                {% endif %}
            </div>
        </div>
    </section>
{% endblock %}
", "hours/listhour.twig", "D:\\xampp\\htdocs\\Cabinet\\views\\hours\\listhour.twig");
    }
}
