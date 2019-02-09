<?php

/* cv/article.html.twig */
class __TwigTemplate_7720775f7e4014a809dfcf37c1f9afc571c6aa67d7ae0285e15a83e4dc738ed7 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "cv/article.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cv/article.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cv/article.html.twig"));

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
        echo "    <link rel=\"stylesheet\" href=";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/build/css/perso/stylearticle.css"), "html", null, true);
        echo ">
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new Twig_Error_Runtime('Variable "articles" does not exist.', 4, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 5
            echo "            <section>
                <div class=\"articles\">
                    <hr>
                        <h2>
                            ";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", []), "html", null, true);
            echo "</h2>
                        <hr>
                            <div class=\"metadata\">
                                Ecrit le
                                ";
            // line 13
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "createdAt", []), "d/m/Y"), "html", null, true);
            echo "
                                à ";
            // line 14
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "createdAt", []), "H:iph"), "html", null, true);
            echo " dans la catégorie Politique
                                <hr position=\"float:left;\" style=\"width:50%;\"></div>
                                <div class=\"content\">
                                    <img src=\"";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "image", []), "html", null, true);
            echo "\" alt=\"\">
                                        <img alt=\"\" height=\"145px\" src=\"/build/img/ayatollah.png\" width=\"190px\">
                                            ";
            // line 19
            echo twig_get_attribute($this->env, $this->source, $context["article"], "content", []);
            echo "
                                            <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [])]), "html", null, true);
            echo "\" class=\"btn-primary\">
                                                Lire la suite</a>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "cv/article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 27,  94 => 20,  90 => 19,  85 => 17,  79 => 14,  75 => 13,  68 => 9,  62 => 5,  58 => 4,  53 => 3,  44 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}
    <link rel=\"stylesheet\" href={{asset('/build/css/perso/stylearticle.css')}}>
        {% for article in articles %}
            <section>
                <div class=\"articles\">
                    <hr>
                        <h2>
                            {{ article.title }}</h2>
                        <hr>
                            <div class=\"metadata\">
                                Ecrit le
                                {{ article.createdAt | date('d/m/Y')}}
                                à {{ article.createdAt | date('H:iph')}} dans la catégorie Politique
                                <hr position=\"float:left;\" style=\"width:50%;\"></div>
                                <div class=\"content\">
                                    <img src=\"{{ article.image }}\" alt=\"\">
                                        <img alt=\"\" height=\"145px\" src=\"/build/img/ayatollah.png\" width=\"190px\">
                                            {{article.content | raw }}
                                            <a href=\"{{path('show',{'id':article.id})}}\" class=\"btn-primary\">
                                                Lire la suite</a>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        {% endfor %}
                    {% endblock %}
                ", "cv/article.html.twig", "/Users/stephaneaugustin/Documents/symfony/dev/test2/testcv/templates/cv/article.html.twig");
    }
}
