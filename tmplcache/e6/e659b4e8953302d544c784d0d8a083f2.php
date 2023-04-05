<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* login_error.html.twig */
class __TwigTemplate_683280f730fc85e6fdb0fcd1efa9e3f0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "master.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("master.html.twig", "login_error.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Login Error
";
    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "<div class=\"container mt-4\">
\t\t\t<div class=\"row justify-content-left\">
\t\t\t\t<div class=\"col-md-10 col-lg-12\">
\t<h2>Login Error</h2></br>
\t";
        // line 11
        if (($context["error"] ?? null)) {
            // line 12
            echo "\t\t<p>Your login attempt failed.</p></br>
\t\t<p>Please check your email and password and try again.</p></br></br>
\t";
        }
        // line 15
        echo "\t<a href=\"/login\" class=\"btn btn-primary btn-sm\">Try Again</a>
";
    }

    public function getTemplateName()
    {
        return "login_error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 15,  67 => 12,  65 => 11,  59 => 7,  55 => 6,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"master.html.twig\" %}

{% block title %}Login Error
{% endblock %}

{% block content %}
<div class=\"container mt-4\">
\t\t\t<div class=\"row justify-content-left\">
\t\t\t\t<div class=\"col-md-10 col-lg-12\">
\t<h2>Login Error</h2></br>
\t{% if error %}
\t\t<p>Your login attempt failed.</p></br>
\t\t<p>Please check your email and password and try again.</p></br></br>
\t{% endif %}
\t<a href=\"/login\" class=\"btn btn-primary btn-sm\">Try Again</a>
{% endblock %}
", "login_error.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/carrentalproject/templates/login_error.html.twig");
    }
}
