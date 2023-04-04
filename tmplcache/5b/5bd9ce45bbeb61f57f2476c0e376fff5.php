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

/* myreservation.html.twig */
class __TwigTemplate_54f4a97269debe8460f9711f82ab1754 extends Template
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
        // line 3
        $context["message"] = "You don't have any reservations yet.";
        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "myreservation.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "\t<div class=\"container\">
\t\t<div class=\"row justify-content- left mt-10 mb-10\">
\t\t\t<div class=\"col-md-10 col-lg-10\">
\t\t\t\t<h1>My Reservations</h1>
\t\t\t\t";
        // line 10
        if (($context["reservations"] ?? null)) {
            // line 11
            echo "\t\t\t\t\t ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["reservations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
                // line 12
                echo "\t\t\t\t\t\t<h2>Reservation Details:</h2>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li>Reservation ID: ";
                // line 14
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 14), "html", null, true);
                echo "</li>
\t\t\t\t\t\t\t<li>Pick-up Date: ";
                // line 15
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "start_date", [], "any", false, false, false, 15), "html", null, true);
                echo "</li>
\t\t\t\t\t\t\t<li>Return Date: ";
                // line 16
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "end_date", [], "any", false, false, false, 16), "html", null, true);
                echo "</li></br>
\t\t\t\t\t\t\t<li>Vehicle:</li>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li>Make: ";
                // line 19
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservation"], "vehicle", [], "any", false, false, false, 19), "make", [], "any", false, false, false, 19), "html", null, true);
                echo "</li>
\t\t\t\t\t\t\t\t<li>Model: ";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservation"], "vehicle", [], "any", false, false, false, 20), "model", [], "any", false, false, false, 20), "html", null, true);
                echo "</li>
\t\t\t\t\t\t\t\t<li>Color: ";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservation"], "vehicle", [], "any", false, false, false, 21), "color", [], "any", false, false, false, 21), "html", null, true);
                echo "</li>
\t\t\t\t\t\t\t\t<li>License Plate: ";
                // line 22
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservation"], "vehicle", [], "any", false, false, false, 22), "license_plate", [], "any", false, false, false, 22), "html", null, true);
                echo "</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</ul>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "\t\t\t\t";
        } else {
            // line 27
            echo "\t\t\t\t\t<p>";
            echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
            echo "</p>
\t\t\t\t";
        }
        // line 29
        echo "\t\t\t</div>
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "myreservation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 29,  109 => 27,  106 => 26,  96 => 22,  92 => 21,  88 => 20,  84 => 19,  78 => 16,  74 => 15,  70 => 14,  66 => 12,  61 => 11,  59 => 10,  53 => 6,  49 => 5,  44 => 1,  42 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'master.html.twig' %}

{% set message = \"You don't have any reservations yet.\" %}

{% block content %}
\t<div class=\"container\">
\t\t<div class=\"row justify-content- left mt-10 mb-10\">
\t\t\t<div class=\"col-md-10 col-lg-10\">
\t\t\t\t<h1>My Reservations</h1>
\t\t\t\t{% if reservations %}
\t\t\t\t\t {% for reservation in reservations  %}
\t\t\t\t\t\t<h2>Reservation Details:</h2>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li>Reservation ID: {{ reservation.id }}</li>
\t\t\t\t\t\t\t<li>Pick-up Date: {{ reservation.start_date }}</li>
\t\t\t\t\t\t\t<li>Return Date: {{ reservation.end_date }}</li></br>
\t\t\t\t\t\t\t<li>Vehicle:</li>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li>Make: {{ reservation.vehicle.make }}</li>
\t\t\t\t\t\t\t\t<li>Model: {{ reservation.vehicle.model }}</li>
\t\t\t\t\t\t\t\t<li>Color: {{ reservation.vehicle.color }}</li>
\t\t\t\t\t\t\t\t<li>License Plate: {{ reservation.vehicle.license_plate }}</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</ul>
\t\t\t\t\t{% endfor %}
\t\t\t\t{% else %}
\t\t\t\t\t<p>{{ message }}</p>
\t\t\t\t{% endif %}
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}

", "myreservation.html.twig", "C:\\xampp\\htdocs\\CarRentalProject\\templates\\myreservation.html.twig");
    }
}
