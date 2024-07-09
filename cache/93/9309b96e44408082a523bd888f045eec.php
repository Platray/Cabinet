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
        // line 1
        return "base.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.twig", "blog.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "    <title>Blog</title>
";
        return; yield '';
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        yield "<style>
    .card {
        display: flex;
        flex-direction: row;
        border: none;
        transition: transform 0.5s;
        margin-bottom: 20px;
    }

    .card-img-wrapper {
        flex: 0 0 200px; /* Largeur fixe pour l'image */
        height: 200px; /* Hauteur fixe pour l'image */
        overflow: hidden;
    }

    .card-img-left {
        width: 100%;
        height: 100%;
        object-fit: cover; /* Assure que l'image couvre toute la zone */
        transition: opacity 0.5s;
    }

    .card-body {
        flex: 1;
        padding: 20px;
        position: relative;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .card-title {
        font-size: 1.25rem;
        margin-bottom: 0.75rem;
    }

    .card-text {
        flex: 1;
        margin-bottom: 0;
    }

    .pagination {
        margin-top: 20px;
    }

    .pagination .page-item.active .page-link {
        background-color: #007bff;
        border-color: #007bff;
        color: white;
    }

    .pagination .page-link {
        color: #007bff;
    }

    .pagination .page-link:hover {
        color: #0056b3;
    }
</style>
<br><br><br><br><br>
<section id=\"blog\" class=\"home-section paddingtop-80\">
    <div class=\"container\">
        ";
        // line 70
        if (($context["articles"] ?? null)) {
            // line 71
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), ($context["articles"] ?? null), 0, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 72
                yield "                <div class=\"row mb-4\">
                    <div class=\"col-md-12\">
                        <div class=\"card d-flex flex-row\">
                            <div class=\"card-img-wrapper\">
                                <img src=\"/img/";
                // line 76
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "image", [], "any", false, false, false, 76), "html", null, true);
                yield "\" class=\"card-img-left\" alt=\"Image de l'article\">
                            </div>
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">";
                // line 79
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 79), "html", null, true);
                yield "</h5>
                                <p class=\"card-text\">";
                // line 80
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "content", [], "any", false, false, false, 80), "html", null, true);
                yield "</p>
                            </div>
                        </div>
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            yield "        ";
        } else {
            // line 87
            yield "            <div class=\"row\">
                <div class=\"col-md-12\">
                    <p>Aucun article disponible.</p>
                </div>
            </div>
        ";
        }
        // line 93
        yield "        
        <!-- Pagination -->
        ";
        // line 95
        if ((($context["total_pages"] ?? null) > 1)) {
            // line 96
            yield "            <div class=\"row\">
                <div class=\"col-md-12 text-center\">
                    <nav aria-label=\"Page navigation\">
                        <ul class=\"pagination justify-content-center\">
                            ";
            // line 100
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, ($context["total_pages"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 101
                yield "                                <li class=\"page-item ";
                if (($context["page"] == ($context["current_page"] ?? null))) {
                    yield "active";
                }
                yield "\">
                                    <a class=\"page-link\" href=\"/actualites/";
                // line 102
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                yield "</a>
                                </li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 105
            yield "                        </ul>
                    </nav>
                </div>
            </div>
        ";
        }
        // line 110
        yield "    </div>
</section>

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
        return array (  212 => 110,  205 => 105,  194 => 102,  187 => 101,  183 => 100,  177 => 96,  175 => 95,  171 => 93,  163 => 87,  160 => 86,  148 => 80,  144 => 79,  138 => 76,  132 => 72,  127 => 71,  125 => 70,  61 => 8,  57 => 7,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.twig' %}

{% block title %}
    <title>Blog</title>
{% endblock %}

{% block body %}
<style>
    .card {
        display: flex;
        flex-direction: row;
        border: none;
        transition: transform 0.5s;
        margin-bottom: 20px;
    }

    .card-img-wrapper {
        flex: 0 0 200px; /* Largeur fixe pour l'image */
        height: 200px; /* Hauteur fixe pour l'image */
        overflow: hidden;
    }

    .card-img-left {
        width: 100%;
        height: 100%;
        object-fit: cover; /* Assure que l'image couvre toute la zone */
        transition: opacity 0.5s;
    }

    .card-body {
        flex: 1;
        padding: 20px;
        position: relative;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .card-title {
        font-size: 1.25rem;
        margin-bottom: 0.75rem;
    }

    .card-text {
        flex: 1;
        margin-bottom: 0;
    }

    .pagination {
        margin-top: 20px;
    }

    .pagination .page-item.active .page-link {
        background-color: #007bff;
        border-color: #007bff;
        color: white;
    }

    .pagination .page-link {
        color: #007bff;
    }

    .pagination .page-link:hover {
        color: #0056b3;
    }
</style>
<br><br><br><br><br>
<section id=\"blog\" class=\"home-section paddingtop-80\">
    <div class=\"container\">
        {% if articles %}
            {% for article in articles[:5] %}
                <div class=\"row mb-4\">
                    <div class=\"col-md-12\">
                        <div class=\"card d-flex flex-row\">
                            <div class=\"card-img-wrapper\">
                                <img src=\"/img/{{ article.image }}\" class=\"card-img-left\" alt=\"Image de l'article\">
                            </div>
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">{{ article.title }}</h5>
                                <p class=\"card-text\">{{ article.content }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            {% endfor %}
        {% else %}
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <p>Aucun article disponible.</p>
                </div>
            </div>
        {% endif %}
        
        <!-- Pagination -->
        {% if total_pages > 1 %}
            <div class=\"row\">
                <div class=\"col-md-12 text-center\">
                    <nav aria-label=\"Page navigation\">
                        <ul class=\"pagination justify-content-center\">
                            {% for page in range(1, total_pages) %}
                                <li class=\"page-item {% if page == current_page %}active{% endif %}\">
                                    <a class=\"page-link\" href=\"/actualites/{{ page }}\">{{ page }}</a>
                                </li>
                            {% endfor %}
                        </ul>
                    </nav>
                </div>
            </div>
        {% endif %}
    </div>
</section>

{% endblock %}
", "blog.twig", "D:\\xampp\\htdocs\\Cabinet\\views\\blog.twig");
    }
}
