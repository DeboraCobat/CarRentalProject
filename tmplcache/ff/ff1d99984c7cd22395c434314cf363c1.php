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

/* admin/viewvehicle.html.twig */
class __TwigTemplate_f8cb7d649140a20fbb4f565dc783b625 extends Template
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
        $this->parent = $this->loadTemplate("admin/master.html.twig", "admin/viewvehicle.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Vehicle";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "  <h1>Vehicle</h1>
  <table class=\"listTable\">
    <thead>
      <tr>
        <th>Image</th>
        <th>Make</th>
        <th>Model</th>
        <th>Year</th>
        <th>Color</th>
        <th>License Plate</th>
        <th>Daily Rate</th>
        <th>Availability</th>
        <th>Seats</th>
        <th>L/100km</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><img src=\"";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "image", [], "any", false, false, false, 24), "html", null, true);
        echo "\"></td>
        <td>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "make", [], "any", false, false, false, 25), "html", null, true);
        echo "</td>
        <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "model", [], "any", false, false, false, 26), "html", null, true);
        echo "</td>
        <td>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "year", [], "any", false, false, false, 27), "html", null, true);
        echo "</td>
        <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "color", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
        <td>";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "license_plate", [], "any", false, false, false, 29), "html", null, true);
        echo "</td>
        <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "daily_rate", [], "any", false, false, false, 30), "html", null, true);
        echo "</td>
        <td>";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "availability", [], "any", false, false, false, 31), "html", null, true);
        echo "</td>
        <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "seats", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
        <td>";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "lper100", [], "any", false, false, false, 33), "html", null, true);
        echo "</td>
      </tr>
    </tbody>
  </table>
  </br>
  <button class=\"btn\" onclick=\"location.href='http://carrentalproject.org/admin/viewvehicle'\">Add Vehicle</button>
  </br>
";
    }

    public function getTemplateName()
    {
        return "admin/viewvehicle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 33,  110 => 32,  106 => 31,  102 => 30,  98 => 29,  94 => 28,  90 => 27,  86 => 26,  82 => 25,  78 => 24,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"admin/master.html.twig\" %}

{% block title %}Vehicle{% endblock %}

{% block content %}
  <h1>Vehicle</h1>
  <table class=\"listTable\">
    <thead>
      <tr>
        <th>Image</th>
        <th>Make</th>
        <th>Model</th>
        <th>Year</th>
        <th>Color</th>
        <th>License Plate</th>
        <th>Daily Rate</th>
        <th>Availability</th>
        <th>Seats</th>
        <th>L/100km</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><img src=\"{{ vehicle.image }}\"></td>
        <td>{{ vehicle.make }}</td>
        <td>{{ vehicle.model }}</td>
        <td>{{ vehicle.year }}</td>
        <td>{{ vehicle.color }}</td>
        <td>{{ vehicle.license_plate }}</td>
        <td>{{ vehicle.daily_rate }}</td>
        <td>{{ vehicle.availability }}</td>
        <td>{{ vehicle.seats }}</td>
        <td>{{ vehicle.lper100 }}</td>
      </tr>
    </tbody>
  </table>
  </br>
  <button class=\"btn\" onclick=\"location.href='http://carrentalproject.org/admin/viewvehicle'\">Add Vehicle</button>
  </br>
{% endblock %}
", "admin/viewvehicle.html.twig", "C:\\xampp\\htdocs\\CarRentalProject\\templates\\admin\\viewvehicle.html.twig");
    }
}
