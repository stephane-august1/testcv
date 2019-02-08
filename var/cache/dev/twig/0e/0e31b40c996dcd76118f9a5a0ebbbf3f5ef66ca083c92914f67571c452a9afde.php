<?php

/* cv/home.html.twig */
class __TwigTemplate_b798cc0ca83b228ca6c9dd58f74c0a613f0fb0406619650e4d521f441530d37c extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "cv/home.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cv/home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cv/home.html.twig"));

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
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/css/perso/stylehome.css"), "html", null, true);
        echo "\">
             
        
            <div class=\"content\">
            <span class=\"GreatVibes\"> <h1>Mon Title</h1> </span>
         
                  
                          <p>
                              Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, ad quibusdam soluta eveniet iste quo rem amet itaque impedit? Quas sit laboriosam atque aperiam rem? Maiores omnis sint beatae amet!</p><span class=\"special\">
                              avant<hr></span>
                             <p> <span>Ipsum cumque doloribus porro, dolorem magni iure quasi quaerat quam dolore assumenda veniam animi qui fuga molestias asperiores eum facere alias nulla. Hic similique aperiam vero vel. Ipsum, odio fugiat!</span>
                              <span>Alias error deleniti magnam sequi commodi possimus. </span>
                              
                             </p>
                          

                          </div>
                              
            
            
        
                 
        
   
    
       
    
        
  
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "cv/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 3,  44 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}
    <link rel=\"stylesheet\" href=\"{{asset('build/css/perso/stylehome.css')}}\">
             
        
            <div class=\"content\">
            <span class=\"GreatVibes\"> <h1>Mon Title</h1> </span>
         
                  
                          <p>
                              Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, ad quibusdam soluta eveniet iste quo rem amet itaque impedit? Quas sit laboriosam atque aperiam rem? Maiores omnis sint beatae amet!</p><span class=\"special\">
                              avant<hr></span>
                             <p> <span>Ipsum cumque doloribus porro, dolorem magni iure quasi quaerat quam dolore assumenda veniam animi qui fuga molestias asperiores eum facere alias nulla. Hic similique aperiam vero vel. Ipsum, odio fugiat!</span>
                              <span>Alias error deleniti magnam sequi commodi possimus. </span>
                              
                             </p>
                          

                          </div>
                              
            
            
        
                 
        
   
    
       
    
        
  
        {% endblock %}
    ", "cv/home.html.twig", "/Users/stephaneaugustin/Documents/symfony/projet/testcv/templates/cv/home.html.twig");
    }
}
