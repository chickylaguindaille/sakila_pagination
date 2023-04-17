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

/* film/filter.html.twig */
class __TwigTemplate_4dd927da96da91db88ab2b82bb3175fe extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "film/filter.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "film/filter.html.twig"));

        // line 1
        echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 1, $this->source); })()));
        echo "

<table class=\"table table-striped mx-auto\" style=\"width:60%;\">
    <thead>
        <tr>
            <td><a href=\"#\" class=\"text-dark filterlink f.title\" id=\"title\" data-filter=\"f.title\" data-direction=\"DESC\"><b>Titre</b></a>";
        // line 6
        if ((twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 6, $this->source); })()), "filter", [], "any", false, false, false, 6) != "f.title")) {
            echo "<span class=\"text-secondary\">";
        } else {
            echo "<span class=\"text-primary\">";
        }
        if (((twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 6, $this->source); })()), "filter", [], "any", false, false, false, 6) == "f.title") && (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 6, $this->source); })()), "direction", [], "any", false, false, false, 6) == "DESC"))) {
            echo "<i class=\"bi bi-sort-alpha-up mx-2\"></i>";
        } else {
            echo "<i class=\"bi bi-sort-alpha-down mx-2\"></i>";
        }
        echo "</span></td>
            <td><a href=\"#\" class=\"text-dark filterlink\" id=\"price\" data-filter=\"f.rentalRate\" data-direction=\"DESC\"><b>Prix de location</b></a>";
        // line 7
        if ((twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 7, $this->source); })()), "filter", [], "any", false, false, false, 7) != "f.rentalRate")) {
            echo "<span class=\"text-secondary\">";
        } else {
            echo "<span class=\"text-primary\">";
        }
        if (((twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 7, $this->source); })()), "filter", [], "any", false, false, false, 7) == "f.rentalRate") && (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 7, $this->source); })()), "direction", [], "any", false, false, false, 7) == "DESC"))) {
            echo "<i class=\"bi bi-sort-numeric-up mx-2\">";
        } else {
            echo "<i class=\"bi bi-sort-numeric-down mx-2\"></i>";
        }
        echo "</span></td>
            <td><b>Classification</b></td>
            <td><a href=\"#\" class=\"text-dark filterlink\" id=\"category\" data-filter=\"c.name\" data-direction=\"DESC\"><b>Genre du film</b></a>";
        // line 9
        if ((twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 9, $this->source); })()), "filter", [], "any", false, false, false, 9) != "c.name")) {
            echo "<span class=\"text-secondary\">";
        } else {
            echo "<span class=\"text-primary\">";
        }
        if (((twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 9, $this->source); })()), "filter", [], "any", false, false, false, 9) == "c.name") && (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 9, $this->source); })()), "direction", [], "any", false, false, false, 9) == "DESC"))) {
            echo "<i class=\"bi bi-sort-alpha-up mx-2\"></i>";
        } else {
            echo "<i class=\"bi bi-sort-alpha-down mx-2\"></i>";
        }
        echo "</i></span></td>
            <td><a href=\"#\" class=\"text-dark filterlink\" id=\"count\" data-filter=\"titleCount\" data-direction=\"DESC\"><b>Nombre de fois loué</b>";
        // line 10
        if ((twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 10, $this->source); })()), "filter", [], "any", false, false, false, 10) != "titleCount")) {
            echo "</a><span class=\"text-secondary\">";
        } else {
            echo "<span class=\"text-primary\">";
        }
        if (((twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 10, $this->source); })()), "filter", [], "any", false, false, false, 10) == "titleCount") && (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 10, $this->source); })()), "direction", [], "any", false, false, false, 10) == "DESC"))) {
            echo "<i class=\"bi bi-sort-numeric-up mx-2\"></i>";
        } else {
            echo "<i class=\"bi bi-sort-numeric-down mx-2\"></i>";
        }
        echo "</span></td>
        </tr>
    </thead>
    <tbody>
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["films"]) || array_key_exists("films", $context) ? $context["films"] : (function () { throw new RuntimeError('Variable "films" does not exist.', 14, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["film"]) {
            // line 15
            echo "            <tr>
                <td>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["film"], "title", [], "any", false, false, false, 16), "html", null, true);
            echo "</td>
                <td>";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["film"], "rentalRate", [], "any", false, false, false, 17), "html", null, true);
            echo "</td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["film"], "rating", [], "any", false, false, false, 18), "html", null, true);
            echo "</td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["film"], "name", [], "any", false, false, false, 19), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            (((twig_get_attribute($this->env, $this->source, $context["film"], "titleCount", [], "any", true, true, false, 20) &&  !(null === twig_get_attribute($this->env, $this->source, $context["film"], "titleCount", [], "any", false, false, false, 20)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["film"], "titleCount", [], "any", false, false, false, 20), "html", null, true))) : (print ("")));
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['film'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "    </tbody>
</table>

";
        // line 26
        $context["length"] = (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 26, $this->source); })()), "lengthtab", [], "any", false, false, false, 26) / twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 26, $this->source); })()), "limit", [], "any", false, false, false, 26));
        // line 27
        $context["page"] = twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 27, $this->source); })()), "active", [], "any", false, false, false, 27);
        // line 28
        $context["firstpage"] = ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 28, $this->source); })()) - 4);
        // line 29
        $context["lastpage"] = ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 29, $this->source); })()) + 4);
        // line 30
        $context["underlengthmiddle"] = ((isset($context["length"]) || array_key_exists("length", $context) ? $context["length"] : (function () { throw new RuntimeError('Variable "length" does not exist.', 30, $this->source); })()) - 5);
        // line 31
        $context["underlength"] = ((isset($context["length"]) || array_key_exists("length", $context) ? $context["length"] : (function () { throw new RuntimeError('Variable "length" does not exist.', 31, $this->source); })()) - 8);
        // line 32
        echo "

    <nav aria-label=\"Page navigation example\">
    <ul class=\"pagination justify-content-center\">
        <li class=\"page-item\" value=\"";
        // line 36
        echo 1;
        echo "\">
            <a class=\"page-link\" href=\"#\" tabindex=\"-1\">Début</a>
        </li>

    ";
        // line 40
        if ((((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 40, $this->source); })()) > 4) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 40, $this->source); })()) < (isset($context["underlengthmiddle"]) || array_key_exists("underlengthmiddle", $context) ? $context["underlengthmiddle"] : (function () { throw new RuntimeError('Variable "underlengthmiddle" does not exist.', 40, $this->source); })())))) {
            // line 41
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range((isset($context["firstpage"]) || array_key_exists("firstpage", $context) ? $context["firstpage"] : (function () { throw new RuntimeError('Variable "firstpage" does not exist.', 41, $this->source); })()), (isset($context["lastpage"]) || array_key_exists("lastpage", $context) ? $context["lastpage"] : (function () { throw new RuntimeError('Variable "lastpage" does not exist.', 41, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 42
                echo "            <li class=\"page-item ";
                if ((twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 42, $this->source); })()), "active", [], "any", false, false, false, 42) == $context["i"])) {
                    echo "active";
                }
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\"><a class=\"page-link\" value=\"";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\" href=\"#\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</a></li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "    ";
        } elseif (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 44, $this->source); })()) < 11)) {
            // line 45
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 10));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 46
                echo "            <li class=\"page-item ";
                if ((twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 46, $this->source); })()), "active", [], "any", false, false, false, 46) == $context["i"])) {
                    echo "active";
                }
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\"><a class=\"page-link\" value=\"";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\" href=\"#\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</a></li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "    ";
        } else {
            // line 49
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range((isset($context["underlength"]) || array_key_exists("underlength", $context) ? $context["underlength"] : (function () { throw new RuntimeError('Variable "underlength" does not exist.', 49, $this->source); })()), (isset($context["length"]) || array_key_exists("length", $context) ? $context["length"] : (function () { throw new RuntimeError('Variable "length" does not exist.', 49, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 50
                echo "            <li class=\"page-item ";
                if ((twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 50, $this->source); })()), "active", [], "any", false, false, false, 50) == $context["i"])) {
                    echo "active";
                }
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\"><a class=\"page-link\" value=\"";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\" href=\"#\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</a></li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "    ";
        }
        // line 53
        echo "
    ";
        // line 54
        if ((((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 54, $this->source); })()) < (isset($context["underlengthmiddle"]) || array_key_exists("underlengthmiddle", $context) ? $context["underlengthmiddle"] : (function () { throw new RuntimeError('Variable "underlengthmiddle" does not exist.', 54, $this->source); })())) && ((isset($context["length"]) || array_key_exists("length", $context) ? $context["length"] : (function () { throw new RuntimeError('Variable "length" does not exist.', 54, $this->source); })()) > 10))) {
            // line 55
            echo "        <li class=\"page-item\" ><a class=\"page-link\" href=\"#\">...</a></li>
        <li class=\"page-item ";
            // line 56
            if ((twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 56, $this->source); })()), "active", [], "any", false, false, false, 56) == (isset($context["length"]) || array_key_exists("length", $context) ? $context["length"] : (function () { throw new RuntimeError('Variable "length" does not exist.', 56, $this->source); })()))) {
                echo "active";
            }
            echo "\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["length"]) || array_key_exists("length", $context) ? $context["length"] : (function () { throw new RuntimeError('Variable "length" does not exist.', 56, $this->source); })()), "html", null, true);
            echo "\"><a class=\"page-link\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["length"]) || array_key_exists("length", $context) ? $context["length"] : (function () { throw new RuntimeError('Variable "length" does not exist.', 56, $this->source); })()), "html", null, true);
            echo "\" href=\"#\">";
            echo twig_escape_filter($this->env, (isset($context["length"]) || array_key_exists("length", $context) ? $context["length"] : (function () { throw new RuntimeError('Variable "length" does not exist.', 56, $this->source); })()), "html", null, true);
            echo "</a></li>
    ";
        }
        // line 58
        echo "        <li class=\"page-item\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["length"]) || array_key_exists("length", $context) ? $context["length"] : (function () { throw new RuntimeError('Variable "length" does not exist.', 58, $this->source); })()), "html", null, true);
        echo "\">
            <a class=\"page-link\" href=\"#\">Fin</a>
        </li>
    </ul>
    </nav>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "film/filter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 58,  254 => 56,  251 => 55,  249 => 54,  246 => 53,  243 => 52,  226 => 50,  221 => 49,  218 => 48,  201 => 46,  196 => 45,  193 => 44,  176 => 42,  171 => 41,  169 => 40,  162 => 36,  156 => 32,  154 => 31,  152 => 30,  150 => 29,  148 => 28,  146 => 27,  144 => 26,  139 => 23,  130 => 20,  126 => 19,  122 => 18,  118 => 17,  114 => 16,  111 => 15,  107 => 14,  91 => 10,  78 => 9,  64 => 7,  51 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ dump(data) }}

