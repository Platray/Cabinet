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

/* posts/editpost.twig */
class __TwigTemplate_2e3a39ec73d707a699ccda1482451acb extends Template
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
        $this->parent = $this->loadTemplate("base.twig", "posts/editpost.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        yield "    <title>";
        if (($context["post"] ?? null)) {
            yield "Modifier";
        } else {
            yield "Créer";
        }
        yield " une Actualité</title>
";
        return; yield '';
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        yield "    <h1>";
        if (($context["post"] ?? null)) {
            yield "Modifier";
        } else {
            yield "Créer";
        }
        yield " une Actualité</h1>

    <section id=\"intro\" class=\"intro\">
        <div class=\"intro-content\">
            <div class=\"container\">
                <div class=\"wow fadeInDown\" data-wow-offset=\"0\" data-wow-delay=\"0.1s\">
                    <h2 class=\"h-ultra\">";
        // line 14
        if (($context["post"] ?? null)) {
            yield "Modifier";
        } else {
            yield "Créer";
        }
        yield " une Actualité</h2>
                </div>

                <div class=\"row justify-content-center\">
                    <div class=\"col-md-8\">
                        <div class=\"card mt-4\">
                            <div class=\"card-body\">
                                <form method=\"post\" action=\"/posts/savepost\" enctype=\"multipart/form-data\">
                                    <div class=\"form-group\">
                                        <label for=\"title\">Titre</label>
                                        <input id=\"title\" name=\"title\" type=\"text\" class=\"form-control\" value=\"";
        // line 24
        (((CoreExtension::getAttribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", true, true, false, 24) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, false, 24)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, false, 24), "html", null, true)) : (yield ""));
        yield "\">
                                    </div>

                                    <div class=\"form-group\">
                                        <label for=\"content\">Contenu</label>
                                        <textarea id=\"content\" name=\"content\" class=\"form-control\" rows=\"5\">";
        // line 29
        (((CoreExtension::getAttribute($this->env, $this->source, ($context["post"] ?? null), "content", [], "any", true, true, false, 29) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["post"] ?? null), "content", [], "any", false, false, false, 29)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["post"] ?? null), "content", [], "any", false, false, false, 29), "html", null, true)) : (yield ""));
        yield "</textarea>
                                    </div>

                                    <div class=\"form-group\">
                                        <label for=\"image\">Image</label>
                                        <input id=\"image\" name=\"image\" type=\"file\" class=\"form-control-file\">
                                    </div>

                                    <input type=\"hidden\" name=\"id\" value=\"";
        // line 37
        (((CoreExtension::getAttribute($this->env, $this->source, ($context["post"] ?? null), "id", [], "any", true, true, false, 37) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["post"] ?? null), "id", [], "any", false, false, false, 37)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["post"] ?? null), "id", [], "any", false, false, false, 37), "html", null, true)) : (yield ""));
        yield "\">
                                    <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
        return "posts/editpost.twig";
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
        return array (  118 => 37,  107 => 29,  99 => 24,  82 => 14,  68 => 8,  64 => 7,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.twig\" %}

{% block title %}
    <title>{% if post %}Modifier{% else %}Créer{% endif %} une Actualité</title>
{% endblock %}

{% block body %}
    <h1>{% if post %}Modifier{% else %}Créer{% endif %} une Actualité</h1>

    <section id=\"intro\" class=\"intro\">
        <div class=\"intro-content\">
            <div class=\"container\">
                <div class=\"wow fadeInDown\" data-wow-offset=\"0\" data-wow-delay=\"0.1s\">
                    <h2 class=\"h-ultra\">{% if post %}Modifier{% else %}Créer{% endif %} une Actualité</h2>
                </div>

                <div class=\"row justify-content-center\">
                    <div class=\"col-md-8\">
                        <div class=\"card mt-4\">
                            <div class=\"card-body\">
                                <form method=\"post\" action=\"/posts/savepost\" enctype=\"multipart/form-data\">
                                    <div class=\"form-group\">
                                        <label for=\"title\">Titre</label>
                                        <input id=\"title\" name=\"title\" type=\"text\" class=\"form-control\" value=\"{{ post.title ?? '' }}\">
                                    </div>

                                    <div class=\"form-group\">
                                        <label for=\"content\">Contenu</label>
                                        <textarea id=\"content\" name=\"content\" class=\"form-control\" rows=\"5\">{{ post.content ?? '' }}</textarea>
                                    </div>

                                    <div class=\"form-group\">
                                        <label for=\"image\">Image</label>
                                        <input id=\"image\" name=\"image\" type=\"file\" class=\"form-control-file\">
                                    </div>

                                    <input type=\"hidden\" name=\"id\" value=\"{{ post.id ?? '' }}\">
                                    <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
{% endblock %}
", "posts/editpost.twig", "D:\\xampp\\htdocs\\Cabinet\\views\\posts\\editpost.twig");
    }
}
