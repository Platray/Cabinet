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

/* booking.twig */
class __TwigTemplate_0bc24fe849fdce799383cca501e7d206 extends Template
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
        $this->parent = $this->loadTemplate("base.twig", "booking.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "    <title>Ajouter une réservation</title>
";
        return; yield '';
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        yield "    <h1>Ajouter une Réservation</h1>

    <section id=\"add-booking-form\" class=\"home-section paddingtop-120\">
        <div class=\"container\">
            <div class=\"row\">
                <form method=\"post\" action=\"/booking\">
                    
                    <div class=\"form-group\">
                        <label for=\"book_date\">Date</label>
                        <input type=\"date\" class=\"form-control\" id=\"book_date\" name=\"book_date\" required>
                    </div>
                    
                    <div class=\"form-group\">
                        <label for=\"service_id\">Service</label>
                        <select class=\"form-control\" id=\"service_id\" name=\"service_id\" required>
                            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["services"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 24
            yield "                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "id", [], "any", false, false, false, 24), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "title", [], "any", false, false, false, 24), "html", null, true);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        yield "                        </select>
                    </div>
                    
                    <div class=\"form-group\">
                        <label for=\"book_time\">Heure</label>
                        <select class=\"form-control\" id=\"book_time\" name=\"book_time\" required>
                            ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(9, 18));
        foreach ($context['_seq'] as $context["_key"] => $context["hour"]) {
            // line 33
            yield "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable([0, 30]);
            foreach ($context['_seq'] as $context["_key"] => $context["minute"]) {
                // line 34
                yield "                                    ";
                $context["time"] = Twig\Extension\CoreExtension::sprintf("%02d:%02d", $context["hour"], $context["minute"]);
                // line 35
                yield "                                    ";
                if ((($context["time"] ?? null) != "18:30")) {
                    // line 36
                    yield "                                        <option value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["time"] ?? null), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["time"] ?? null), "html", null, true);
                    yield "</option>
                                    ";
                }
                // line 38
                yield "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['minute'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            yield "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hour'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        yield "                        </select>
                    </div>
                    
                    <button type=\"submit\" class=\"btn btn-primary\">Ajouter</button>
                </form>

                ";
        // line 46
        if (array_key_exists("error_message", $context)) {
            // line 47
            yield "                    <p style=\"color: red;\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["error_message"] ?? null), "html", null, true);
            yield "</p>
                ";
        }
        // line 49
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
        return "booking.twig";
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
        return array (  152 => 49,  146 => 47,  144 => 46,  136 => 40,  130 => 39,  124 => 38,  116 => 36,  113 => 35,  110 => 34,  105 => 33,  101 => 32,  93 => 26,  82 => 24,  78 => 23,  61 => 8,  57 => 7,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.twig\" %}

{% block title %}
    <title>Ajouter une réservation</title>
{% endblock %}

{% block body %}
    <h1>Ajouter une Réservation</h1>

    <section id=\"add-booking-form\" class=\"home-section paddingtop-120\">
        <div class=\"container\">
            <div class=\"row\">
                <form method=\"post\" action=\"/booking\">
                    
                    <div class=\"form-group\">
                        <label for=\"book_date\">Date</label>
                        <input type=\"date\" class=\"form-control\" id=\"book_date\" name=\"book_date\" required>
                    </div>
                    
                    <div class=\"form-group\">
                        <label for=\"service_id\">Service</label>
                        <select class=\"form-control\" id=\"service_id\" name=\"service_id\" required>
                            {% for service in services %}
                                <option value=\"{{ service.id }}\">{{ service.title }}</option>
                            {% endfor %}
                        </select>
                    </div>
                    
                    <div class=\"form-group\">
                        <label for=\"book_time\">Heure</label>
                        <select class=\"form-control\" id=\"book_time\" name=\"book_time\" required>
                            {% for hour in range(9, 18) %}
                                {% for minute in [0, 30] %}
                                    {% set time = \"%02d:%02d\" | format(hour, minute) %}
                                    {% if time != '18:30' %}
                                        <option value=\"{{ time }}\">{{ time }}</option>
                                    {% endif %}
                                {% endfor %}
                            {% endfor %}
                        </select>
                    </div>
                    
                    <button type=\"submit\" class=\"btn btn-primary\">Ajouter</button>
                </form>

                {% if error_message is defined %}
                    <p style=\"color: red;\">{{ error_message }}</p>
                {% endif %}
            </div>
        </div>
    </section>
{% endblock %}
", "booking.twig", "D:\\xampp\\htdocs\\Cabinet\\views\\booking.twig");
    }
}
