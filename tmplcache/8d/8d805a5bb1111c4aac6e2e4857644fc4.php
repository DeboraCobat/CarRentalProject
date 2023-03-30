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
        return "admin/master.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("admin/master.html.twig", "admin/vehicleslist.html.twig", 1);
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
        echo "  <h1>All Vehicles</h1>
  <table class=\"listTable\">
    <thead>
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
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vehicles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["vehicle"]) {
            // line 24
            echo "        <tr>
          <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicle"], "make", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
          <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicle"], "model", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
          <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicle"], "year", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
          <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicle"], "color", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
          <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicle"], "license_plate", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
          <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicle"], "daily_rate", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
          <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicle"], "availability", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
          <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicle"], "seats", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
          <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicle"], "lper100", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
          <td><img src=\"";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicle"], "image_filepath", [], "any", false, false, false, 34), "html", null, true);
            echo "\" width=\"100\"></td>
        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vehicle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "    </tbody>
  </table> </br>
  <button class=\"btn\" onclick=\"location.href='/admin/addvehicle'\">Add Vehicle</button></br>
  </div></br>

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
        return array (  129 => 37,  120 => 34,  116 => 33,  112 => 32,  108 => 31,  104 => 30,  100 => 29,  96 => 28,  92 => 27,  88 => 26,  84 => 25,  81 => 24,  77 => 23,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"admin/master.html.twig\" %}

{% block title %}All Vehicles{% endblock %}

{% block content %}
  <h1>All Vehicles</h1>
  <table class=\"listTable\">
    <thead>
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
          <td><img src=\"{{ vehicle.image_filepath }}\" width=\"100\"></td>
        </tr>
      {% endfor %}
    </tbody>
  </table> </br>
  <button class=\"btn\" onclick=\"location.href='/admin/addvehicle'\">Add Vehicle</button></br>
  </div></br>

{% endblock %}
", "admin/vehicleslist.html.twig", "C:\\xampp\\htdocs\\CarRentalProject\\templates\\admin\\vehicleslist.html.twig");
    }
}
