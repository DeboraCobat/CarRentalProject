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
        echo "Reset Password";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<div class=\"container\">
    <div class=\"row justify-content-center mt-5 mb-5\">
        <div class=\"col-md-8 col-lg-6\">
            <form method=\"post\" action=\"/resetpassword\">
                <div class=\"form-group\">
                    <label for=\"token\">Token:</label>
                    <input type=\"text\" id=\"token\" name=\"token\" class=\"form-control\">
                </div>
                <div class=\"form-group\">
                    <label for=\"password\">New Password:</label>
                    <input type=\"password\" id=\"password\" name=\"password\" class=\"form-control\">
                </div>
                <div class=\"form-group\">
                    <label for=\"confirm_password\">Confirm New Password:</label>
                    <input type=\"password\" id=\"confirm_password\" name=\"confirm_password\" class=\"form-control\">
                </div>
                ";
        // line 22
        if (($context["error"] ?? null)) {
            // line 23
            echo "                    <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, ($context["error"] ?? null), "html", null, true);
            echo "</div>
                ";
        }
        // line 25
        echo "                <button type=\"submit\" class=\"btn btn-primary\">Reset Password</button>
            </form>
        </div>
    </div>
</div>
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
        return array (  84 => 25,  78 => 23,  76 => 22,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"master.html.twig\" %}

{% block title %}Reset Password{% endblock %}

{% block content %}
<div class=\"container\">
    <div class=\"row justify-content-center mt-5 mb-5\">
        <div class=\"col-md-8 col-lg-6\">
            <form method=\"post\" action=\"/resetpassword\">
                <div class=\"form-group\">
                    <label for=\"token\">Token:</label>
                    <input type=\"text\" id=\"token\" name=\"token\" class=\"form-control\">
                </div>
                <div class=\"form-group\">
                    <label for=\"password\">New Password:</label>
                    <input type=\"password\" id=\"password\" name=\"password\" class=\"form-control\">
                </div>
                <div class=\"form-group\">
                    <label for=\"confirm_password\">Confirm New Password:</label>
                    <input type=\"password\" id=\"confirm_password\" name=\"confirm_password\" class=\"form-control\">
                </div>
                {% if error %}
                    <div class=\"alert alert-danger\">{{ error }}</div>
                {% endif %}
                <button type=\"submit\" class=\"btn btn-primary\">Reset Password</button>
            </form>
        </div>
    </div>
</div>
{% endblock %}
", "resetpassword.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/carrentalproject/templates/resetpassword.html.twig");
    }
}
