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
        echo "<style>
ul {
  list-style: none;
  padding: 0;
  margin: 0;
}
</style>
 <script src=\"https://js.stripe.com/v3/\"></script>
\t<div class=\"container\">
\t\t
<div class=\"container mt-4\">
  <div class=\"row justify-content-left\">
    <div class=\"col-md-10 col-lg-12\">
      <hr class=\"my-4\">
      <ul class=\"no-bullets\">
\t\t\t\t<h1>My Reservations</h1>
\t\t\t\t";
        // line 22
        if (($context["reservations"] ?? null)) {
            echo "</br>
\t\t\t\t\t ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["reservations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
                echo "</br>
\t\t\t\t\t\t<ul></br>
\t\t\t\t\t\t\t<li>Reservation ID: ";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 25), "html", null, true);
                echo "</li>
\t\t\t\t\t\t\t<li>Pick-up Date: ";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "start_date", [], "any", false, false, false, 26), "html", null, true);
                echo "</li>
\t\t\t\t\t\t\t<li>Return Date: ";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "end_date", [], "any", false, false, false, 27), "html", null, true);
                echo "</li></br>
\t\t\t\t\t\t\t<li>VEHICLE:</li></br>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li>Make: ";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservation"], "vehicle", [], "any", false, false, false, 30), "make", [], "any", false, false, false, 30), "html", null, true);
                echo "</li>
\t\t\t\t\t\t\t\t<li>Model: ";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservation"], "vehicle", [], "any", false, false, false, 31), "model", [], "any", false, false, false, 31), "html", null, true);
                echo "</li>
\t\t\t\t\t\t\t\t<li>Color: ";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservation"], "vehicle", [], "any", false, false, false, 32), "color", [], "any", false, false, false, 32), "html", null, true);
                echo "</li>
\t\t\t\t\t\t\t\t<li>License Plate: ";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservation"], "vehicle", [], "any", false, false, false, 33), "license_plate", [], "any", false, false, false, 33), "html", null, true);
                echo "</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<form action=\"checkout-charge.php\" method=\"POST\">
\t\t\t\t\t\t\t \t\t<input type=\"hidden\" name=\"c_name\" value=\"";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "customer_id", [], "any", false, false, false, 37), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"phone\" value=\"";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservation"], "users", [], "any", false, false, false, 38), "first_name", [], "any", false, false, false, 38), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservation"], "users", [], "any", false, false, false, 38), "last_name", [], "any", false, false, false, 38), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"address\" value=\"";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservation"], "users", [], "any", false, false, false, 39), "address", [], "any", false, false, false, 39), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"amount\" value=\"";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "final_total", [], "any", false, false, false, 40), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"product_name\" value=\"";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservation"], "vehicle", [], "any", false, false, false, 41), "make", [], "any", false, false, false, 41), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservation"], "vehicle", [], "any", false, false, false, 41), "model", [], "any", false, false, false, 41), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"reservation_id\" value=\"";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 42), "html", null, true);
                echo "\"></br>
        \t\t\t\t";
                // line 44
                echo "\t\t\t\t\t\t\t\t<script
\t\t\t\t\t\t\t\tsrc=\"https://checkout.stripe.com/checkout.js\" class=\"stripe-button\"
\t\t\t\t\t\t\t\tdata-key=\"pk_test_51MsXcLJzhRIY3i5LeaGpgIQ9cHj8h0mwvZazt0JSNCk88nZyabvuDxiP2ju6wVisTEylFUPmS11X6ZuAitmtvDwZ00zwYYHn5W\"
\t\t\t\t\t\t\t\tdata-amount=\"";
                // line 47
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["reservation"], "final_total", [], "any", false, false, false, 47) * 100), "html", null, true);
                echo "\"
\t\t\t\t\t\t\t\tdata-name=\"";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservation"], "vehicle", [], "any", false, false, false, 48), "make", [], "any", false, false, false, 48), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservation"], "vehicle", [], "any", false, false, false, 48), "model", [], "any", false, false, false, 48), "html", null, true);
                echo "\"
\t\t\t\t\t\t\t\tdata-image=\"";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vehicles"] ?? null), "image_filepath", [], "any", false, false, false, 49), "html", null, true);
                echo "\"
