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

/* deletevehicle.html.twig */
class __TwigTemplate_57969fa490896049f52e34ab3a217895 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "master.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("master.html.twig", "deletevehicle.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Delete Vehicle";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "  <h1>Delete Vehicle</h1>
  <p>Are you sure you want to delete the following vehicle?</p>
  <p><strong>ID:</strong> ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "id", [], "any", false, false, false, 8), "html", null, true);
        echo "</p>
  <p><strong>Make:</strong> ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "make", [], "any", false, false, false, 9), "html", null, true);
        echo "</p>
  <p><strong>Model:</strong> ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "model", [], "any", false, false, false, 10), "html", null, true);
        echo "</p>
  <p><strong>Year:</strong> ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "year", [], "any", false, false, false, 11), "html", null, true);
        echo "</p>
  <form method=\"post\" action=\"/deletevehicle/";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "\">
    <button type=\"submit\">Delete</button>
  </form>
";
    }

    public function getTemplateName()
    {
        return "deletevehicle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  74 => 11,  70 => 10,  66 => 9,  62 => 8,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'master.html.twig' %}

{% block title %}Delete Vehicle{% endblock %}

{% block content %}
  <h1>Delete Vehicle</h1>
  <p>Are you sure you want to delete the following vehicle?</p>
  <p><strong>ID:</strong> {{ vehicle.id }}</p>
  <p><strong>Make:</strong> {{ vehicle.make }}</p>
  <p><strong>Model:</strong> {{ vehicle.model }}</p>
  <p><strong>Year:</strong> {{ vehicle.year }}</p>
  <form method=\"post\" action=\"/deletevehicle/{{ vehicle.id }}\">
    <button type=\"submit\">Delete</button>
  </form>
{% endblock %}
", "deletevehicle.html.twig", "C:\\xampp\\htdocs\\CarRentalProject\\templates\\deletevehicle.html.twig");
    }
}
