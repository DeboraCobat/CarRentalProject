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
class __TwigTemplate_3f08ae001ad1251d4c723f3da49b28af extends Template
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
        $this->parent = $this->loadTemplate("master.html.twig", "myreservation.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "\t\t\t\t<style>
\t\t\t\t\tul {
\t\t\t\t\t\tlist-style: none;
\t\t\t\t\t\tpadding: 0;
\t\t\t\t\t\tmargin: 0;
\t\t\t\t\t}
\t\t\t\t</style>
\t\t\t\t<script src=\"https://js.stripe.com/v3/\"></script>
\t\t\t\t<div class=\"container\">

\t\t\t\t\t<div class=\"container mt-4\">
\t\t\t\t\t\t<div class=\"row justify-content-left\">
\t\t\t\t\t\t\t<div class=\"col-md-10 col-lg-12\">
\t\t\t\t\t\t\t\t<hr class=\"my-4\">
\t\t\t\t\t\t\t\t<ul class=\"no-bullets\">
\t\t\t\t\t\t\t\t\t<h1>My Reservations</h1>
\t\t\t\t\t\t\t\t\t";
        // line 21
        if (($context["reservations"] ?? null)) {
            // line 22
            echo "\t\t\t\t\t\t\t\t\t</br>
\t\t\t\t\t\t\t\t\t";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["reservations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
                // line 24
                echo "\t\t\t\t\t\t\t\t\t</br>
\t\t\t\t\t\t\t\t\t<ul></br>
\t\t\t\t\t\t\t\t\t<li>Reservation ID:
\t\t\t\t\t\t\t\t\t\t";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 27), "html", null, true);
                echo "</li>
\t\t\t\t\t\t\t\t\t<li>Pick-up Date:
\t\t\t\t\t\t\t\t\t\t";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "start_date", [], "any", false, false, false, 29), "html", null, true);
                echo "</li>
\t\t\t\t\t\t\t\t\t<li>Return Date:
\t\t\t\t\t\t\t\t\t\t";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "end_date", [], "any", false, false, false, 31), "html", null, true);
                echo "</li>
\t\t\t\t\t\t\t\t</br>
\t\t\t\t\t\t\t\t<li>VEHICLE:</li>
\t\t\t\t\t\t\t</br>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li>Make:
\t\t\t\t\t\t\t\t\t";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservation"], "vehicle", [], "any", false, false, false, 37), "make", [], "any", false, false, false, 37), "html", null, true);
                echo "</li>
\t\t\t\t\t\t\t\t<li>Model:
\t\t\t\t\t\t\t\t\t";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservation"], "vehicle", [], "any", false, false, false, 39), "model", [], "any", false, false, false, 39), "html", null, true);
                echo "</li>
\t\t\t\t\t\t\t\t<li>Color:
\t\t\t\t\t\t\t\t\t";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservation"], "vehicle", [], "any", false, false, false, 41), "color", [], "any", false, false, false, 41), "html", null, true);
                echo "</li>
\t\t\t\t\t\t\t\t<li>License Plate:
\t\t\t\t\t\t\t\t\t";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservation"], "vehicle", [], "any", false, false, false, 43), "license_plate", [], "any", false, false, false, 43), "html", null, true);
                echo "</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<form action=\"checkout-charge.php\" method=\"POST\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"c_name\" value=\"";
                // line 47
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "customer_id", [], "any", false, false, false, 47), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"phone\" value=\"";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservation"], "users", [], "any", false, false, false, 48), "first_name", [], "any", false, false, false, 48), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservation"], "users", [], "any", false, false, false, 48), "last_name", [], "any", false, false, false, 48), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"address\" value=\"";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservation"], "users", [], "any", false, false, false, 49), "address", [], "any", false, false, false, 49), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"amount\" value=\"";
                // line 50
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "final_total", [], "any", false, false, false, 50), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"product_name\" value=\"";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservation"], "vehicle", [], "any", false, false, false, 51), "make", [], "any", false, false, false, 51), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservation"], "vehicle", [], "any", false, false, false, 51), "model", [], "any", false, false, false, 51), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"reservation_id\" value=\"";
                // line 52
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 52), "html", null, true);
                echo "\"></br>
\t\t\t\t\t\t";
                // line 54
                echo "\t\t\t\t\t\t<script src=\"https://checkout.stripe.com/checkout.js\" class=\"stripe-button\" data-key=\"pk_test_51MsXcLJzhRIY3i5LeaGpgIQ9cHj8h0mwvZazt0JSNCk88nZyabvuDxiP2ju6wVisTEylFUPmS11X6ZuAitmtvDwZ00zwYYHn5W\" data-amount=\"";
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["reservation"], "final_total", [], "any", false, false, false, 54) * 100), "html", null, true);
                echo "\" data-name=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservation"], "vehicle", [], "any", false, false, false, 54), "make", [], "any", false, false, false, 54), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservation"], "vehicle", [], "any", false, false, false, 54), "model", [], "any", false, false, false, 54), "html", null, true);
                echo "\" data-image=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehicles"] ?? null), "image_filepath", [], "any", false, false, false, 54), "html", null, true);
                echo "\" data-currency=\"cad\" data-locale=\"auto\"></script>
