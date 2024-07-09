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

/* posts/listpost.twig */
class __TwigTemplate_8b60c307892cd441742a4adb7d807a34 extends Template
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
        $this->parent = $this->loadTemplate("base.twig", "posts/listpost.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "    <title>Liste des Actualités</title>
";
        return; yield '';
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        yield "    <h1>Liste des Actualités</h1>

    <section id=\"boxes\" class=\"home-section paddingtop-120\">
        <div class=\"container\">
            <div class=\"row mb-3\">
                <div class=\"col-md-12\">
                    <a href=\"/posts/editpost\" class=\"btn btn-primary\">Créer un nouvel article</a>
                </div>
            </div>
            <div class=\"row\">
                ";
        // line 18
        if ((array_key_exists("posts", $context) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["posts"] ?? null)) > 0))) {
            // line 19
            yield "                    <div class=\"table-responsive\">
                        <table class=\"table table-bordered table-striped\">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Titre</th>
                                    <th>Modifié le</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["posts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 31
                yield "                                    <tr>
                                        <td>";
                // line 32
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 32), "html", null, true);
                yield "</td>
                                        <td>";
                // line 33
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 33), "html", null, true);
                yield "</td>
                                        <td>";
                // line 34
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "updated_at", [], "any", false, false, false, 34), "html", null, true);
                yield "</td>
                                        <td>
                                            <a href=\"/posts/editpost/";
                // line 36
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 36), "html", null, true);
                yield "\" class=\"btn btn-primary\">Modifier</a>
                                            <form method=\"post\" action=\"/posts/deletepost/";
                // line 37
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 37), "html", null, true);
                yield "\" style=\"display:inline;\">
                                                <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
                                            </form>
                                        </td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            yield "                            </tbody>
                        </table>
                    </div>
                ";
        } else {
            // line 47
            yield "                    <p>Aucun article disponible.</p>
                ";
        }
        // line 49
        yield "            </div>
        </div>
    </section>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "posts/listpost.twig";
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
        return array (  134 => 49,  130 => 47,  124 => 43,  112 => 37,  108 => 36,  103 => 34,  99 => 33,  95 => 32,  92 => 31,  88 => 30,  75 => 19,  73 => 18,  61 => 8,  57 => 7,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.twig\" %}

{% block title %}
    <title>Liste des Actualités</title>
{% endblock %}

{% block body %}
    <h1>Liste des Actualités</h1>

    <section id=\"boxes\" class=\"home-section paddingtop-120\">
        <div class=\"container\">
            <div class=\"row mb-3\">
                <div class=\"col-md-12\">
                    <a href=\"/posts/editpost\" class=\"btn btn-primary\">Créer un nouvel article</a>
                </div>
            </div>
            <div class=\"row\">
                {% if posts is defined and posts|length > 0 %}
                    <div class=\"table-responsive\">
                        <table class=\"table table-bordered table-striped\">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Titre</th>
                                    <th>Modifié le</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for post in posts %}
                                    <tr>
                                        <td>{{ post.id }}</td>
                                        <td>{{ post.title }}</td>
                                        <td>{{ post.updated_at }}</td>
                                        <td>
                                            <a href=\"/posts/editpost/{{ post.id }}\" class=\"btn btn-primary\">Modifier</a>
                                            <form method=\"post\" action=\"/posts/deletepost/{{ post.id }}\" style=\"display:inline;\">
                                                <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
                                            </form>
                                        </td>
                                    </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    </div>
                {% else %}
                    <p>Aucun article disponible.</p>
                {% endif %}
            </div>
        </div>
    </section>
{% endblock %}
", "posts/listpost.twig", "D:\\xampp\\htdocs\\Cabinet\\views\\posts\\listpost.twig");
    }
}
