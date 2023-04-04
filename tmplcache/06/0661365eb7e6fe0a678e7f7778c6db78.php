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

/* resetpassword.html.twig */
class __TwigTemplate_8bec0b8cbaeed8984dfc1dcbf03d37fe extends Template
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
        $this->parent = $this->loadTemplate("master.html.twig", "resetpassword.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Reset Password
";
    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "\t<div class=\"container\">
\t\t<div class=\"row justify-content-left mt-5 mb-5\">
\t\t\t<div class=\"col-md-8 col-lg-6\">
\t\t\t\t<h1>Reset Password</h1>

\t\t\t\t";
        // line 12
        if (array_key_exists("message", $context)) {
            // line 13
            echo "\t\t\t\t\t<p>";
            echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
            echo "</p>
\t\t\t\t";
        }
        // line 15
        echo "
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<form method=\"post\" action=\"/resetpassword\">
\t\t\t\t\t\t<label for=\"token\">Token:</label><br>
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"token\" name=\"token\"><br>


\t\t\t\t\t\t<label for=\"password\">New Password:</label><br>
\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" id=\"password\" name=\"password\"><br>

\t\t\t\t\t\t<label for=\"password_confirm\">Confirm New Password:</label><br>
\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" id=\"password_confirm\" name=\"password_confirm\"><br>

\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary btn-sm\">Reset Password</button>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "resetpassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 15,  68 => 13,  66 => 12,  59 => 7,  55 => 6,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"master.html.twig\" %}

{% block title %}Reset Password
{% endblock %}

{% block content %}
\t<div class=\"container\">
\t\t<div class=\"row justify-content-left mt-5 mb-5\">
\t\t\t<div class=\"col-md-8 col-lg-6\">
\t\t\t\t<h1>Reset Password</h1>

\t\t\t\t{% if message is defined %}
\t\t\t\t\t<p>{{ message }}</p>
\t\t\t\t{% endif %}

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<form method=\"post\" action=\"/resetpassword\">
\t\t\t\t\t\t<label for=\"token\">Token:</label><br>
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"token\" name=\"token\"><br>


\t\t\t\t\t\t<label for=\"password\">New Password:</label><br>
\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" id=\"password\" name=\"password\"><br>

\t\t\t\t\t\t<label for=\"password_confirm\">Confirm New Password:</label><br>
\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" id=\"password_confirm\" name=\"password_confirm\"><br>

\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary btn-sm\">Reset Password</button>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}
", "resetpassword.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/carrentalproject/templates/resetpassword.html.twig");
    }
}
