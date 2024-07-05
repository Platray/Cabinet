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

/* booking/listbooking.twig */
class __TwigTemplate_7524099d149c2c755fef241feed64607 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
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
        $this->parent = $this->loadTemplate("base.twig", "booking/listbooking.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        yield "<h1>Liste des Réservations</h1>

";
        // line 6
        if ((array_key_exists("bookings", $context) &&  !Twig\Extension\CoreExtension::testEmpty(($context["bookings"] ?? null)))) {
            // line 7
            yield "    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom du Patient</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["bookings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["booking"]) {
                // line 18
                yield "                <tr>
                    <td>";
                // line 19
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "id", [], "any", false, false, false, 19), "html", null, true);
                yield "</td>
                    <td>";
                // line 20
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "patient_name", [], "any", false, false, false, 20), "html", null, true);
                yield "</td>
                    <td>";
                // line 21
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "date", [], "any", false, false, false, 21), "html", null, true);
                yield "</td>
                    <td>
                        <form method=\"post\" action=\"/deleteBooking/";
                // line 23
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "id", [], "any", false, false, false, 23), "html", null, true);
                yield "\" style=\"display:inline;\">
                            <button type=\"submit\">Supprimer</button>
                        </form>
                        <form method=\"post\" action=\"/updateBooking/";
                // line 26
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "id", [], "any", false, false, false, 26), "html", null, true);
                yield "\" style=\"display:inline;\">
                            <input type=\"text\" name=\"date\" value=\"";
                // line 27
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "date", [], "any", false, false, false, 27), "html", null, true);
                yield "\">
                            <button type=\"submit\">Modifier</button>
                        </form>
                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['booking'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            yield "        </tbody>
    </table>
";
        } else {
            // line 36
            yield "    <p>Aucune réservation disponible.</p>
";
        }
        // line 38
        yield "
";
        // line 39
        if (array_key_exists("message", $context)) {
            // line 40
            yield "    <p>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["message"] ?? null), "html", null, true);
            yield "</p>
";
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "booking/listbooking.twig";
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
        return array (  125 => 40,  123 => 39,  120 => 38,  116 => 36,  111 => 33,  99 => 27,  95 => 26,  89 => 23,  84 => 21,  80 => 20,  76 => 19,  73 => 18,  69 => 17,  57 => 7,  55 => 6,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.twig\" %}

{% block content %}
<h1>Liste des Réservations</h1>

{% if bookings is defined and bookings is not empty %}
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom du Patient</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            {% for booking in bookings %}
                <tr>
                    <td>{{ booking.id }}</td>
                    <td>{{ booking.patient_name }}</td>
                    <td>{{ booking.date }}</td>
                    <td>
                        <form method=\"post\" action=\"/deleteBooking/{{ booking.id }}\" style=\"display:inline;\">
                            <button type=\"submit\">Supprimer</button>
                        </form>
                        <form method=\"post\" action=\"/updateBooking/{{ booking.id }}\" style=\"display:inline;\">
                            <input type=\"text\" name=\"date\" value=\"{{ booking.date }}\">
                            <button type=\"submit\">Modifier</button>
                        </form>
                    </td>
                </tr>
            {% endfor %}
        </tbody>
    </table>
{% else %}
    <p>Aucune réservation disponible.</p>
{% endif %}

{% if message is defined %}
    <p>{{ message }}</p>
{% endif %}
{% endblock %}
", "booking/listbooking.twig", "D:\\xampp\\htdocs\\Cabinet\\views\\booking\\listbooking.twig");
    }
}
