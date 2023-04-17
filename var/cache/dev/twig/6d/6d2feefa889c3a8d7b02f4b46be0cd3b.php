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

/* film/index.js.twig */
class __TwigTemplate_a008059543e5efc417e32ab02a3736c1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "film/index.js.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "film/index.js.twig"));

        // line 1
        echo "<script>

  \$(document).ready(function(){


let page = ";
        // line 6
        (((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "active", [], "any", true, true, false, 6) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "active", [], "any", false, false, false, 6)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "active", [], "any", false, false, false, 6), "js", null, true))) : (print ("")));
        echo "
";
        // line 9
        echo "
    \$('#selectnumber').change(function(){

      \$('#example').html('');
      var limit = \$(this).val();
      var page = 1;
      var filter = \$('#informations').attr('data-filter');
      var direction = \$('#informations').attr('data-direction');

          \$.ajax({
              type: 'GET',
              url: '";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("filter"), "js", null, true);
        echo "',
              data: 'limit=' + encodeURIComponent(limit) + '&page=' + page + '&filter=' + filter + '&direction=' + direction,
              success: function(data){
                if(data != \"\"){
                    \$('#example').append(data);


    \$('#informations').attr(\"data-direction\", \"ASC\");
              }
              }
          })
    });



    \$('#example').on('click', '.page-item', function(){

      limit = \$('#selectnumber').val();
      \$('#example').html('');
      var page = \$(this).val();
      var filter = \$('#informations').attr('data-filter');
      var direction = \$('#informations').attr('data-direction');

      ";
        // line 44
        echo "      ";
        // line 45
        echo "
          \$.ajax({
              type: 'GET',
              url: '";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("filter"), "js", null, true);
        echo "',
              data: 'limit=' + encodeURIComponent(limit) + '&page=' + page + '&filter=' + filter + '&direction=' + direction,
              success: function(data){
                if(data != \"\"){
                    \$('#example').append(data);
                    ";
        // line 54
        echo "              }
              }
          })
    });

    \$('#example').on('click', '.filterlink', function(){

      limit = \$('#selectnumber').val();
      \$('#example').html('');
      var filter = \$(this).attr('data-filter');
      var direction = \$(this).attr('data-direction');
      var id = \$(this).attr('id');

      console.log(filter);

          \$.ajax({
              type: 'GET',
              url: '";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("filter"), "js", null, true);
        echo "',
              data: 'limit=' + encodeURIComponent(limit) + '&page=' + page + '&filter=' + filter + '&direction=' + direction,
              success: function(data){
                if(data != \"\"){
                    \$('#example').append(data);
                    if(direction == 'ASC')
                        \$('#'+id).attr(\"data-direction\", \"DESC\");
                    else if (direction == 'DESC')
                        \$('#'+id).attr(\"data-direction\", \"ASC\");

                    \$('#informations').attr('data-filter', filter);
                    \$('#informations').attr(\"data-direction\", direction);
              }
              }
          })
    });


  });

</script>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "film/index.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 71,  108 => 54,  100 => 48,  95 => 45,  93 => 44,  67 => 20,  54 => 9,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script>

  \$(document).ready(function(){


let page = {{data.active??\"\"}}
{# let filter = {{filter??\"'f.title'\"}}
let direction = {{data.direction??\"'DESC'\"}} #}

    \$('#selectnumber').change(function(){

      \$('#example').html('');
      var limit = \$(this).val();
      var page = 1;
      var filter = \$('#informations').attr('data-filter');
      var direction = \$('#informations').attr('data-direction');

          \$.ajax({
              type: 'GET',
              url: '{{ path('filter')}}',
              data: 'limit=' + encodeURIComponent(limit) + '&page=' + page + '&filter=' + filter + '&direction=' + direction,
              success: function(data){
                if(data != \"\"){
                    \$('#example').append(data);


    \$('#informations').attr(\"data-direction\", \"ASC\");
              }
              }
          })
    });



    \$('#example').on('click', '.page-item', function(){

      limit = \$('#selectnumber').val();
      \$('#example').html('');
      var page = \$(this).val();
      var filter = \$('#informations').attr('data-filter');
      var direction = \$('#informations').attr('data-direction');

      {# console.log(filter); #}
      {# console.log(page); #}

          \$.ajax({
              type: 'GET',
              url: '{{ path('filter')}}',
              data: 'limit=' + encodeURIComponent(limit) + '&page=' + page + '&filter=' + filter + '&direction=' + direction,
              success: function(data){
                if(data != \"\"){
                    \$('#example').append(data);
                    {# console.log(data); #}
              }
              }
          })
    });

    \$('#example').on('click', '.filterlink', function(){

      limit = \$('#selectnumber').val();
      \$('#example').html('');
      var filter = \$(this).attr('data-filter');
      var direction = \$(this).attr('data-direction');
      var id = \$(this).attr('id');

      console.log(filter);

          \$.ajax({
              type: 'GET',
              url: '{{ path('filter')}}',
              data: 'limit=' + encodeURIComponent(limit) + '&page=' + page + '&filter=' + filter + '&direction=' + direction,
              success: function(data){
                if(data != \"\"){
                    \$('#example').append(data);
                    if(direction == 'ASC')
                        \$('#'+id).attr(\"data-direction\", \"DESC\");
                    else if (direction == 'DESC')
                        \$('#'+id).attr(\"data-direction\", \"ASC\");

                    \$('#informations').attr('data-filter', filter);
                    \$('#informations').attr(\"data-direction\", direction);
              }
              }
          })
    });


  });

</script>", "film/index.js.twig", "/opt/lampp/htdocs/glass/templates/film/index.js.twig");
    }
}
