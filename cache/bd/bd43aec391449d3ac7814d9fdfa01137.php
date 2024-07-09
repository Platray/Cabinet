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

/* hours/edithour.twig */
class __TwigTemplate_3d63ef865e957cd2f8a47bd42732fd6b extends Template
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
        $this->parent = $this->loadTemplate("base.twig", "hours/edithour.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "    <title>Modifier Horaire</title>
";
        return; yield '';
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        yield "    <h1>Modifier Horaire</h1>

    <section id=\"intro\" class=\"intro\">
        <div class=\"intro-content\">
            <div class=\"container\">
                <div class=\"wow fadeInDown\" data-wow-offset=\"0\" data-wow-delay=\"0.1s\">
                    <h2 class=\"h-ultra\">Modifier l'horaire</h2>
                </div>

                <div class=\"login-wrap\">
                    <div class=\"login-html\">
                        <div class=\"login-form\">
                            <form id=\"hourForm\" method=\"post\" action=\"/savehour/";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hour"] ?? null), "id", [], "any", false, false, false, 20), "html", null, true);
        yield "\">
                                <label>Jour</label>
                                <p>";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hour"] ?? null), "day", [], "any", false, false, false, 22), "html", null, true);
        yield "</p> <!-- Affichage du jour sous forme de texte -->

                                <label>Ouverture</label>
                                <input id=\"open\" name=\"open\" type=\"time\" class=\"input\" value=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hour"] ?? null), "open", [], "any", false, false, false, 25), "html", null, true);
        yield "\">

                                <label>Fermeture</label>
                                <input id=\"close\" name=\"close\" type=\"time\" class=\"input\" value=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hour"] ?? null), "close", [], "any", false, false, false, 28), "html", null, true);
        yield "\">

                                <label for=\"isOpen\">Ouvert :</label>
                                <select id=\"isOpen\" name=\"isOpen\">
                                    <option value=\"1\" ";
        // line 32
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["hour"] ?? null), "isOpen", [], "any", false, false, false, 32) == 1)) ? ("selected") : (""));
        yield ">OUVERT</option>
                                    <option value=\"0\" ";
        // line 33
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["hour"] ?? null), "isOpen", [], "any", false, false, false, 33) == 0)) ? ("selected") : (""));
        yield ">FERME</option>
                                </select>

                                <input type=\"hidden\" name=\"id\" value=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hour"] ?? null), "id", [], "any", false, false, false, 36), "html", null, true);
        yield "\">
                                <input type=\"submit\" class=\"button\" value=\"Enregistrer\">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.getElementById('hourForm').addEventListener('submit', function(event) {
            var open = document.getElementById('open').value;
            var close = document.getElementById('close').value;

            if (open >= close) {
                alert(\"L'heure d'ouverture doit être inférieure à l'heure de fermeture.\");
                event.preventDefault(); // Empêche la soumission du formulaire
            }
        });
    </script>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "hours/edithour.twig";
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
        return array (  109 => 36,  103 => 33,  99 => 32,  92 => 28,  86 => 25,  80 => 22,  75 => 20,  61 => 8,  57 => 7,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.twig\" %}

{% block title %}
    <title>Modifier Horaire</title>
{% endblock %}

{% block body %}
    <h1>Modifier Horaire</h1>

    <section id=\"intro\" class=\"intro\">
        <div class=\"intro-content\">
            <div class=\"container\">
                <div class=\"wow fadeInDown\" data-wow-offset=\"0\" data-wow-delay=\"0.1s\">
                    <h2 class=\"h-ultra\">Modifier l'horaire</h2>
                </div>

                <div class=\"login-wrap\">
                    <div class=\"login-html\">
                        <div class=\"login-form\">
                            <form id=\"hourForm\" method=\"post\" action=\"/savehour/{{ hour.id }}\">
                                <label>Jour</label>
                                <p>{{ hour.day }}</p> <!-- Affichage du jour sous forme de texte -->

                                <label>Ouverture</label>
                                <input id=\"open\" name=\"open\" type=\"time\" class=\"input\" value=\"{{ hour.open }}\">

                                <label>Fermeture</label>
                                <input id=\"close\" name=\"close\" type=\"time\" class=\"input\" value=\"{{ hour.close }}\">

                                <label for=\"isOpen\">Ouvert :</label>
                                <select id=\"isOpen\" name=\"isOpen\">
                                    <option value=\"1\" {{ hour.isOpen == 1 ? 'selected' : '' }}>OUVERT</option>
                                    <option value=\"0\" {{ hour.isOpen == 0 ? 'selected' : '' }}>FERME</option>
                                </select>

                                <input type=\"hidden\" name=\"id\" value=\"{{ hour.id }}\">
                                <input type=\"submit\" class=\"button\" value=\"Enregistrer\">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.getElementById('hourForm').addEventListener('submit', function(event) {
            var open = document.getElementById('open').value;
            var close = document.getElementById('close').value;

            if (open >= close) {
                alert(\"L'heure d'ouverture doit être inférieure à l'heure de fermeture.\");
                event.preventDefault(); // Empêche la soumission du formulaire
            }
        });
    </script>
{% endblock %}
", "hours/edithour.twig", "D:\\xampp\\htdocs\\Cabinet\\views\\hours\\edithour.twig");
    }
}
