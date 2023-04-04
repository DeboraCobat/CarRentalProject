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

/* admin/deletevehicle.html.twig */
class __TwigTemplate_3acfc4c8bee609f9e5deaf0da9a6e27c extends Template
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
        return "admin/adminmaster.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("admin/adminmaster.html.twig", "admin/deletevehicle.html.twig", 1);
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
        echo "
<div class=\"container\">
  <div class=\"row justify-content-left mt-5 mb-5\">
    <div class=\"col-md-8 col-lg-6\">
    <p>Are you sure you want to delete the following vehicle?</p>
    <p><strong>ID:</strong> ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "id", [], "any", false, false, false, 11), "html", null, true);
        echo "</p>
    <p><strong>Make:</strong> ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "make", [], "any", false, false, false, 12), "html", null, true);
        echo "</p>
    <p><strong>Model:</strong> ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "model", [], "any", false, false, false, 13), "html", null, true);
        echo "</p>
    <p><strong>Year:</strong> ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "year", [], "any", false, false, false, 14), "html", null, true);
        echo "</p>
    <form method=\"post\" action=\"/admin/deletevehicle/";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "id", [], "any", false, false, false, 15), "html", null, true);
        echo "\">
      <button type=\"submit\" class=\"btn btn-danger\">Delete</button>
    </form>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "admin/deletevehicle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 15,  77 => 14,  73 => 13,  69 => 12,  65 => 11,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"admin/adminmaster.html.twig\" %}

{% block title %}Delete Vehicle{% endblock %}

{% block content %}

<div class=\"container\">
  <div class=\"row justify-content-left mt-5 mb-5\">
    <div class=\"col-md-8 col-lg-6\">
    <p>Are you sure you want to delete the following vehicle?</p>
    <p><strong>ID:</strong> {{ vehicle.id }}</p>
    <p><strong>Make:</strong> {{ vehicle.make }}</p>
    <p><strong>Model:</strong> {{ vehicle.model }}</p>
    <p><strong>Year:</strong> {{ vehicle.year }}</p>
    <form method=\"post\" action=\"/admin/deletevehicle/{{ vehicle.id }}\">
      <button type=\"submit\" class=\"btn btn-danger\">Delete</button>
    </form>
  </div>
</div>
{% endblock %}

{# {% extends \"admin/adminmaster.html.twig\" %}

{% block title %}Delete Vehicle{% endblock %}

{% block content %}
  <h1>Delete Vehicle</h1>
  <p>Are you sure you want to delete the following vehicle?</p>
  <p><strong>ID:</strong> {{ vehicle.id }}</p>
  <p><strong>Make:</strong> {{ vehicle.make }}</p>
  <p><strong>Model:</strong> {{ vehicle.model }}</p>
  <p><strong>Year:</strong> {{ vehicle.year }}</p>
  <form method=\"post\" action=\"/admin/deletevehicle/{{ vehicle.id }}\">
    <button type=\"submit\">Delete</button>
  </form>
{% endblock %} #}

", "admin/deletevehicle.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/carrentalproject/templates/admin/deletevehicle.html.twig");
    }
}
