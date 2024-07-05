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
<<<<<<< HEAD
=======
\t\t\t\t\t";
        // line 49
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "isAdmin", [], "any", false, false, false, 49) != 0) && (CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "isAdmin", [], "any", false, false, false, 49) != 1))) {
            // line 50
            yield "\t\t\t\t\t\t";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "isAdmin", [], "any", false, false, false, 50) == 0)) {
                // line 51
                yield "
>>>>>>> 9c9846b346baadfaf03dffd98fb72f22692600f6
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
                // line 103
                if (($context["error_message"] ?? null)) {
                    // line 104
                    yield "                                            <p class=\"lead-footer\" style=\"color:red\"> Erreur lors de la prise de rendez vous</p>
                                            ";
                }
                // line 106
                yield "\t\t\t\t\t\t\t\t\t\t</form>


\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 114
($context["user"] ?? null), "isAdmin", [], "any", false, false, false, 114) == 1)) {
                // line 115
                yield "\t\t\t\t\t\t\t<h1>Liste des Bookings</h1>
\t\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th>ID</th>
\t\t\t\t\t\t\t\t\t\t<th>Nom du Patient</th>
\t\t\t\t\t\t\t\t\t\t<th>Date</th>
\t\t\t\t\t\t\t\t\t\t<th>Actions</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t";
                // line 126
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["bookings"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["booking"]) {
                    // line 127
                    yield "\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td>";
                    // line 128
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "booking_id", [], "any", false, false, false, 128), "html", null, true);
                    yield "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
                    // line 129
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "patient_name", [], "any", false, false, false, 129), "html", null, true);
                    yield "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
                    // line 130
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "booking_date", [], "any", false, false, false, 130), "html", null, true);
                    yield "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<form method=\"post\" action=\"/deleteBooking/";
                    // line 132
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "booking_id", [], "any", false, false, false, 132), "html", null, true);
                    yield "\" style=\"display:inline;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\">Supprimer</button>
\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t<form method=\"post\" action=\"/updateBooking/";
                    // line 135
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "booking_id", [], "any", false, false, false, 135), "html", null, true);
                    yield "\" style=\"display:inline;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"date\" value=\"";
                    // line 136
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "booking_date", [], "any", false, false, false, 136), "html", null, true);
                    yield "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\">Modifier</button>
\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['booking'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 142
                yield "\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t
\t\t\t\t\t\t";
            }
            // line 146
            yield "
\t\t\t\t\t";
        } else {
            // line 147
            yield "\t
\t\t\t\t\t\t<p class=\"lead-footer\">Oups ! Vous devez être inscrit pour réserver.</p>

\t\t\t\t\t\t<p class=\"lead-footer\">Vous avez un compte ?
\t\t\t\t\t\t\t<div class=\"row d-flex-center\">
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-skin btn-lg flex-right\" onclick=\"window.location.href='/login'\">
\t\t\t\t\t\t\t\tConnexion
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p class=\"lead-footer\">Pas encore inscrit ?
\t\t\t\t\t\t\t<div class=\"row d-flex-center\">
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-skin btn-lg flex-right\" onclick=\"window.location.href='/register'\">
\t\t\t\t\t\t\t\tInscription
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</p>
\t\t\t\t\t";
        }
        // line 165
        yield "\t\t\t\t\t</div>
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
        return array (  265 => 165,  245 => 147,  241 => 146,  235 => 142,  223 => 136,  219 => 135,  213 => 132,  208 => 130,  204 => 129,  200 => 128,  197 => 127,  193 => 126,  180 => 115,  178 => 114,  168 => 106,  164 => 104,  162 => 103,  108 => 51,  105 => 50,  103 => 49,  89 => 37,  85 => 36,  48 => 3,  37 => 1,);
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
\t\t\t\t\t{% if user.isAdmin != 0  and user.isAdmin != 1 %}
\t\t\t\t\t\t{% if user.isAdmin == 0 %}

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
\t\t\t\t\t\t{% elseif user.isAdmin == 1 %}
\t\t\t\t\t\t\t<h1>Liste des Bookings</h1>
\t\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th>ID</th>
\t\t\t\t\t\t\t\t\t\t<th>Nom du Patient</th>
\t\t\t\t\t\t\t\t\t\t<th>Date</th>
\t\t\t\t\t\t\t\t\t\t<th>Actions</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t{% for booking in bookings %}
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td>{{ booking.booking_id }}</td>
\t\t\t\t\t\t\t\t\t\t\t<td>{{ booking.patient_name }}</td>
\t\t\t\t\t\t\t\t\t\t\t<td>{{ booking.booking_date }}</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<form method=\"post\" action=\"/deleteBooking/{{ booking.booking_id }}\" style=\"display:inline;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\">Supprimer</button>
\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t<form method=\"post\" action=\"/updateBooking/{{ booking.booking_id }}\" style=\"display:inline;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"date\" value=\"{{ booking.booking_date }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\">Modifier</button>
\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t
\t\t\t\t\t\t{% endif %}

\t\t\t\t\t{% else %}\t
\t\t\t\t\t\t<p class=\"lead-footer\">Oups ! Vous devez être inscrit pour réserver.</p>

\t\t\t\t\t\t<p class=\"lead-footer\">Vous avez un compte ?
\t\t\t\t\t\t\t<div class=\"row d-flex-center\">
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-skin btn-lg flex-right\" onclick=\"window.location.href='/login'\">
\t\t\t\t\t\t\t\tConnexion
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p class=\"lead-footer\">Pas encore inscrit ?
\t\t\t\t\t\t\t<div class=\"row d-flex-center\">
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-skin btn-lg flex-right\" onclick=\"window.location.href='/register'\">
\t\t\t\t\t\t\t\tInscription
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</p>
\t\t\t\t\t{% endif %}
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
