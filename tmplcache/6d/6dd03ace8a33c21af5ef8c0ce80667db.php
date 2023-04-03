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

/* customerprofile.html.twig */
class __TwigTemplate_bb8f4bf7eaed962c3198f33cde7b1258 extends Template
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
        $this->parent = $this->loadTemplate("master.html.twig", "customerprofile.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Customer Dashboard
";
    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "
\t<div class=\"container\">
\t\t<div class=\"row justify-content-center mt-10 mb-10\">
\t\t\t<div class=\"col-md-10 col-lg-10\">
\t\t\t\t<h1>Your Profile</h1></br>
\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<strong>Name</strong>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSession"] ?? null), "first_name", [], "any", false, false, false, 17), "html", null, true);
        echo "
\t\t\t\t\t\t\t";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSession"] ?? null), "last_name", [], "any", false, false, false, 18), "html", null, true);
        echo "</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<strong>Email</strong>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSession"] ?? null), "email", [], "any", false, false, false, 22), "html", null, true);
        echo "</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<strong>Phone</strong>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSession"] ?? null), "phone", [], "any", false, false, false, 26), "html", null, true);
        echo "</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<strong>Address</strong>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSession"] ?? null), "address", [], "any", false, false, false, 30), "html", null, true);
        echo "</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<strong>Date of Birth</strong>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSession"] ?? null), "dob", [], "any", false, false, false, 34), "html", null, true);
        echo "</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t";
        // line 43
        echo "\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>

\t\t\t<div class=\"mt-3\">
\t\t\t\t<a href=\"/edit-profile\" class=\"btn btn-primary\">Edit Profile</a>
\t\t\t\t<a href=\"/findmyreservation_logged.html copy.twig\" class=\"btn btn-secondary\">My Reservation</a>
\t\t\t</div>

\t\t</div>
\t</div>

</div>";
    }

    public function getTemplateName()
    {
        return "customerprofile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 43,  103 => 34,  96 => 30,  89 => 26,  82 => 22,  75 => 18,  71 => 17,  59 => 7,  55 => 6,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"master.html.twig\" %}

{% block title %}Customer Dashboard
{% endblock %}

{% block content %}

\t<div class=\"container\">
\t\t<div class=\"row justify-content-center mt-10 mb-10\">
\t\t\t<div class=\"col-md-10 col-lg-10\">
\t\t\t\t<h1>Your Profile</h1></br>
\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<strong>Name</strong>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>{{ userSession.first_name }}
\t\t\t\t\t\t\t{{ userSession.last_name }}</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<strong>Email</strong>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>{{ userSession.email }}</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<strong>Phone</strong>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>{{ userSession.phone }}</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<strong>Address</strong>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>{{ userSession.address }}</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<strong>Date of Birth</strong>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>{{ userSession.dob }}</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t{# <strong>Driver's License</strong>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>{{ userSession.license }}</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<strong>License Expiration</strong>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>{{ userSession.license_expiration }}</li> #}
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>

\t\t\t<div class=\"mt-3\">
\t\t\t\t<a href=\"/edit-profile\" class=\"btn btn-primary\">Edit Profile</a>
\t\t\t\t<a href=\"/findmyreservation_logged.html copy.twig\" class=\"btn btn-secondary\">My Reservation</a>
\t\t\t</div>

\t\t</div>
\t</div>

</div>{% endblock %}
", "customerprofile.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/carrentalproject/templates/customerprofile.html.twig");
    }
}
