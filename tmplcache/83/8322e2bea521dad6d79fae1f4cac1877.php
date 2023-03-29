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
            'body' => [$this, 'block_body'],
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
        <div class=\"sidebar\">
            ";
        // line 11
        $this->loadTemplate("adminpanel.html.twig", "master.html.twig", 11)->display($context);
        // line 12
        echo "        </div>
        ";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 14
        echo "
        ";
        // line 15
        $this->displayBlock('javascripts', $context, $blocks);
        // line 16
        echo "        <div id=\"centeredContent\">";
        $this->displayBlock('content', $context, $blocks);
        // line 17
        echo "            <div id=\"footer\">
                ";
        // line 18
        $this->displayBlock('footer', $context, $blocks);
        // line 21
        echo "            </div>
        </div>
    </body>
</html>";
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " Admin Panel ";
    }

    // line 6
    public function block_addHead($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "        ";
    }

    // line 13
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 15
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 16
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 18
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "                    &copy; Copyright 2023 by <a href=\"http://carrentalproject.org/\">you</a>.
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
        return array (  124 => 19,  120 => 18,  114 => 16,  108 => 15,  102 => 13,  98 => 7,  94 => 6,  87 => 4,  80 => 21,  78 => 18,  75 => 17,  72 => 16,  70 => 15,  67 => 14,  65 => 13,  62 => 12,  60 => 11,  55 => 8,  53 => 6,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
            <title>{% block title %} Admin Panel {% endblock %}</title>
            <link rel=\"stylesheet\" type=\"text/css\" href=\"/style.css\">
        {% block addHead %}
        {% endblock %}
     </head>
    <body>
        <div class=\"sidebar\">
            {% include 'adminpanel.html.twig' %}
        </div>
        {% block body %}{% endblock %}

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