\t\t\t\t\t</form>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "\t\t\t";
        } else {
            // line 58
            echo "\t\t\t\t<p>";
            echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
            echo "</p></br></br></br>
\t\t\t\t<a href=\"";
            // line 59
            echo "/customerprofile";
            echo "\" class=\"btn btn-primary btn-sm\">Back to my profile</a>
\t\t\t";
        }
        // line 61
        echo "\t\t</div>
\t</div>
</div>";
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
        return array (  180 => 61,  175 => 59,  170 => 58,  167 => 57,  151 => 54,  147 => 52,  141 => 51,  137 => 50,  133 => 49,  127 => 48,  123 => 47,  116 => 43,  111 => 41,  106 => 39,  101 => 37,  92 => 31,  87 => 29,  82 => 27,  77 => 24,  73 => 23,  70 => 22,  68 => 21,  50 => 5,  46 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'master.html.twig' %}


{% block content %}
\t\t\t\t<style>
\t\t\t\t\tul {
\t\t\t\t\t\tlist-style: none;
\t\t\t\t\t\tpadding: 0;
\t\t\t\t\t\tmargin: 0;
\t\t\t\t\t}
\t\t\t\t</style>
\t\t\t\t<script src=\"https://js.stripe.com/v3/\"></script>
\t\t\t\t<div class=\"container\">

\t\t\t\t\t<div class=\"container mt-4\">
\t\t\t\t\t\t<div class=\"row justify-content-left\">
\t\t\t\t\t\t\t<div class=\"col-md-10 col-lg-12\">
\t\t\t\t\t\t\t\t<hr class=\"my-4\">
\t\t\t\t\t\t\t\t<ul class=\"no-bullets\">
\t\t\t\t\t\t\t\t\t<h1>My Reservations</h1>
\t\t\t\t\t\t\t\t\t{% if reservations %}
\t\t\t\t\t\t\t\t\t</br>
\t\t\t\t\t\t\t\t\t{% for reservation in reservations  %}
\t\t\t\t\t\t\t\t\t</br>
\t\t\t\t\t\t\t\t\t<ul></br>
\t\t\t\t\t\t\t\t\t<li>Reservation ID:
\t\t\t\t\t\t\t\t\t\t{{ reservation.id }}</li>
\t\t\t\t\t\t\t\t\t<li>Pick-up Date:
\t\t\t\t\t\t\t\t\t\t{{ reservation.start_date }}</li>
\t\t\t\t\t\t\t\t\t<li>Return Date:
\t\t\t\t\t\t\t\t\t\t{{ reservation.end_date }}</li>
\t\t\t\t\t\t\t\t</br>
\t\t\t\t\t\t\t\t<li>VEHICLE:</li>
\t\t\t\t\t\t\t</br>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li>Make:
\t\t\t\t\t\t\t\t\t{{ reservation.vehicle.make }}</li>
\t\t\t\t\t\t\t\t<li>Model:
\t\t\t\t\t\t\t\t\t{{ reservation.vehicle.model }}</li>
\t\t\t\t\t\t\t\t<li>Color:
\t\t\t\t\t\t\t\t\t{{ reservation.vehicle.color }}</li>
\t\t\t\t\t\t\t\t<li>License Plate:
\t\t\t\t\t\t\t\t\t{{ reservation.vehicle.license_plate }}</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<form action=\"checkout-charge.php\" method=\"POST\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"c_name\" value=\"{{ reservation.customer_id }}\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"phone\" value=\"{{ reservation.users.first_name }} {{ reservation.users.last_name }}\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"address\" value=\"{{ reservation.users.address }}\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"amount\" value=\"{{ reservation.final_total }}\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"product_name\" value=\"{{ reservation.vehicle.make }} {{ reservation.vehicle.model }}\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"reservation_id\" value=\"{{ reservation.id }}\"></br>
\t\t\t\t\t\t{# <button type=\"submit\" id=\"checkout-button\">Checkout</button> #}
\t\t\t\t\t\t<script src=\"https://checkout.stripe.com/checkout.js\" class=\"stripe-button\" data-key=\"pk_test_51MsXcLJzhRIY3i5LeaGpgIQ9cHj8h0mwvZazt0JSNCk88nZyabvuDxiP2ju6wVisTEylFUPmS11X6ZuAitmtvDwZ00zwYYHn5W\" data-amount=\"{{ reservation.final_total * 100 }}\" data-name=\"{{ reservation.vehicle.make }} {{ reservation.vehicle.model }}\" data-image=\"{{ vehicles.image_filepath }}\" data-currency=\"cad\" data-locale=\"auto\"></script>
\t\t\t\t\t</form>
\t\t\t\t{% endfor %}
\t\t\t{% else %}
\t\t\t\t<p>{{ message }}</p></br></br></br>
\t\t\t\t<a href=\"{{ '/customerprofile' }}\" class=\"btn btn-primary btn-sm\">Back to my profile</a>
\t\t\t{% endif %}
\t\t</div>
\t</div>
</div>{% endblock %}
", "myreservation.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/carrentalproject/templates/myreservation.html.twig");
    }
}
