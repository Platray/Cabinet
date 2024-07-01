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

              <li><a href=\"/\">Accueil</a></li>

              <li><a href=\"/contact\">contact</a></li>

              <li><a href=\"/actualites\">Actualites</a></li>

              <li><a href=\"booking\">booking</a></li>

              <li><a href=\"register\">register</a></li>

        
\t\t\t  </ul>
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
    public function getDebugInfo()
    {
        return array ();
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

              <li><a href=\"/\">Accueil</a></li>

              <li><a href=\"/contact\">contact</a></li>

              <li><a href=\"/actualites\">Actualites</a></li>

              <li><a href=\"booking\">booking</a></li>

              <li><a href=\"register\">register</a></li>

        
\t\t\t  </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

</div>", "partials/menu.twig", "D:\\xampp\\htdocs\\Cabinet\\views\\partials\\menu.twig");
    }
}
