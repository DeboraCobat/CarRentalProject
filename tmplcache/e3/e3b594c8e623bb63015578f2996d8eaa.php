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

/* register.html.twig */
class __TwigTemplate_fdeb42060499aa367ddcacd63954b50a extends Template
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
        $this->parent = $this->loadTemplate("master.html.twig", "register.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Registration
";
    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "
\t<div class=\"container\">
\t\t<div class=\"row justify-content-left mt-10 mb-10\">
\t\t\t<div class=\"col-md-5 col-lg-5\">
\t\t\t\t<h1>Registration</h1></br>


\t\t\t\t<form method=\"post\" action=\"/register\">

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"first_name\">First Name:</label>
\t\t\t\t\t\t<input type=\"text\" class=\"form-control-sm\" id=\"first_name\" name=\"first_name\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["u"] ?? null), "first_name", [], "any", false, false, false, 18), "html", null, true);
        echo "\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"last_name\">Last Name:</label>
\t\t\t\t\t\t<input type=\"text\" class=\"form-control-sm\" id=\"last_name\" name=\"last_name\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["u"] ?? null), "last_name", [], "any", false, false, false, 23), "html", null, true);
        echo "\">
\t\t\t\t\t</div>

\t\t\t\t\t";
        // line 33
        echo "
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"address\">Address:</label>
\t\t\t\t\t\t<input type=\"text\" class=\"form-control-sm\" id=\"address\" name=\"address\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["u"] ?? null), "address", [], "any", false, false, false, 36), "html", null, true);
        echo "\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"phone\">Phone:</label>
\t\t\t\t\t\t<input type=\"text\" class=\"form-control-sm\" id=\"phone\" name=\"phone\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["u"] ?? null), "phone", [], "any", false, false, false, 41), "html", null, true);
        echo "\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"email\">Email:</label>
\t\t\t\t\t\t<input type=\"email\" class=\"form-control-sm\" id=\"email\" name=\"email\" value=\"";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["u"] ?? null), "email", [], "any", false, false, false, 46), "html", null, true);
        echo "\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"dob\">Date of Birth:</label>
\t\t\t\t\t\t<input type=\"date\" class=\"form-control-sm\" id=\"dob\" name=\"dob\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["u"] ?? null), "dob", [], "any", false, false, false, 51), "html", null, true);
        echo "\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"license\">Driver's License:</label>
\t\t\t\t\t\t<input type=\"text\" class=\"form-control-sm\" id=\"license\" name=\"license\" value=\"";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["u"] ?? null), "license", [], "any", false, false, false, 56), "html", null, true);
        echo "\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"license_expiration\">License Expiration:</label>
\t\t\t\t\t\t<input type=\"date\" class=\"form-control-sm\" id=\"license_expiration\" name=\"license_expiration\" value=\"";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["u"] ?? null), "license_expiration", [], "any", false, false, false, 61), "html", null, true);
        echo "\">
\t\t\t\t\t</div>

\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary btn-sm\">Submit</button>
\t\t\t\t</form>

\t\t\t</div>
\t\t</div>
\t</div>

";
    }

    public function getTemplateName()
    {
        return "register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 61,  123 => 56,  115 => 51,  107 => 46,  99 => 41,  91 => 36,  86 => 33,  80 => 23,  72 => 18,  59 => 7,  55 => 6,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"master.html.twig\" %}

{% block title %}Registration
{% endblock %}

{% block content %}

\t<div class=\"container\">
\t\t<div class=\"row justify-content-left mt-10 mb-10\">
\t\t\t<div class=\"col-md-5 col-lg-5\">
\t\t\t\t<h1>Registration</h1></br>


\t\t\t\t<form method=\"post\" action=\"/register\">

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"first_name\">First Name:</label>
\t\t\t\t\t\t<input type=\"text\" class=\"form-control-sm\" id=\"first_name\" name=\"first_name\" value=\"{{ u.first_name }}\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"last_name\">Last Name:</label>
\t\t\t\t\t\t<input type=\"text\" class=\"form-control-sm\" id=\"last_name\" name=\"last_name\" value=\"{{ u.last_name }}\">
\t\t\t\t\t</div>

\t\t\t\t\t{# <div class=\"form-group\">
\t\t\t\t\t          <label for=\"user_type\">User Type:</label>
\t\t\t\t\t          <select class=\"form-control-sm\" id=\"user_type\" name=\"user_type\">
\t\t\t\t\t            <option value=\"admin\">Admin</option>
\t\t\t\t\t            <option value=\"customer\">Customer</option>
\t\t\t\t\t          </select>
\t\t\t\t\t        </div> #}

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"address\">Address:</label>
\t\t\t\t\t\t<input type=\"text\" class=\"form-control-sm\" id=\"address\" name=\"address\" value=\"{{ u.address }}\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"phone\">Phone:</label>
\t\t\t\t\t\t<input type=\"text\" class=\"form-control-sm\" id=\"phone\" name=\"phone\" value=\"{{ u.phone }}\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"email\">Email:</label>
\t\t\t\t\t\t<input type=\"email\" class=\"form-control-sm\" id=\"email\" name=\"email\" value=\"{{ u.email }}\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"dob\">Date of Birth:</label>
\t\t\t\t\t\t<input type=\"date\" class=\"form-control-sm\" id=\"dob\" name=\"dob\" value=\"{{ u.dob }}\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"license\">Driver's License:</label>
\t\t\t\t\t\t<input type=\"text\" class=\"form-control-sm\" id=\"license\" name=\"license\" value=\"{{ u.license }}\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"license_expiration\">License Expiration:</label>
\t\t\t\t\t\t<input type=\"date\" class=\"form-control-sm\" id=\"license_expiration\" name=\"license_expiration\" value=\"{{ u.license_expiration }}\">
\t\t\t\t\t</div>

\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary btn-sm\">Submit</button>
\t\t\t\t</form>

\t\t\t</div>
\t\t</div>
\t</div>

{% endblock content %}
", "register.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/carrentalproject/templates/register.html.twig");
    }
}
