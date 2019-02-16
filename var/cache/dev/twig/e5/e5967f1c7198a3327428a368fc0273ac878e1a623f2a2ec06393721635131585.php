<?php

/* base.html.twig */
class __TwigTemplate_04173cc5b1147f98e116855a554a003a5218a202ba979d4c29bd716e84a7e097 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 2, $this->source); })()), "request", []), "locale", []), "html", null, true);
        echo "\">
    <head> <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <meta charset=\"UTF-8\">
     
            <title>
                ";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "            </title>
<link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../build/css/bootstrap/bootstrap4.2.1.css"), "html", null, true);
        echo "
\" rel=\"stylesheet\">
<link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../build/css/bootstrap/cerulean.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">


<link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../build/css/awesome.v5.71.css"), "html", null, true);
        echo "\">
  <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../build/css/perso/stylebase.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  
                ";
        // line 17
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "</head>
    <body>
                
     <div class=\"row no-gutters \">
        
            <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
                <a class=\"navbar-brand\" href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Bienvenue</a>
                <i class=\"fas fa-spinner fa-spin\"></i>
            <i class=\"fas fa-circle-notch fa-spin\"></i>
            <i class=\"fas fa-sync fa-spin\"></i>
            <i class=\"fas fa-cog fa-spin\"></i>
            <i class=\"fas fa-spinner fa-pulse\"></i>
            <i class=\"fas fa-star-christmas fa-spin\"></i> 
                    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor02\" aria-controls=\"navbarColor02\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <span class=\"navbar-toggler-icon\"></span>
                    </button>
                    <div class=\"collapse navbar-collapse\" id=\"navbarColor02\">
                        <ul class=\"navbar-nav mr-auto\">
                            <li class=\"nav-item active\">
                                <a class=\"nav-link\" href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Home <span class=\"sr-only\">(current)</span></a>
                                
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("base");
        echo "\">Base</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("meteo");
        echo "\">Meteo</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article");
        echo "\">Article</a>
                                
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("news");
        echo "\">news</a>
                            </li>   
                           
                        </ul>
                    </div>
            </nav>
                 
            </div>
      
       
    <script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/javascript/jquerymini.js"), "html", null, true);
        echo "\"></script>
    
    <script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/javascript/popper.js"), "html", null, true);
        echo "\"></script>
   
    <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/javascript/bootstrap4.js"), "html", null, true);
        echo "\"></script>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
         <script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/javascript/appmeteo.js"), "html", null, true);
        echo "\"></script>  
    <script src=\"https://use.fontawesome.com/releases/v5.7.1/js/all.js\" integrity=\"sha384-eVEQC9zshBn0rFj4+TU78eNA19HMNigMviK/PU/FFjLXqa/GKPgX58rvt5Z8PLs7\" crossorigin=\"anonymous\"></script>
      
      
                                     
   

          <div class=\"container\">
   
                    ";
        // line 76
        $this->displayBlock('body', $context, $blocks);
        // line 79
        echo "        </div>
    <footer class=\"foot\">
        
    <div class=\" bg-dark \">
        <ul class=\"navbar-nav mr-auto expand-lg\">
            <div class=\"extra\">
            <div class=\"row no-gutters\">
             <div class=\".col-12 .col-sm-6 .col-lg-8\"> 
                 <li> <a  href=\"http://github.com\">
                <i class=\"fab fa-github fa-1x\"></i>
            </a> 
            <a  href=\"http://linkedin.com\"><i class=\"fab fa-linkedin fa-1x\"></i></a>
            <a href=\"http://twitter.com\"> 
                <i class=\"fab fa-twitter fa-1x\"></i>
            </a> 
            </li>
                   
              </div> 
              <div class=\".col-1.col-dm-2\"></div>
              <div class=\".col-5.col-lg-4\">                       
                   
               
                <div class=\"droite\"><li>
                  <p> <a href=\"link copyright\"> <span style=\"color:whitesmoke\">
                    <i class=\"fa fa-quote-right \"  aria-hidden=\"true\"></i>--
                             
                @copyright --<i class=\"fa fa-quote-right \"  aria-hidden=\"true\"></i></span></a></p>
               </li></div>
            </div></div>
                    </ul>
    </div></div>
             
               
    </footer>
           
           
        
                    ";
        // line 116
        $this->displayBlock('javascripts', $context, $blocks);
        // line 117
        echo "              
          </body></html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 17
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 76
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 77
        echo "    
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 116
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  271 => 116,  260 => 77,  251 => 76,  233 => 17,  215 => 7,  204 => 117,  202 => 116,  163 => 79,  161 => 76,  149 => 67,  144 => 65,  139 => 63,  134 => 61,  121 => 51,  114 => 47,  108 => 44,  102 => 41,  95 => 37,  79 => 24,  71 => 18,  69 => 17,  64 => 15,  60 => 14,  54 => 11,  49 => 9,  46 => 8,  44 => 7,  36 => 2,  33 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"{{ app.request.locale }}\">
    <head> <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <meta charset=\"UTF-8\">
     
            <title>
                {% block title %}Welcome!{% endblock %}
            </title>
