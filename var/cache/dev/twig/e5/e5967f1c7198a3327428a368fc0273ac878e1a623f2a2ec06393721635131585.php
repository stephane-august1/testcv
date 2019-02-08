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
                <a class=\"navbar-brand\" href=\"/\">Bienvenue</a>
                    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor02\" aria-controls=\"navbarColor02\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <span class=\"navbar-toggler-icon\"></span>
                    </button>
                    <div class=\"collapse navbar-collapse\" id=\"navbarColor02\">
                        <ul class=\"navbar-nav mr-auto\">
                            <li class=\"nav-item active\">
                                <a class=\"nav-link\" href=\"/\">Home <span class=\"sr-only\">(current)</span></a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"base\">Base</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"/article\">Article</a>
                                
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"/news\">news</a>
                            </li>
                            <li class=\"nav-item\">
                                <a  href=\"http://github.com\"><i class=\"fab fa-github fa-3x\"></i></a>
                                <i class=\"fas fa-snowman fa-rotate-90\"></i>
                                <i class=\"fas fa-fb fa-5x\"></i>
                            </li>
                          
                            
                               

                           
                        </ul>
                    </div>
            </nav>
            <i class=\"fas fa-spinner fa-spin\"></i>
            <i class=\"fas fa-circle-notch fa-spin\"></i>
            <i class=\"fas fa-sync fa-spin\"></i>
            <i class=\"fas fa-cog fa-spin\"></i>
            <i class=\"fas fa-spinner fa-pulse\"></i>
            <i class=\"fas fa-star-christmas fa-spin\"></i>      
            </div>
      ";
        // line 64
        echo "          ";
        // line 65
        echo "             
              ";
        // line 67
        echo "             
          ";
        // line 69
        echo "          
        
      ";
        // line 72
        echo "
           
  
                        
                




    <script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/javascript/jquerymini.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/javascript/popper.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/javascript/bootstrap4.js"), "html", null, true);
        echo "\"></script>
                                              <script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/javascript/perso.js"), "html", null, true);
        echo "\"></script> 
    <script defer src=\"https://use.fontawesome.com/releases/v5.7.1/js/all.js\" integrity=\"sha384-eVEQC9zshBn0rFj4+TU78eNA19HMNigMviK/PU/FFjLXqa/GKPgX58rvt5Z8PLs7\" crossorigin=\"anonymous\"></script>
    
                                              
   
