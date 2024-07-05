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

/* base.twig */
class __TwigTemplate_0227e6fc648516e56656a5a2bd0b2d12 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
        
    <!-- TEMPLATE DEB skin -->
    <!-- css -->
    <link href=\"css/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"plugins/cubeportfolio/css/cubeportfolio.min.css\">
\t<link href=\"css/nivo-lightbox.css\" rel=\"stylesheet\" />
\t<link href=\"css/nivo-lightbox-theme/default/default.css\" rel=\"stylesheet\" type=\"text/css\" />
\t<link href=\"css/owl.carousel.css\" rel=\"stylesheet\" media=\"screen\" />
    <link href=\"css/owl.theme.css\" rel=\"stylesheet\" media=\"screen\" />
\t<link href=\"css/animate.css\" rel=\"stylesheet\" />
    <link href=\"css/style.css\" rel=\"stylesheet\">

\t<!-- boxed bg -->
\t<link id=\"bodybg\" href=\"bodybg/bg1.css\" rel=\"stylesheet\" type=\"text/css\" />
\t<!-- template skin -->
\t<link id=\"t-colors\" href=\"color/default.css\" rel=\"stylesheet\">
    <!-- TEMPLATE FIN skin -->
    ";
        // line 22
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        // line 23
        yield "</head>

    ";
        // line 25
        yield from         $this->loadTemplate("partials/menu.twig", "base.twig", 25)->unwrap()->yield($context);
        // line 26
        yield "
    ";
        // line 27
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 33
        yield "
    ";
        // line 34
        yield from         $this->loadTemplate("partials/footer.twig", "base.twig", 34)->unwrap()->yield($context);
        // line 35
        yield "</html>

";
        return; yield '';
    }

    // line 22
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Mon Site";
        return; yield '';
    }

    // line 27
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        yield "    <div id=\"content\">
            ";
        // line 29
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 31
        yield "    </div>
    ";
        return; yield '';
    }

    // line 29
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "            ";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base.twig";
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
        return array (  112 => 29,  106 => 31,  104 => 29,  101 => 28,  97 => 27,  89 => 22,  82 => 35,  80 => 34,  77 => 33,  75 => 27,  72 => 26,  70 => 25,  66 => 23,  64 => 22,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
        
    <!-- TEMPLATE DEB skin -->
    <!-- css -->
    <link href=\"css/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"plugins/cubeportfolio/css/cubeportfolio.min.css\">
\t<link href=\"css/nivo-lightbox.css\" rel=\"stylesheet\" />
\t<link href=\"css/nivo-lightbox-theme/default/default.css\" rel=\"stylesheet\" type=\"text/css\" />
\t<link href=\"css/owl.carousel.css\" rel=\"stylesheet\" media=\"screen\" />
    <link href=\"css/owl.theme.css\" rel=\"stylesheet\" media=\"screen\" />
\t<link href=\"css/animate.css\" rel=\"stylesheet\" />
    <link href=\"css/style.css\" rel=\"stylesheet\">

\t<!-- boxed bg -->
\t<link id=\"bodybg\" href=\"bodybg/bg1.css\" rel=\"stylesheet\" type=\"text/css\" />
\t<!-- template skin -->
\t<link id=\"t-colors\" href=\"color/default.css\" rel=\"stylesheet\">
    <!-- TEMPLATE FIN skin -->
    {% block title %}Mon Site{% endblock %}
</head>

    {% include 'partials/menu.twig' %}

    {% block body %}
    <div id=\"content\">
            {% block content %}
            {% endblock %}
    </div>
    {% endblock %}

    {% include 'partials/footer.twig' %}
</html>

", "base.twig", "D:\\xampp\\htdocs\\Cabinet\\views\\base.twig");
    }
}