<table class=\"table table-striped mx-auto\" style=\"width:60%;\">
    <thead>
        <tr>
            <td><a href=\"#\" class=\"text-dark filterlink f.title\" id=\"title\" data-filter=\"f.title\" data-direction=\"DESC\"><b>Titre</b></a>{% if data.filter != \"f.title\" %}<span class=\"text-secondary\">{% else %}<span class=\"text-primary\">{% endif %}{% if data.filter == \"f.title\" and data.direction == \"DESC\" %}<i class=\"bi bi-sort-alpha-up mx-2\"></i>{% else %}<i class=\"bi bi-sort-alpha-down mx-2\"></i>{% endif %}</span></td>
            <td><a href=\"#\" class=\"text-dark filterlink\" id=\"price\" data-filter=\"f.rentalRate\" data-direction=\"DESC\"><b>Prix de location</b></a>{% if data.filter != \"f.rentalRate\" %}<span class=\"text-secondary\">{% else %}<span class=\"text-primary\">{% endif %}{% if data.filter == \"f.rentalRate\" and data.direction == \"DESC\" %}<i class=\"bi bi-sort-numeric-up mx-2\">{% else %}<i class=\"bi bi-sort-numeric-down mx-2\"></i>{% endif %}</span></td>
            <td><b>Classification</b></td>
            <td><a href=\"#\" class=\"text-dark filterlink\" id=\"category\" data-filter=\"c.name\" data-direction=\"DESC\"><b>Genre du film</b></a>{% if data.filter != \"c.name\" %}<span class=\"text-secondary\">{% else %}<span class=\"text-primary\">{% endif %}{% if data.filter == \"c.name\" and data.direction == \"DESC\" %}<i class=\"bi bi-sort-alpha-up mx-2\"></i>{% else %}<i class=\"bi bi-sort-alpha-down mx-2\"></i>{% endif %}</i></span></td>
            <td><a href=\"#\" class=\"text-dark filterlink\" id=\"count\" data-filter=\"titleCount\" data-direction=\"DESC\"><b>Nombre de fois loué</b>{% if data.filter != \"titleCount\" %}</a><span class=\"text-secondary\">{% else %}<span class=\"text-primary\">{% endif %}{% if data.filter == \"titleCount\" and data.direction == \"DESC\" %}<i class=\"bi bi-sort-numeric-up mx-2\"></i>{% else %}<i class=\"bi bi-sort-numeric-down mx-2\"></i>{% endif %}</span></td>
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

