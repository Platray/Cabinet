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

/* bookings/listbooking.twig */
class __TwigTemplate_076b56d8e90f8cdec36981a0a009b5b0 extends Template
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
        $this->parent = $this->loadTemplate("base.twig", "bookings/listbooking.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "    <title>Liste des réservations</title>
";
        return; yield '';
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        yield "    <h1>Liste des Réservations</h1>

    <section id=\"boxes\" class=\"home-section paddingtop-120\">
        <div class=\"container\">
            <div class=\"row\">
                ";
        // line 13
        if ((array_key_exists("bookings", $context) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["bookings"] ?? null)) > 0))) {
            // line 14
            yield "                    <div class=\"table-responsive\">
                        <table class=\"table table-bordered table-striped\">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Mail du Patient</th>
                                    <th>Date</th>
                                    <th>Service</th> <!-- Nouvelle colonne -->
                                    <th>Actions</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["bookings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["booking"]) {
                // line 28
                yield "                                    <tr>
                                        <td>";
                // line 29
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "id", [], "any", false, false, false, 29), "html", null, true);
                yield "</td>
                                        <td>";
                // line 30
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "book_email", [], "any", false, false, false, 30), "html", null, true);
                yield "</td>
                                        <td>";
                // line 31
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "date_book", [], "any", false, false, false, 31), "html", null, true);
                yield "</td>
                                        <td>";
                // line 32
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "service_title", [], "any", false, false, false, 32), "html", null, true);
                yield "</td> <!-- Affichage du titre du service -->
                                        <td>
                                            <form method=\"post\" action=\"../editbooking/";
                // line 34
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "id", [], "any", false, false, false, 34), "html", null, true);
                yield "\" style=\"display:inline;\">
                                                <button type=\"submit\" class=\"btn btn-primary\">Modifier</button>
                                            </form>
                                            <form method=\"post\" action=\"/deleteBooking/";
                // line 37
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "id", [], "any", false, false, false, 37), "html", null, true);
                yield "\" style=\"display:inline;\">
                                                <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
                                            </form>
                                        </td>
                                        <td>
                                            ";
                // line 42
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "isConfirm", [], "any", false, false, false, 42) == 1)) {
                    // line 43
                    yield "                                                Confirmé
                                            ";
                } else {
                    // line 45
                    yield "                                                Non confirmé
                                            ";
                }
                // line 47
                yield "                                        </td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['booking'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            yield "                            </tbody>
                        </table>
                    </div>
                ";
        } else {
            // line 54
            yield "                    <p>Aucune réservation disponible.</p>
                ";
        }
        // line 56
        yield "
                ";
        // line 57
        if (array_key_exists("success_message", $context)) {
            // line 58
            yield "                    <p style=\"color: green;\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["success_message"] ?? null), "html", null, true);
            yield "</p>
                ";
        } elseif (        // line 59
array_key_exists("error_message", $context)) {
            // line 60
            yield "                    <p style=\"color: red;\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["error_message"] ?? null), "html", null, true);
            yield "</p>
                ";
        }
        // line 62
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
        return "bookings/listbooking.twig";
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
        return array (  169 => 62,  163 => 60,  161 => 59,  156 => 58,  154 => 57,  151 => 56,  147 => 54,  141 => 50,  133 => 47,  129 => 45,  125 => 43,  123 => 42,  115 => 37,  109 => 34,  104 => 32,  100 => 31,  96 => 30,  92 => 29,  89 => 28,  85 => 27,  70 => 14,  68 => 13,  61 => 8,  57 => 7,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.twig\" %}

{% block title %}
    <title>Liste des réservations</title>
{% endblock %}

{% block body %}
    <h1>Liste des Réservations</h1>

    <section id=\"boxes\" class=\"home-section paddingtop-120\">
        <div class=\"container\">
            <div class=\"row\">
                {% if bookings is defined and bookings|length > 0 %}
                    <div class=\"table-responsive\">
                        <table class=\"table table-bordered table-striped\">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Mail du Patient</th>
                                    <th>Date</th>
                                    <th>Service</th> <!-- Nouvelle colonne -->
                                    <th>Actions</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for booking in bookings %}
                                    <tr>
                                        <td>{{ booking.id }}</td>
                                        <td>{{ booking.book_email }}</td>
                                        <td>{{ booking.date_book }}</td>
                                        <td>{{ booking.service_title }}</td> <!-- Affichage du titre du service -->
                                        <td>
                                            <form method=\"post\" action=\"../editbooking/{{ booking.id }}\" style=\"display:inline;\">
                                                <button type=\"submit\" class=\"btn btn-primary\">Modifier</button>
                                            </form>
                                            <form method=\"post\" action=\"/deleteBooking/{{ booking.id }}\" style=\"display:inline;\">
                                                <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
                                            </form>
                                        </td>
                                        <td>
                                            {% if booking.isConfirm == 1 %}
                                                Confirmé
                                            {% else %}
                                                Non confirmé
                                            {% endif %}
                                        </td>
                                    </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    </div>
                {% else %}
                    <p>Aucune réservation disponible.</p>
                {% endif %}

                {% if success_message is defined %}
                    <p style=\"color: green;\">{{ success_message }}</p>
                {% elseif error_message is defined %}
                    <p style=\"color: red;\">{{ error_message }}</p>
                {% endif %}
            </div>
        </div>
    </section>
{% endblock %}
", "bookings/listbooking.twig", "D:\\xampp\\htdocs\\Cabinet\\views\\bookings\\listbooking.twig");
    }
}
