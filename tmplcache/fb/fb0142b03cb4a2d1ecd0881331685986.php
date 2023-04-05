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

/* customerprofileedit.html.twig */
class __TwigTemplate_8b470b2881af69d443b1c8356b47e11f extends Template
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
        $this->parent = $this->loadTemplate("master.html.twig", "customerprofileedit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Customer Edit Profile";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "\t<div class=\"container\">
\t\t<div class=\"container mt-4\">
\t\t\t<div class=\"row justify-content-left\">
\t\t\t\t<div class=\"col-md-10 col-lg-12\">
\t\t\t\t<h1>Edit Your Profile</h1></br>
\t\t\t\t<form method=\"POST\" action=\"/updateprofile\">
\t\t\t\t\t<label for=\"first_name\">First Name:</label>
\t\t\t\t\t<input type=\"text\" id=\"first_name\" name=\"first_name\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSession"] ?? null), "first_name", [], "any", false, false, false, 13), "html", null, true);
        echo "\" required><br><br>
\t\t\t\t\t<label for=\"last_name\">Last Name:</label>
\t\t\t\t\t<input type=\"text\" id=\"last_name\" name=\"last_name\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSession"] ?? null), "last_name", [], "any", false, false, false, 15), "html", null, true);
        echo "\" required><br><br>
\t\t\t\t\t<label for=\"email\">Email:</label>
\t\t\t\t\t<input type=\"email\" id=\"email\" name=\"email\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSession"] ?? null), "email", [], "any", false, false, false, 17), "html", null, true);
        echo "\" required><br><br>
\t\t\t\t\t<label for=\"phone\">Phone:</label>
\t\t\t\t\t<input type=\"tel\" id=\"phone\" name=\"phone\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSession"] ?? null), "phone", [], "any", false, false, false, 19), "html", null, true);
        echo "\" required><br><br>
\t\t\t\t\t<label for=\"address\">Address:</label>
\t\t\t\t\t<input type=\"text\" id=\"address\" name=\"address\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSession"] ?? null), "address", [], "any", false, false, false, 21), "html", null, true);
        echo "\" required><br><br>
\t\t\t\t\t<label for=\"dob\">Date of Birth:</label>
\t\t\t\t\t<input type=\"date\" id=\"dob\" name=\"dob\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSession"] ?? null), "dob", [], "any", false, false, false, 23), "html", null, true);
        echo "\" required><br><br>
\t\t\t\t\t<input type=\"submit\" value=\"Update Profile\">
\t\t\t\t</form>
\t\t\t\t<div class=\"mt-3\">
\t\t\t\t\t<a href=\"/customerprofile\" class=\"btn btn-primary btn-sm\">Back to Profile</a>
\t\t\t\t\t<a href=\"/myreservation\" class=\"btn btn-secondary btn-sm\">My Reservation</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "customerprofileedit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 23,  87 => 21,  82 => 19,  77 => 17,  72 => 15,  67 => 13,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"master.html.twig\" %}

{% block title %}Customer Edit Profile{% endblock %}

{% block content %}
\t<div class=\"container\">
\t\t<div class=\"container mt-4\">
\t\t\t<div class=\"row justify-content-left\">
\t\t\t\t<div class=\"col-md-10 col-lg-12\">
\t\t\t\t<h1>Edit Your Profile</h1></br>
\t\t\t\t<form method=\"POST\" action=\"/updateprofile\">
\t\t\t\t\t<label for=\"first_name\">First Name:</label>
\t\t\t\t\t<input type=\"text\" id=\"first_name\" name=\"first_name\" value=\"{{ userSession.first_name }}\" required><br><br>
\t\t\t\t\t<label for=\"last_name\">Last Name:</label>
\t\t\t\t\t<input type=\"text\" id=\"last_name\" name=\"last_name\" value=\"{{ userSession.last_name }}\" required><br><br>
\t\t\t\t\t<label for=\"email\">Email:</label>
\t\t\t\t\t<input type=\"email\" id=\"email\" name=\"email\" value=\"{{ userSession.email }}\" required><br><br>
\t\t\t\t\t<label for=\"phone\">Phone:</label>
\t\t\t\t\t<input type=\"tel\" id=\"phone\" name=\"phone\" value=\"{{ userSession.phone }}\" required><br><br>
\t\t\t\t\t<label for=\"address\">Address:</label>
\t\t\t\t\t<input type=\"text\" id=\"address\" name=\"address\" value=\"{{ userSession.address }}\" required><br><br>
\t\t\t\t\t<label for=\"dob\">Date of Birth:</label>
\t\t\t\t\t<input type=\"date\" id=\"dob\" name=\"dob\" value=\"{{ userSession.dob }}\" required><br><br>
\t\t\t\t\t<input type=\"submit\" value=\"Update Profile\">
\t\t\t\t</form>
\t\t\t\t<div class=\"mt-3\">
\t\t\t\t\t<a href=\"/customerprofile\" class=\"btn btn-primary btn-sm\">Back to Profile</a>
\t\t\t\t\t<a href=\"/myreservation\" class=\"btn btn-secondary btn-sm\">My Reservation</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}
", "customerprofileedit.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/carrentalproject/templates/customerprofileedit.html.twig");
    }
}