\t\t\t\t\t\t\t\tdata-currency=\"cad\"
\t\t\t\t\t\t\t\tdata-locale=\"auto\">
\t\t\t\t\t\t\t\t</script>
      \t\t\t\t</form>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "\t\t\t\t";
        } else {
            // line 56
            echo "\t\t\t\t\t<p>";
            echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
            echo "</p>
\t\t\t\t";
        }
        // line 58
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
        return array (  179 => 58,  173 => 56,  170 => 55,  158 => 49,  152 => 48,  148 => 47,  143 => 44,  139 => 42,  133 => 41,  129 => 40,  125 => 39,  119 => 38,  115 => 37,  108 => 33,  104 => 32,  100 => 31,  96 => 30,  90 => 27,  86 => 26,  82 => 25,  75 => 23,  71 => 22,  53 => 6,  49 => 5,  44 => 1,  42 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'master.html.twig' %}

{% set message = \"You don't have any reservations yet.\" %}

{% block content %}
<style>
ul {
  list-style: none;
  padding: 0;
  margin: 0;
}
</style>
 <script src=\"https://js.stripe.com/v3/\"></script>
\t<div class=\"container\">
\t\t
<div class=\"container mt-4\">
  <div class=\"row justify-content-left\">
    <div class=\"col-md-10 col-lg-12\">
      <hr class=\"my-4\">
      <ul class=\"no-bullets\">
\t\t\t\t<h1>My Reservations</h1>
\t\t\t\t{% if reservations %}</br>
\t\t\t\t\t {% for reservation in reservations  %}</br>
\t\t\t\t\t\t<ul></br>
\t\t\t\t\t\t\t<li>Reservation ID: {{ reservation.id }}</li>
\t\t\t\t\t\t\t<li>Pick-up Date: {{ reservation.start_date }}</li>
\t\t\t\t\t\t\t<li>Return Date: {{ reservation.end_date }}</li></br>
\t\t\t\t\t\t\t<li>VEHICLE:</li></br>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li>Make: {{ reservation.vehicle.make }}</li>
\t\t\t\t\t\t\t\t<li>Model: {{ reservation.vehicle.model }}</li>
\t\t\t\t\t\t\t\t<li>Color: {{ reservation.vehicle.color }}</li>
\t\t\t\t\t\t\t\t<li>License Plate: {{ reservation.vehicle.license_plate }}</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<form action=\"checkout-charge.php\" method=\"POST\">
\t\t\t\t\t\t\t \t\t<input type=\"hidden\" name=\"c_name\" value=\"{{ reservation.customer_id }}\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"phone\" value=\"{{ reservation.users.first_name }} {{ reservation.users.last_name }}\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"address\" value=\"{{ reservation.users.address }}\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"amount\" value=\"{{ reservation.final_total }}\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"product_name\" value=\"{{ reservation.vehicle.make }} {{ reservation.vehicle.model }}\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"reservation_id\" value=\"{{ reservation.id }}\"></br>
        \t\t\t\t{# <button type=\"submit\" id=\"checkout-button\">Checkout</button> #}
\t\t\t\t\t\t\t\t<script
\t\t\t\t\t\t\t\tsrc=\"https://checkout.stripe.com/checkout.js\" class=\"stripe-button\"
\t\t\t\t\t\t\t\tdata-key=\"pk_test_51MsXcLJzhRIY3i5LeaGpgIQ9cHj8h0mwvZazt0JSNCk88nZyabvuDxiP2ju6wVisTEylFUPmS11X6ZuAitmtvDwZ00zwYYHn5W\"
\t\t\t\t\t\t\t\tdata-amount=\"{{ reservation.final_total * 100 }}\"
\t\t\t\t\t\t\t\tdata-name=\"{{ reservation.vehicle.make }} {{ reservation.vehicle.model }}\"
\t\t\t\t\t\t\t\tdata-image=\"{{ vehicles.image_filepath }}\"
\t\t\t\t\t\t\t\tdata-currency=\"cad\"
\t\t\t\t\t\t\t\tdata-locale=\"auto\">
\t\t\t\t\t\t\t\t</script>
      \t\t\t\t</form>
\t\t\t\t\t{% endfor %}
\t\t\t\t{% else %}
\t\t\t\t\t<p>{{ message }}</p>
\t\t\t\t{% endif %}
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}

", "myreservation.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/carrentalproject/templates/myreservation.html.twig");
    }
}
