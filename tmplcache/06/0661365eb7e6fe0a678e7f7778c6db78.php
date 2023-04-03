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
        echo "  <div class=\"container\">
    <div class=\"row justify-content-center mt-5 mb-5\">
      <div class=\"col-md-8 col-lg-6\">
        <h1>Reset Password</h1>

        ";
        // line 11
        if (array_key_exists("message", $context)) {
            // line 12
            echo "          <p>";
            echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
            echo "</p>
        ";
        }
        // line 14
        echo "
        <div class=\"form-group\">
            <form method=\"post\" action=\"/resetpassword\">
                <label for=\"token\">Token:</label><br>
                <input type=\"text\" class=\"form-control\" id=\"token\" name=\"token\"><br>


            <label for=\"password\">New Password:</label><br>
            <input type=\"password\" class=\"form-control\" id=\"password\" name=\"password\"><br>

            <label for=\"password_confirm\">Confirm New Password:</label><br>
            <input type=\"password\" class=\"form-control\" id=\"password_confirm\" name=\"password_confirm\"><br>

            <button type=\"submit\" class=\"btn btn-primary\">Reset Password</button>
          </form>
        </div>
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
        return array (  73 => 14,  67 => 12,  65 => 11,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"master.html.twig\" %}

{% block title %}Reset Password{% endblock %}

{% block content %}
  <div class=\"container\">
    <div class=\"row justify-content-center mt-5 mb-5\">
      <div class=\"col-md-8 col-lg-6\">
        <h1>Reset Password</h1>

        {% if message is defined %}
          <p>{{ message }}</p>
        {% endif %}

        <div class=\"form-group\">
            <form method=\"post\" action=\"/resetpassword\">
                <label for=\"token\">Token:</label><br>
                <input type=\"text\" class=\"form-control\" id=\"token\" name=\"token\"><br>


            <label for=\"password\">New Password:</label><br>
            <input type=\"password\" class=\"form-control\" id=\"password\" name=\"password\"><br>

            <label for=\"password_confirm\">Confirm New Password:</label><br>
            <input type=\"password\" class=\"form-control\" id=\"password_confirm\" name=\"password_confirm\"><br>

            <button type=\"submit\" class=\"btn btn-primary\">Reset Password</button>
          </form>
        </div>
      </div>
    </div>
  </div>
{% endblock %}
", "resetpassword.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/carrentalproject/templates/resetpassword.html.twig");
    }
}
