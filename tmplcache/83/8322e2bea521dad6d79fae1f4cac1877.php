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
            'addHead' => [$this, 'block_addHead'],
            'title' => [$this, 'block_title'],
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
        ";
        // line 4
        $this->displayBlock('addHead', $context, $blocks);
        // line 7
        echo "    </head>
    <body>
        <div class=\"sidebar\">
            ";
        // line 10
        $this->loadTemplate("adminpanel.html.twig", "master.html.twig", 10)->display($context);
        // line 11
        echo "        </div>
        ";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 13
        echo "
        ";
        // line 14
        $this->displayBlock('javascripts', $context, $blocks);
        // line 15
        echo "        <div id=\"centeredContent\">";
        $this->displayBlock('content', $context, $blocks);
        // line 16
        echo "            <div id=\"footer\">
                ";
        // line 17
        $this->displayBlock('footer', $context, $blocks);
        // line 20
        echo "            </div>
        </div>
    </body>
</html>";
    }

    // line 4
    public function block_addHead($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "        <link rel=\"stylesheet\" type=\"text/css\" href=\"../css/styles.css\">        <title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
    }

    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 14
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 15
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 17
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
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
        return array (  120 => 18,  116 => 17,  110 => 15,  104 => 14,  98 => 12,  86 => 5,  82 => 4,  75 => 20,  73 => 17,  70 => 16,  67 => 15,  65 => 14,  62 => 13,  60 => 12,  57 => 11,  55 => 10,  50 => 7,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        {% block addHead %}
        <link rel=\"stylesheet\" type=\"text/css\" href=\"../css/styles.css\">        <title>{% block title %}{% endblock %}</title>
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
