<?php

/* cv/new.html.twig */
class __TwigTemplate_e24431ebd7f491f194f815244d551a3d9721bc46ef345936d01c15e2196a76ad extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "cv/new.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cv/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cv/new.html.twig"));

        // line 2
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["formArticle"]) || array_key_exists("formArticle", $context) ? $context["formArticle"] : (function () { throw new Twig_Error_Runtime('Variable "formArticle" does not exist.', 2, $this->source); })()), [0 => "bootstrap_4_layout.html.twig"], true);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <head>
        <link rel=\"stylesheet\" href=";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/build/css/perso/stylenew.css"), "html", null, true);
        echo "></head>
        <body>
            <section class=\"articles\">
                <article>
                    <h2>Rediger un article</h2>
                    <hr>
               ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formArticle"]) || array_key_exists("formArticle", $context) ? $context["formArticle"] : (function () { throw new Twig_Error_Runtime('Variable "formArticle" does not exist.', 11, $this->source); })()), 'form_start');
        echo "
               
                  
                    ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formArticle"]) || array_key_exists("formArticle", $context) ? $context["formArticle"] : (function () { throw new Twig_Error_Runtime('Variable "formArticle" does not exist.', 14, $this->source); })()), "title", []), 'row', ["attr" => ["placeholder" => "Titre de l'article"]]);
        echo "
                    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formArticle"]) || array_key_exists("formArticle", $context) ? $context["formArticle"] : (function () { throw new Twig_Error_Runtime('Variable "formArticle" does not exist.', 15, $this->source); })()), "content", []), 'row', ["attr" => ["placeholder" => "Contenu de l'article"]]);
        echo "
                    ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formArticle"]) || array_key_exists("formArticle", $context) ? $context["formArticle"] : (function () { throw new Twig_Error_Runtime('Variable "formArticle" does not exist.', 16, $this->source); })()), "image", []), 'row', ["attr" => ["placeholder" => "Image"]]);
        echo "
           
                <button type=\"submit\" class=\"btn btn-success\">
                ";
        // line 19
        if ((isset($context["editMode"]) || array_key_exists("editMode", $context) ? $context["editMode"] : (function () { throw new Twig_Error_Runtime('Variable "editMode" does not exist.', 19, $this->source); })())) {
            // line 20
            echo "                Enregistrer
                ";
        } else {
            // line 22
            echo "                Ajouter
                ";
        }
        // line 24
        echo "                </button>
            
                ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formArticle"]) || array_key_exists("formArticle", $context) ? $context["formArticle"] : (function () { throw new Twig_Error_Runtime('Variable "formArticle" does not exist.', 26, $this->source); })()), 'form_end');
        echo "
                </article>
                </section>
            </body>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "cv/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 26,  98 => 24,  94 => 22,  90 => 20,  88 => 19,  82 => 16,  78 => 15,  74 => 14,  68 => 11,  59 => 5,  56 => 4,  47 => 3,  37 => 1,  35 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% form_theme formArticle 'bootstrap_4_layout.html.twig' %}
{% block body %}
    <head>
        <link rel=\"stylesheet\" href={{asset('/build/css/perso/stylenew.css')}}></head>
        <body>
            <section class=\"articles\">
                <article>
                    <h2>Rediger un article</h2>
                    <hr>
               {{ form_start(formArticle)}}
               
                  
                    {{ form_row(formArticle.title,{'attr':{'placeholder':\"Titre de l'article\"}}) }}
                    {{ form_row(formArticle.content,{'attr':{'placeholder':\"Contenu de l'article\"}})}}
                    {{ form_row(formArticle.image,{'attr':{'placeholder':\"Image\"}})}}
           
                <button type=\"submit\" class=\"btn btn-success\">
                {% if editMode %}
                Enregistrer
                {% else %}
                Ajouter
                {% endif %}
                </button>
            
                {{form_end(formArticle)}}
                </article>
                </section>
            </body>
        {% endblock %}
    ", "cv/new.html.twig", "/Volumes/Samsung_T5/symfony/dev/testcv/templates/cv/new.html.twig");
    }
}
