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

/* partials/menu.twig */
class __TwigTemplate_ae1bb679fa0b84fdb1ee758b172b4d66 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
<<<<<<< HEAD
=======
        // line 1
>>>>>>> 9c9846b346baadfaf03dffd98fb72f22692600f6
        yield "<div id=\"wrapper\">

<nav class=\"navbar navbar-custom navbar-fixed-top\" role=\"navigation\">
\t\t<div class=\"top-area\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-6 col-md-6\">
\t\t\t\t\t<p class=\"bold text-left\">Du Lundi au Vendredi - de 09:00:00 à 18:00:00</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-6 col-md-6\">
\t\t\t\t\t<p class=\"bold text-right\">Appelez moi au : 06 89 03 13 60</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
        <div class=\"container navigation\">
\t\t
            <div class=\"navbar-header page-scroll\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-main-collapse\">
                    <i class=\"fa fa-bars\"></i>
                </button>
                <a class=\"navbar-brand\" href=\"index.html\">
                    <img src=\"img/logo.png\" alt=\"\" width=\"150\" height=\"40\" />
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse navbar-right navbar-main-collapse\">
\t\t\t      <ul class=\"nav navbar-nav\">

<<<<<<< HEAD
              <li><a href=\"/\">Accueil</a></li>

              <li><a href=\"/contact\">contact</a></li>

              <li><a href=\"/actualites\">Actualites</a></li>

              <li><a href=\"booking\">booking</a></li>

              <li><a href=\"register\">register</a></li>

        
\t\t\t  </ul>
=======
                    <li><a href=\"/\">Accueil</a></li>

                    <li><a href=\"/contact\">Contact</a></li>

                    <li><a href=\"/actualites\">Actualites</a></li>
                    ";
        // line 36
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "logged_in", [], "any", false, false, false, 36)) {
            // line 37
            yield "                        ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "user_is_admin", [], "any", false, false, false, 37)) {
                // line 38
                yield "                            <li><a href=\"/bookings/listbooking\">Liste Consultations</a></li>
                            <li><a href=\"/users/listuser\">Liste utilisateurs</a></li>
                        ";
            } else {
                // line 41
                yield "                            <li><a href=\"/booking\">Booking</a></li>
                        ";
            }
            // line 43
            yield "                        <li><a href=\"/logout\">Déconnexion</a></li>
                    ";
        } else {
            // line 45
            yield "                        <li><a href=\"/booking\">Booking</a></li>
                        <li><a href=\"/register\">Inscription</a></li>
                        <li><a href=\"/booking\">Connexion</a></li>
                    ";
        }
        // line 49
        yield "\t\t\t        </ul>
>>>>>>> 9c9846b346baadfaf03dffd98fb72f22692600f6
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

</div>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "partials/menu.twig";
    }

    /**
     * @codeCoverageIgnore
     */
<<<<<<< HEAD
    public function getDebugInfo()
    {
        return array ();
=======
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  99 => 49,  93 => 45,  89 => 43,  85 => 41,  80 => 38,  77 => 37,  75 => 36,  38 => 1,);
>>>>>>> 9c9846b346baadfaf03dffd98fb72f22692600f6
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"wrapper\">

<nav class=\"navbar navbar-custom navbar-fixed-top\" role=\"navigation\">
\t\t<div class=\"top-area\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-6 col-md-6\">
\t\t\t\t\t<p class=\"bold text-left\">Du Lundi au Vendredi - de 09:00:00 à 18:00:00</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-6 col-md-6\">
\t\t\t\t\t<p class=\"bold text-right\">Appelez moi au : 06 89 03 13 60</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
        <div class=\"container navigation\">
\t\t
            <div class=\"navbar-header page-scroll\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-main-collapse\">
                    <i class=\"fa fa-bars\"></i>
                </button>
                <a class=\"navbar-brand\" href=\"index.html\">
                    <img src=\"img/logo.png\" alt=\"\" width=\"150\" height=\"40\" />
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse navbar-right navbar-main-collapse\">
\t\t\t      <ul class=\"nav navbar-nav\">

<<<<<<< HEAD
              <li><a href=\"/\">Accueil</a></li>

              <li><a href=\"/contact\">contact</a></li>

              <li><a href=\"/actualites\">Actualites</a></li>

              <li><a href=\"booking\">booking</a></li>

              <li><a href=\"register\">register</a></li>

        
\t\t\t  </ul>
=======
                    <li><a href=\"/\">Accueil</a></li>

                    <li><a href=\"/contact\">Contact</a></li>

                    <li><a href=\"/actualites\">Actualites</a></li>
                    {% if session.logged_in %}
                        {% if session.user_is_admin %}
                            <li><a href=\"/bookings/listbooking\">Liste Consultations</a></li>
                            <li><a href=\"/users/listuser\">Liste utilisateurs</a></li>
                        {% else %}
                            <li><a href=\"/booking\">Booking</a></li>
                        {% endif %}
                        <li><a href=\"/logout\">Déconnexion</a></li>
                    {% else %}
                        <li><a href=\"/booking\">Booking</a></li>
                        <li><a href=\"/register\">Inscription</a></li>
                        <li><a href=\"/booking\">Connexion</a></li>
                    {% endif %}
\t\t\t        </ul>
>>>>>>> 9c9846b346baadfaf03dffd98fb72f22692600f6
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

</div>", "partials/menu.twig", "D:\\xampp\\htdocs\\Cabinet\\views\\partials\\menu.twig");
    }
}
