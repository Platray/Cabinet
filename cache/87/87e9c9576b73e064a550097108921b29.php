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

/* contact.twig */
class __TwigTemplate_7d16150c9fc2fe2b4991ed868f9b37e8 extends Template
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
        $this->parent = $this->loadTemplate("base.twig", "contact.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "    <title>page cotnact</title>
";
        return; yield '';
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "


<section id=\"callaction\" class=\"home-section paddingtop-40\">\t
<br><br><br><br>
           <div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<div class=\"callaction bg-gray\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t\t<div class=\"wow fadeInUp\" data-wow-delay=\"0.1s\">
\t\t\t\t\t\t\t\t\t<div class=\"cta-text\">
\t\t\t\t\t\t\t\t\t<h3>Besoin d'un rendez-vous ?</h3>
\t\t\t\t\t\t\t\t\t<p>Vérifiez mes disponibilités dès maintenant ! </p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t<div class=\"wow lightSpeedIn\" data-wow-delay=\"0.1s\">
\t\t\t\t\t\t\t\t\t\t<div class=\"cta-btn\">
\t\t\t\t\t\t\t\t\t\t<a href=\"booking\" class=\"btn btn-skin btn-lg\">Prendre rendez-vous</a>\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
            </div>
\t</section>\t
\t

\t<!-- Section: services -->
    <section id=\"service\" class=\"home-section nopadding paddingtop-60\">

\t\t<div class=\"container\">

        <div class=\"row\">
\t\t\t<div class=\"col-sm-6 col-md-6\">
\t\t\t\t<div class=\"wow fadeInUp\" data-wow-delay=\"0.2s\">
\t\t\t\t<img src=\"img/dummy/img-1.jpg\" class=\"img-responsive\" alt=\"\" />
\t\t\t\t</div>
            </div>
\t\t\t<div class=\"col-sm-3 col-md-3\">
\t\t\t\t
\t\t\t\t<div class=\"wow fadeInRight\" data-wow-delay=\"0.1s\">
                <div class=\"service-box\">
\t\t\t\t\t<div class=\"service-icon\">
\t\t\t\t\t\t<span class=\"fa fa-stethoscope fa-3x\"></span> 
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"service-desc\">
\t\t\t\t\t\t<h5 class=\"h-light\">Visité médical</h5>
\t\t\t\t\t\t<p>Diagnostique médical.</p>
\t\t\t\t\t</div>
                </div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"wow fadeInRight\" data-wow-delay=\"0.2s\">
\t\t\t\t<div class=\"service-box\">
\t\t\t\t\t<div class=\"service-icon\">
\t\t\t\t\t\t<span class=\"fa fa-wheelchair fa-3x\"></span> 
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"service-desc\">
\t\t\t\t\t\t<h5 class=\"h-light\">Aide au dossier MDPH</h5>
\t\t\t\t\t\t<p>Je vous accompagne dans l'élaboration de votre dossier.</p>
\t\t\t\t\t</div>
                </div>
\t\t\t\t</div>
\t\t\t\t<div class=\"wow fadeInRight\" data-wow-delay=\"0.3s\">
\t\t\t\t<div class=\"service-box\">
\t\t\t\t\t<div class=\"service-icon\">
\t\t\t\t\t\t<span class=\"fa fa-plus-square fa-3x\"></span> 
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"service-desc\">
\t\t\t\t\t\t<h5 class=\"h-light\">Prescription</h5>
\t\t\t\t\t\t<p>Besoin d'un renouvellement ? Amenez moi votre ancienne ordonnance je vous rallongerai votre traitement en cours après étude de votre dossier.</p>
\t\t\t\t\t</div>
                </div>
\t\t\t\t</div>


            </div>
\t\t\t<div class=\"col-sm-3 col-md-3\">
\t\t\t\t
\t\t\t\t<div class=\"wow fadeInRight\" data-wow-delay=\"0.1s\">
                <div class=\"service-box\">
\t\t\t\t\t<div class=\"service-icon\">
\t\t\t\t\t\t<span class=\"fa fa-h-square fa-3x\"></span> 
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"service-desc\">
\t\t\t\t\t\t<h5 class=\"h-light\">Ancien pratiquant Hospitalié</h5>
\t\t\t\t\t\t<p>Médecin diplômé et pratiquant depuis plus de 20 ans !</p>
\t\t\t\t\t</div>
                </div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"wow fadeInRight\" data-wow-delay=\"0.2s\">
\t\t\t\t<div class=\"service-box\">
\t\t\t\t\t<div class=\"service-icon\">
\t\t\t\t\t\t<span class=\"fa fa-filter fa-3x\"></span> 
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"service-desc\">
\t\t\t\t\t\t<h5 class=\"h-light\">Centre d'écoute</h5>
\t\t\t\t\t\t<p>Un médecin vous soigne dans un premier temps par l'écoute de votre besoin.</p>
\t\t\t\t\t</div>
                </div>
\t\t\t\t</div>
\t\t\t\t<div class=\"wow fadeInRight\" data-wow-delay=\"0.3s\">
\t\t\t\t
\t\t\t\t</div>

            </div>
\t\t\t
        </div>\t\t
\t\t</div>
\t</section>
\t<!-- /Section: services -->
\t
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "contact.twig";
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
        return array (  57 => 7,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.twig' %}

{% block title %}
    <title>page cotnact</title>
{% endblock %}

{% block body %}



<section id=\"callaction\" class=\"home-section paddingtop-40\">\t
<br><br><br><br>
           <div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<div class=\"callaction bg-gray\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t\t<div class=\"wow fadeInUp\" data-wow-delay=\"0.1s\">
\t\t\t\t\t\t\t\t\t<div class=\"cta-text\">
\t\t\t\t\t\t\t\t\t<h3>Besoin d'un rendez-vous ?</h3>
\t\t\t\t\t\t\t\t\t<p>Vérifiez mes disponibilités dès maintenant ! </p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t<div class=\"wow lightSpeedIn\" data-wow-delay=\"0.1s\">
\t\t\t\t\t\t\t\t\t\t<div class=\"cta-btn\">
\t\t\t\t\t\t\t\t\t\t<a href=\"booking\" class=\"btn btn-skin btn-lg\">Prendre rendez-vous</a>\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
            </div>
\t</section>\t
\t

\t<!-- Section: services -->
    <section id=\"service\" class=\"home-section nopadding paddingtop-60\">

\t\t<div class=\"container\">

        <div class=\"row\">
\t\t\t<div class=\"col-sm-6 col-md-6\">
\t\t\t\t<div class=\"wow fadeInUp\" data-wow-delay=\"0.2s\">
\t\t\t\t<img src=\"img/dummy/img-1.jpg\" class=\"img-responsive\" alt=\"\" />
\t\t\t\t</div>
            </div>
\t\t\t<div class=\"col-sm-3 col-md-3\">
\t\t\t\t
\t\t\t\t<div class=\"wow fadeInRight\" data-wow-delay=\"0.1s\">
                <div class=\"service-box\">
\t\t\t\t\t<div class=\"service-icon\">
\t\t\t\t\t\t<span class=\"fa fa-stethoscope fa-3x\"></span> 
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"service-desc\">
\t\t\t\t\t\t<h5 class=\"h-light\">Visité médical</h5>
\t\t\t\t\t\t<p>Diagnostique médical.</p>
\t\t\t\t\t</div>
                </div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"wow fadeInRight\" data-wow-delay=\"0.2s\">
\t\t\t\t<div class=\"service-box\">
\t\t\t\t\t<div class=\"service-icon\">
\t\t\t\t\t\t<span class=\"fa fa-wheelchair fa-3x\"></span> 
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"service-desc\">
\t\t\t\t\t\t<h5 class=\"h-light\">Aide au dossier MDPH</h5>
\t\t\t\t\t\t<p>Je vous accompagne dans l'élaboration de votre dossier.</p>
\t\t\t\t\t</div>
                </div>
\t\t\t\t</div>
\t\t\t\t<div class=\"wow fadeInRight\" data-wow-delay=\"0.3s\">
\t\t\t\t<div class=\"service-box\">
\t\t\t\t\t<div class=\"service-icon\">
\t\t\t\t\t\t<span class=\"fa fa-plus-square fa-3x\"></span> 
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"service-desc\">
\t\t\t\t\t\t<h5 class=\"h-light\">Prescription</h5>
\t\t\t\t\t\t<p>Besoin d'un renouvellement ? Amenez moi votre ancienne ordonnance je vous rallongerai votre traitement en cours après étude de votre dossier.</p>
\t\t\t\t\t</div>
                </div>
\t\t\t\t</div>


            </div>
\t\t\t<div class=\"col-sm-3 col-md-3\">
\t\t\t\t
\t\t\t\t<div class=\"wow fadeInRight\" data-wow-delay=\"0.1s\">
                <div class=\"service-box\">
\t\t\t\t\t<div class=\"service-icon\">
\t\t\t\t\t\t<span class=\"fa fa-h-square fa-3x\"></span> 
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"service-desc\">
\t\t\t\t\t\t<h5 class=\"h-light\">Ancien pratiquant Hospitalié</h5>
\t\t\t\t\t\t<p>Médecin diplômé et pratiquant depuis plus de 20 ans !</p>
\t\t\t\t\t</div>
                </div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"wow fadeInRight\" data-wow-delay=\"0.2s\">
\t\t\t\t<div class=\"service-box\">
\t\t\t\t\t<div class=\"service-icon\">
\t\t\t\t\t\t<span class=\"fa fa-filter fa-3x\"></span> 
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"service-desc\">
\t\t\t\t\t\t<h5 class=\"h-light\">Centre d'écoute</h5>
\t\t\t\t\t\t<p>Un médecin vous soigne dans un premier temps par l'écoute de votre besoin.</p>
\t\t\t\t\t</div>
                </div>
\t\t\t\t</div>
\t\t\t\t<div class=\"wow fadeInRight\" data-wow-delay=\"0.3s\">
\t\t\t\t
\t\t\t\t</div>

            </div>
\t\t\t
        </div>\t\t
\t\t</div>
\t</section>
\t<!-- /Section: services -->
\t
{% endblock %}", "contact.twig", "D:\\xampp\\htdocs\\Cabinet\\views\\contact.twig");
    }
}
