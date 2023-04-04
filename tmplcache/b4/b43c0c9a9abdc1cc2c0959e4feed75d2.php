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

/* selectvehicleavailable.html.twig */
class __TwigTemplate_50242caba04abfc4ea7774aaef50a051 extends Template
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
        $this->parent = $this->loadTemplate("master.html.twig", "selectvehicleavailable.html.twig", 1);
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
\t\t\t\t<th>ID</th>
\t\t\t\t<th>Make</th>
\t\t\t\t<th>Model</th>
\t\t\t\t<th>Year</th>
\t\t\t\t<th>Color</th>
\t\t\t\t<th>Availability</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["availableVehicles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["vehicle"]) {
            // line 18
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicle"], "id", [], "any", false, false, false, 19), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicle"], "make", [], "any", false, false, false, 20), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicle"], "model", [], "any", false, false, false, 21), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicle"], "year", [], "any", false, false, false, 22), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicle"], "color", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicle"], "availability", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vehicle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "\t\t</tbody>
\t</table>
";
    }

    public function getTemplateName()
    {
        return "selectvehicleavailable.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 27,  92 => 24,  88 => 23,  84 => 22,  80 => 21,  76 => 20,  72 => 19,  69 => 18,  65 => 17,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'master.html.twig' %}

{% block content %}
\t<h1>Available Vehicles</h1>
\t<table>
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>ID</th>
\t\t\t\t<th>Make</th>
\t\t\t\t<th>Model</th>
\t\t\t\t<th>Year</th>
\t\t\t\t<th>Color</th>
\t\t\t\t<th>Availability</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t{% for vehicle in availableVehicles %}
\t\t\t\t<tr>
\t\t\t\t\t<td>{{ vehicle.id }}</td>
\t\t\t\t\t<td>{{ vehicle.make }}</td>
\t\t\t\t\t<td>{{ vehicle.model }}</td>
\t\t\t\t\t<td>{{ vehicle.year }}</td>
\t\t\t\t\t<td>{{ vehicle.color }}</td>
\t\t\t\t\t<td>{{ vehicle.availability }}</td>
\t\t\t\t</tr>
\t\t\t{% endfor %}
\t\t</tbody>
\t</table>
{% endblock %}
", "selectvehicleavailable.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/carrentalproject/templates/selectvehicleavailable.html.twig");
    }
}
