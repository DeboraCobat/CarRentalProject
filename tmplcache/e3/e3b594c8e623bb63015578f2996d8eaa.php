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
";
        // line 8
        if (array_key_exists("successMessage", $context)) {
            // line 9
            echo "    <div class=\"success-message\">";
            echo twig_escape_filter($this->env, ($context["successMessage"] ?? null), "html", null, true);
            echo "</div>
";
        }
        // line 11
        echo "
";
        // line 12
        if (array_key_exists("errorMessage", $context)) {
            // line 13
            echo "    <div class=\"error-message\">";
            echo twig_escape_filter($this->env, ($context["errorMessage"] ?? null), "html", null, true);
            echo "</div>
";
        }
        // line 15
        echo "
\t<div class=\"container\">
\t\t\t<div class=\"row justify-content-left mt-5 mb-5\">
\t\t\t\t<div class=\"col-md-56 col-lg-6\">
\t\t\t\t<h1>Registration</h1></br>


\t\t\t\t<form method=\"post\" action=\"/register\">

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"first_name\">First Name:</label>
\t\t\t\t\t\t<input type=\"text\" class=\"form-control-sm\" id=\"first_name\" name=\"first_name\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["u"] ?? null), "first_name", [], "any", false, false, false, 26), "html", null, true);
        echo "\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"last_name\">Last Name:</label>
\t\t\t\t\t\t<input type=\"text\" class=\"form-control-sm\" id=\"last_name\" name=\"last_name\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["u"] ?? null), "last_name", [], "any", false, false, false, 31), "html", null, true);
        echo "\">
\t\t\t\t\t</div>

\t\t\t\t\t";
        // line 41
        echo "
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"address\">Address:</label>
\t\t\t\t\t\t<input type=\"text\" class=\"form-control-sm\" id=\"address\" name=\"address\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["u"] ?? null), "address", [], "any", false, false, false, 44), "html", null, true);
        echo "\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"phone\">Phone:</label>
\t\t\t\t\t\t<input type=\"text\" class=\"form-control-sm\" id=\"phone\" name=\"phone\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["u"] ?? null), "phone", [], "any", false, false, false, 49), "html", null, true);
        echo "\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"email\">Email:</label>
\t\t\t\t\t\t<input type=\"email\" class=\"form-control-sm\" id=\"email\" name=\"email\" value=\"";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["u"] ?? null), "email", [], "any", false, false, false, 54), "html", null, true);
        echo "\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"dob\">Date of Birth:</label>
\t\t\t\t\t\t<input type=\"date\" class=\"form-control-sm\" id=\"dob\" name=\"dob\" value=\"";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["u"] ?? null), "dob", [], "any", false, false, false, 59), "html", null, true);
        echo "\">
\t\t\t\t\t</div>

\t\t\t\t\t";
        // line 71
        echo "
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary btn-sm\">Submit</button>
\t\t\t\t</form>

\t\t\t</div>
\t\t</div>
\t</div>
";
        // line 78
        if (array_key_exists("successMessage", $context)) {
            // line 79
            echo "    <div class=\"success-message\">";
            echo twig_escape_filter($this->env, ($context["successMessage"] ?? null), "html", null, true);
            echo "</div>
";
        }
        // line 81
        echo "
";
        // line 82
        if (array_key_exists("errorMessage", $context)) {
            // line 83
            echo "    <div class=\"error-message\">";
            echo twig_escape_filter($this->env, ($context["errorMessage"] ?? null), "html", null, true);
            echo "</div>
";
        }
        // line 85
        echo "
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
        return array (  171 => 85,  165 => 83,  163 => 82,  160 => 81,  154 => 79,  152 => 78,  143 => 71,  137 => 59,  129 => 54,  121 => 49,  113 => 44,  108 => 41,  102 => 31,  94 => 26,  81 => 15,  75 => 13,  73 => 12,  70 => 11,  64 => 9,  62 => 8,  59 => 7,  55 => 6,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"master.html.twig\" %}

{% block title %}Registration
{% endblock %}

{% block content %}

{% if successMessage is defined %}
    <div class=\"success-message\">{{ successMessage }}</div>
{% endif %}

{% if errorMessage is defined %}
    <div class=\"error-message\">{{ errorMessage }}</div>
{% endif %}

\t<div class=\"container\">
\t\t\t<div class=\"row justify-content-left mt-5 mb-5\">
\t\t\t\t<div class=\"col-md-56 col-lg-6\">
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

\t\t\t\t\t{# <div class=\"form-group\">
\t\t\t\t\t\t<label for=\"license\">Driver's License:</label>
\t\t\t\t\t\t<input type=\"text\" class=\"form-control-sm\" id=\"license\" name=\"license\" value=\"{{ u.license }}\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"license_expiration\">License Expiration:</label>
\t\t\t\t\t\t<input type=\"date\" class=\"form-control-sm\" id=\"license_expiration\" name=\"license_expiration\" value=\"{{ u.license_expiration }}\">
\t\t\t\t\t</div> #}

\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary btn-sm\">Submit</button>
\t\t\t\t</form>

\t\t\t</div>
\t\t</div>
\t</div>
{% if successMessage is defined %}
    <div class=\"success-message\">{{ successMessage }}</div>
{% endif %}

{% if errorMessage is defined %}
    <div class=\"error-message\">{{ errorMessage }}</div>
{% endif %}

{% endblock content %}
", "register.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/carrentalproject/templates/register.html.twig");
    }
}
