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

/* users/edituser.twig */
class __TwigTemplate_885ea883ec6ba74276564ea92fb708d2 extends Template
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
        $this->parent = $this->loadTemplate("base.twig", "users/edituser.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "    <title>Modifier Utilisateur</title>
";
        return; yield '';
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        yield "    <h1>Modifier Utilisateur</h1>

    <section id=\"intro\" class=\"intro\">
        <div class=\"intro-content\">
            <div class=\"container\">
                <div class=\"wow fadeInDown\" data-wow-offset=\"0\" data-wow-delay=\"0.1s\">
                    <h2 class=\"h-ultra\">Modifier l'utilisateur</h2>
                </div>

                <div class=\"login-wrap\">
                    <div class=\"login-html\">
                        
                        <div class=\"login-form\">
                            
                            <form method=\"post\" action=\"/saveuser/";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 22), "html", null, true);
        yield "\">
                                
                                    <label >Nom</label>
                                    <input id=\"lastname\" name=\"lastname\" type=\"text\" class=\"input\" value=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "lastname", [], "any", false, false, false, 25), "html", null, true);
        yield "\">
                                
                                
                                    <label >Prénom</label>
                                    <input id=\"firstname\" name=\"firstname\" type=\"text\" class=\"input\" value=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "firstname", [], "any", false, false, false, 29), "html", null, true);
        yield "\">
                                
                                
                                    <label for=\"isAdmin\">Admin :</label>
                                    <input type=\"checkbox\" id=\"isAdmin\" name=\"isAdmin\">
                                
                                
                                    <input type=\"hidden\" name=\"id\" value=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 36), "html", null, true);
        yield "\">
                                    <input type=\"submit\" class=\"button\" value=\"Enregistrer\">
                                
                            </form>

                            
                            
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
        return "users/edituser.twig";
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
        return array (  100 => 36,  90 => 29,  83 => 25,  77 => 22,  61 => 8,  57 => 7,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.twig\" %}

{% block title %}
    <title>Modifier Utilisateur</title>
{% endblock %}

{% block body %}
    <h1>Modifier Utilisateur</h1>

    <section id=\"intro\" class=\"intro\">
        <div class=\"intro-content\">
            <div class=\"container\">
                <div class=\"wow fadeInDown\" data-wow-offset=\"0\" data-wow-delay=\"0.1s\">
                    <h2 class=\"h-ultra\">Modifier l'utilisateur</h2>
                </div>

                <div class=\"login-wrap\">
                    <div class=\"login-html\">
                        
                        <div class=\"login-form\">
                            
                            <form method=\"post\" action=\"/saveuser/{{ user.id }}\">
                                
                                    <label >Nom</label>
                                    <input id=\"lastname\" name=\"lastname\" type=\"text\" class=\"input\" value=\"{{ user.lastname }}\">
                                
                                
                                    <label >Prénom</label>
                                    <input id=\"firstname\" name=\"firstname\" type=\"text\" class=\"input\" value=\"{{ user.firstname }}\">
                                
                                
                                    <label for=\"isAdmin\">Admin :</label>
                                    <input type=\"checkbox\" id=\"isAdmin\" name=\"isAdmin\">
                                
                                
                                    <input type=\"hidden\" name=\"id\" value=\"{{ user.id }}\">
                                    <input type=\"submit\" class=\"button\" value=\"Enregistrer\">
                                
                            </form>

                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
{% endblock %}
", "users/edituser.twig", "D:\\xampp\\htdocs\\Cabinet\\views\\users\\edituser.twig");
    }
}