{% set length = data.lengthtab / data.limit %}
{% set page = data.active %}
{% set firstpage = page - 4 %}
{% set lastpage = page + 4 %}
{% set underlengthmiddle = length - 5 %}
{% set underlength = length - 8 %}


    <nav aria-label=\"Page navigation example\">
    <ul class=\"pagination justify-content-center\">
        <li class=\"page-item\" value=\"{{1}}\">
            <a class=\"page-link\" href=\"#\" tabindex=\"-1\">Début</a>
        </li>

    {% if page > 4 and page < underlengthmiddle %}
        {% for i in firstpage.. lastpage %}
            <li class=\"page-item {% if data.active == i %}active{% endif %}\" value=\"{{i}}\"><a class=\"page-link\" value=\"{{i}}\" href=\"#\">{{i}}</a></li>
        {% endfor %}
    {% elseif page < 11 %}
        {% for i in 1.. 10 %}
            <li class=\"page-item {% if data.active == i %}active{% endif %}\" value=\"{{i}}\"><a class=\"page-link\" value=\"{{i}}\" href=\"#\">{{i}}</a></li>
        {% endfor %}
    {% else %}
        {% for i in underlength.. length %}
            <li class=\"page-item {% if data.active == i %}active{% endif %}\" value=\"{{i}}\"><a class=\"page-link\" value=\"{{i}}\" href=\"#\">{{i}}</a></li>
        {% endfor %}
    {% endif %}

    {% if page < underlengthmiddle and length > 10 %}
        <li class=\"page-item\" ><a class=\"page-link\" href=\"#\">...</a></li>
        <li class=\"page-item {% if data.active == length %}active{% endif %}\" value=\"{{length}}\"><a class=\"page-link\" value=\"{{length}}\" href=\"#\">{{length}}</a></li>
    {% endif %}
        <li class=\"page-item\" value=\"{{length}}\">
            <a class=\"page-link\" href=\"#\">Fin</a>
        </li>
    </ul>
    </nav>", "film/filter.html.twig", "/opt/lampp/htdocs/glass/templates/film/filter.html.twig");
    }
}
