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
        echo "\">";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("SITE_TITLE");
        echo "</a><button type=\"submit\" value=\"/en\" onclick=\"if (this.value) window.location.href=this.value\">en</button>
                <button type=\"submit\" value=\"/fr\" onclick=\"if (this.value) window.location.href=this.value\">fr</button>
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
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("NAV_BAR_ITEM_1");
        echo " <span class=\"sr-only\">(current)</span></a>
                                
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("base");
        echo "\">";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("NAV_BAR_ITEM_2");
        echo "</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("meteo");
        echo "\">";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("NAV_BAR_ITEM_3");
        echo "</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article");
        echo "\">";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("NAV_BAR_ITEM_4");
        echo "</a>
                                
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("news");
        echo "\">";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("NAV_BAR_ITEM_5");
        echo "</a>
                            </li>   
                           
                        </ul>
                    </div>
            </nav>
                 
            </div>
      
       
    <script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/javascript/jquerymini.js"), "html", null, true);
        echo "\"></script>
    
    <script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/javascript/popper.js"), "html", null, true);
        echo "\"></script>
   
    <script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/javascript/bootstrap4.js"), "html", null, true);
        echo "\"></script>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
         <script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/javascript/appmeteo.js"), "html", null, true);
        echo "\"></script>  
    <script src=\"https://use.fontawesome.com/releases/v5.7.1/js/all.js\" integrity=\"sha384-eVEQC9zshBn0rFj4+TU78eNA19HMNigMviK/PU/FFjLXqa/GKPgX58rvt5Z8PLs7\" crossorigin=\"anonymous\"></script>
      
      
                                     
   

          <div class=\"container\">
   
                    ";
        // line 77
        $this->displayBlock('body', $context, $blocks);
        // line 80
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
                             
               ";
        // line 106
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("COPYRIGHT");
        echo " --<i class=\"fa fa-quote-right \"  aria-hidden=\"true\"></i></span></a></p>
               </li></div>
            </div></div>
                    </ul>
    </div></div>
             
               
    </footer>
           
           
        
                    ";
        // line 117
        $this->displayBlock('javascripts', $context, $blocks);
        // line 118
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

    // line 77
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 78
        echo "    
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 117
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
        return array (  287 => 117,  276 => 78,  267 => 77,  249 => 17,  231 => 7,  220 => 118,  218 => 117,  204 => 106,  176 => 80,  174 => 77,  162 => 68,  157 => 66,  152 => 64,  147 => 62,  132 => 52,  123 => 48,  115 => 45,  107 => 42,  98 => 38,  79 => 24,  71 => 18,  69 => 17,  64 => 15,  60 => 14,  54 => 11,  49 => 9,  46 => 8,  44 => 7,  36 => 2,  33 => 1,);
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
                <a class=\"navbar-brand\" href=\"{{path('home')}}\">{{'SITE_TITLE'| trans | raw}}</a><button type=\"submit\" value=\"/en\" onclick=\"if (this.value) window.location.href=this.value\">en</button>
                <button type=\"submit\" value=\"/fr\" onclick=\"if (this.value) window.location.href=this.value\">fr</button>
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
                                <a class=\"nav-link\" href=\"{{path('home')}}\">{{'NAV_BAR_ITEM_1'| trans | raw}} <span class=\"sr-only\">(current)</span></a>
                                
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"{{path('base')}}\">{{'NAV_BAR_ITEM_2'| trans | raw}}</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"{{path('meteo')}}\">{{'NAV_BAR_ITEM_3'| trans | raw}}</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"{{path('article')}}\">{{'NAV_BAR_ITEM_4'| trans | raw}}</a>
                                
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"{{path('news')}}\">{{'NAV_BAR_ITEM_5'| trans | raw}}</a>
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
                             
               {{'COPYRIGHT'| trans | raw}} --<i class=\"fa fa-quote-right \"  aria-hidden=\"true\"></i></span></a></p>
               </li></div>
            </div></div>
                    </ul>
    </div></div>
             
               
    </footer>
           
           
        
                    {% block javascripts %}{% endblock %}
              
          </body></html>", "base.html.twig", "/Volumes/Samsung_T5/symfony/dev/testcv/templates/base.html.twig");
    }
}
