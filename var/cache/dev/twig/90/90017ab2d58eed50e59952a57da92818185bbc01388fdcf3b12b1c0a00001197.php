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
        $__internal_758ede8c387ed01f55098bef2b4b14170125d51f7a6370f0adae0baa42a361fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_758ede8c387ed01f55098bef2b4b14170125d51f7a6370f0adae0baa42a361fa->enter($__internal_758ede8c387ed01f55098bef2b4b14170125d51f7a6370f0adae0baa42a361fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:pages:add.html.twig"));

        $__internal_42fb727388c945c17641af7d73c940fd73915424153ef5e5851de62a40b8501a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42fb727388c945c17641af7d73c940fd73915424153ef5e5851de62a40b8501a->enter($__internal_42fb727388c945c17641af7d73c940fd73915424153ef5e5851de62a40b8501a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:pages:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_758ede8c387ed01f55098bef2b4b14170125d51f7a6370f0adae0baa42a361fa->leave($__internal_758ede8c387ed01f55098bef2b4b14170125d51f7a6370f0adae0baa42a361fa_prof);

        
        $__internal_42fb727388c945c17641af7d73c940fd73915424153ef5e5851de62a40b8501a->leave($__internal_42fb727388c945c17641af7d73c940fd73915424153ef5e5851de62a40b8501a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e7ba1b74e03d67c1c3814efbd753cdb0b2fb0c9d2c5bae770974f2f12eb31647 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7ba1b74e03d67c1c3814efbd753cdb0b2fb0c9d2c5bae770974f2f12eb31647->enter($__internal_e7ba1b74e03d67c1c3814efbd753cdb0b2fb0c9d2c5bae770974f2f12eb31647_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6703adb021efd3f263d13b8b94e823f07e0f8e97fef710c4d18f017b1a9a2c82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6703adb021efd3f263d13b8b94e823f07e0f8e97fef710c4d18f017b1a9a2c82->enter($__internal_6703adb021efd3f263d13b8b94e823f07e0f8e97fef710c4d18f017b1a9a2c82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6703adb021efd3f263d13b8b94e823f07e0f8e97fef710c4d18f017b1a9a2c82->leave($__internal_6703adb021efd3f263d13b8b94e823f07e0f8e97fef710c4d18f017b1a9a2c82_prof);

        
        $__internal_e7ba1b74e03d67c1c3814efbd753cdb0b2fb0c9d2c5bae770974f2f12eb31647->leave($__internal_e7ba1b74e03d67c1c3814efbd753cdb0b2fb0c9d2c5bae770974f2f12eb31647_prof);

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
