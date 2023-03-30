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

/* login.html.twig */
class __TwigTemplate_d2cb4cce40f5606036eb83bcfb66fa1b extends Template
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
        $this->parent = $this->loadTemplate("master.html.twig", "login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Login Page";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
<body>
  <h1>Login</h1>
  ";
        // line 9
        if (array_key_exists("message", $context)) {
            // line 10
            echo "    <p>";
            echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
            echo "</p>
  ";
        }
        // line 12
        echo "  <form method=\"post\" action=\"/login\">
    <label for=\"email\">Email:</label><br>
    <input type=\"email\" id=\"email\" name=\"email\"><br>

    <label for=\"password\">Password:</label><br>
    <input type=\"password\" id=\"password\" name=\"password\"><br>

    <input type=\"submit\" value=\"Log in\"><br>
  </form><br>
</body><br>

";
    }

    public function getTemplateName()
    {
        return "login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 12,  65 => 10,  63 => 9,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"master.html.twig\" %}

{% block title %}Login Page{% endblock %}

{% block content %}

<body>
  <h1>Login</h1>
  {% if message is defined %}
    <p>{{ message }}</p>
  {% endif %}
  <form method=\"post\" action=\"/login\">
    <label for=\"email\">Email:</label><br>
    <input type=\"email\" id=\"email\" name=\"email\"><br>

    <label for=\"password\">Password:</label><br>
    <input type=\"password\" id=\"password\" name=\"password\"><br>

    <input type=\"submit\" value=\"Log in\"><br>
  </form><br>
</body><br>

{% endblock %}
", "login.html.twig", "C:\\xampp\\htdocs\\CarRentalProject\\templates\\login.html.twig");
    }
}
