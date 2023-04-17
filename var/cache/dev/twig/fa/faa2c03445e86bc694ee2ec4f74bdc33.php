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

/* film/index.html.twig */
class __TwigTemplate_6fce574600fbcbd6048ee4c8b30f6653 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "film/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "film/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "film/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<div class=\"text-center\">
    <h1 class=\"my-3\"><u>Sakila Pagination</u></h1>
</div>
<div class=\"w-25 mx-auto my-4 d-flex justify-content-center\">
    <div class=\"d-flex align-items-center mx-2 text-white\">
        Éléments par page : 
    </div>
    <div>
        <select id=\"selectnumber\" class=\"form-select\" aria-label=\"Default select example\">
        <option selected value=\"10\">10</option>
        <option value=\"20\">20</option>
        <option value=\"50\">50</option>
        <option value=\"100\">100</option>
        </select>
    </div>
    <div id=\"informations\" class=\"\" data-filter=\"";
        // line 20
        (((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "filter", [], "any", true, true, false, 20) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "filter", [], "any", false, false, false, 20)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "filter", [], "any", false, false, false, 20), "html", null, true))) : (print ("f.title")));
        echo "\" data-direction=\"";
        (((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "direction", [], "any", true, true, false, 20) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "direction", [], "any", false, false, false, 20)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "direction", [], "any", false, false, false, 20), "html", null, true))) : (print ("DESC")));
        echo "\">infos</div>
</div>


<div id=\"example\">
        <table id=\"\" class=\"table table-striped mx-auto\" style=\"width:60%;\">
            <thead>
                <tr>
                    <td><a href=\"#\" class=\"text-dark filterlink\" id=\"title\" data-filter=\"f.title\" data-direction=\"ASC\"><b>Titre</b></a><span class=\"text-primary\"><i class=\"bi bi-sort-alpha-down mx-2\"></i></span></td>
                    <td><a href=\"#\" class=\"text-dark filterlink\" data-filter=\"f.rentalRate\" data-direction=\"DESC\"><b>Prix de location</b></a><span class=\"text-secondary\"><i class=\"bi bi-sort-numeric-down mx-2\"></span></td>
                    <td><b>Classification</b></td>
                    <td><a href=\"#\" class=\"text-dark filterlink\" data-filter=\"c.name\" data-direction=\"DESC\"><b>Genre du film</b></a><span class=\"text-secondary\"><i class=\"bi bi-sort-alpha-down mx-2\"></span></td>
                    <td><a href=\"#\" class=\"text-dark filterlink\" data-filter=\"titleCount\" data-direction=\"DESC\"><b>Nombre de fois loué</b></a><span class=\"text-secondary\"><i class=\"bi bi-sort-numeric-down mx-2\"></i></span></td>
                </tr>
            </thead>
            <tbody>
                ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["films"]) || array_key_exists("films", $context) ? $context["films"] : (function () { throw new RuntimeError('Variable "films" does not exist.', 36, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["film"]) {
            // line 37
            echo "                    <tr>
                        <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["film"], "title", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                        <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["film"], "rentalRate", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                        <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["film"], "rating", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                        <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["film"], "name", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
                        <td>";
            // line 42
            (((twig_get_attribute($this->env, $this->source, $context["film"], "titleCount", [], "any", true, true, false, 42) &&  !(null === twig_get_attribute($this->env, $this->source, $context["film"], "titleCount", [], "any", false, false, false, 42)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["film"], "titleCount", [], "any", false, false, false, 42), "html", null, true))) : (print ("")));
            echo "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['film'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "            </tbody>
        </table>


    ";
        // line 49
        $context["variable2"] = 10;
        // line 50
        echo "    ";
        $context["length"] = (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 50, $this->source); })()), "lengthtab", [], "any", false, false, false, 50) / (isset($context["variable2"]) || array_key_exists("variable2", $context) ? $context["variable2"] : (function () { throw new RuntimeError('Variable "variable2" does not exist.', 50, $this->source); })()));
        // line 51
        echo "


    <nav aria-label=\"Page navigation example\">
        <ul class=\"pagination justify-content-center\">
            <li class=\"page-item\" value=\"";
        // line 56
        echo 1;
        echo "\">
            <a class=\"page-link\" href=\"#\" tabindex=\"-1\">Début</a>
            </li>

            ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 9));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 61
            echo "                <li class=\"page-item ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 61, $this->source); })()), "active", [], "any", false, false, false, 61) == $context["i"])) {
                echo "active";
            }
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\"><a class=\"page-link\" href=\"#\">";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "
            ";
        // line 64
        if (((isset($context["length"]) || array_key_exists("length", $context) ? $context["length"] : (function () { throw new RuntimeError('Variable "length" does not exist.', 64, $this->source); })()) > 10)) {
            // line 65
            echo "                <li class=\"page-item\" ><a class=\"page-link\" href=\"#\">...</a></li>
                <li class=\"page-item ";
            // line 66
            if ((twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 66, $this->source); })()), "active", [], "any", false, false, false, 66) == (isset($context["length"]) || array_key_exists("length", $context) ? $context["length"] : (function () { throw new RuntimeError('Variable "length" does not exist.', 66, $this->source); })()))) {
                echo "active";
            }
            echo "\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["length"]) || array_key_exists("length", $context) ? $context["length"] : (function () { throw new RuntimeError('Variable "length" does not exist.', 66, $this->source); })()), "html", null, true);
            echo "\"><a class=\"page-link\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["length"]) || array_key_exists("length", $context) ? $context["length"] : (function () { throw new RuntimeError('Variable "length" does not exist.', 66, $this->source); })()), "html", null, true);
            echo "\" href=\"#\">";
            echo twig_escape_filter($this->env, (isset($context["length"]) || array_key_exists("length", $context) ? $context["length"] : (function () { throw new RuntimeError('Variable "length" does not exist.', 66, $this->source); })()), "html", null, true);
            echo "</a></li>
            ";
        }
        // line 68
        echo "

            <li class=\"page-item\" value=\"";
        // line 70
        echo twig_escape_filter($this->env, (isset($context["length"]) || array_key_exists("length", $context) ? $context["length"] : (function () { throw new RuntimeError('Variable "length" does not exist.', 70, $this->source); })()), "html", null, true);
        echo "\">
                <a class=\"page-link\" href=\"#\">Fin</a>
        </li>
        </ul>
    </nav>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "film/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 70,  204 => 68,  191 => 66,  188 => 65,  186 => 64,  183 => 63,  168 => 61,  164 => 60,  157 => 56,  150 => 51,  147 => 50,  145 => 49,  139 => 45,  130 => 42,  126 => 41,  122 => 40,  118 => 39,  114 => 38,  111 => 37,  107 => 36,  86 => 20,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

