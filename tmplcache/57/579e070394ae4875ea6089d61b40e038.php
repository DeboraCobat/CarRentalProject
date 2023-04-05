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

/* admin/reservationslist.html.twig */
class __TwigTemplate_61d2364f950034896bdce8d219c4ec29 extends Template
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
        $this->parent = $this->loadTemplate("admin/adminmaster.html.twig", "admin/reservationslist.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "All Reservations";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<div class=\"container\">
  <div class=\"row justify-content-left mt-5 mb-5\">
    <div class=\"col-md-8 col-lg-12\">
    
  <h1>Reservations</h1>
<div class=\"table-responsive\">
  <table class=\"table table-bordered table-striped\"></br>
    <button class=\"btn btn-primary btn-sm\" onclick=\"location.href='addreservation'\">Add a new reservation</button></br>
    <thead></br>
      <tr>
        <th>ID</th>
        <th>Customer ID</th>
        <th>Vehicle ID</th>
        <th>Start Date</th>
        <th>End Date</th>
        <th>Rental Price</th>
        <th>Insurance Price</th>
        <th>Taxes</th>
        <th>Total</th>
        <th>Notes</th>
        <th>Payment Confirmation</th>
      </tr>
    </thead>
    <tbody>
      ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reservations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 31
            echo "        <tr>
          <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
          <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "customer_id", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
          <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "vehicle_id", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
          <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "start_date", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
          <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "end_date", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
          <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "rental_price", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
          <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "insurance_price", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
          <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "taxes", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
          <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "final_total", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
          <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "notes", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
          <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "payment_confirmation", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
          <td><a href=\"/admin/editreservation/";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 43), "html", null, true);
            echo "\" class=\"btn btn-secondary btn-sm\">Edit</a></td>
          <td><a href=\"/admin/deletereservation/";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 44), "html", null, true);
            echo "\" class=\"btn btn-danger btn-sm\">Delete</a></td>
        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "    </tbody>
  </table> </br>
</div>
";
    }

    public function getTemplateName()
    {
        return "admin/reservationslist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 47,  139 => 44,  135 => 43,  131 => 42,  127 => 41,  123 => 40,  119 => 39,  115 => 38,  111 => 37,  107 => 36,  103 => 35,  99 => 34,  95 => 33,  91 => 32,  88 => 31,  84 => 30,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"admin/adminmaster.html.twig\" %}

{% block title %}All Reservations{% endblock %}

{% block content %}
<div class=\"container\">
  <div class=\"row justify-content-left mt-5 mb-5\">
    <div class=\"col-md-8 col-lg-12\">
    
  <h1>Reservations</h1>
<div class=\"table-responsive\">
  <table class=\"table table-bordered table-striped\"></br>
    <button class=\"btn btn-primary btn-sm\" onclick=\"location.href='addreservation'\">Add a new reservation</button></br>
    <thead></br>
      <tr>
        <th>ID</th>
        <th>Customer ID</th>
        <th>Vehicle ID</th>
        <th>Start Date</th>
        <th>End Date</th>
        <th>Rental Price</th>
        <th>Insurance Price</th>
        <th>Taxes</th>
        <th>Total</th>
        <th>Notes</th>
        <th>Payment Confirmation</th>
      </tr>
    </thead>
    <tbody>
      {% for item in reservations %}
        <tr>
          <td>{{ item.id }}</td>
          <td>{{ item.customer_id }}</td>
          <td>{{ item.vehicle_id }}</td>
          <td>{{ item.start_date }}</td>
          <td>{{ item.end_date }}</td>
          <td>{{ item.rental_price }}</td>
          <td>{{ item.insurance_price }}</td>
          <td>{{ item.taxes }}</td>
          <td>{{ item.final_total }}</td>
          <td>{{ item.notes }}</td>
          <td>{{ item.payment_confirmation }}</td>
          <td><a href=\"/admin/editreservation/{{ item.id }}\" class=\"btn btn-secondary btn-sm\">Edit</a></td>
          <td><a href=\"/admin/deletereservation/{{ item.id }}\" class=\"btn btn-danger btn-sm\">Delete</a></td>
        </tr>
      {% endfor %}
    </tbody>
  </table> </br>
</div>
{% endblock %}

", "admin/reservationslist.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/carrentalproject/templates/admin/reservationslist.html.twig");
    }
}
