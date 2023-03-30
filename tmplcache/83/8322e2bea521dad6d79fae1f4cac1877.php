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
            'javascripts' => [$this, 'block_javascripts'],
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
            <link rel=\"stylesheet\" type=\"text/css\" href=\"/style.css\">
        ";
        // line 6
        $this->displayBlock('addHead', $context, $blocks);
        // line 8
        echo "     </head>
    <body>
        ";
        // line 10
        $this->displayBlock('javascripts', $context, $blocks);
        // line 11
        echo "        <div id=\"centeredContent\">";
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "            <div id=\"footer\">
                ";
        // line 13
        $this->displayBlock('footer', $context, $blocks);
        // line 16
        echo "            </div>
        </div>
    </body>
</html>";
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 6
    public function block_addHead($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "        ";
    }

    // line 10
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        return array (  105 => 14,  101 => 13,  95 => 11,  89 => 10,  85 => 7,  81 => 6,  75 => 4,  68 => 16,  66 => 13,  63 => 12,  60 => 11,  58 => 10,  54 => 8,  52 => 6,  47 => 4,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
            <title>{% block title %}{% endblock %}</title>
            <link rel=\"stylesheet\" type=\"text/css\" href=\"/style.css\">
        {% block addHead %}
        {% endblock %}
     </head>
    <body>
        {% block javascripts %}{% endblock %}
        <div id=\"centeredContent\">{% block content %}{% endblock %}
            <div id=\"footer\">
                {% block footer %}
                    &copy; Copyright 2023 by <a href=\"http://carrentalproject.org/\">you</a>.
                {% endblock %}
            </div>
        </div>
    </body>
</html>", "master.html.twig", "C:\\xampp\\htdocs\\CarRentalProject\\templates\\master.html.twig");
    }
}
