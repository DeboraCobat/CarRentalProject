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
        echo "    <h1>Available Vehicles</h1>
    <table>
        <thead>
            <tr>
                <th>Image</th>
                <th>ID</th>
                <th>Make</th>
                <th>Model</th>
                <th>Year</th>
                <th>Color</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["availableVehicles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["vehicle"]) {
            // line 19
            echo "                <tr>
                    <td><img src=\"/";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicle"], "image_filepath", [], "any", false, false, false, 20), "html", null, true);
            echo "\" width=\"100\"></td>
                    <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicle"], "id", [], "any", false, false, false, 21), "html", null, true);
            echo "</td>
                    <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicle"], "make", [], "any", false, false, false, 22), "html", null, true);
            echo "</td>
                    <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicle"], "model", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
                    <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicle"], "year", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
                    <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicle"], "color", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
                    <td>
                        <button class=\"select-btn\" data-vehicle-id=\"";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicle"], "id", [], "any", false, false, false, 27), "html", null, true);
            echo "\">Select</button>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vehicle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
    </table>
    <form id=\"select-form\" method=\"post\">
        <input type=\"hidden\" name=\"pickup_date\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, ($context["pickupDateTime"] ?? null), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"pickup_time\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, ($context["pickupTime"] ?? null), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"return_date\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, ($context["returnDateTime"] ?? null), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"return_time\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, ($context["returnTime"] ?? null), "html", null, true);
        echo "\">
    </form>
    <script>
        const selectBtns = document.querySelectorAll('.select-btn');

        selectBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                const vehicleId = btn.dataset.vehicleId;
                const url = '";
        // line 45
        echo twig_escape_filter($this->env, ($context["base_path"] ?? null), "html", null, true);
        echo "/booking/trip-details?vehicleId=' + vehicleId + '&pickupDate=";
        echo twig_escape_filter($this->env, ($context["pickupDateTime"] ?? null), "html", null, true);
        echo "&pickupTime=";
        echo twig_escape_filter($this->env, ($context["pickupTime"] ?? null), "html", null, true);
        echo "&returnDate=";
        echo twig_escape_filter($this->env, ($context["returnDateTime"] ?? null), "html", null, true);
        echo "&returnTime=";
        echo twig_escape_filter($this->env, ($context["returnTime"] ?? null), "html", null, true);
        echo "';
                window.location.href = url;
            });
        });
    </script>
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
    <h1>Available Vehicles</h1>
    <table>
        <thead>
            <tr>
                <th>Image</th>
                <th>ID</th>
                <th>Make</th>
                <th>Model</th>
                <th>Year</th>
                <th>Color</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            {% for vehicle in availableVehicles %}
                <tr>
                    <td><img src=\"/{{ vehicle.image_filepath }}\" width=\"100\"></td>
                    <td>{{ vehicle.id }}</td>
                    <td>{{ vehicle.make }}</td>
                    <td>{{ vehicle.model }}</td>
                    <td>{{ vehicle.year }}</td>
                    <td>{{ vehicle.color }}</td>
                    <td>
                        <button class=\"select-btn\" data-vehicle-id=\"{{ vehicle.id }}\">Select</button>
                    </td>
                </tr>
            {% endfor %}
        </tbody>
    </table>
    <form id=\"select-form\" method=\"post\">
        <input type=\"hidden\" name=\"pickup_date\" value=\"{{ pickupDateTime }}\">
        <input type=\"hidden\" name=\"pickup_time\" value=\"{{ pickupTime }}\">
        <input type=\"hidden\" name=\"return_date\" value=\"{{ returnDateTime }}\">
        <input type=\"hidden\" name=\"return_time\" value=\"{{ returnTime }}\">
    </form>
    <script>
        const selectBtns = document.querySelectorAll('.select-btn');

        selectBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                const vehicleId = btn.dataset.vehicleId;
                const url = '{{ base_path }}/booking/trip-details?vehicleId=' + vehicleId + '&pickupDate={{ pickupDateTime }}&pickupTime={{ pickupTime }}&returnDate={{ returnDateTime }}&returnTime={{ returnTime }}';
                window.location.href = url;
            });
        });
    </script>
{% endblock %}
", "selectvehicle.html.twig", "C:\\xampp\\htdocs\\CarRentalProject\\templates\\selectvehicle.html.twig");
    }
}
