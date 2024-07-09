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
            'styles' => [$this, 'block_styles'],
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
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
    ";
        // line 5
        yield from $this->unwrap()->yieldBlock('styles', $context, $blocks);
        // line 21
        yield "    <!-- TEMPLATE FIN skin -->
    ";
        // line 22
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        // line 23
        yield "</head>
<body>
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
        yield "
    ";
        // line 36
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 43
        yield "</body>
</html>
";
        return; yield '';
    }

    // line 5
    public function block_styles($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        yield "    <!-- css -->
    <link href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["BASE_URL"] ?? null), "html", null, true);
        yield "css/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["BASE_URL"] ?? null), "html", null, true);
        yield "font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["BASE_URL"] ?? null), "html", null, true);
        yield "plugins/cubeportfolio/css/cubeportfolio.min.css\">
    <link href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["BASE_URL"] ?? null), "html", null, true);
        yield "css/nivo-lightbox.css\" rel=\"stylesheet\" />
    <link href=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["BASE_URL"] ?? null), "html", null, true);
        yield "css/nivo-lightbox-theme/default/default.css\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["BASE_URL"] ?? null), "html", null, true);
        yield "css/owl.carousel.css\" rel=\"stylesheet\" media=\"screen\" />
    <link href=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["BASE_URL"] ?? null), "html", null, true);
        yield "css/owl.theme.css\" rel=\"stylesheet\" media=\"screen\" />
    <link href=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["BASE_URL"] ?? null), "html", null, true);
        yield "css/animate.css\" rel=\"stylesheet\" />
    <link href=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["BASE_URL"] ?? null), "html", null, true);
        yield "css/style.css\" rel=\"stylesheet\">
    <!-- boxed bg -->
    <link id=\"bodybg\" href=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["BASE_URL"] ?? null), "html", null, true);
        yield "bodybg/bg1.css\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- template skin -->
    <link id=\"t-colors\" href=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["BASE_URL"] ?? null), "html", null, true);
        yield "color/default.css\" rel=\"stylesheet\">
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
        yield "        ";
        return; yield '';
    }

    // line 36
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        yield "    <!-- scripts communs à toutes les pages -->
    <script src=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["JS_URL"] ?? null), "html", null, true);
        yield "js/jquery.min.js\"></script>
    <script src=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["JS_URL"] ?? null), "html", null, true);
        yield "js/bootstrap.min.js\"></script>
    <!-- script spécifique à la page de réservation -->
    <script src=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["JS_URL"] ?? null), "html", null, true);
        yield "js/booking.js\"></script>
    ";
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
        return array (  187 => 41,  182 => 39,  178 => 38,  175 => 37,  171 => 36,  163 => 29,  157 => 31,  155 => 29,  152 => 28,  148 => 27,  140 => 22,  133 => 19,  128 => 17,  123 => 15,  119 => 14,  115 => 13,  111 => 12,  107 => 11,  103 => 10,  99 => 9,  95 => 8,  91 => 7,  88 => 6,  84 => 5,  77 => 43,  75 => 36,  72 => 35,  70 => 34,  67 => 33,  65 => 27,  62 => 26,  60 => 25,  56 => 23,  54 => 22,  51 => 21,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <!-- TEMPLATE DEB skin -->
    {% block styles %}
    <!-- css -->
    <link href=\"{{ BASE_URL }}css/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"{{ BASE_URL }}font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ BASE_URL }}plugins/cubeportfolio/css/cubeportfolio.min.css\">
    <link href=\"{{ BASE_URL }}css/nivo-lightbox.css\" rel=\"stylesheet\" />
    <link href=\"{{ BASE_URL }}css/nivo-lightbox-theme/default/default.css\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ BASE_URL }}css/owl.carousel.css\" rel=\"stylesheet\" media=\"screen\" />
    <link href=\"{{ BASE_URL }}css/owl.theme.css\" rel=\"stylesheet\" media=\"screen\" />
    <link href=\"{{ BASE_URL }}css/animate.css\" rel=\"stylesheet\" />
    <link href=\"{{ BASE_URL }}css/style.css\" rel=\"stylesheet\">
    <!-- boxed bg -->
    <link id=\"bodybg\" href=\"{{ BASE_URL }}bodybg/bg1.css\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- template skin -->
    <link id=\"t-colors\" href=\"{{ BASE_URL }}color/default.css\" rel=\"stylesheet\">
    {% endblock %}
    <!-- TEMPLATE FIN skin -->
    {% block title %}Mon Site{% endblock %}
</head>
<body>
    {% include 'partials/menu.twig' %}

    {% block body %}
    <div id=\"content\">
        {% block content %}
        {% endblock %}
    </div>
    {% endblock %}

    {% include 'partials/footer.twig' %}

    {% block javascripts %}
    <!-- scripts communs à toutes les pages -->
    <script src=\"{{ JS_URL }}js/jquery.min.js\"></script>
    <script src=\"{{ JS_URL }}js/bootstrap.min.js\"></script>
    <!-- script spécifique à la page de réservation -->
    <script src=\"{{ JS_URL }}js/booking.js\"></script>
    {% endblock %}
</body>
</html>
", "base.twig", "D:\\xampp\\htdocs\\Cabinet\\views\\base.twig");
    }
}
