<?php

/* AppBundle:pages:edit.html.twig */
class __TwigTemplate_d4040176066ffc42bb801c4f029feb2bb0e094e6fd06e7e0febaf4beccbe2950 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:pages:edit.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b7e9a8a93179c957313ac30e01f1ba96bb1a3bb0b4305b4ac1ec8aa71cb4e0f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7e9a8a93179c957313ac30e01f1ba96bb1a3bb0b4305b4ac1ec8aa71cb4e0f1->enter($__internal_b7e9a8a93179c957313ac30e01f1ba96bb1a3bb0b4305b4ac1ec8aa71cb4e0f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:pages:edit.html.twig"));

        $__internal_1bc8bdde18546a61be60aa06d21e12938e5819a557461d009bfcad99889774cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bc8bdde18546a61be60aa06d21e12938e5819a557461d009bfcad99889774cc->enter($__internal_1bc8bdde18546a61be60aa06d21e12938e5819a557461d009bfcad99889774cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:pages:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7e9a8a93179c957313ac30e01f1ba96bb1a3bb0b4305b4ac1ec8aa71cb4e0f1->leave($__internal_b7e9a8a93179c957313ac30e01f1ba96bb1a3bb0b4305b4ac1ec8aa71cb4e0f1_prof);

        
        $__internal_1bc8bdde18546a61be60aa06d21e12938e5819a557461d009bfcad99889774cc->leave($__internal_1bc8bdde18546a61be60aa06d21e12938e5819a557461d009bfcad99889774cc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_307dbd221eb0ede5b09d6e437b586eace61fb154d59d7264324309e3613a36c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_307dbd221eb0ede5b09d6e437b586eace61fb154d59d7264324309e3613a36c4->enter($__internal_307dbd221eb0ede5b09d6e437b586eace61fb154d59d7264324309e3613a36c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a6a2db9790a3cb8a4dc72936529fa1810578b47f14241cef24bbad4ac25ff5d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6a2db9790a3cb8a4dc72936529fa1810578b47f14241cef24bbad4ac25ff5d9->enter($__internal_a6a2db9790a3cb8a4dc72936529fa1810578b47f14241cef24bbad4ac25ff5d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Update a trick - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_a6a2db9790a3cb8a4dc72936529fa1810578b47f14241cef24bbad4ac25ff5d9->leave($__internal_a6a2db9790a3cb8a4dc72936529fa1810578b47f14241cef24bbad4ac25ff5d9_prof);

        
        $__internal_307dbd221eb0ede5b09d6e437b586eace61fb154d59d7264324309e3613a36c4->leave($__internal_307dbd221eb0ede5b09d6e437b586eace61fb154d59d7264324309e3613a36c4_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_37edc4ced3efaecd56a34ad81c5b79a5b3e0337de2726434a9c6c0092dee583a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37edc4ced3efaecd56a34ad81c5b79a5b3e0337de2726434a9c6c0092dee583a->enter($__internal_37edc4ced3efaecd56a34ad81c5b79a5b3e0337de2726434a9c6c0092dee583a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d17b8dc3869144f807c49164f1228b3eaa793902e6c6c57d6f327d9249dfbb5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d17b8dc3869144f807c49164f1228b3eaa793902e6c6c57d6f327d9249dfbb5e->enter($__internal_d17b8dc3869144f807c49164f1228b3eaa793902e6c6c57d6f327d9249dfbb5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <h3>Update a trick</h3>

        ";
        // line 10
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "jquery.collection.html.twig"));
        // line 11
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "



    <p>
        <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("view", array("slug" => $this->getAttribute((isset($context["trick"]) ? $context["trick"] : $this->getContext($context, "trick")), "slug", array()))), "html", null, true);
        echo "\" class=\"waves-effect black btn\"><i class=\"material-icons left\">arrow_back</i>
            Back to the trick
        </a>
    </p>

    <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.collection.js"), "html", null, true);
        echo "\"></script>

    <script type=\"text/javascript\">
        \$('.images-collection, .videos-collection').collection({
            allow_up: false,
            allow_down: false,
            add: '<a href=\"#\" class=\"waves-effect black add-field btn\"><i class=\"material-icons\">add</i></span></a>',
            remove: '<a href=\"#\" class=\"waves-effect black add-field btn\"><i class=\"material-icons\">delete</i><span class=\"glyphicon glyphicon-trash\"></span></a>'
        });
    </script>
";
        
        $__internal_d17b8dc3869144f807c49164f1228b3eaa793902e6c6c57d6f327d9249dfbb5e->leave($__internal_d17b8dc3869144f807c49164f1228b3eaa793902e6c6c57d6f327d9249dfbb5e_prof);

        
        $__internal_37edc4ced3efaecd56a34ad81c5b79a5b3e0337de2726434a9c6c0092dee583a->leave($__internal_37edc4ced3efaecd56a34ad81c5b79a5b3e0337de2726434a9c6c0092dee583a_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:pages:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 22,  95 => 21,  87 => 16,  78 => 11,  76 => 10,  72 => 8,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"AppBundle::layout.html.twig\" %}

{% block title %}
    Update a trick - {{ parent() }}
{% endblock %}

{% block body %}
    <h3>Update a trick</h3>

        {% form_theme form 'jquery.collection.html.twig' %}
        {{ form(form) }}



    <p>
        <a href=\"{{ path('view', {'slug': trick.slug}) }}\" class=\"waves-effect black btn\"><i class=\"material-icons left\">arrow_back</i>
            Back to the trick
        </a>
    </p>

    <script src=\"{{ asset('js/jquery-3.2.1.min.js') }}\"></script>
    <script src=\"{{ asset('js/jquery.collection.js') }}\"></script>

    <script type=\"text/javascript\">
        \$('.images-collection, .videos-collection').collection({
            allow_up: false,
            allow_down: false,
            add: '<a href=\"#\" class=\"waves-effect black add-field btn\"><i class=\"material-icons\">add</i></span></a>',
            remove: '<a href=\"#\" class=\"waves-effect black add-field btn\"><i class=\"material-icons\">delete</i><span class=\"glyphicon glyphicon-trash\"></span></a>'
        });
    </script>
{% endblock %}

", "AppBundle:pages:edit.html.twig", "/Applications/MAMP/htdocs/SnowTricks/src/AppBundle/Resources/views/pages/edit.html.twig");
    }
}
