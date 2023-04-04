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

/* admin/deletereservation.html.twig */
class __TwigTemplate_0d477e5a46ed6cae4453e1632ec2a008 extends Template
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
        $this->parent = $this->loadTemplate("admin/adminmaster.html.twig", "admin/deletereservation.html.twig", 1);
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
    <p>Are you sure you want to delete the following Reservation?</p>
    <p><strong>ID:</strong> ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["reservations"] ?? null), "id", [], "any", false, false, false, 11), "html", null, true);
        echo "</p>
    <p><strong>Customer:</strong> ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["reservations"] ?? null), "users", [], "any", false, false, false, 12), "first_name", [], "any", false, false, false, 12), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["reservations"] ?? null), "users", [], "any", false, false, false, 12), "last_name", [], "any", false, false, false, 12), "html", null, true);
        echo "</p>
    <p><strong>Vehicle:</strong> ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["reservations"] ?? null), "vehicle", [], "any", false, false, false, 13), "make", [], "any", false, false, false, 13), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["reservations"] ?? null), "vehicle", [], "any", false, false, false, 13), "model", [], "any", false, false, false, 13), "html", null, true);
        echo "</p>
    <form method=\"post\" action=\"/admin/deletereservation/";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["reservations"] ?? null), "id", [], "any", false, false, false, 14), "html", null, true);
        echo "\">
      <button type=\"submit\" class=\"btn btn-danger\">Delete</button>
    </form>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "admin/deletereservation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 14,  75 => 13,  69 => 12,  65 => 11,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"admin/adminmaster.html.twig\" %}

{% block title %}Delete Vehicle{% endblock %}

{% block content %}

<div class=\"container\">
  <div class=\"row justify-content-left mt-5 mb-5\">
    <div class=\"col-md-8 col-lg-6\">
    <p>Are you sure you want to delete the following Reservation?</p>
    <p><strong>ID:</strong> {{ reservations.id }}</p>
    <p><strong>Customer:</strong> {{ reservations.users.first_name }} {{ reservations.users.last_name }}</p>
    <p><strong>Vehicle:</strong> {{ reservations.vehicle.make }} {{ reservations.vehicle.model }}</p>
    <form method=\"post\" action=\"/admin/deletereservation/{{ reservations.id }}\">
      <button type=\"submit\" class=\"btn btn-danger\">Delete</button>
    </form>
  </div>
</div>
{% endblock %}

", "admin/deletereservation.html.twig", "C:\\xampp\\htdocs\\CarRentalProject\\templates\\admin\\deletereservation.html.twig");
    }
}
