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

/* users/listuser.twig */
class __TwigTemplate_c5639bc0ba67b64bc0fde3ff287ddcde extends Template
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
        $this->parent = $this->loadTemplate("base.twig", "users/listuser.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "    <title>Liste des utilisateurs</title>
";
        return; yield '';
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        yield "    <h1>Liste des Utilisateurs</h1>

    <section id=\"boxes\" class=\"home-section paddingtop-120\">
        <div class=\"container\">
            <div class=\"row\">
                <a href=\"/edituser\" class=\"btn btn-primary\">Ajouter un utilisateur</a>
                ";
        // line 14
        if ((array_key_exists("users", $context) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["users"] ?? null)) > 0))) {
            // line 15
            yield "                    <div class=\"table-responsive\">
                        <table class=\"table table-bordered table-striped\">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nom</th>
                                    <th>Prénom</th>
                                    <th>Email</th>
                                    <th>Date de Naissance</th>
                                    <th>Admin</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["users"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 30
                yield "                                    <tr>
                                        <td>";
                // line 31
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 31), "html", null, true);
                yield "</td>
                                        <td>";
                // line 32
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "lastname", [], "any", false, false, false, 32), "html", null, true);
                yield "</td>
                                        <td>";
                // line 33
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "firstname", [], "any", false, false, false, 33), "html", null, true);
                yield "</td>
                                        <td>";
                // line 34
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 34), "html", null, true);
                yield "</td>
                                        <td>";
                // line 35
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "birthday", [], "any", false, false, false, 35), "html", null, true);
                yield "</td>
                                        <td>";
                // line 36
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isAdmin", [], "any", false, false, false, 36) == 1)) ? ("Oui") : ("Non"));
                yield "</td>
                                        <td>
                                            <form method=\"post\" action=\"/edituser/";
                // line 38
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 38), "html", null, true);
                yield "\" style=\"display:inline;\">
                                                <button type=\"submit\" class=\"btn btn-primary\">Modifier</button>
                                            </form>
                                            <form method=\"post\" action=\"/deleteuser/";
                // line 41
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 41), "html", null, true);
                yield "\" style=\"display:inline;\">
                                                <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
                                            </form>
                                        </td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            yield "                            </tbody>
                        </table>
                    </div>
                ";
        } else {
            // line 51
            yield "                    <p>Aucun utilisateur disponible.</p>
                ";
        }
        // line 53
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
        return "users/listuser.twig";
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
        return array (  147 => 53,  143 => 51,  137 => 47,  125 => 41,  119 => 38,  114 => 36,  110 => 35,  106 => 34,  102 => 33,  98 => 32,  94 => 31,  91 => 30,  87 => 29,  71 => 15,  69 => 14,  61 => 8,  57 => 7,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.twig\" %}

{% block title %}
    <title>Liste des utilisateurs</title>
{% endblock %}

{% block body %}
    <h1>Liste des Utilisateurs</h1>

    <section id=\"boxes\" class=\"home-section paddingtop-120\">
        <div class=\"container\">
            <div class=\"row\">
                <a href=\"/edituser\" class=\"btn btn-primary\">Ajouter un utilisateur</a>
                {% if users is defined and users|length > 0 %}
                    <div class=\"table-responsive\">
                        <table class=\"table table-bordered table-striped\">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nom</th>
                                    <th>Prénom</th>
                                    <th>Email</th>
                                    <th>Date de Naissance</th>
                                    <th>Admin</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for user in users %}
                                    <tr>
                                        <td>{{ user.id }}</td>
                                        <td>{{ user.lastname }}</td>
                                        <td>{{ user.firstname }}</td>
                                        <td>{{ user.email }}</td>
                                        <td>{{ user.birthday }}</td>
                                        <td>{{ user.isAdmin == 1 ? 'Oui' : 'Non' }}</td>
                                        <td>
                                            <form method=\"post\" action=\"/edituser/{{ user.id }}\" style=\"display:inline;\">
                                                <button type=\"submit\" class=\"btn btn-primary\">Modifier</button>
                                            </form>
                                            <form method=\"post\" action=\"/deleteuser/{{ user.id }}\" style=\"display:inline;\">
                                                <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
                                            </form>
                                        </td>
                                    </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    </div>
                {% else %}
                    <p>Aucun utilisateur disponible.</p>
                {% endif %}
            </div>
        </div>
    </section>
{% endblock %}
", "users/listuser.twig", "D:\\xampp\\htdocs\\Cabinet\\views\\users\\listuser.twig");
    }
}
