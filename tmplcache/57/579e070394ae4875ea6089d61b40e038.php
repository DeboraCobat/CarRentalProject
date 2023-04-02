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
        return "admin/master.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("admin/master.html.twig", "admin/reservationslist.html.twig", 1);
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
  <div class=\"row justify-content-center mt-5 mb-5\">
    <div class=\"col-md-8 col-lg-6\">
    
  <h1>Reservations</h1>
<div class=\"table-responsive\">
  <table class=\"table table-bordered table-striped\">
    <thead>
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
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rental_items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 30
            echo "        <tr>
          <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
          <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "customer_id", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
          <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "vehicle_id", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
          <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "start_date", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
          <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "end_date", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
          <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "rental_price", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
          <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "insurance_price", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
          <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "taxes", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
          <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "total", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
          <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "notes", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
          <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "payment_confirmation", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "    </tbody>
  </table>
</div>
<div class=\"mt-4\">
  <button class=\"btn btn-primary\" onclick=\"location.href='reservationslist'\">Add Reservation</button>
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
        return array (  139 => 44,  130 => 41,  126 => 40,  122 => 39,  118 => 38,  114 => 37,  110 => 36,  106 => 35,  102 => 34,  98 => 33,  94 => 32,  90 => 31,  87 => 30,  83 => 29,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"admin/master.html.twig\" %}

{% block title %}All Reservations{% endblock %}

{% block content %}
<div class=\"container\">
  <div class=\"row justify-content-center mt-5 mb-5\">
    <div class=\"col-md-8 col-lg-6\">
    
  <h1>Reservations</h1>
<div class=\"table-responsive\">
  <table class=\"table table-bordered table-striped\">
    <thead>
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
      {% for item in rental_items %}
        <tr>
          <td>{{ item.id }}</td>
          <td>{{ item.customer_id }}</td>
          <td>{{ item.vehicle_id }}</td>
          <td>{{ item.start_date }}</td>
          <td>{{ item.end_date }}</td>
          <td>{{ item.rental_price }}</td>
          <td>{{ item.insurance_price }}</td>
          <td>{{ item.taxes }}</td>
          <td>{{ item.total }}</td>
          <td>{{ item.notes }}</td>
          <td>{{ item.payment_confirmation }}</td>
        </tr>
      {% endfor %}
    </tbody>
  </table>
</div>
<div class=\"mt-4\">
  <button class=\"btn btn-primary\" onclick=\"location.href='reservationslist'\">Add Reservation</button>
</div>
{% endblock %}

", "admin/reservationslist.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/carrentalproject/templates/admin/reservationslist.html.twig");
    }
}