<link href=\"{{asset('../build/css/bootstrap/bootstrap4.2.1.css')}}
\" rel=\"stylesheet\">
<link href=\"{{asset('../build/css/bootstrap/cerulean.css')}}\" rel=\"stylesheet\">


<link rel=\"stylesheet\" href=\"{{asset('../build/css/awesome.v5.71.css')}}\">
  <link href=\"{{asset('../build/css/perso/stylebase.css')}}\" rel=\"stylesheet\">
  
                {% block stylesheets %} {% endblock %}
</head>
    <body>
                
     <div class=\"row no-gutters \">
        
            <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
                <a class=\"navbar-brand\" href=\"{{path('home')}}\">Bienvenue</a>
                <i class=\"fas fa-spinner fa-spin\"></i>
            <i class=\"fas fa-circle-notch fa-spin\"></i>
            <i class=\"fas fa-sync fa-spin\"></i>
            <i class=\"fas fa-cog fa-spin\"></i>
            <i class=\"fas fa-spinner fa-pulse\"></i>
            <i class=\"fas fa-star-christmas fa-spin\"></i> 
                    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor02\" aria-controls=\"navbarColor02\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <span class=\"navbar-toggler-icon\"></span>
                    </button>
                    <div class=\"collapse navbar-collapse\" id=\"navbarColor02\">
                        <ul class=\"navbar-nav mr-auto\">
                            <li class=\"nav-item active\">
                                <a class=\"nav-link\" href=\"{{path('home')}}\">Home <span class=\"sr-only\">(current)</span></a>
                                
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"{{path('base')}}\">Base</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"{{path('meteo')}}\">Meteo</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"{{path('article')}}\">Article</a>
                                
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"{{path('news')}}\">news</a>
                            </li>   
                           
                        </ul>
                    </div>
            </nav>
                 
            </div>
      
       
    <script src=\"{{asset('build/javascript/jquerymini.js')}}\"></script>
    
    <script src=\"{{asset('build/javascript/popper.js')}}\"></script>
   
    <script src=\"{{asset('build/javascript/bootstrap4.js')}}\"></script>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
         <script src=\"{{asset('build/javascript/appmeteo.js')}}\"></script>  
    <script src=\"https://use.fontawesome.com/releases/v5.7.1/js/all.js\" integrity=\"sha384-eVEQC9zshBn0rFj4+TU78eNA19HMNigMviK/PU/FFjLXqa/GKPgX58rvt5Z8PLs7\" crossorigin=\"anonymous\"></script>
      
      
                                     
   

          <div class=\"container\">
   
                    {% block body %}
    
                    {% endblock %}
        </div>
    <footer class=\"foot\">
        
    <div class=\" bg-dark \">
        <ul class=\"navbar-nav mr-auto expand-lg\">
            <div class=\"extra\">
            <div class=\"row no-gutters\">
             <div class=\".col-12 .col-sm-6 .col-lg-8\"> 
                 <li> <a  href=\"http://github.com\">
                <i class=\"fab fa-github fa-1x\"></i>
            </a> 
            <a  href=\"http://linkedin.com\"><i class=\"fab fa-linkedin fa-1x\"></i></a>
            <a href=\"http://twitter.com\"> 
                <i class=\"fab fa-twitter fa-1x\"></i>
            </a> 
            </li>
                   
              </div> 
              <div class=\".col-1.col-dm-2\"></div>
              <div class=\".col-5.col-lg-4\">                       
                   
               
                <div class=\"droite\"><li>
                  <p> <a href=\"link copyright\"> <span style=\"color:whitesmoke\">
                    <i class=\"fa fa-quote-right \"  aria-hidden=\"true\"></i>--
                             
                @copyright --<i class=\"fa fa-quote-right \"  aria-hidden=\"true\"></i></span></a></p>
               </li></div>
            </div></div>
                    </ul>
    </div></div>
             
               
    </footer>
           
           
        
                    {% block javascripts %}{% endblock %}
              
          </body></html>", "base.html.twig", "/Users/stephaneaugustin/Documents/symfony/projet2/testcv/templates/base.html.twig");
    }
}
