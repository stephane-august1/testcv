<?php

/* appmeteo/meteo.html.twig */
class __TwigTemplate_6a139345184993e1ceb7fe3bed34b66c37ca6afada01d2fceaaba889b75d92a8 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "appmeteo/meteo.html.twig", 1);
        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "appmeteo/meteo.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "appmeteo/meteo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<head>
    <link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/css/perso/app.meteo.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/weather-icons/2.0.9/css/weather-icons.min.css\"/>

    </head><body>
    
        
<div id=\"first\">
   
    <h3>  <span id=\"ville\">Marseille</span>    </h3>
   <br>
    <i class=\"wi wi-day-snow \"></i>
   
    <h2>
        <span id=\"temperature\"> &nbsp;25</span> c° ( <span id=\"conditions\">Ciel degagé</span> )
    </h2>
  
       
         
</div>
<div id=\"second\">
    
      <div class=\"form-group\"><label for=\"form_image\" class=\"required\"></label><input type=\"text\" id=\"newcity\" name=\"form[town]\" required=\"required\" maxlength=\"255\" placeholder=\"Put your town\" class=\"form-control\" /><br/>
        <button  type=\"submit\" id=\"#submitWeather\" class=\"btn btn-success\"/> 
                Envoyer
                </button>
                <p id=\"ici\"></p></div>
            </div>        


       </body>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "appmeteo/meteo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 4,  53 => 3,  44 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}
<head>
    <link rel=\"stylesheet\" href=\"{{asset('build/css/perso/app.meteo.css')}}\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/weather-icons/2.0.9/css/weather-icons.min.css\"/>

    </head><body>
    
        
<div id=\"first\">
   
    <h3>  <span id=\"ville\">Marseille</span>    </h3>
   <br>
    <i class=\"wi wi-day-snow \"></i>
   
    <h2>
        <span id=\"temperature\"> &nbsp;25</span> c° ( <span id=\"conditions\">Ciel degagé</span> )
    </h2>
  
       
         
</div>
<div id=\"second\">
    
      <div class=\"form-group\"><label for=\"form_image\" class=\"required\"></label><input type=\"text\" id=\"newcity\" name=\"form[town]\" required=\"required\" maxlength=\"255\" placeholder=\"Put your town\" class=\"form-control\" /><br/>
        <button  type=\"submit\" id=\"#submitWeather\" class=\"btn btn-success\"/> 
                Envoyer
                </button>
                <p id=\"ici\"></p></div>
            </div>        


       </body>
        {% endblock %}", "appmeteo/meteo.html.twig", "/Users/stephaneaugustin/Documents/symfony/projet2/testcv/templates/appmeteo/meteo.html.twig");
    }
}
