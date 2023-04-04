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
        echo "Login Page
";
    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "
\t<body>
\t\t<div class=\"container\">
\t\t\t<div class=\"row justify-content-left mt-5 mb-5\">
\t\t\t\t<div class=\"col-md-8 col-lg-6\">
\t\t\t\t\t<h1>Login</h1>
\t\t\t\t\t";
        // line 13
        if (array_key_exists("message", $context)) {
            // line 14
            echo "\t\t\t\t\t\t<p>";
            echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
            echo "</p>
\t\t\t\t\t";
        }
        // line 16
        echo "\t\t\t\t\t<div class=\"form-group- \">
\t\t\t\t\t\t<form method=\"post\" action=\"/login\">
\t\t\t\t\t\t\t<label for=\"email\">Email:</label><br>
\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\"><br>

\t\t\t\t\t\t\t<label for=\"password\">Password:</label><br>
\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" id=\"password\" name=\"password\"><br>
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary btn-sm\">Log in</button>


\t\t\t\t\t\t\t<hr style=\"margin-top: 1rem; margin-bottom: 1rem;\">

\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center\">
\t\t\t\t\t\t\t\t<a href=\"/resetpassword\">Forgot password?</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>


\t\t</div>
\t</body>
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
        return array (  75 => 16,  69 => 14,  67 => 13,  59 => 7,  55 => 6,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"master.html.twig\" %}

{% block title %}Login Page
{% endblock %}

{% block content %}

\t<body>
\t\t<div class=\"container\">
\t\t\t<div class=\"row justify-content-left mt-5 mb-5\">
\t\t\t\t<div class=\"col-md-8 col-lg-6\">
\t\t\t\t\t<h1>Login</h1>
\t\t\t\t\t{% if message is defined %}
\t\t\t\t\t\t<p>{{ message }}</p>
\t\t\t\t\t{% endif %}
\t\t\t\t\t<div class=\"form-group- \">
\t\t\t\t\t\t<form method=\"post\" action=\"/login\">
\t\t\t\t\t\t\t<label for=\"email\">Email:</label><br>
\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\"><br>

\t\t\t\t\t\t\t<label for=\"password\">Password:</label><br>
\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" id=\"password\" name=\"password\"><br>
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary btn-sm\">Log in</button>


\t\t\t\t\t\t\t<hr style=\"margin-top: 1rem; margin-bottom: 1rem;\">

\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center\">
\t\t\t\t\t\t\t\t<a href=\"/resetpassword\">Forgot password?</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>


\t\t</div>
\t</body>
{% endblock %}
", "login.html.twig", "C:\\xampp\\htdocs\\CarRentalProject\\templates\\login.html.twig");
    }
}
