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

/* register.twig */
class __TwigTemplate_3d09df5dd3019338d9d81514fc516c56 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'head' => [$this, 'block_head'],
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
        $this->parent = $this->loadTemplate("base.twig", "register.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "    <title>Page Resgister</title>
";
        return; yield '';
    }

    // line 7
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Formulaire d'inscription</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        form {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: #f9f9f9;
        }
        label {
            display: block;
            margin-bottom: 8px;
        }
        input[type=\"text\"], input[type=\"email\"], input[type=\"date\"], input[type=\"checkbox\"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type=\"submit\"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type=\"submit\"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
";
        return; yield '';
    }

    // line 52
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 53
        yield "
";
        // line 76
        yield "


<section id=\"intro\" class=\"intro\"> <div class=\"intro-content\">

\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row d-flex-center\">

\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t<div class=\"form-wrapper\">
\t\t\t\t\t\t\t<div class=\"wow fadeInRight\" data-wow-duration=\"2s\" data-wow-delay=\"0.2s\">

\t\t\t\t\t\t\t\t<div class=\"panel panel-skin\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t\t<h3 class=\"panel-title\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-pencil-square-o\"></span>
\t\t\t\t\t\t\t\t\t\t\tCréer votre identifiant pour prendre rendez-vous !
\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t\t<form method=\"post\" action=\"/register\" role=\"form\" class=\"lead\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row d-flex-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-6 col-sm-6 col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Prenom</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"firstname\" id=\"firstname\" class=\"form-control input-md\" required>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-6 col-sm-6 col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Nom</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"lastname\" id=\"lastname\" class=\"form-control input-md\" required>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row d-flex-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-6 col-sm-6 col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Email</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"email\" name=\"email\" id=\"email\" class=\"form-control input-md\" required>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>

                                            <div class=\"row d-flex-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-6 col-sm-6 col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"password\">Password:</label>
                                                        <input type=\"password\" id=\"password\" name=\"password\" required>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-6 col-sm-6 col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"confirm_password\">Confirm Password:</label>
                                                        <input type=\"password\" id=\"confirm_password\" name=\"confirm_password\" required>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row d-flex-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"birthday\">Date de naissance :</label>
                                                <input type=\"date\" id=\"birthday\" name=\"birthday\" required>
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"isAdmin\">Administrateur :</label>
                                                <input type=\"checkbox\" id=\"isAdmin\" name=\"isAdmin\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row d-flex-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-skin btn-lg flex-right\">Inscription</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 144
        if (($context["error_message"] ?? null)) {
            // line 145
            yield "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row d-flex-center lead-footer\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"error-message\">";
            // line 148
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["error_message"] ?? null), "html", null, true);
            yield "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 152
        yield "\t\t\t\t\t\t\t\t\t\t\t<p class=\"lead-footer\"></p>
\t\t\t\t\t\t\t\t\t\t</form>


\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>


";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "register.twig";
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
        return array (  199 => 152,  192 => 148,  187 => 145,  185 => 144,  115 => 76,  112 => 53,  108 => 52,  58 => 7,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.twig' %}

{% block title %}
    <title>Page Resgister</title>
{% endblock %}

{% block head %}
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Formulaire d'inscription</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        form {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: #f9f9f9;
        }
        label {
            display: block;
            margin-bottom: 8px;
        }
        input[type=\"text\"], input[type=\"email\"], input[type=\"date\"], input[type=\"checkbox\"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type=\"submit\"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type=\"submit\"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
{% endblock %}

{% block body %}

{# 
<form action=\"/register\" method=\"post\">
    <label for=\"firstname\">Prénom :</label>
    <input type=\"text\" id=\"firstname\" name=\"firstname\" required>
    
    <label for=\"lastname\">Nom :</label>
    <input type=\"text\" id=\"lastname\" name=\"lastname\" required>
    
    <label for=\"email\">Email :</label>
    <input type=\"email\" id=\"email\" name=\"email\" required>

    

    <label for=\"confirm_password\">Confirm Password:</label>
    <input type=\"password\" id=\"confirm_password\" name=\"confirm_password\" required>
    
    
    
    
    
    <input type=\"submit\" value=\"Soumettre\">
</form> #}



<section id=\"intro\" class=\"intro\"> <div class=\"intro-content\">

\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row d-flex-center\">

\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t<div class=\"form-wrapper\">
\t\t\t\t\t\t\t<div class=\"wow fadeInRight\" data-wow-duration=\"2s\" data-wow-delay=\"0.2s\">

\t\t\t\t\t\t\t\t<div class=\"panel panel-skin\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t\t<h3 class=\"panel-title\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-pencil-square-o\"></span>
\t\t\t\t\t\t\t\t\t\t\tCréer votre identifiant pour prendre rendez-vous !
\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t\t<form method=\"post\" action=\"/register\" role=\"form\" class=\"lead\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row d-flex-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-6 col-sm-6 col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Prenom</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"firstname\" id=\"firstname\" class=\"form-control input-md\" required>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-6 col-sm-6 col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Nom</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"lastname\" id=\"lastname\" class=\"form-control input-md\" required>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row d-flex-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-6 col-sm-6 col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Email</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"email\" name=\"email\" id=\"email\" class=\"form-control input-md\" required>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>

                                            <div class=\"row d-flex-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-6 col-sm-6 col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"password\">Password:</label>
                                                        <input type=\"password\" id=\"password\" name=\"password\" required>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-6 col-sm-6 col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"confirm_password\">Confirm Password:</label>
                                                        <input type=\"password\" id=\"confirm_password\" name=\"confirm_password\" required>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row d-flex-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"birthday\">Date de naissance :</label>
                                                <input type=\"date\" id=\"birthday\" name=\"birthday\" required>
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"isAdmin\">Administrateur :</label>
                                                <input type=\"checkbox\" id=\"isAdmin\" name=\"isAdmin\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row d-flex-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-skin btn-lg flex-right\">Inscription</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t{% if error_message %}
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row d-flex-center lead-footer\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"error-message\">{{ error_message }}</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t<p class=\"lead-footer\"></p>
\t\t\t\t\t\t\t\t\t\t</form>


\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>


{% endblock %}", "register.twig", "D:\\xampp\\htdocs\\Cabinet\\views\\register.twig");
    }
}