<div class=\"text-center\">
    <h1 class=\"my-3\"><u>Sakila Pagination</u></h1>
</div>
<div class=\"w-25 mx-auto my-4 d-flex justify-content-center\">
    <div class=\"d-flex align-items-center mx-2 text-white\">
        Éléments par page : 
    </div>
    <div>
        <select id=\"selectnumber\" class=\"form-select\" aria-label=\"Default select example\">
        <option selected value=\"10\">10</option>
        <option value=\"20\">20</option>
        <option value=\"50\">50</option>
        <option value=\"100\">100</option>
        </select>
    </div>
    <div id=\"informations\" class=\"\" data-filter=\"{{data.filter??\"f.title\"}}\" data-direction=\"{{data.direction??\"DESC\"}}\">infos</div>
</div>


<div id=\"example\">
        <table id=\"\" class=\"table table-striped mx-auto\" style=\"width:60%;\">
            <thead>
                <tr>
                    <td><a href=\"#\" class=\"text-dark filterlink\" id=\"title\" data-filter=\"f.title\" data-direction=\"ASC\"><b>Titre</b></a><span class=\"text-primary\"><i class=\"bi bi-sort-alpha-down mx-2\"></i></span></td>
                    <td><a href=\"#\" class=\"text-dark filterlink\" data-filter=\"f.rentalRate\" data-direction=\"DESC\"><b>Prix de location</b></a><span class=\"text-secondary\"><i class=\"bi bi-sort-numeric-down mx-2\"></span></td>
                    <td><b>Classification</b></td>
                    <td><a href=\"#\" class=\"text-dark filterlink\" data-filter=\"c.name\" data-direction=\"DESC\"><b>Genre du film</b></a><span class=\"text-secondary\"><i class=\"bi bi-sort-alpha-down mx-2\"></span></td>
                    <td><a href=\"#\" class=\"text-dark filterlink\" data-filter=\"titleCount\" data-direction=\"DESC\"><b>Nombre de fois loué</b></a><span class=\"text-secondary\"><i class=\"bi bi-sort-numeric-down mx-2\"></i></span></td>
                </tr>
            </thead>
            <tbody>
                {% for film in films %}
                    <tr>
                        <td>{{ film.title }}</td>
                        <td>{{ film.rentalRate }}</td>
                        <td>{{ film.rating }}</td>
                        <td>{{ film.name }}</td>
                        <td>{{ film.titleCount??\"\" }}</td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>


    {% set variable2 = 10 %}
    {% set length = data.lengthtab / variable2 %}



    <nav aria-label=\"Page navigation example\">
        <ul class=\"pagination justify-content-center\">
            <li class=\"page-item\" value=\"{{1}}\">
            <a class=\"page-link\" href=\"#\" tabindex=\"-1\">Début</a>
            </li>

            {% for i in 1..9 %}
                <li class=\"page-item {% if data.active == i %}active{% endif %}\" value=\"{{i}}\"><a class=\"page-link\" href=\"#\">{{i}}</a></li>
            {% endfor %}

            {% if length > 10 %}
                <li class=\"page-item\" ><a class=\"page-link\" href=\"#\">...</a></li>
                <li class=\"page-item {% if data.active == length %}active{% endif %}\" value=\"{{length}}\"><a class=\"page-link\" value=\"{{length}}\" href=\"#\">{{length}}</a></li>
            {% endif %}


            <li class=\"page-item\" value=\"{{length}}\">
                <a class=\"page-link\" href=\"#\">Fin</a>
        </li>
        </ul>
    </nav>
</div>
{% endblock %}
", "film/index.html.twig", "/opt/lampp/htdocs/glass/templates/film/index.html.twig");
    }
}
