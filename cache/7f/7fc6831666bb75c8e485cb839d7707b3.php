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

/* partials/footer.twig */
class __TwigTemplate_e83d8367e727e11aa6cac1ebac8d3046 extends Template
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
        yield "<footer>
\t
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-6 col-md-4\">
\t\t\t\t\t<div class=\"wow fadeInDown\" data-wow-delay=\"0.1s\">
\t\t\t\t\t<div class=\"widget\">
\t\t\t\t\t\t<h5>A propos</h5>
\t\t\t\t\t\t<p>
\t\t\t\t\t\tMédecin généraliste avec spécialité bactériologique, pratiquant depuis maintenant 20 ans, mon cabinet reste ouvert à toute personne souhaitant recevoir un diagnostique ou aide à la compréhension de ses analyses.
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"wow fadeInDown\" data-wow-delay=\"0.1s\">
\t\t\t\t\t<div class=\"widget\">
\t\t\t\t\t\t<h5>Informations</h5>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a href=\"#\">Zone d'écoute</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Médecin général</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Analyse bactériologique</a></li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-6 col-md-4\">
\t\t\t\t\t<div class=\"wow fadeInDown\" data-wow-delay=\"0.1s\">
\t\t\t\t\t<div class=\"widget\">
\t\t\t\t\t\t<h5>Dr Dupont</h5>
\t\t\t\t\t\t<p>
\t\t\t\t\t\tCabinet spécialiste Médecine Générale et analyse bactériologique.
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<span class=\"fa-stack fa-lg\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle fa-stack-2x\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-phone fa-stack-1x fa-inverse\"></i>
\t\t\t\t\t\t\t\t</span> +33 6 89 03 13 60
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<span class=\"fa-stack fa-lg\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle fa-stack-2x\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-envelope-o fa-stack-1x fa-inverse\"></i>
\t\t\t\t\t\t\t\t</span> DrDupont@gmail.com
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-6 col-md-4\">
\t\t\t\t\t<div class=\"wow fadeInDown\" data-wow-delay=\"0.1s\">
\t\t\t\t\t<div class=\"widget\">
\t\t\t\t\t\t<h5>Adresse</h5>
\t\t\t\t\t\t<p>10 rue de l'ancienne Balaterie - Lomme 59160 </p>\t\t
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"wow fadeInDown\" data-wow-delay=\"0.1s\">
\t\t\t\t\t<div class=\"widget\">
\t\t\t\t\t\t<h5>Follow us</h5>
\t\t\t\t\t\t<ul class=\"company-social\">
\t\t\t\t\t\t\t\t<li class=\"social-facebook\"><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
\t\t\t\t\t\t\t\t<li class=\"social-twitter\"><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
\t\t\t\t\t\t\t\t<li class=\"social-google\"><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
\t\t\t\t\t\t\t\t<li class=\"social-vimeo\"><a href=\"#\"><i class=\"fa fa-vimeo-square\"></i></a></li>
\t\t\t\t\t\t\t\t<li class=\"social-dribble\"><a href=\"#\"><i class=\"fa fa-dribbble\"></i></a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>\t
\t\t</div>
\t\t<div class=\"sub-footer\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-6 col-md-6 col-lg-6\">
\t\t\t\t\t<div class=\"wow fadeInLeft\" data-wow-delay=\"0.1s\">
\t\t\t\t\t<div class=\"text-left\">
\t\t\t\t\t<p>&copy;Copyright 2015 - Dr. Dupond . Tout droits réservés.</p>
\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-6 col-md-6 col-lg-6\">
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>\t
\t\t</div>
\t\t</div>
\t</footer>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "partials/footer.twig";
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
        return new Source("<footer>
\t
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-6 col-md-4\">
\t\t\t\t\t<div class=\"wow fadeInDown\" data-wow-delay=\"0.1s\">
\t\t\t\t\t<div class=\"widget\">
\t\t\t\t\t\t<h5>A propos</h5>
\t\t\t\t\t\t<p>
\t\t\t\t\t\tMédecin généraliste avec spécialité bactériologique, pratiquant depuis maintenant 20 ans, mon cabinet reste ouvert à toute personne souhaitant recevoir un diagnostique ou aide à la compréhension de ses analyses.
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"wow fadeInDown\" data-wow-delay=\"0.1s\">
\t\t\t\t\t<div class=\"widget\">
\t\t\t\t\t\t<h5>Informations</h5>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a href=\"#\">Zone d'écoute</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Médecin général</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Analyse bactériologique</a></li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-6 col-md-4\">
\t\t\t\t\t<div class=\"wow fadeInDown\" data-wow-delay=\"0.1s\">
\t\t\t\t\t<div class=\"widget\">
\t\t\t\t\t\t<h5>Dr Dupont</h5>
\t\t\t\t\t\t<p>
\t\t\t\t\t\tCabinet spécialiste Médecine Générale et analyse bactériologique.
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<span class=\"fa-stack fa-lg\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle fa-stack-2x\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-phone fa-stack-1x fa-inverse\"></i>
\t\t\t\t\t\t\t\t</span> +33 6 89 03 13 60
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<span class=\"fa-stack fa-lg\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle fa-stack-2x\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-envelope-o fa-stack-1x fa-inverse\"></i>
\t\t\t\t\t\t\t\t</span> DrDupont@gmail.com
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-6 col-md-4\">
\t\t\t\t\t<div class=\"wow fadeInDown\" data-wow-delay=\"0.1s\">
\t\t\t\t\t<div class=\"widget\">
\t\t\t\t\t\t<h5>Adresse</h5>
\t\t\t\t\t\t<p>10 rue de l'ancienne Balaterie - Lomme 59160 </p>\t\t
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"wow fadeInDown\" data-wow-delay=\"0.1s\">
\t\t\t\t\t<div class=\"widget\">
\t\t\t\t\t\t<h5>Follow us</h5>
\t\t\t\t\t\t<ul class=\"company-social\">
\t\t\t\t\t\t\t\t<li class=\"social-facebook\"><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
\t\t\t\t\t\t\t\t<li class=\"social-twitter\"><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
\t\t\t\t\t\t\t\t<li class=\"social-google\"><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
\t\t\t\t\t\t\t\t<li class=\"social-vimeo\"><a href=\"#\"><i class=\"fa fa-vimeo-square\"></i></a></li>
\t\t\t\t\t\t\t\t<li class=\"social-dribble\"><a href=\"#\"><i class=\"fa fa-dribbble\"></i></a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>\t
\t\t</div>
\t\t<div class=\"sub-footer\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-6 col-md-6 col-lg-6\">
\t\t\t\t\t<div class=\"wow fadeInLeft\" data-wow-delay=\"0.1s\">
\t\t\t\t\t<div class=\"text-left\">
\t\t\t\t\t<p>&copy;Copyright 2015 - Dr. Dupond . Tout droits réservés.</p>
\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-6 col-md-6 col-lg-6\">
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>\t
\t\t</div>
\t\t</div>
\t</footer>", "partials/footer.twig", "D:\\xampp\\htdocs\\Cabinet\\views\\partials\\footer.twig");
    }
}
