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
<html>
    <head>
            <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
            <link rel=\"stylesheet\" type=\"text/css\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"/style.css\">
        ";
        // line 7
        $this->displayBlock('addHead', $context, $blocks);
        // line 9
        echo "     </head>
     <body>
        <div class=\"centeredContent\"> ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "          <div class=\"footer\">
                ";
        // line 13
        $this->displayBlock('footer', $context, $blocks);
        // line 16
        echo "            </div>
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

    // line 7
    public function block_addHead($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "        ";
    }

    // line 11
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 13
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "                    &copy; Copyright 2023 by <a href=\"http://carrentalproject.org/\">you</a>.
                ";
    }

    public function getTemplateName()
    {
        return "master.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  105 => 14,  101 => 13,  95 => 11,  91 => 8,  87 => 7,  81 => 4,  65 => 16,  63 => 13,  60 => 12,  58 => 11,  54 => 9,  52 => 7,  46 => 4,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
            <title>{% block title %}{% endblock %}</title>
            <link rel=\"stylesheet\" type=\"text/css\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"/style.css\">
        {% block addHead %}
        {% endblock %}
     </head>
     <body>
        <div class=\"centeredContent\"> {% block content %}{% endblock %}
          <div class=\"footer\">
                {% block footer %}
                    &copy; Copyright 2023 by <a href=\"http://carrentalproject.org/\">you</a>.
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
</html> ", "master.html.twig", "C:\\xampp\\htdocs\\CarRentalProject\\templates\\master.html.twig");
    }
}
