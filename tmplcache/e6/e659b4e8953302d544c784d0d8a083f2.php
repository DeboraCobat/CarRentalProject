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
        echo "Login Error";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "  <h2>Login Error</h2>
  ";
        // line 7
        if (($context["error"] ?? null)) {
            // line 8
            echo "        <p>Your login attempt failed. Please check your email and password and try again.</p>
    ";
        }
        // line 10
        echo "  <a href=\"/login\" class=\"btn btn-primary\">Try Again</a>
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
        return array (  67 => 10,  63 => 8,  61 => 7,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"master.html.twig\" %}

{% block title %}Login Error{% endblock %}

{% block content %}
  <h2>Login Error</h2>
  {% if error %}
        <p>Your login attempt failed. Please check your email and password and try again.</p>
    {% endif %}
  <a href=\"/login\" class=\"btn btn-primary\">Try Again</a>
{% endblock %}
", "login_error.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/carrentalproject/templates/login_error.html.twig");
    }
}
