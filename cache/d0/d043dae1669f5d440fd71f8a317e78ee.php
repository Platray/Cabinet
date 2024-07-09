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
        // line 1
        yield "<div id=\"wrapper\">

<nav class=\"navbar navbar-custom navbar-fixed-top\" role=\"navigation\">
    <div class=\"top-area\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-6 col-md-6\">
                    <p class=\"bold text-left\">Du Lundi au Vendredi - de 09:00:00 à 18:00:00</p>
                </div>
                <div class=\"col-sm-6 col-md-6\">
                    <p class=\"bold text-right\">Appelez moi au : 06 89 03 13 60</p>
                </div>
            </div>
        </div>
    </div>
    <div class=\"container navigation\">
        <div class=\"navbar-header page-scroll\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-main-collapse\">
                <i class=\"fa fa-bars\"></i>
            </button>
            <a class=\"navbar-brand\" href=\"/\">
                <img src=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["BASE_URL"] ?? null), "html", null, true);
        yield "img/logo.png\" alt=\"\" width=\"150\" height=\"40\" />
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"collapse navbar-collapse navbar-right navbar-main-collapse\">
            <ul class=\"nav navbar-nav\">
                <li><a href=\"/\">Accueil</a></li>

                ";
        // line 31
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "logged_in", [], "any", false, false, false, 31)) {
            // line 32
            yield "                    ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "user_is_admin", [], "any", false, false, false, 32)) {
                // line 33
                yield "                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Actualites <b class=\"caret\"></b></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"/actualites\">Visualiser</a></li>
                                <li><a href=\"/posts/listpost\">Modifier</a></li>
                            </ul>
                        </li>
                        <li><a href=\"/bookings/listbooking\">Liste Consultations</a></li>
                        <li><a href=\"/users/listuser\">Liste utilisateurs</a></li>
                        <li><a href=\"/hours/listhour\">Horaires</a></li>
                        <li><a href=\"/services/listservice\">Services</a></li>
                    ";
            } else {
                // line 45
                yield "                        <li><a href=\"/actualites\">Actualites</a></li>
                        <li><a href=\"/services\">Services</a></li>
                        <li><a href=\"/booking\">Booking</a></li>
                        <li><a href=\"/contact\">A propos</a></li>
                    ";
            }
            // line 50
            yield "                    <li><a href=\"/logout\">Déconnexion</a></li>
                ";
        } else {
            // line 52
            yield "                    <li><a href=\"/actualites\">Actualites</a></li>
                    <li><a href=\"/services\">Services</a></li>
                    <li><a href=\"/booking\">Booking</a></li>
                    <li><a href=\"/contact\">A propos</a></li>
                    <li><a href=\"/register\">Inscription</a></li>
                    <li><a href=\"/login\">Connexion</a></li>
                ";
        }
        // line 59
        yield "            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

</div>
<!-- Include jQuery -->
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
<!-- Include Bootstrap JS -->
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
";
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
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  112 => 59,  103 => 52,  99 => 50,  92 => 45,  78 => 33,  75 => 32,  73 => 31,  61 => 22,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"wrapper\">

<nav class=\"navbar navbar-custom navbar-fixed-top\" role=\"navigation\">
    <div class=\"top-area\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-6 col-md-6\">
                    <p class=\"bold text-left\">Du Lundi au Vendredi - de 09:00:00 à 18:00:00</p>
                </div>
                <div class=\"col-sm-6 col-md-6\">
                    <p class=\"bold text-right\">Appelez moi au : 06 89 03 13 60</p>
                </div>
            </div>
        </div>
    </div>
    <div class=\"container navigation\">
        <div class=\"navbar-header page-scroll\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-main-collapse\">
                <i class=\"fa fa-bars\"></i>
            </button>
            <a class=\"navbar-brand\" href=\"/\">
                <img src=\"{{ BASE_URL }}img/logo.png\" alt=\"\" width=\"150\" height=\"40\" />
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"collapse navbar-collapse navbar-right navbar-main-collapse\">
            <ul class=\"nav navbar-nav\">
                <li><a href=\"/\">Accueil</a></li>

                {% if session.logged_in %}
                    {% if session.user_is_admin %}
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Actualites <b class=\"caret\"></b></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"/actualites\">Visualiser</a></li>
                                <li><a href=\"/posts/listpost\">Modifier</a></li>
                            </ul>
                        </li>
                        <li><a href=\"/bookings/listbooking\">Liste Consultations</a></li>
                        <li><a href=\"/users/listuser\">Liste utilisateurs</a></li>
                        <li><a href=\"/hours/listhour\">Horaires</a></li>
                        <li><a href=\"/services/listservice\">Services</a></li>
                    {% else %}
                        <li><a href=\"/actualites\">Actualites</a></li>
                        <li><a href=\"/services\">Services</a></li>
                        <li><a href=\"/booking\">Booking</a></li>
                        <li><a href=\"/contact\">A propos</a></li>
                    {% endif %}
                    <li><a href=\"/logout\">Déconnexion</a></li>
                {% else %}
                    <li><a href=\"/actualites\">Actualites</a></li>
                    <li><a href=\"/services\">Services</a></li>
                    <li><a href=\"/booking\">Booking</a></li>
                    <li><a href=\"/contact\">A propos</a></li>
                    <li><a href=\"/register\">Inscription</a></li>
                    <li><a href=\"/login\">Connexion</a></li>
                {% endif %}
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

</div>
<!-- Include jQuery -->
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
<!-- Include Bootstrap JS -->
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
", "partials/menu.twig", "D:\\xampp\\htdocs\\Cabinet\\views\\partials\\menu.twig");
    }
}
