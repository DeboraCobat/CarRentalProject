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

\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<title>
\t\t\t";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        // line 9
        echo "\t\t</title>
\t\t<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"/style.css\"> ";
        // line 11
        $this->displayBlock('addHead', $context, $blocks);
        // line 12
        echo "\t\t</head>

\t\t<body>
\t\t\t<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">

\t\t\t\t<div class=\"container\">
\t\t\t\t\t<a
\t\t\t\t\t\tclass=\"navbar-brand\" href=\"/\">
\t\t\t\t\t\t";
        // line 21
        echo "\t\t\t\t\t\t<video src=\"images/logo-animation.mp4\" autoplay loop style=\"width: 15px;\"></video>
\t\t\t\t\t\t<div class=\"logo-animation\"></div>
\t\t\t\t\t</a>
\t\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t\t</button>

\t\t\t\t\t<div class=\"collapse navbar-collapse justify-content-end\" id=\"navbarNav\">
\t\t\t\t\t\t<ul class=\"navbar-nav\">
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"findmyreservation\">Find my reservation</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
        // line 33
        if (($context["userSession"] ?? null)) {
            // line 34
            echo "\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"logout\">Logout</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
        } else {
            // line 38
            echo "\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"register\">Register</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"login\">Login</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
        }
        // line 45
        echo "\t\t\t\t\t\t\t";
        if (($context["userSession"] ?? null)) {
            // line 46
            echo "\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<p class=\"nav-link\">Hello
\t\t\t\t\t\t\t\t\t\t";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSession"] ?? null), "first_name", [], "any", false, false, false, 48), "html", null, true);
            echo "!</p>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
        }
        // line 51
        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</nav>
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"centeredContent\"> ";
        // line 57
        $this->displayBlock('content', $context, $blocks);
        // line 58
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"footer\">
\t\t\t\t\t\t";
        // line 60
        $this->displayBlock('footer', $context, $blocks);
        // line 64
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\"></script>
\t\t\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\"></script>
\t\t\t\t<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\"></script>
\t\t\t</body>


\t\t\t<!-- Google tag (gtag.js) -->

\t\t\t<script async src=\"https://www.googletagmanager.com/gtag/js?id=G-TVEQKKS963\"></script>
\t\t\t<script>
\t\t\t\twindow.dataLayer = window.dataLayer || [];
function gtag() {
dataLayer.push(arguments);
}
gtag('js', new Date());
gtag('config', 'G-TVEQKKS963');
\t\t\t</script>
\t\t</html>
";
    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 11
    public function block_addHead($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 57
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 60
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 61
        echo "\t\t\t\t\t\t\t&copy;
\t\t\t\t\t\t\t";
        // line 62
        echo 2023;
        echo "
\t\t\t\t\t\t";
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
        return array (  177 => 62,  174 => 61,  170 => 60,  164 => 57,  158 => 11,  152 => 8,  128 => 64,  126 => 60,  122 => 58,  120 => 57,  112 => 51,  106 => 48,  102 => 46,  99 => 45,  90 => 38,  84 => 34,  82 => 33,  68 => 21,  58 => 12,  56 => 11,  52 => 9,  50 => 8,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<title>
\t\t\t{% block title %}{% endblock %}
\t\t</title>
\t\t<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"/style.css\"> {% block addHead %}{% endblock %}
\t\t</head>

\t\t<body>
\t\t\t<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">

\t\t\t\t<div class=\"container\">
\t\t\t\t\t<a
\t\t\t\t\t\tclass=\"navbar-brand\" href=\"/\">
\t\t\t\t\t\t{# <img src=\"images/logo.png\" style=\"width: 75px;\"> #}
\t\t\t\t\t\t<video src=\"images/logo-animation.mp4\" autoplay loop style=\"width: 15px;\"></video>
\t\t\t\t\t\t<div class=\"logo-animation\"></div>
\t\t\t\t\t</a>
\t\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t\t</button>

\t\t\t\t\t<div class=\"collapse navbar-collapse justify-content-end\" id=\"navbarNav\">
\t\t\t\t\t\t<ul class=\"navbar-nav\">
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"findmyreservation\">Find my reservation</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% if userSession %}
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"logout\">Logout</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"register\">Register</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"login\">Login</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% if userSession %}
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<p class=\"nav-link\">Hello
\t\t\t\t\t\t\t\t\t\t{{ userSession.first_name }}!</p>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</nav>
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"centeredContent\"> {% block content %}{% endblock %}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"footer\">
\t\t\t\t\t\t{% block footer %}
\t\t\t\t\t\t\t&copy;
\t\t\t\t\t\t\t{{ 2023 }}
\t\t\t\t\t\t{% endblock %}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\"></script>
\t\t\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\"></script>
\t\t\t\t<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\"></script>
\t\t\t</body>


\t\t\t<!-- Google tag (gtag.js) -->

\t\t\t<script async src=\"https://www.googletagmanager.com/gtag/js?id=G-TVEQKKS963\"></script>
\t\t\t<script>
\t\t\t\twindow.dataLayer = window.dataLayer || [];
function gtag() {
dataLayer.push(arguments);
}
gtag('js', new Date());
gtag('config', 'G-TVEQKKS963');
\t\t\t</script>
\t\t</html>
", "master.html.twig", "C:\\xampp\\htdocs\\CarRentalProject\\templates\\master.html.twig");
    }
}