ded
          <div class=\"container\">
   
                    ";
        // line 92
        $this->displayBlock('body', $context, $blocks);
        // line 95
        echo "        </div>
    <footer>
        <div class=\" bg-dark navbar-expand-lg navbar-nav mr-auto\">
            <div class=\"row  no-gutters \">
                <div class=\"col-xs-12 \">
                    <li>    
                        <a class=\"nav-link\" href=\"Souron4Ever.com\">Souron4Ever.com</a>
                        <a class=\"nav-link\" href=\"Follow/him/also/on/twitter\">Follow him also on twitter</a>
                                       
                    </li>
                </div>
                
                <div class=\"col-xs-2 \"></div>
                <div class=\"col-xs-2 \"></div>
                <div class=\"col-xs-6  col-md-6 align-icone\">
                    <li>   
                        <a class=\"icon\" href=\"https://github.com/twbs/bootstrap\" target=\"_blank\" rel=\"noopener\" aria-label=\"GitHub\"><svg  xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 512 499.36\" focusable=\"false\" role=\"img\"><title>GitHub</title><path d=\"M256 0C114.64 0 0 114.61 0 256c0 113.09 73.34 209 175.08 242.9 12.8 2.35 17.47-5.56 17.47-12.34 0-6.08-.22-22.18-.35-43.54-71.2 15.49-86.2-34.34-86.2-34.34-11.64-29.57-28.42-37.45-28.42-37.45-23.27-15.84 1.73-15.55 1.73-15.55 25.69 1.81 39.21 26.38 39.21 26.38 22.84 39.12 59.92 27.82 74.5 21.27 2.33-16.54 8.94-27.82 16.25-34.22-56.84-6.43-116.6-28.43-116.6-126.49 0-27.95 10-50.8 26.35-68.69-2.63-6.48-11.42-32.5 2.51-67.75 0 0 21.49-6.88 70.4 26.24a242.65 242.65 0 0 1 128.18 0c48.87-33.13 70.33-26.24 70.33-26.24 14 35.25 5.18 61.27 2.55 67.75 16.41 17.9 26.31 40.75 26.31 68.69 0 98.35-59.85 120-116.88 126.32 9.19 7.9 17.38 23.53 17.38 47.41 0 34.22-.31 61.83-.31 70.23 0 6.85 4.61 14.81 17.6 12.31C438.72 464.97 512 369.08 512 256.02 512 114.62 397.37 0 256 0z\" fill=\"currentColor\" fill-rule=\"evenodd\"/></svg>
                        </a>
                   
                        <a class=\"icon\" href=\"https://twitter.com/getbootstrap\" target=\"_blank\" rel=\"noopener\" aria-label=\"Twitter\"><svg  xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 512 416.32\" focusable=\"false\" role=\"img\"><title>Twitter</title><path d=\"M160.83 416.32c193.2 0 298.92-160.22 298.92-298.92 0-4.51 0-9-.2-13.52A214 214 0 0 0 512 49.38a212.93 212.93 0 0 1-60.44 16.6 105.7 105.7 0 0 0 46.3-58.19 209 209 0 0 1-66.79 25.37 105.09 105.09 0 0 0-181.73 71.91 116.12 116.12 0 0 0 2.66 24c-87.28-4.3-164.73-46.3-216.56-109.82A105.48 105.48 0 0 0 68 159.6a106.27 106.27 0 0 1-47.53-13.11v1.43a105.28 105.28 0 0 0 84.21 103.06 105.67 105.67 0 0 1-47.33 1.84 105.06 105.06 0 0 0 98.14 72.94A210.72 210.72 0 0 1 25 370.84a202.17 202.17 0 0 1-25-1.43 298.85 298.85 0 0 0 160.83 46.92\" fill=\"currentColor\"/></svg>
                        </a>
                   
                        <a class=\"icon\" href=\"https://bootstrap-slack.herokuapp.com/\" target=\"_blank\" rel=\"noopener\" aria-label=\"Slack\"><svg  xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 512 512\" focusable=\"false\" role=\"img\"><title>Slack</title><path fill=\"currentColor\" d=\"M210.787 234.832l68.31-22.883 22.1 65.977-68.309 22.882z\"/><path d=\"M490.54 185.6C437.7 9.59 361.6-31.34 185.6 21.46S-31.3 150.4 21.46 326.4 150.4 543.3 326.4 490.54 543.34 361.6 490.54 185.6zM401.7 299.8l-33.15 11.05 11.46 34.38c4.5 13.92-2.87 29.06-16.78 33.56-2.87.82-6.14 1.64-9 1.23a27.32 27.32 0 0 1-24.56-18l-11.46-34.38-68.36 22.92 11.46 34.38c4.5 13.92-2.87 29.06-16.78 33.56-2.87.82-6.14 1.64-9 1.23a27.32 27.32 0 0 1-24.56-18l-11.46-34.43-33.15 11.05c-2.87.82-6.14 1.64-9 1.23a27.32 27.32 0 0 1-24.56-18c-4.5-13.92 2.87-29.06 16.78-33.56l33.12-11.03-22.1-65.9-33.15 11.05c-2.87.82-6.14 1.64-9 1.23a27.32 27.32 0 0 1-24.56-18c-4.48-13.93 2.89-29.07 16.81-33.58l33.15-11.05-11.46-34.38c-4.5-13.92 2.87-29.06 16.78-33.56s29.06 2.87 33.56 16.78l11.46 34.38 68.36-22.92-11.46-34.38c-4.5-13.92 2.87-29.06 16.78-33.56s29.06 2.87 33.56 16.78l11.47 34.42 33.15-11.05c13.92-4.5 29.06 2.87 33.56 16.78s-2.87 29.06-16.78 33.56L329.7 194.6l22.1 65.9 33.15-11.05c13.92-4.5 29.06 2.87 33.56 16.78s-2.88 29.07-16.81 33.57z\" fill=\"currentColor\"/></svg>
                        </a>
                       

                  
                      
                                
                                  <a> <p><span style=\"color:#faebd7\">About us
                                                
                                    Conditions -copyright</span></p></a>
                              
                                    </li>
                    
                </div> 
              
                
            </div> 
        </div>        
    </footer>
           
        
                    ";
        // line 138
        $this->displayBlock('javascripts', $context, $blocks);
        // line 139
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

    // line 92
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 93
        echo "    
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 138
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
        return array (  280 => 138,  269 => 93,  260 => 92,  242 => 17,  224 => 7,  213 => 139,  211 => 138,  166 => 95,  164 => 92,  153 => 84,  149 => 83,  145 => 82,  141 => 81,  130 => 72,  126 => 69,  123 => 67,  120 => 65,  118 => 64,  71 => 18,  69 => 17,  64 => 15,  60 => 14,  54 => 11,  49 => 9,  46 => 8,  44 => 7,  36 => 2,  33 => 1,);
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
                <a class=\"navbar-brand\" href=\"/\">Bienvenue</a>
                    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor02\" aria-controls=\"navbarColor02\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <span class=\"navbar-toggler-icon\"></span>
                    </button>
                    <div class=\"collapse navbar-collapse\" id=\"navbarColor02\">
                        <ul class=\"navbar-nav mr-auto\">
                            <li class=\"nav-item active\">
                                <a class=\"nav-link\" href=\"/\">Home <span class=\"sr-only\">(current)</span></a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"base\">Base</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"/article\">Article</a>
                                
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"/news\">news</a>
                            </li>
                            <li class=\"nav-item\">
                                <a  href=\"http://github.com\"><i class=\"fab fa-github fa-3x\"></i></a>
                                <i class=\"fas fa-snowman fa-rotate-90\"></i>
                                <i class=\"fas fa-fb fa-5x\"></i>
                            </li>
                          
                            
                               

                           
                        </ul>
                    </div>
            </nav>
            <i class=\"fas fa-spinner fa-spin\"></i>
            <i class=\"fas fa-circle-notch fa-spin\"></i>
            <i class=\"fas fa-sync fa-spin\"></i>
            <i class=\"fas fa-cog fa-spin\"></i>
            <i class=\"fas fa-spinner fa-pulse\"></i>
            <i class=\"fas fa-star-christmas fa-spin\"></i>      
            </div>
      {# <div class=\"row no-gutters\"> #}
          {# <div class=\"col-1 \"> #}
             
              {# <img src=\"{{asset('build/img/image2.jpg')}}\" class=\"img-fluid \" alt=\"aubergine\"> #}
             
          {# </div> #}
          
        
      {# </div> #}

           
  
                        
                




    <script src=\"{{asset('build/javascript/jquerymini.js')}}\"></script>
    <script src=\"{{asset('build/javascript/popper.js')}}\"></script>
    <script src=\"{{asset('build/javascript/bootstrap4.js')}}\"></script>
                                              <script src=\"{{asset('build/javascript/perso.js')}}\"></script> 
    <script defer src=\"https://use.fontawesome.com/releases/v5.7.1/js/all.js\" integrity=\"sha384-eVEQC9zshBn0rFj4+TU78eNA19HMNigMviK/PU/FFjLXqa/GKPgX58rvt5Z8PLs7\" crossorigin=\"anonymous\"></script>
    
                                              
   
ded
          <div class=\"container\">
   
                    {% block body %}
    
                    {% endblock %}
        </div>
    <footer>
        <div class=\" bg-dark navbar-expand-lg navbar-nav mr-auto\">
            <div class=\"row  no-gutters \">
                <div class=\"col-xs-12 \">
                    <li>    
                        <a class=\"nav-link\" href=\"Souron4Ever.com\">Souron4Ever.com</a>
                        <a class=\"nav-link\" href=\"Follow/him/also/on/twitter\">Follow him also on twitter</a>
                                       
                    </li>
                </div>
                
                <div class=\"col-xs-2 \"></div>
                <div class=\"col-xs-2 \"></div>
                <div class=\"col-xs-6  col-md-6 align-icone\">
                    <li>   
                        <a class=\"icon\" href=\"https://github.com/twbs/bootstrap\" target=\"_blank\" rel=\"noopener\" aria-label=\"GitHub\"><svg  xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 512 499.36\" focusable=\"false\" role=\"img\"><title>GitHub</title><path d=\"M256 0C114.64 0 0 114.61 0 256c0 113.09 73.34 209 175.08 242.9 12.8 2.35 17.47-5.56 17.47-12.34 0-6.08-.22-22.18-.35-43.54-71.2 15.49-86.2-34.34-86.2-34.34-11.64-29.57-28.42-37.45-28.42-37.45-23.27-15.84 1.73-15.55 1.73-15.55 25.69 1.81 39.21 26.38 39.21 26.38 22.84 39.12 59.92 27.82 74.5 21.27 2.33-16.54 8.94-27.82 16.25-34.22-56.84-6.43-116.6-28.43-116.6-126.49 0-27.95 10-50.8 26.35-68.69-2.63-6.48-11.42-32.5 2.51-67.75 0 0 21.49-6.88 70.4 26.24a242.65 242.65 0 0 1 128.18 0c48.87-33.13 70.33-26.24 70.33-26.24 14 35.25 5.18 61.27 2.55 67.75 16.41 17.9 26.31 40.75 26.31 68.69 0 98.35-59.85 120-116.88 126.32 9.19 7.9 17.38 23.53 17.38 47.41 0 34.22-.31 61.83-.31 70.23 0 6.85 4.61 14.81 17.6 12.31C438.72 464.97 512 369.08 512 256.02 512 114.62 397.37 0 256 0z\" fill=\"currentColor\" fill-rule=\"evenodd\"/></svg>
                        </a>
                   
                        <a class=\"icon\" href=\"https://twitter.com/getbootstrap\" target=\"_blank\" rel=\"noopener\" aria-label=\"Twitter\"><svg  xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 512 416.32\" focusable=\"false\" role=\"img\"><title>Twitter</title><path d=\"M160.83 416.32c193.2 0 298.92-160.22 298.92-298.92 0-4.51 0-9-.2-13.52A214 214 0 0 0 512 49.38a212.93 212.93 0 0 1-60.44 16.6 105.7 105.7 0 0 0 46.3-58.19 209 209 0 0 1-66.79 25.37 105.09 105.09 0 0 0-181.73 71.91 116.12 116.12 0 0 0 2.66 24c-87.28-4.3-164.73-46.3-216.56-109.82A105.48 105.48 0 0 0 68 159.6a106.27 106.27 0 0 1-47.53-13.11v1.43a105.28 105.28 0 0 0 84.21 103.06 105.67 105.67 0 0 1-47.33 1.84 105.06 105.06 0 0 0 98.14 72.94A210.72 210.72 0 0 1 25 370.84a202.17 202.17 0 0 1-25-1.43 298.85 298.85 0 0 0 160.83 46.92\" fill=\"currentColor\"/></svg>
                        </a>
                   
                        <a class=\"icon\" href=\"https://bootstrap-slack.herokuapp.com/\" target=\"_blank\" rel=\"noopener\" aria-label=\"Slack\"><svg  xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 512 512\" focusable=\"false\" role=\"img\"><title>Slack</title><path fill=\"currentColor\" d=\"M210.787 234.832l68.31-22.883 22.1 65.977-68.309 22.882z\"/><path d=\"M490.54 185.6C437.7 9.59 361.6-31.34 185.6 21.46S-31.3 150.4 21.46 326.4 150.4 543.3 326.4 490.54 543.34 361.6 490.54 185.6zM401.7 299.8l-33.15 11.05 11.46 34.38c4.5 13.92-2.87 29.06-16.78 33.56-2.87.82-6.14 1.64-9 1.23a27.32 27.32 0 0 1-24.56-18l-11.46-34.38-68.36 22.92 11.46 34.38c4.5 13.92-2.87 29.06-16.78 33.56-2.87.82-6.14 1.64-9 1.23a27.32 27.32 0 0 1-24.56-18l-11.46-34.43-33.15 11.05c-2.87.82-6.14 1.64-9 1.23a27.32 27.32 0 0 1-24.56-18c-4.5-13.92 2.87-29.06 16.78-33.56l33.12-11.03-22.1-65.9-33.15 11.05c-2.87.82-6.14 1.64-9 1.23a27.32 27.32 0 0 1-24.56-18c-4.48-13.93 2.89-29.07 16.81-33.58l33.15-11.05-11.46-34.38c-4.5-13.92 2.87-29.06 16.78-33.56s29.06 2.87 33.56 16.78l11.46 34.38 68.36-22.92-11.46-34.38c-4.5-13.92 2.87-29.06 16.78-33.56s29.06 2.87 33.56 16.78l11.47 34.42 33.15-11.05c13.92-4.5 29.06 2.87 33.56 16.78s-2.87 29.06-16.78 33.56L329.7 194.6l22.1 65.9 33.15-11.05c13.92-4.5 29.06 2.87 33.56 16.78s-2.88 29.07-16.81 33.57z\" fill=\"currentColor\"/></svg>
                        </a>
                       

                  
                      
                                
                                  <a> <p><span style=\"color:#faebd7\">About us
                                                
                                    Conditions -copyright</span></p></a>
                              
                                    </li>
                    
                </div> 
              
                
            </div> 
        </div>        
    </footer>
           
        
                    {% block javascripts %}{% endblock %}
              
          </body></html>", "base.html.twig", "/Users/stephaneaugustin/Documents/symfony/projet/testcv/templates/base.html.twig");
    }
}
