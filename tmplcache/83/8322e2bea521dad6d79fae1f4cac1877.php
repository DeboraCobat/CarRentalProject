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
class __TwigTemplate_57cb6d3a4c7ec8fc46f6354150369735 extends Template
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
<html lang=\"en\">

<head>
  <meta charset=\"UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
  <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"/style.css\">
  ";
        // line 10
        $this->displayBlock('addHead', $context, $blocks);
        // line 12
        echo "</head>

<body>
  <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
  
    <div class=\"container\">
      <a class=\"navbar-brand\" href=\"/\">
      <img src=\"images/logo.png\">
      ";
        // line 21
        echo "      <div class=\"logo-animation\"></div>
      </a>
      <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>

      <div class=\"collapse navbar-collapse justify-content-end\" id=\"navbarNav\">
        <ul class=\"navbar-nav\">
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"findmyreservation\">Find my reservation</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"register\">Register</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"login\">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class=\"container\">
    <div class=\"centeredContent\">
      ";
        // line 44
        $this->displayBlock('content', $context, $blocks);
        // line 45
        echo "    </div>
    <div class=\"footer\">
      ";
        // line 47
        $this->displayBlock('footer', $context, $blocks);
        // line 50
        echo "    </div>
  </div>
  <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\"></script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\"></script>
  <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\"></script>
</body>


  <!-- Google tag (gtag.js) -->

<script async src=\"https://www.googletagmanager.com/gtag/js?id=G-TVEQKKS963\"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-TVEQKKS963');
</script>
</html>";
    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 10
    public function block_addHead($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "  ";
    }

    // line 44
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 47
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 48
        echo "        &copy; ";
        echo 2023;
        echo "
      ";
    }

    public function getTemplateName()
    {
        return "master.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  145 => 48,  141 => 47,  135 => 44,  131 => 11,  127 => 10,  121 => 7,  100 => 50,  98 => 47,  94 => 45,  92 => 44,  67 => 21,  57 => 12,  55 => 10,  49 => 7,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
  <meta charset=\"UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <title>{% block title %}{% endblock %}</title>
  <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"/style.css\">
  {% block addHead %}
  {% endblock %}
</head>

<body>
  <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
  
    <div class=\"container\">
      <a class=\"navbar-brand\" href=\"/\">
      <img src=\"images/logo.png\">
      {# <video src=\"/images/logo-animation.mp4\" autoplay loop></video> #}
      <div class=\"logo-animation\"></div>
      </a>
      <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>

      <div class=\"collapse navbar-collapse justify-content-end\" id=\"navbarNav\">
        <ul class=\"navbar-nav\">
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"findmyreservation\">Find my reservation</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"register\">Register</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"login\">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class=\"container\">
    <div class=\"centeredContent\">
      {% block content %}{% endblock %}
    </div>
    <div class=\"footer\">
      {% block footer %}
        &copy; {{ 2023 }}
      {% endblock %}
    </div>
  </div>
  <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\"></script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\"></script>
  <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\"></script>
</body>


  <!-- Google tag (gtag.js) -->

<script async src=\"https://www.googletagmanager.com/gtag/js?id=G-TVEQKKS963\"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-TVEQKKS963');
</script>
</html>", "master.html.twig", "C:\\xampp\\htdocs\\CarRentalProject\\templates\\master.html.twig");
    }
}
