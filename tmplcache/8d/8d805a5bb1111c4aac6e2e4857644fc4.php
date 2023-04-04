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

/* admin/vehicleslist.html.twig */
class __TwigTemplate_f463326170dc92cd4082c30100da05d8 extends Template
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
        $this->parent = $this->loadTemplate("admin/adminmaster.html.twig", "admin/vehicleslist.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "All Vehicles";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
<div class=\"container\">
  <div class=\"row justify-content-left mt-5 mb-5\">
    <div class=\"col-md-12 col-lg-12\">
    
  <h1>All Vehicles</h1></br>
  <table class=\"listTable\">
  <button class=\"btn btn-primary btn-sm\" onclick=\"location.href='addvehicle'\">Add a new vehicle</button></br>
    <thead></br>
      <tr>
        <th>Make</th>
        <th>Model</th>
        <th>Year</th>
        <th>Color</th>
        <th>License Plate</th>
        <th>Daily Rate</th>
        <th>Availability</th>
        <th>Seats</th>
        <th>L/100km</th>
        <th>Image</th>
      </tr>
    </thead>
    <tbody>
      ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vehicles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["vehicle"]) {
            // line 30
            echo "        <tr>
          <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicle"], "make", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
          <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicle"], "model", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
          <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicle"], "year", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
          <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicle"], "color", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
          <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicle"], "license_plate", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
          <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicle"], "daily_rate", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
          <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicle"], "availability", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
          <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicle"], "seats", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
          <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicle"], "lper100", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
          <td><img src=\"/";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicle"], "image_filepath", [], "any", false, false, false, 40), "html", null, true);
            echo "\" width=\"100\"></td>
          <td><a href=\"/admin/editvehicle/";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicle"], "id", [], "any", false, false, false, 41), "html", null, true);
            echo "\" class=\"btn btn-secondary btn-sm\">Edit</a></td>
          <td><a href=\"/admin/deletevehicle/";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicle"], "id", [], "any", false, false, false, 42), "html", null, true);
            echo "\" class=\"btn btn-danger btn-sm\">Delete</a></td>
        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vehicle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "    </tbody>
  </table> </br>
</div>
";
    }

    public function getTemplateName()
    {
        return "admin/vehicleslist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 45,  134 => 42,  130 => 41,  126 => 40,  122 => 39,  118 => 38,  114 => 37,  110 => 36,  106 => 35,  102 => 34,  98 => 33,  94 => 32,  90 => 31,  87 => 30,  83 => 29,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"admin/adminmaster.html.twig\" %}

{% block title %}All Vehicles{% endblock %}

{% block content %}

<div class=\"container\">
  <div class=\"row justify-content-left mt-5 mb-5\">
    <div class=\"col-md-12 col-lg-12\">
    
  <h1>All Vehicles</h1></br>
  <table class=\"listTable\">
  <button class=\"btn btn-primary btn-sm\" onclick=\"location.href='addvehicle'\">Add a new vehicle</button></br>
    <thead></br>
      <tr>
        <th>Make</th>
        <th>Model</th>
        <th>Year</th>
        <th>Color</th>
        <th>License Plate</th>
        <th>Daily Rate</th>
        <th>Availability</th>
        <th>Seats</th>
        <th>L/100km</th>
        <th>Image</th>
      </tr>
    </thead>
    <tbody>
      {% for vehicle in vehicles %}
        <tr>
          <td>{{ vehicle.make }}</td>
          <td>{{ vehicle.model }}</td>
          <td>{{ vehicle.year }}</td>
          <td>{{ vehicle.color }}</td>
          <td>{{ vehicle.license_plate }}</td>
          <td>{{ vehicle.daily_rate }}</td>
          <td>{{ vehicle.availability }}</td>
          <td>{{ vehicle.seats }}</td>
          <td>{{ vehicle.lper100 }}</td>
          <td><img src=\"/{{ vehicle.image_filepath }}\" width=\"100\"></td>
          <td><a href=\"/admin/editvehicle/{{ vehicle.id }}\" class=\"btn btn-secondary btn-sm\">Edit</a></td>
          <td><a href=\"/admin/deletevehicle/{{ vehicle.id }}\" class=\"btn btn-danger btn-sm\">Delete</a></td>
        </tr>
      {% endfor %}
    </tbody>
  </table> </br>
</div>
{% endblock %}

", "admin/vehicleslist.html.twig", "C:\\xampp\\htdocs\\CarRentalProject\\templates\\admin\\vehicleslist.html.twig");
    }
}
