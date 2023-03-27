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
        <link rel=\"stylesheet\" href=\"/style.css\"/>
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "AutoGo</title>
        ";
        // line 6
        $this->displayBlock('addHead', $context, $blocks);
        // line 8
        echo "    </head>
    <body>
        <div id=\"centeredContent\">";
        // line 10
        $this->displayBlock('content', $context, $blocks);
        // line 11
        echo "            <div id=\"footer\">
                ";
        // line 12
        $this->displayBlock('footer', $context, $blocks);
        // line 15
        echo "            </div>
        </div>
    </body>
</html>";
    }

    // line 5
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
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 12
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "                    &copy; Copyright 2023 by <a href=\"http://carrentalproject.org/\">you</a>.
                ";
    }

    public function getTemplateName()
    {
        return "master.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  95 => 13,  91 => 12,  85 => 10,  81 => 7,  77 => 6,  71 => 5,  64 => 15,  62 => 12,  59 => 11,  57 => 10,  53 => 8,  51 => 6,  47 => 5,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <link rel=\"stylesheet\" href=\"/style.css\"/>
        <title>{% block title %}{% endblock %}AutoGo</title>
        {% block addHead %}
        {% endblock %}
    </head>
    <body>
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
