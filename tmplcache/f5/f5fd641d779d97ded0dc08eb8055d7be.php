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

/* booking.html.twig */
class __TwigTemplate_2728883367898cc197915d3c18220298 extends Template
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
        $this->parent = $this->loadTemplate("master.html.twig", "booking.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <h1>Booking</h1>
    <div class=\"vehicle-details\">
        <img src=\"/";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "image_filepath", [], "any", false, false, false, 6), "html", null, true);
        echo "\" width=\"200\">
        <p>";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "make", [], "any", false, false, false, 7), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "model", [], "any", false, false, false, 7), "html", null, true);
        echo "</p>
        <p>";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "seats", [], "any", false, false, false, 8), "html", null, true);
        echo " seats</p>
    </div>
    <form id=\"booking-form\" method=\"post\" action=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("booking_details", ["id" => twig_get_attribute($this->env, $this->source, ($context["vehicle"] ?? null), "id", [], "any", false, false, false, 10)]), "html", null, true);
        echo "\">
        <label for=\"pickup-date-time\">Pickup Date/Time:</label>
        <input type=\"datetime-local\" name=\"pickupDateTime\" id=\"pickup-date-time\" required>
        <br>
        <label for=\"return-date-time\">Return Date/Time:</label>
        <input type=\"datetime-local\" name=\"returnDateTime\" id=\"return-date-time\" required>
        <br>
        <input type=\"submit\" value=\"Book Now\">
    </form>
";
    }

    public function getTemplateName()
    {
        return "booking.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 10,  64 => 8,  58 => 7,  54 => 6,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'master.html.twig' %}

{% block content %}
    <h1>Booking</h1>
    <div class=\"vehicle-details\">
        <img src=\"/{{ vehicle.image_filepath }}\" width=\"200\">
        <p>{{ vehicle.make }} {{ vehicle.model }}</p>
        <p>{{ vehicle.seats }} seats</p>
    </div>
    <form id=\"booking-form\" method=\"post\" action=\"{{ url_for('booking_details', {'id': vehicle.id}) }}\">
        <label for=\"pickup-date-time\">Pickup Date/Time:</label>
        <input type=\"datetime-local\" name=\"pickupDateTime\" id=\"pickup-date-time\" required>
        <br>
        <label for=\"return-date-time\">Return Date/Time:</label>
        <input type=\"datetime-local\" name=\"returnDateTime\" id=\"return-date-time\" required>
        <br>
        <input type=\"submit\" value=\"Book Now\">
    </form>
{% endblock %}
", "booking.html.twig", "C:\\xampp\\htdocs\\CarRentalProject\\templates\\booking.html.twig");
    }
}
