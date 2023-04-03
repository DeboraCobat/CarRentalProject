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
class __TwigTemplate_4258a3e6285cc4afb3a8ea31803ca8b4 extends Template
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
\t<h1>Your Profile</h1>

\t<div class=\"container\">
\t\t<div class=\"row justify-content-center mt-5 mb-5\">
\t\t\t<div class=\"col-md-8 col-lg-6\">

\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<strong>Name</strong>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSession"] ?? null), "first_name", [], "any", false, false, false, 19), "html", null, true);
        echo "
\t\t\t\t\t\t\t";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSession"] ?? null), "last_name", [], "any", false, false, false, 20), "html", null, true);
        echo "</li>

\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<strong>Email</strong>
\t\t\t\t\t</li>
\t\t\t\t\t<li>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSession"] ?? null), "email", [], "any", false, false, false, 26), "html", null, true);
        echo "</li>

\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<strong>Phone</strong>
\t\t\t\t</li>
\t\t\t\t<li>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSession"] ?? null), "phone", [], "any", false, false, false, 32), "html", null, true);
        echo "</li>

\t\t\t</li>
\t\t\t<li>
\t\t\t\t<strong>Address</strong>
\t\t\t</li>
\t\t\t<li>";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSession"] ?? null), "address", [], "any", false, false, false, 38), "html", null, true);
        echo "</li>

\t\t</li>
\t\t<li>
\t\t\t<strong>Date of Birth</strong>
\t\t</li>
\t\t<li>";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSession"] ?? null), "dob", [], "any", false, false, false, 44), "html", null, true);
        echo "</li>

\t</li>
\t<li>
\t\t<strong>Driver's License</strong>
\t</li>
\t<li>";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSession"] ?? null), "license", [], "any", false, false, false, 50), "html", null, true);
        echo "</li>

</li>
<li>
\t<strong>License Expiration</strong>
</li>
<li>";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSession"] ?? null), "license_expiration", [], "any", false, false, false, 56), "html", null, true);
        echo "</li></li></ul></div></div></div></div>";
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
        return array (  131 => 56,  122 => 50,  113 => 44,  104 => 38,  95 => 32,  86 => 26,  77 => 20,  73 => 19,  59 => 7,  55 => 6,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"master.html.twig\" %}

{% block title %}Customer Dashboard
{% endblock %}

{% block content %}

\t<h1>Your Profile</h1>

\t<div class=\"container\">
\t\t<div class=\"row justify-content-center mt-5 mb-5\">
\t\t\t<div class=\"col-md-8 col-lg-6\">

\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<strong>Name</strong>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>{{ userSession.first_name }}
\t\t\t\t\t\t\t{{ userSession.last_name }}</li>

\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<strong>Email</strong>
\t\t\t\t\t</li>
\t\t\t\t\t<li>{{ userSession.email }}</li>

\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<strong>Phone</strong>
\t\t\t\t</li>
\t\t\t\t<li>{{ userSession.phone }}</li>

\t\t\t</li>
\t\t\t<li>
\t\t\t\t<strong>Address</strong>
\t\t\t</li>
\t\t\t<li>{{ userSession.address }}</li>

\t\t</li>
\t\t<li>
\t\t\t<strong>Date of Birth</strong>
\t\t</li>
\t\t<li>{{ userSession.dob }}</li>

\t</li>
\t<li>
\t\t<strong>Driver's License</strong>
\t</li>
\t<li>{{ userSession.license }}</li>

</li>
<li>
\t<strong>License Expiration</strong>
</li>
<li>{{ userSession.license_expiration }}</li></li></ul></div></div></div></div>{% endblock %}
", "customerprofile.html.twig", "C:\\xampp\\htdocs\\CarRentalProject\\templates\\customerprofile.html.twig");
    }
}
