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
class __TwigTemplate_6917f129594adac571b10ecb942d722a extends Template
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
  <div class=\"container\">
    <div class=\"row justify-content-center mt-5 mb-5\">
      <div class=\"col-md-8 col-lg-6\">
        <h1>Login</h1>

        ";
        // line 13
        if (array_key_exists("message", $context)) {
            // line 14
            echo "          <p>";
            echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
            echo "</p>
        ";
        }
        // line 16
        echo "
        <div class=\"form-group\">
          <form method=\"post\" action=\"/login\">
            <label for=\"email\">Email:</label><br>
            <input type=\"email\" class=\"form-control\"id=\"email\" name=\"email\"><br>

            <label for=\"password\">Password:</label><br>
            <input type=\"password\" class=\"form-control\" id=\"password\" name=\"password\"><br>
            

            

            <button type=\"submit\" class=\"btn btn-primary\">Log in</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>

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
        return array (  75 => 16,  69 => 14,  67 => 13,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"master.html.twig\" %}

{% block title %}Login Page{% endblock %}

{% block content %}

<body>
  <div class=\"container\">
    <div class=\"row justify-content-center mt-5 mb-5\">
      <div class=\"col-md-8 col-lg-6\">
        <h1>Login</h1>

        {% if message is defined %}
          <p>{{ message }}</p>
        {% endif %}

        <div class=\"form-group\">
          <form method=\"post\" action=\"/login\">
            <label for=\"email\">Email:</label><br>
            <input type=\"email\" class=\"form-control\"id=\"email\" name=\"email\"><br>

            <label for=\"password\">Password:</label><br>
            <input type=\"password\" class=\"form-control\" id=\"password\" name=\"password\"><br>
            

            

            <button type=\"submit\" class=\"btn btn-primary\">Log in</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>

{% endblock %}
", "login.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/carrentalproject/templates/login.html.twig");
    }
}
