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
        yield "\t<head>
\t\t<title>Réservation de créneau horaire</title>

\t\t<link rel=\"stylesheet\" href=\"https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
\t\t<script src=\"https://code.jquery.com/jquery-3.5.1.min.js\"></script>
\t\t<script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
        <script>
            \$(document).ready(function () {
            \$(\"#date\").datepicker({
            dateFormat: 'yy-mm-dd',
            beforeShowDay: function (date) {
            var day = date.getDay();
            return [(day != 0 && day != 6), '']; // Bloquer les samedis et dimanches
            }
            });

            \$(\"#hour\").on(\"change\", function () {
            var selectedTime = \$(this).val();
            var openingTime = \"09:00\";
            var closingTime = \"18:00\";

            if (selectedTime < openingTime || selectedTime > closingTime) {
            alert(\"Les réservations ne sont possibles que de 09:00 à 18:00.\");
            \$(this).val(''); // Réinitialiser l'heure si elle est en dehors des heures d'ouverture
            }
            });
            });
\t    </script>
\t</head>
";
        return; yield '';
    }

    // line 36
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        yield "
\t<!-- DEBUT TEMPLATE RESA -->

\t<!-- Section: intro -->
\t\t

\t\t<section id=\"intro\" class=\"intro\"> <div class=\"intro-content\">

\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row d-flex-center\">

\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t<div class=\"form-wrapper\">
\t\t\t\t\t\t\t<div class=\"wow fadeInRight\" data-wow-duration=\"2s\" data-wow-delay=\"0.2s\">

\t\t\t\t\t\t\t\t<div class=\"panel panel-skin\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t\t<h3 class=\"panel-title\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-pencil-square-o\"></span>
\t\t\t\t\t\t\t\t\t\t\tPrenez rendez-vous
\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t\t<form method=\"post\" action=\"/booking\" role=\"form\" class=\"lead\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row d-flex-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-6 col-sm-6 col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Prenom</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"firstname\" id=\"firstname\" class=\"form-control input-md\" required>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-6 col-sm-6 col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Nom</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"lastname\" id=\"lastname\" class=\"form-control input-md\" required>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row d-flex-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-6 col-sm-6 col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Email</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"email\" name=\"email\" id=\"email\" class=\"form-control input-md\" required>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-6 col-sm-6 col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Date de naissance :
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"date\" name=\"birthday\" id=\"birthday\" class=\"form-control input-md\" required>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row d-flex-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"date\">Date réservation :</label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"date\" id=\"date\" name=\"date\" required>
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"hour\">Heure réservation :</label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"time\" id=\"hour\" name=\"hour\" required>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row d-flex-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-skin btn-lg flex-right\">Réserver</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"lead-footer\">* On vous contactera pour valider votre rendez-vous</p>
                                            ";
        // line 100
        if (($context["error_message"] ?? null)) {
            // line 101
            yield "                                            <p class=\"lead-footer\" style=\"color:red\"> Erreur lors de la prise de rendez vous</p>
                                            ";
        }
        // line 103
        yield "\t\t\t\t\t\t\t\t\t\t</form>


\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>


\t<!-- FIN TEMPLATE  RESA -->
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
        return array (  160 => 103,  156 => 101,  154 => 100,  89 => 37,  85 => 36,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.twig' %}

{% block title %}
\t<head>
\t\t<title>Réservation de créneau horaire</title>

\t\t<link rel=\"stylesheet\" href=\"https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
\t\t<script src=\"https://code.jquery.com/jquery-3.5.1.min.js\"></script>
\t\t<script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
        <script>
            \$(document).ready(function () {
            \$(\"#date\").datepicker({
            dateFormat: 'yy-mm-dd',
            beforeShowDay: function (date) {
            var day = date.getDay();
            return [(day != 0 && day != 6), '']; // Bloquer les samedis et dimanches
            }
            });

            \$(\"#hour\").on(\"change\", function () {
            var selectedTime = \$(this).val();
            var openingTime = \"09:00\";
            var closingTime = \"18:00\";

            if (selectedTime < openingTime || selectedTime > closingTime) {
            alert(\"Les réservations ne sont possibles que de 09:00 à 18:00.\");
            \$(this).val(''); // Réinitialiser l'heure si elle est en dehors des heures d'ouverture
            }
            });
            });
\t    </script>
\t</head>
{% endblock %}


{% block body %}

\t<!-- DEBUT TEMPLATE RESA -->

\t<!-- Section: intro -->
\t\t

\t\t<section id=\"intro\" class=\"intro\"> <div class=\"intro-content\">

\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row d-flex-center\">

\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t<div class=\"form-wrapper\">
\t\t\t\t\t\t\t<div class=\"wow fadeInRight\" data-wow-duration=\"2s\" data-wow-delay=\"0.2s\">

\t\t\t\t\t\t\t\t<div class=\"panel panel-skin\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t\t<h3 class=\"panel-title\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-pencil-square-o\"></span>
\t\t\t\t\t\t\t\t\t\t\tPrenez rendez-vous
\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t\t<form method=\"post\" action=\"/booking\" role=\"form\" class=\"lead\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row d-flex-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-6 col-sm-6 col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Prenom</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"firstname\" id=\"firstname\" class=\"form-control input-md\" required>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-6 col-sm-6 col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Nom</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"lastname\" id=\"lastname\" class=\"form-control input-md\" required>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row d-flex-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-6 col-sm-6 col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Email</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"email\" name=\"email\" id=\"email\" class=\"form-control input-md\" required>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-6 col-sm-6 col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Date de naissance :
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"date\" name=\"birthday\" id=\"birthday\" class=\"form-control input-md\" required>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row d-flex-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"date\">Date réservation :</label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"date\" id=\"date\" name=\"date\" required>
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"hour\">Heure réservation :</label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"time\" id=\"hour\" name=\"hour\" required>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row d-flex-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-skin btn-lg flex-right\">Réserver</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"lead-footer\">* On vous contactera pour valider votre rendez-vous</p>
                                            {% if error_message %}
                                            <p class=\"lead-footer\" style=\"color:red\"> Erreur lors de la prise de rendez vous</p>
                                            {% endif %}
\t\t\t\t\t\t\t\t\t\t</form>


\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>


\t<!-- FIN TEMPLATE  RESA -->
{% endblock %}
", "booking.twig", "D:\\xampp\\htdocs\\Cabinet\\views\\booking.twig");
    }
}
