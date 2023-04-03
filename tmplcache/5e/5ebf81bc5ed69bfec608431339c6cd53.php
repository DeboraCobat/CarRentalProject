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

/* selectvehicle.html.twig */
class __TwigTemplate_fc57fd53e51f5ef2a34a0e7edb78f0f3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $this->parent = $this->loadTemplate("master.html.twig", "selectvehicle.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "\t<h1>Available Vehicles</h1>
\t<table>
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>Image</th>
\t\t\t\t<th>ID</th>
\t\t\t\t<th>Make</th>
\t\t\t\t<th>Model</th>
\t\t\t\t<th>Year</th>
\t\t\t\t<th>Color</th>
\t\t\t\t<th></th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["availableVehicles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["vehicle"]) {
            // line 19
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td><img src=\"/";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicle"], "image_filepath", [], "any", false, false, false, 20), "html", null, true);
            echo "\" width=\"100\"></td>
\t\t\t\t\t<td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicle"], "id", [], "any", false, false, false, 21), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicle"], "make", [], "any", false, false, false, 22), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicle"], "model", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicle"], "year", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicle"], "color", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<button class=\"select-btn\" data-vehicle-id=\"";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicle"], "id", [], "any", false, false, false, 27), "html", null, true);
            echo "\">Select</button>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vehicle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "\t\t</tbody>
\t</table>
\t<form id=\"select-form\" method=\"post\">
\t\t<input type=\"hidden\" name=\"pickup_date\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, ($context["pickupDateTime"] ?? null), "html", null, true);
        echo "\">
\t\t<input type=\"hidden\" name=\"pickup_time\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, ($context["pickupTime"] ?? null), "html", null, true);
        echo "\">
\t\t<input type=\"hidden\" name=\"return_date\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, ($context["returnDateTime"] ?? null), "html", null, true);
        echo "\">
\t\t<input type=\"hidden\" name=\"return_time\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, ($context["returnTime"] ?? null), "html", null, true);
        echo "\">
\t</form>
\t<script>
\t\tconst selectBtns = document.querySelectorAll('.select-btn');

selectBtns.forEach(btn => {
btn.addEventListener('click', () => {
const vehicleId = btn.dataset.vehicleId;
const url = '";
        // line 45
        echo twig_escape_filter($this->env, ($context["base_path"] ?? null), "html", null, true);
        echo "/booking/trip-details?vehicleId=' + vehicleId + '&pickupDate= ";
        echo twig_escape_filter($this->env, ($context["pickupDateTime"] ?? null), "html", null, true);
        echo "&pickupTime= ";
        echo twig_escape_filter($this->env, ($context["pickupTime"] ?? null), "html", null, true);
        echo "&returnDate= ";
        echo twig_escape_filter($this->env, ($context["returnDateTime"] ?? null), "html", null, true);
        echo "&returnTime= ";
        echo twig_escape_filter($this->env, ($context["returnTime"] ?? null), "html", null, true);
        echo "';
window.location.href = url;
});
});
\t</script>
";
    }

    public function getTemplateName()
    {
        return "selectvehicle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 45,  125 => 37,  121 => 36,  117 => 35,  113 => 34,  108 => 31,  98 => 27,  93 => 25,  89 => 24,  85 => 23,  81 => 22,  77 => 21,  73 => 20,  70 => 19,  66 => 18,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'master.html.twig' %}

{% block content %}
\t<h1>Available Vehicles</h1>
\t<table>
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>Image</th>
\t\t\t\t<th>ID</th>
\t\t\t\t<th>Make</th>
\t\t\t\t<th>Model</th>
\t\t\t\t<th>Year</th>
\t\t\t\t<th>Color</th>
\t\t\t\t<th></th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t{% for vehicle in availableVehicles %}
\t\t\t\t<tr>
\t\t\t\t\t<td><img src=\"/{{ vehicle.image_filepath }}\" width=\"100\"></td>
\t\t\t\t\t<td>{{ vehicle.id }}</td>
\t\t\t\t\t<td>{{ vehicle.make }}</td>
\t\t\t\t\t<td>{{ vehicle.model }}</td>
\t\t\t\t\t<td>{{ vehicle.year }}</td>
\t\t\t\t\t<td>{{ vehicle.color }}</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<button class=\"select-btn\" data-vehicle-id=\"{{ vehicle.id }}\">Select</button>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t{% endfor %}
\t\t</tbody>
\t</table>
\t<form id=\"select-form\" method=\"post\">
\t\t<input type=\"hidden\" name=\"pickup_date\" value=\"{{ pickupDateTime }}\">
\t\t<input type=\"hidden\" name=\"pickup_time\" value=\"{{ pickupTime }}\">
\t\t<input type=\"hidden\" name=\"return_date\" value=\"{{ returnDateTime }}\">
\t\t<input type=\"hidden\" name=\"return_time\" value=\"{{ returnTime }}\">
\t</form>
\t<script>
\t\tconst selectBtns = document.querySelectorAll('.select-btn');

selectBtns.forEach(btn => {
btn.addEventListener('click', () => {
const vehicleId = btn.dataset.vehicleId;
const url = '{{ base_path }}/booking/trip-details?vehicleId=' + vehicleId + '&pickupDate= {{ pickupDateTime }}&pickupTime= {{ pickupTime }}&returnDate= {{ returnDateTime }}&returnTime= {{ returnTime }}';
window.location.href = url;
});
});
\t</script>
{% endblock %}
", "selectvehicle.html.twig", "C:\\xampp\\htdocs\\CarRentalProject\\templates\\selectvehicle.html.twig");
    }
}
