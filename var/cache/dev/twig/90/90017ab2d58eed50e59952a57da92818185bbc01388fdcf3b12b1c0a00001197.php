<?php

/* AppBundle:pages:add.html.twig */
class __TwigTemplate_f1c4b86f7cea5855cdc496b8b916debaa8102233bd16b4cf26a812e6ed744885 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:pages:add.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_80abbbb8a96426c77bfa86c2c746f8d86db8b648ab7622aeb6346cacc01b8af9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80abbbb8a96426c77bfa86c2c746f8d86db8b648ab7622aeb6346cacc01b8af9->enter($__internal_80abbbb8a96426c77bfa86c2c746f8d86db8b648ab7622aeb6346cacc01b8af9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:pages:add.html.twig"));

        $__internal_d6c131ea6bfe05f6281f03841753fe5018532dc6c0437838b6aa27b8509cf334 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6c131ea6bfe05f6281f03841753fe5018532dc6c0437838b6aa27b8509cf334->enter($__internal_d6c131ea6bfe05f6281f03841753fe5018532dc6c0437838b6aa27b8509cf334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:pages:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80abbbb8a96426c77bfa86c2c746f8d86db8b648ab7622aeb6346cacc01b8af9->leave($__internal_80abbbb8a96426c77bfa86c2c746f8d86db8b648ab7622aeb6346cacc01b8af9_prof);

        
        $__internal_d6c131ea6bfe05f6281f03841753fe5018532dc6c0437838b6aa27b8509cf334->leave($__internal_d6c131ea6bfe05f6281f03841753fe5018532dc6c0437838b6aa27b8509cf334_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d64da22c4b94f89cdb33a6879c6d1dbb246217488494974fb494d99900b02344 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d64da22c4b94f89cdb33a6879c6d1dbb246217488494974fb494d99900b02344->enter($__internal_d64da22c4b94f89cdb33a6879c6d1dbb246217488494974fb494d99900b02344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_14a01b2975283c169db2c60eb1bb6f96fc9624a3994016232a983ba54376b5e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14a01b2975283c169db2c60eb1bb6f96fc9624a3994016232a983ba54376b5e9->enter($__internal_14a01b2975283c169db2c60eb1bb6f96fc9624a3994016232a983ba54376b5e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h3>Add a trick</h3>


    ";
        // line 7
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "jquery.collection.html.twig"));
        // line 8
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

    <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.collection.js"), "html", null, true);
        echo "\"></script>

    <script type=\"text/javascript\">
        \$('.images-collection, .videos-collection').collection({
            allow_up: false,
            allow_down: false,
            add: '<a class=\"waves-effect black btn add-field\"><i class=\"material-icons\">add</i>',
            remove: '<a class=\"waves-effect black btn add-field\"><i class=\"material-icons\">delete</i>',
        });
    </script>
";
        
        $__internal_14a01b2975283c169db2c60eb1bb6f96fc9624a3994016232a983ba54376b5e9->leave($__internal_14a01b2975283c169db2c60eb1bb6f96fc9624a3994016232a983ba54376b5e9_prof);

        
        $__internal_d64da22c4b94f89cdb33a6879c6d1dbb246217488494974fb494d99900b02344->leave($__internal_d64da22c4b94f89cdb33a6879c6d1dbb246217488494974fb494d99900b02344_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:pages:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 11,  62 => 10,  56 => 8,  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
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

{% block body %}
<h3>Add a trick</h3>


    {% form_theme form 'jquery.collection.html.twig' %}
    {{ form(form) }}

    <script src=\"{{ asset('js/jquery-3.2.1.min.js') }}\"></script>
    <script src=\"{{ asset('js/jquery.collection.js') }}\"></script>

    <script type=\"text/javascript\">
        \$('.images-collection, .videos-collection').collection({
            allow_up: false,
            allow_down: false,
            add: '<a class=\"waves-effect black btn add-field\"><i class=\"material-icons\">add</i>',
            remove: '<a class=\"waves-effect black btn add-field\"><i class=\"material-icons\">delete</i>',
        });
    </script>
{% endblock %}
", "AppBundle:pages:add.html.twig", "/Applications/MAMP/htdocs/SnowTricks/src/AppBundle/Resources/views/pages/add.html.twig");
    }
}
