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
  <nav class=\"navbar navbar-expand-lg navbar-light bg-light\" ";
        // line 15
        echo twig_escape_filter($this->env, ($context["navClass"] ?? null), "html", null, true);
        echo ">
    <div class=\"container\">
      <a class=\"navbar-brand\" href=\"/\">
        <img src=\"images/logo.png\">
        <div class=\"logo-animation\"></div>
      </a>
      <button class=\"navbar-toggler\" type=\"button\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>
      <div class=\"collapse navbar-collapse justify-content-end\" id=\"navbarNav\">
        <ul class=\"navbar-nav\">
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"findmyreservation\">Find my reservation</a>
          </li>
          ";
        // line 29
        if (twig_get_attribute($this->env, $this->source, ($context["auth"] ?? null), "isLoggedIn", [], "any", false, false, false, 29)) {
            // line 30
            echo "          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"customerprofile\">Profile</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"logout\">Logout</a>
          </li>
          ";
        } else {
            // line 37
            echo "          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"register\">Register</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"login\">Login</a>
          </li>
          ";
        }
        // line 44
        echo "        </ul>
      </div>
    </div>
  </nav>
  <div class=\"container\">
    <div class=\"centeredContent\">
      ";
        // line 50
        $this->displayBlock('content', $context, $blocks);
        // line 51
        echo "    </div>
    <div class=\"footer\">
      ";
        // line 53
        $this->displayBlock('footer', $context, $blocks);
        // line 56
        echo "    </div>
  </div>
  <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\"></script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\"></script>
  <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\"></script>
</body>


<!-- Google tag (gtag.js) -->
";
        // line 65
        if (twig_get_attribute($this->env, $this->source, ($context["auth"] ?? null), "isLoggedIn", [], "any", false, false, false, 65)) {
            // line 66
            echo "<script async src=\"https://www.googletagmanager.com/gtag/js?id=G-TVEQKKS963\"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-TVEQKKS963');
</script>
";
        }
        // line 74
        echo "</html>
";
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

    // line 50
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 53
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 54
        echo "      &copy; ";
        echo 2023;
        echo "
      ";
    }

    public function getTemplateName()
    {
        return "master.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 54,  163 => 53,  157 => 50,  153 => 11,  149 => 10,  143 => 7,  138 => 74,  128 => 66,  126 => 65,  115 => 56,  113 => 53,  109 => 51,  107 => 50,  99 => 44,  90 => 37,  81 => 30,  79 => 29,  62 => 15,  57 => 12,  55 => 10,  49 => 7,  41 => 1,);
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
  <nav class=\"navbar navbar-expand-lg navbar-light bg-light\" {{ navClass }}>
    <div class=\"container\">
      <a class=\"navbar-brand\" href=\"/\">
        <img src=\"images/logo.png\">
        <div class=\"logo-animation\"></div>
      </a>
      <button class=\"navbar-toggler\" type=\"button\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>
      <div class=\"collapse navbar-collapse justify-content-end\" id=\"navbarNav\">
        <ul class=\"navbar-nav\">
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"findmyreservation\">Find my reservation</a>
          </li>
          {% if auth.isLoggedIn %}
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"customerprofile\">Profile</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"logout\">Logout</a>
          </li>
          {% else %}
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"register\">Register</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"login\">Login</a>
          </li>
          {% endif %}
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
{% if auth.isLoggedIn %}
<script async src=\"https://www.googletagmanager.com/gtag/js?id=G-TVEQKKS963\"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-TVEQKKS963');
</script>
{% endif %}
</html>
", "master.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/carrentalproject/templates/master.html.twig");
    }
}
