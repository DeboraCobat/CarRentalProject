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

/* admin/master.html.twig */
class __TwigTemplate_1d27c6d8367dc6a0cc828b72f286777e extends Template
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
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"/admin.css\">
        ";
        // line 7
        $this->displayBlock('addHead', $context, $blocks);
        // line 9
        echo "     </head>
    <body>
        <div class=\"adminbar\">
            ";
        // line 12
        $this->loadTemplate("admin/adminpanel.html.twig", "admin/master.html.twig", 12)->display($context);
        // line 13
        echo "        </div>
        ";
        // line 14
        $this->displayBlock('body', $context, $blocks);
        // line 15
        echo "
        ";
        // line 16
        $this->displayBlock('javascripts', $context, $blocks);
        // line 17
        echo "        <div class=\"centeredContent\">";
        $this->displayBlock('content', $context, $blocks);
        // line 18
        echo "            <div class=\"footer\">
                ";
        // line 19
        $this->displayBlock('footer', $context, $blocks);
        // line 22
        echo "            </div>
        </div>
    </body>
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

    // line 14
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 16
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 17
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 19
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "                    &copy; Copyright 2023 by <a href=\"http://carrentalproject.org/\">you</a>.
                ";
    }

    public function getTemplateName()
    {
        return "admin/master.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 20,  120 => 19,  114 => 17,  108 => 16,  102 => 14,  98 => 8,  94 => 7,  88 => 4,  81 => 22,  79 => 19,  76 => 18,  73 => 17,  71 => 16,  68 => 15,  66 => 14,  63 => 13,  61 => 12,  56 => 9,  54 => 7,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
            <title>{% block title %}{% endblock %}</title>
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"/admin.css\">
        {% block addHead %}
        {% endblock %}
     </head>
    <body>
        <div class=\"adminbar\">
            {% include 'admin/adminpanel.html.twig' %}
        </div>
        {% block body %}{% endblock %}

        {% block javascripts %}{% endblock %}
        <div class=\"centeredContent\">{% block content %}{% endblock %}
            <div class=\"footer\">
                {% block footer %}
                    &copy; Copyright 2023 by <a href=\"http://carrentalproject.org/\">you</a>.
                {% endblock %}
            </div>
        </div>
    </body>
</html> ", "admin/master.html.twig", "C:\\xampp\\htdocs\\CarRentalProject\\templates\\admin\\master.html.twig");
    }
}
