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

/* master.html.twig */
class __TwigTemplate_223fbcb053f8e792313aec0e11443067 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'addHead' => [$this, 'block_addHead'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
  <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
  <link rel=\"stylesheet\" type=\"text/css\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\">
  <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\">
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\"></script>
  <link rel=\"stylesheet\" type=\"text/css\" href=\"/style.css\">
  ";
        // line 9
        $this->displayBlock('addHead', $context, $blocks);
        // line 11
        echo "</head>

<body>
  <nav class=\"navbar navbar-expand-md navbar-light bg-light\">
    <a class=\"navbar-brand\" href=\"#\">
      <img src=\"/logo.png\" width=\"30\" height=\"30\" alt=\"\">
    </a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
      <ul class=\"navbar-nav ml-auto\">
        <li class=\"nav-item active\">
          <a class=\"nav-link\" href=\"#\">Find my reservation</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"#\">Register</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"#\">Login</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class=\"centeredContent\"> ";
        // line 35
        $this->displayBlock('content', $context, $blocks);
        // line 36
        echo "    <div class=\"footer\">
      ";
        // line 37
        $this->displayBlock('footer', $context, $blocks);
        // line 41
        echo "    </div>
  </div>
</body>

    <!-- Google tag (gtag.js) -->
<script async src=\"https://www.googletagmanager.com/gtag/js?id=G-TVEQKKS963\"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-TVEQKKS963');
</script>
</html> ";
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 9
    public function block_addHead($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "  ";
    }

    // line 35
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 37
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        echo "      &copy; Copyright 2023 by
      <a href=\"http://carrentalproject.org/\">you</a>.
      ";
    }

    public function getTemplateName()
    {
        return "master.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  130 => 38,  126 => 37,  120 => 35,  116 => 10,  112 => 9,  106 => 4,  89 => 41,  87 => 37,  84 => 36,  82 => 35,  56 => 11,  54 => 9,  46 => 4,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
  <title>{% block title %}{% endblock %}</title>
  <link rel=\"stylesheet\" type=\"text/css\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\">
  <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\">
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\"></script>
  <link rel=\"stylesheet\" type=\"text/css\" href=\"/style.css\">
  {% block addHead %}
  {% endblock %}
</head>

<body>
  <nav class=\"navbar navbar-expand-md navbar-light bg-light\">
    <a class=\"navbar-brand\" href=\"#\">
      <img src=\"/logo.png\" width=\"30\" height=\"30\" alt=\"\">
    </a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
      <ul class=\"navbar-nav ml-auto\">
        <li class=\"nav-item active\">
          <a class=\"nav-link\" href=\"#\">Find my reservation</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"#\">Register</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"#\">Login</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class=\"centeredContent\"> {% block content %}{% endblock %}
    <div class=\"footer\">
      {% block footer %}
      &copy; Copyright 2023 by
      <a href=\"http://carrentalproject.org/\">you</a>.
      {% endblock %}
    </div>
  </div>
</body>

    <!-- Google tag (gtag.js) -->
<script async src=\"https://www.googletagmanager.com/gtag/js?id=G-TVEQKKS963\"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-TVEQKKS963');
</script>
</html> ", "master.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/carrentalproject/templates/master.html.twig");
    }
}
