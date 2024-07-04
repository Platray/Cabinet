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

/* blog.twig */
class __TwigTemplate_0782229bc949299f2fa732365f671c34 extends Template
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
        // line 3
        return "base.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.twig", "blog.twig", 3);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "    <title>page Actualites</title>
";
        return; yield '';
    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        yield "
";
        // line 11
        yield from         $this->loadTemplate("partials/menu.twig", "blog.twig", 11)->unwrap()->yield($context);
        // line 12
        yield "
";
        // line 18
        yield "
<!DOCTYPE html>

    <h1>Blog</h1>
    <ul>
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 24
            yield "            <li><a href=\"/blog/view?id= post.id\"> htmlspecialchars()post.title</a></li>
            <li> htmlspecialchars()post.content</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        yield "    </ul>


";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "blog.twig";
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
        return array (  88 => 27,  80 => 24,  76 => 23,  69 => 18,  66 => 12,  64 => 11,  61 => 10,  57 => 9,  48 => 5,  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("

{% extends 'base.twig' %}

{% block title %}
    <title>page Actualites</title>
{% endblock %}

{% block body %}

{% include 'partials/menu.twig' %}

{# {% for post in posts %}

<p>{{post.title}}</p>

{% endfor %} #}

<!DOCTYPE html>

    <h1>Blog</h1>
    <ul>
        {% for post in posts %}
            <li><a href=\"/blog/view?id= post.id\"> htmlspecialchars()post.title</a></li>
            <li> htmlspecialchars()post.content</li>
        {% endfor %}
    </ul>


{% endblock %}", "blog.twig", "D:\\xampp\\htdocs\\Cabinet\\views\\blog.twig");
    }
}
