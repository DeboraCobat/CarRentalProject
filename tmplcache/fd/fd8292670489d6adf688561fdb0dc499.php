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

/* admin/editreservation.html.twig */
class __TwigTemplate_b7d598b1a26d60b824b53243305b2b25 extends Template
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
        $this->parent = $this->loadTemplate("admin/adminmaster.html.twig", "admin/editreservation.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Edit Reservation
";
    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "<h1>Edit a Reservation</h1><form method=\"POST\" action=\"/admin/editreservation/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["reservation"] ?? null), "id", [], "any", false, false, false, 7), "html", null, true);
        echo "\">
<label for=\"customer_id\">Customer ID:</label>
<input type=\"text\" name=\"customer_id\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["reservation"] ?? null), "customer_id", [], "any", false, false, false, 9), "html", null, true);
        echo "\" required><br><br>
<label for=\"vehicle_id\">Vehicle ID:</label>
<input type=\"text\" name=\"vehicle_id\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["reservation"] ?? null), "vehicle_id", [], "any", false, false, false, 11), "html", null, true);
        echo "\" required><br><br>
<label for=\"start_date\">Start Date:</label>
<input type=\"date\" name=\"start_date\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["reservation"] ?? null), "start_date", [], "any", false, false, false, 13), "html", null, true);
        echo "\" required><br><br>
<label for=\"end_date\">End Date:</label>
<input type=\"date\" name=\"end_date\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["reservation"] ?? null), "end_date", [], "any", false, false, false, 15), "html", null, true);
        echo "\" required><br><br>
<label for=\"rental_price\">Rental Price:</label>
<input type=\"number\" name=\"rental_price\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["reservation"] ?? null), "rental_price", [], "any", false, false, false, 17), "html", null, true);
        echo "\" required><br><br>
<label for=\"insurance_price\">Insurance Price:</label>
<input type=\"number\" name=\"insurance_price\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["reservation"] ?? null), "insurance_price", [], "any", false, false, false, 19), "html", null, true);
        echo "\" required><br><br>
<label for=\"taxes\">Taxes:</label>
<input type=\"number\" name=\"taxes\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["reservation"] ?? null), "taxes", [], "any", false, false, false, 21), "html", null, true);
        echo "\" required><br><br>
<label for=\"final_total\">Total:</label>
<input type=\"number\" name=\"final_total\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["reservation"] ?? null), "final_total", [], "any", false, false, false, 23), "html", null, true);
        echo "\" required><br><br>
<label for=\"notes\">Notes:</label>
<input type=\"text\" name=\"notes\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["reservation"] ?? null), "notes", [], "any", false, false, false, 25), "html", null, true);
        echo "\"><br><br>
<label for=\"payment_confirmation\">Payment Confirmation:</label>
<input type=\"text\" name=\"payment_confirmation\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["reservation"] ?? null), "payment_confirmation", [], "any", false, false, false, 27), "html", null, true);
        echo "\"><br><br>
<input type=\"submit\"
";
    }

    public function getTemplateName()
    {
        return "admin/editreservation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 27,  105 => 25,  100 => 23,  95 => 21,  90 => 19,  85 => 17,  80 => 15,  75 => 13,  70 => 11,  65 => 9,  59 => 7,  55 => 6,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"admin/adminmaster.html.twig\" %}

{% block title %}Edit Reservation
{% endblock %}

{% block content %}
<h1>Edit a Reservation</h1><form method=\"POST\" action=\"/admin/editreservation/{{ reservation.id }}\">
<label for=\"customer_id\">Customer ID:</label>
<input type=\"text\" name=\"customer_id\" value=\"{{ reservation.customer_id }}\" required><br><br>
<label for=\"vehicle_id\">Vehicle ID:</label>
<input type=\"text\" name=\"vehicle_id\" value=\"{{ reservation.vehicle_id }}\" required><br><br>
<label for=\"start_date\">Start Date:</label>
<input type=\"date\" name=\"start_date\" value=\"{{ reservation.start_date }}\" required><br><br>
<label for=\"end_date\">End Date:</label>
<input type=\"date\" name=\"end_date\" value=\"{{ reservation.end_date }}\" required><br><br>
<label for=\"rental_price\">Rental Price:</label>
<input type=\"number\" name=\"rental_price\" value=\"{{ reservation.rental_price }}\" required><br><br>
<label for=\"insurance_price\">Insurance Price:</label>
<input type=\"number\" name=\"insurance_price\" value=\"{{ reservation.insurance_price }}\" required><br><br>
<label for=\"taxes\">Taxes:</label>
<input type=\"number\" name=\"taxes\" value=\"{{ reservation.taxes }}\" required><br><br>
<label for=\"final_total\">Total:</label>
<input type=\"number\" name=\"final_total\" value=\"{{ reservation.final_total }}\" required><br><br>
<label for=\"notes\">Notes:</label>
<input type=\"text\" name=\"notes\" value=\"{{ reservation.notes }}\"><br><br>
<label for=\"payment_confirmation\">Payment Confirmation:</label>
<input type=\"text\" name=\"payment_confirmation\" value=\"{{ reservation.payment_confirmation }}\"><br><br>
<input type=\"submit\"
{% endblock %}

", "admin/editreservation.html.twig", "C:\\xampp\\htdocs\\CarRentalProject\\templates\\admin\\editreservation.html.twig");
    }
}
