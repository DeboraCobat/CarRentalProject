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

/* index.html.twig */
class __TwigTemplate_c606d0a249defb463cf6a743bdf3d7cf extends Template
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
        // line 30
        return "master.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("master.html.twig", "index.html.twig", 30);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 32
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "home page";
    }

    // line 34
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        echo "<div class=\"container\">
  <div class=\"row justify-content-center mt-5 mb-5\">
    <div class=\"col-md-8 col-lg-6\">

  <h1>Enter trip details</h1>
  <form method=\"post\" class=\"form-group\" action=\"/selectvehicle\">
    <label for=\"pickup_date\">Pickup date:</label>
    <input type=\"date\" class=\"form-group\" id=\"pickup_date\" name=\"pickup_date\" required>
    
    <label for=\"pickup_time\">Pickup time:</label>
    <input type=\"time\" class=\"form-group\" id=\"pickup_time\" name=\"pickup_time\" required>
    <br>
    <label for=\"return_date\">Return date:</label>
    <input type=\"date\" class=\"form-group\" id=\"return_date\" name=\"return_date\" required>
    
    <label for=\"return_time\">Return time:</label>
    <input type=\"time\" class=\"form-group\" id=\"return_time\" name=\"return_time\" required>
    <br><br>
    <button type=\"submit\" class=\"btn btn-primary\" >Select Vehicle</button>
  </form>
";
    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 35,  54 => 34,  47 => 32,  36 => 30,);
    }

    public function getSourceContext()
    {
        return new Source("{# {% extends \"master.html.twig\" %}

{% block title %}Rent a car{% endblock %}

{% block content %}

<h1>Select a pick-up date</h1>
 
<form method=\"post\">
  <label for=\"pickup_date\">Pick-up date:</label>
  <input type=\"date\" id=\"pickup_date\" name=\"pickup_date\" required>
  <label for=\"pickup_time\">Pick-up time:</label>
  <input type=\"time\" id=\"pickup_time\" name=\"pickup_time\" required>
  <br>
  <label for=\"return_date\">Return date:</label>
  <input type=\"date\" id=\"return_date\" name=\"return_date\" required>
  <label for=\"return_time\">Return time:</label>
  <input type=\"time\" id=\"return_time\" name=\"return_time\" required>
  <br>
  <button type=\"submit\">Submit</button>
</form>

{% if departureDate is defined and returnDate is defined %}
  <p>You selected a departure date of {{ departureDate }} and a return date of {{ returnDate }}.</p>
{% endif %}


 {% endblock %} #}

{% extends \"master.html.twig\" %}

{% block title %}home page{% endblock %}

{% block content %}
<div class=\"container\">
  <div class=\"row justify-content-center mt-5 mb-5\">
    <div class=\"col-md-8 col-lg-6\">

  <h1>Enter trip details</h1>
  <form method=\"post\" class=\"form-group\" action=\"/selectvehicle\">
    <label for=\"pickup_date\">Pickup date:</label>
    <input type=\"date\" class=\"form-group\" id=\"pickup_date\" name=\"pickup_date\" required>
    
    <label for=\"pickup_time\">Pickup time:</label>
    <input type=\"time\" class=\"form-group\" id=\"pickup_time\" name=\"pickup_time\" required>
    <br>
    <label for=\"return_date\">Return date:</label>
    <input type=\"date\" class=\"form-group\" id=\"return_date\" name=\"return_date\" required>
    
    <label for=\"return_time\">Return time:</label>
    <input type=\"time\" class=\"form-group\" id=\"return_time\" name=\"return_time\" required>
    <br><br>
    <button type=\"submit\" class=\"btn btn-primary\" >Select Vehicle</button>
  </form>
{% endblock %}
", "index.html.twig", "C:\\xampp\\htdocs\\CarRentalProject\\templates\\index.html.twig");
    }
}
