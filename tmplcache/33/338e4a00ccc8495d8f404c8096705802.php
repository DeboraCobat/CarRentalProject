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
            'title' => [$this, 'block_title'],
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

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "find my reservation";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<html>
    <body>
        <h1>Your reservation</h1></br>
        <p>Name: ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["myreservation"] ?? null), "customer_id", [], "any", false, false, false, 9), "html", null, true);
        echo "</p></br>
        <p>Vehicle: ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["myreservation"] ?? null), "vehicle_id", [], "any", false, false, false, 10), "html", null, true);
        echo "</p></br>
        <h3>Reservation details</h3> </br>
         <p>My reservation starts:</br> ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["myreservation"] ?? null), "start_date", [], "any", false, false, false, 12), "html", null, true);
        echo "</p></br>
        <p> My reservation ends: </br>";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["myreservation"] ?? null), "end_date", [], "any", false, false, false, 13), "html", null, true);
        echo "</p></br>
    </body>
</html>
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
        return array (  76 => 13,  72 => 12,  67 => 10,  63 => 9,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"master.html.twig\" %}

{% block title %}find my reservation{% endblock %}

{% block content %}
<html>
    <body>
        <h1>Your reservation</h1></br>
        <p>Name: {{ myreservation.customer_id }}</p></br>
        <p>Vehicle: {{ myreservation.vehicle_id }}</p></br>
        <h3>Reservation details</h3> </br>
         <p>My reservation starts:</br> {{ myreservation.start_date }}</p></br>
        <p> My reservation ends: </br>{{ myreservation.end_date }}</p></br>
    </body>
</html>
{% endblock %}
", "myreservation.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/carrentalproject/templates/myreservation.html.twig");
    }
}
