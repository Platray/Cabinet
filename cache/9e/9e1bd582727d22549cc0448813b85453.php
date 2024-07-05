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

/* home.twig */
class __TwigTemplate_545608859f38d95cc574c1eacfe6e6e4 extends Template
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
        $this->parent = $this->loadTemplate("base.twig", "home.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "    <title>page d'Accueil</title>
";
        return; yield '';
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
<<<<<<< HEAD
=======
        // line 8
>>>>>>> 9c9846b346baadfaf03dffd98fb72f22692600f6
        yield "
<!-- Section: intro -->
    <section id=\"intro\" class=\"intro\">
\t\t<div class=\"intro-content\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<div class=\"wow fadeInDown\" data-wow-offset=\"0\" data-wow-delay=\"0.1s\">
\t\t\t\t\t<h2 class=\"h-ultra\">Cabinet du Dr Dupont</h2>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"wow fadeInUp\" data-wow-offset=\"0\" data-wow-delay=\"0.1s\">
\t\t\t\t\t<h4 class=\"h-light\">La médecine <span class=\"color\">à l'écoute de vous.</span> </h4>
\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"well well-trans\">
\t\t\t\t\t\t<div class=\"wow fadeInRight\" data-wow-delay=\"0.1s\">

\t\t\t\t\t\t<ul class=\"lead-list\">
\t\t\t\t\t\t\t<li><span class=\"fa fa-check fa-2x icon-success\"></span> <span class=\"list\"><strong>Spécialiste Expérimenté</strong><br />Médecine générale et bactériologique.</span></li>
\t\t\t\t\t\t\t<li><span class=\"fa fa-check fa-2x icon-success\"></span> <span class=\"list\"><strong>Possibilité de déplacement</strong><br /> Uniquement sur rendez-vous après validation.</span></li>
\t\t\t\t\t\t\t<li><span class=\"fa fa-check fa-2x icon-success\"></span> <span class=\"list\"><strong>Médecin conventionné secteur 1</strong><br />Tier payant possible</span></li>
\t\t\t\t\t\t</ul>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>


\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t</div>\t\t
\t\t\t</div>
\t\t</div>\t\t
    </section>
\t
\t<!-- /Section: intro -->

<!-- Section: boxes -->
    <section id=\"boxes\" class=\"home-section paddingtop-80\">
\t
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-3 col-md-3\">
\t\t\t\t\t<div class=\"wow fadeInUp\" data-wow-delay=\"0.2s\">
\t\t\t\t\t\t<div class=\"box text-center\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<i class=\"fa fa-check fa-3x circled bg-skin\"></i>
\t\t\t\t\t\t\t<h4 class=\"h-bold\">Prenez rendez-vous.</h4>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tPour être certain d'être reçu, prenez un rendez-vous dans la section booking
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-3 col-md-3\">
\t\t\t\t\t<div class=\"wow fadeInUp\" data-wow-delay=\"0.2s\">
\t\t\t\t\t\t<div class=\"box text-center\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<i class=\"fa fa-list-alt fa-3x circled bg-skin\"></i>
\t\t\t\t\t\t\t<h4 class=\"h-bold\">Choisissez votre plage horraire !</h4>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tVotre rendez-vous à l'heure que vous souhaitez (dans les limites d'affluences).
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-3 col-md-3\">
\t\t\t\t\t<div class=\"wow fadeInUp\" data-wow-delay=\"0.2s\">
\t\t\t\t\t\t<div class=\"box text-center\">
\t\t\t\t\t\t\t<i class=\"fa fa-user-md fa-3x circled bg-skin\"></i>
\t\t\t\t\t\t\t<h4 class=\"h-bold\">Une prise en main et un suivi par votre spécialiste</h4>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tN'hésitez pas à poser vos questions en direct ou en appelant le cabinet sur les heures d'ouvertures.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-3 col-md-3\">
\t\t\t\t\t<div class=\"wow fadeInUp\" data-wow-delay=\"0.2s\">
\t\t\t\t\t\t<div class=\"box text-center\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<i class=\"fa fa-hospital-o fa-3x circled bg-skin\"></i>
\t\t\t\t\t\t\t<h4 class=\"h-bold\">Des analyses médicales</h4>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tVotre spécialiste est apte à analyser vos examens médicaux, n'hésitez à les ramener lors de votre visite !
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

<<<<<<< HEAD
\t</section>
=======
\t\t";
        // line 98
        if (($context["error_message"] ?? null)) {
            // line 99
            yield "\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-3 col-md-3\">
\t\t\t\t\t\t\t<div class=\"wow fadeInUp\" data-wow-delay=\"0.2s\">
\t\t\t\t\t\t\t\t<div class=\"box text-center\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-check fa-3x circled bg-skin\"></i>
\t\t\t\t\t\t\t\t\t<h4 class=\"h-bold\">Prenez rendez-vous.</h4>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tPour être certain d'être reçu, prenez un rendez-vous dans la section booking
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t";
        }
        // line 118
        yield "\t</section>
>>>>>>> 9c9846b346baadfaf03dffd98fb72f22692600f6
\t<!-- /Section: boxes -->

";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "home.twig";
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
<<<<<<< HEAD
        return array (  57 => 7,  48 => 3,  37 => 1,);
=======
        return array (  176 => 118,  155 => 99,  153 => 98,  61 => 8,  57 => 7,  48 => 3,  37 => 1,);
>>>>>>> 9c9846b346baadfaf03dffd98fb72f22692600f6
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.twig' %}

{% block title %}
    <title>page d'Accueil</title>
{% endblock %}

{% block body %}

<!-- Section: intro -->
    <section id=\"intro\" class=\"intro\">
\t\t<div class=\"intro-content\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<div class=\"wow fadeInDown\" data-wow-offset=\"0\" data-wow-delay=\"0.1s\">
\t\t\t\t\t<h2 class=\"h-ultra\">Cabinet du Dr Dupont</h2>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"wow fadeInUp\" data-wow-offset=\"0\" data-wow-delay=\"0.1s\">
\t\t\t\t\t<h4 class=\"h-light\">La médecine <span class=\"color\">à l'écoute de vous.</span> </h4>
\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"well well-trans\">
\t\t\t\t\t\t<div class=\"wow fadeInRight\" data-wow-delay=\"0.1s\">

\t\t\t\t\t\t<ul class=\"lead-list\">
\t\t\t\t\t\t\t<li><span class=\"fa fa-check fa-2x icon-success\"></span> <span class=\"list\"><strong>Spécialiste Expérimenté</strong><br />Médecine générale et bactériologique.</span></li>
\t\t\t\t\t\t\t<li><span class=\"fa fa-check fa-2x icon-success\"></span> <span class=\"list\"><strong>Possibilité de déplacement</strong><br /> Uniquement sur rendez-vous après validation.</span></li>
\t\t\t\t\t\t\t<li><span class=\"fa fa-check fa-2x icon-success\"></span> <span class=\"list\"><strong>Médecin conventionné secteur 1</strong><br />Tier payant possible</span></li>
\t\t\t\t\t\t</ul>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>


\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t</div>\t\t
\t\t\t</div>
\t\t</div>\t\t
    </section>
\t
\t<!-- /Section: intro -->

<!-- Section: boxes -->
    <section id=\"boxes\" class=\"home-section paddingtop-80\">
\t
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-3 col-md-3\">
\t\t\t\t\t<div class=\"wow fadeInUp\" data-wow-delay=\"0.2s\">
\t\t\t\t\t\t<div class=\"box text-center\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<i class=\"fa fa-check fa-3x circled bg-skin\"></i>
\t\t\t\t\t\t\t<h4 class=\"h-bold\">Prenez rendez-vous.</h4>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tPour être certain d'être reçu, prenez un rendez-vous dans la section booking
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-3 col-md-3\">
\t\t\t\t\t<div class=\"wow fadeInUp\" data-wow-delay=\"0.2s\">
\t\t\t\t\t\t<div class=\"box text-center\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<i class=\"fa fa-list-alt fa-3x circled bg-skin\"></i>
\t\t\t\t\t\t\t<h4 class=\"h-bold\">Choisissez votre plage horraire !</h4>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tVotre rendez-vous à l'heure que vous souhaitez (dans les limites d'affluences).
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-3 col-md-3\">
\t\t\t\t\t<div class=\"wow fadeInUp\" data-wow-delay=\"0.2s\">
\t\t\t\t\t\t<div class=\"box text-center\">
\t\t\t\t\t\t\t<i class=\"fa fa-user-md fa-3x circled bg-skin\"></i>
\t\t\t\t\t\t\t<h4 class=\"h-bold\">Une prise en main et un suivi par votre spécialiste</h4>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tN'hésitez pas à poser vos questions en direct ou en appelant le cabinet sur les heures d'ouvertures.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-3 col-md-3\">
\t\t\t\t\t<div class=\"wow fadeInUp\" data-wow-delay=\"0.2s\">
\t\t\t\t\t\t<div class=\"box text-center\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<i class=\"fa fa-hospital-o fa-3x circled bg-skin\"></i>
\t\t\t\t\t\t\t<h4 class=\"h-bold\">Des analyses médicales</h4>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tVotre spécialiste est apte à analyser vos examens médicaux, n'hésitez à les ramener lors de votre visite !
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

<<<<<<< HEAD
=======
\t\t{% if error_message %}
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-3 col-md-3\">
\t\t\t\t\t\t\t<div class=\"wow fadeInUp\" data-wow-delay=\"0.2s\">
\t\t\t\t\t\t\t\t<div class=\"box text-center\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-check fa-3x circled bg-skin\"></i>
\t\t\t\t\t\t\t\t\t<h4 class=\"h-bold\">Prenez rendez-vous.</h4>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tPour être certain d'être reçu, prenez un rendez-vous dans la section booking
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t{% endif %}
>>>>>>> 9c9846b346baadfaf03dffd98fb72f22692600f6
\t</section>
\t<!-- /Section: boxes -->

{% endblock %}", "home.twig", "D:\\xampp\\htdocs\\Cabinet\\views\\home.twig");
    }
}
