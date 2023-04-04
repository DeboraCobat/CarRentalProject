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
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"/styles.css\"> ";
        // line 11
        $this->displayBlock('addHead', $context, $blocks);
        // line 12
        echo "\t\t</head>

\t\t<body>
\t\t\t<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
\t\t\t<a class=\"navbar-brand\" href=\"/\">
\t\t\t<img src=\"/images/isologo.png\" class=\"logo\" width=\"120px\" margin-left: \"30px\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div></a>
\t\t\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<div class=\"collapse navbar-collapse justify-content-left\" id=\"navbarNav\">
\t\t\t\t\t\t\t<ul class=\"navbar-nav\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"findmyreservation\">Find my reservation</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
        // line 28
        if (($context["userSession"] ?? null)) {
            // line 29
            echo "\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"logout\">Logout</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
        } else {
            // line 33
            echo "\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"register\">Register</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"login\">Login</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
        }
        // line 40
        echo "\t\t\t\t\t\t\t\t";
        if (($context["userSession"] ?? null)) {
            // line 41
            echo "\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<p class=\"nav-link\">Hello
\t\t\t\t\t\t\t\t\t\t\t";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSession"] ?? null), "first_name", [], "any", false, false, false, 43), "html", null, true);
            echo "!</p>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
        }
        // line 46
        echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</nav>
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"centeredContent\"> ";
        // line 51
        $this->displayBlock('content', $context, $blocks);
        // line 52
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 53
        $this->displayBlock('footer', $context, $blocks);
        // line 78
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\"></script>
\t\t\t\t\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\"></script>
\t\t\t\t\t\t<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\"></script>


\t\t\t\t\t\t<!-- Google tag (gtag.js) -->

\t\t\t\t\t\t<script async src=\"https://www.googletagmanager.com/gtag/js?id=G-TVEQKKS963\"></script>
\t\t\t\t\t\t<script>
\t\t\t\t\t\t\twindow.dataLayer = window.dataLayer || [];
function gtag() {
dataLayer.push(arguments);
}
gtag('js', new Date());
gtag('config', 'G-TVEQKKS963');
\t\t\t\t\t\t</script>
\t\t\t\t\t</body>
\t\t\t\t</body>
\t\t\t</body>
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

    // line 51
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 53
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 54
        echo "\t\t\t\t\t\t<div class=\"footer\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"footer\">
\t\t\t\t\t\t\t\t\t<div class=\"social-media\"></div>
\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"images/facebook.png\" alt=\"Facebook icon\" width=\"30\" height=\"30\"></a>
    <a href=\"#\"><img src=\"images/instagram.png\" alt=\"Instagram icon\" width=\"30\" height=\"30\"></a>
    <a href=\"#\"><img src=\"images/twitter.png\" alt=\"Twitter icon\" width=\"30\" height=\"30\"></a>

\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\tclass=\"contact-info\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\tContact us: info@autogo.com | 514-312-9877
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\tclass=\"newsletter\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\tSubscribe to our newsletter
\t\t\t\t\t\t\t\t\t\t<input type=\"email\" placeholder=\"Enter your email address\">
\t\t\t\t\t\t\t\t\t\t<button>Subscribe</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t&copy;
\t\t\t\t\t\t\t\t\t";
        // line 76
        echo 2023;
        echo "
\t\t\t\t\t\t\t\t";
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
        return array (  192 => 76,  168 => 54,  164 => 53,  158 => 51,  152 => 11,  146 => 8,  120 => 78,  118 => 53,  115 => 52,  113 => 51,  106 => 46,  100 => 43,  96 => 41,  93 => 40,  84 => 33,  78 => 29,  76 => 28,  58 => 12,  56 => 11,  52 => 9,  50 => 8,  41 => 1,);
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
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"/styles.css\"> {% block addHead %}{% endblock %}
\t\t</head>

\t\t<body>
\t\t\t<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
\t\t\t<a class=\"navbar-brand\" href=\"/\">
\t\t\t<img src=\"/images/isologo.png\" class=\"logo\" width=\"120px\" margin-left: \"30px\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div></a>
\t\t\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<div class=\"collapse navbar-collapse justify-content-left\" id=\"navbarNav\">
\t\t\t\t\t\t\t<ul class=\"navbar-nav\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"findmyreservation\">Find my reservation</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t{% if userSession %}
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"logout\">Logout</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"register\">Register</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"login\">Login</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t{% if userSession %}
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<p class=\"nav-link\">Hello
\t\t\t\t\t\t\t\t\t\t\t{{ userSession.first_name }}!</p>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</nav>
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"centeredContent\"> {% block content %}{% endblock %}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% block footer %}
\t\t\t\t\t\t<div class=\"footer\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"footer\">
\t\t\t\t\t\t\t\t\t<div class=\"social-media\"></div>
\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"images/facebook.png\" alt=\"Facebook icon\" width=\"30\" height=\"30\"></a>
    <a href=\"#\"><img src=\"images/instagram.png\" alt=\"Instagram icon\" width=\"30\" height=\"30\"></a>
    <a href=\"#\"><img src=\"images/twitter.png\" alt=\"Twitter icon\" width=\"30\" height=\"30\"></a>

\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\tclass=\"contact-info\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\tContact us: info@autogo.com | 514-312-9877
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\tclass=\"newsletter\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\tSubscribe to our newsletter
\t\t\t\t\t\t\t\t\t\t<input type=\"email\" placeholder=\"Enter your email address\">
\t\t\t\t\t\t\t\t\t\t<button>Subscribe</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t&copy;
\t\t\t\t\t\t\t\t\t{{ 2023 }}
\t\t\t\t\t\t\t\t{% endblock %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\"></script>
\t\t\t\t\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\"></script>
\t\t\t\t\t\t<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\"></script>


\t\t\t\t\t\t<!-- Google tag (gtag.js) -->

\t\t\t\t\t\t<script async src=\"https://www.googletagmanager.com/gtag/js?id=G-TVEQKKS963\"></script>
\t\t\t\t\t\t<script>
\t\t\t\t\t\t\twindow.dataLayer = window.dataLayer || [];
function gtag() {
dataLayer.push(arguments);
}
gtag('js', new Date());
gtag('config', 'G-TVEQKKS963');
\t\t\t\t\t\t</script>
\t\t\t\t\t</body>
\t\t\t\t</body>
\t\t\t</body>
\t\t</html>
", "master.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/carrentalproject/templates/master.html.twig");
    }
}
