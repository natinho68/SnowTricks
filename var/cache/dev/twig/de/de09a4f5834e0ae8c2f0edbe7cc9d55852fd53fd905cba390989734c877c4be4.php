<?php

/* AppBundle:pages:edit.html.twig */
class __TwigTemplate_51af17a8b21f15deec7f1e03d657b953af8203e48c7ba2fbe820c9706d3a877e extends Twig_Template
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
        $__internal_7c65b0f921d84f710d0e3843a25135b8b950a1195ad5e2570dd73563b1d8be74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c65b0f921d84f710d0e3843a25135b8b950a1195ad5e2570dd73563b1d8be74->enter($__internal_7c65b0f921d84f710d0e3843a25135b8b950a1195ad5e2570dd73563b1d8be74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:pages:edit.html.twig"));

        $__internal_78c6e3f1071cbd7de8c5a86d024f6a752951ccea43102e1f73514887ffcf56e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78c6e3f1071cbd7de8c5a86d024f6a752951ccea43102e1f73514887ffcf56e5->enter($__internal_78c6e3f1071cbd7de8c5a86d024f6a752951ccea43102e1f73514887ffcf56e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:pages:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c65b0f921d84f710d0e3843a25135b8b950a1195ad5e2570dd73563b1d8be74->leave($__internal_7c65b0f921d84f710d0e3843a25135b8b950a1195ad5e2570dd73563b1d8be74_prof);

        
        $__internal_78c6e3f1071cbd7de8c5a86d024f6a752951ccea43102e1f73514887ffcf56e5->leave($__internal_78c6e3f1071cbd7de8c5a86d024f6a752951ccea43102e1f73514887ffcf56e5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_16b9c5809e0eac7adfad94a782fd979534df9c510b340b7ecd65c7a29241c3c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16b9c5809e0eac7adfad94a782fd979534df9c510b340b7ecd65c7a29241c3c6->enter($__internal_16b9c5809e0eac7adfad94a782fd979534df9c510b340b7ecd65c7a29241c3c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_79330ec88c79e3883bcb4c7c5baa4ee61d440166a0e0c2a2dd6db944387be0a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79330ec88c79e3883bcb4c7c5baa4ee61d440166a0e0c2a2dd6db944387be0a5->enter($__internal_79330ec88c79e3883bcb4c7c5baa4ee61d440166a0e0c2a2dd6db944387be0a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Update a trick - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_79330ec88c79e3883bcb4c7c5baa4ee61d440166a0e0c2a2dd6db944387be0a5->leave($__internal_79330ec88c79e3883bcb4c7c5baa4ee61d440166a0e0c2a2dd6db944387be0a5_prof);

        
        $__internal_16b9c5809e0eac7adfad94a782fd979534df9c510b340b7ecd65c7a29241c3c6->leave($__internal_16b9c5809e0eac7adfad94a782fd979534df9c510b340b7ecd65c7a29241c3c6_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_a8409189f20e3c6b8bac0ed432cc761ddc0a4b4e54bed54c3c0fcf6d0cb6dd3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8409189f20e3c6b8bac0ed432cc761ddc0a4b4e54bed54c3c0fcf6d0cb6dd3e->enter($__internal_a8409189f20e3c6b8bac0ed432cc761ddc0a4b4e54bed54c3c0fcf6d0cb6dd3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5bce5c5ba02836e05a9c2b39f88d5fa33aa09634cdac54091372daa70e0aa894 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bce5c5ba02836e05a9c2b39f88d5fa33aa09634cdac54091372daa70e0aa894->enter($__internal_5bce5c5ba02836e05a9c2b39f88d5fa33aa09634cdac54091372daa70e0aa894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <h3>Update a trick</h3>

        ";
        // line 10
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => "jquery.collection.html.twig"));
        // line 11
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "



    <p>
        <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("view", array("slug" => $this->getAttribute(($context["trick"] ?? $this->getContext($context, "trick")), "slug", array()))), "html", null, true);
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
        
        $__internal_5bce5c5ba02836e05a9c2b39f88d5fa33aa09634cdac54091372daa70e0aa894->leave($__internal_5bce5c5ba02836e05a9c2b39f88d5fa33aa09634cdac54091372daa70e0aa894_prof);

        
        $__internal_a8409189f20e3c6b8bac0ed432cc761ddc0a4b4e54bed54c3c0fcf6d0cb6dd3e->leave($__internal_a8409189f20e3c6b8bac0ed432cc761ddc0a4b4e54bed54c3c0fcf6d0cb6dd3e_prof);

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
