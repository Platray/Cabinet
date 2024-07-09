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

/* bookings/editbooking.twig */
class __TwigTemplate_a56eddee7502a139357a5390e5420d2f extends Template
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
        $this->parent = $this->loadTemplate("base.twig", "bookings/editbooking.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "    <title>Modifier Réservation</title>
";
        return; yield '';
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        yield "    <h1>Modifier Réservation</h1>

    <section id=\"intro\" class=\"intro\">
        <div class=\"intro-content\">
            <div class=\"container\">
                <div class=\"wow fadeInDown\" data-wow-offset=\"0\" data-wow-delay=\"0.1s\">
                    <h4 class=\"h-ultra\">Éditer votre rendez-vous</h4>
                </div>
                
                <div class=\"well well-trans\">
                    <div class=\"wow fadeInRight\" data-wow-delay=\"0.1s\">
                        <form method=\"post\" action=\"/savebooking/";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["booking"] ?? null), "id", [], "any", false, false, false, 19), "html", null, true);
        yield "\">
                            <input type=\"text\" name=\"id\" value=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["booking"] ?? null), "id", [], "any", false, false, false, 20), "html", null, true);
        yield "\" readonly>
                            <label>Mail du Patient:</label>
                            <input type=\"text\" name=\"mail\" value=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["booking"] ?? null), "book_email", [], "any", false, false, false, 22), "html", null, true);
        yield "\" readonly>

                            <label>Date:</label>
                            <input type=\"date\" name=\"date\" value=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["booking"] ?? null), "date_book", [], "any", false, false, false, 25), "Y-m-d"), "html", null, true);
        yield "\" >

                            <label>Heure:</label>
                            <input type=\"time\" name=\"time\" value=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["booking"] ?? null), "date_book", [], "any", false, false, false, 28), "H:i"), "html", null, true);
        yield "\" >

                            <label>Confirmation:</label>
                            <select name=\"isConfirm\">
                                <option value=\"1\" ";
        // line 32
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["booking"] ?? null), "isConfirm", [], "any", false, false, false, 32) == 1)) {
            yield " selected ";
        }
        yield ">Confirmé</option>
                                <option value=\"0\" ";
        // line 33
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["booking"] ?? null), "isConfirm", [], "any", false, false, false, 33) == 0)) {
            yield " selected ";
        }
        yield ">Non confirmé</option>
                            </select>

                            <button type=\"submit\">Enregistrer</button>
                        </form>
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
        return "bookings/editbooking.twig";
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
        return array (  108 => 33,  102 => 32,  95 => 28,  89 => 25,  83 => 22,  78 => 20,  74 => 19,  61 => 8,  57 => 7,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.twig\" %}

{% block title %}
    <title>Modifier Réservation</title>
{% endblock %}

{% block body %}
    <h1>Modifier Réservation</h1>

    <section id=\"intro\" class=\"intro\">
        <div class=\"intro-content\">
            <div class=\"container\">
                <div class=\"wow fadeInDown\" data-wow-offset=\"0\" data-wow-delay=\"0.1s\">
                    <h4 class=\"h-ultra\">Éditer votre rendez-vous</h4>
                </div>
                
                <div class=\"well well-trans\">
                    <div class=\"wow fadeInRight\" data-wow-delay=\"0.1s\">
                        <form method=\"post\" action=\"/savebooking/{{ booking.id }}\">
                            <input type=\"text\" name=\"id\" value=\"{{ booking.id }}\" readonly>
                            <label>Mail du Patient:</label>
                            <input type=\"text\" name=\"mail\" value=\"{{ booking.book_email }}\" readonly>

                            <label>Date:</label>
                            <input type=\"date\" name=\"date\" value=\"{{ booking.date_book | date('Y-m-d') }}\" >

                            <label>Heure:</label>
                            <input type=\"time\" name=\"time\" value=\"{{ booking.date_book | date('H:i') }}\" >

                            <label>Confirmation:</label>
                            <select name=\"isConfirm\">
                                <option value=\"1\" {% if booking.isConfirm == 1 %} selected {% endif %}>Confirmé</option>
                                <option value=\"0\" {% if booking.isConfirm == 0 %} selected {% endif %}>Non confirmé</option>
                            </select>

                            <button type=\"submit\">Enregistrer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
{% endblock %}
", "bookings/editbooking.twig", "D:\\xampp\\htdocs\\Cabinet\\views\\bookings\\editbooking.twig");
    }
}
