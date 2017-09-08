<?php

/* AppBundle:pages:add.html.twig */
class __TwigTemplate_981810bf58637d4de4aa7a558dbcc5bf38b88ad0266170b8c680b968ed42a09d extends Twig_Template
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
        $__internal_72bd7599705bc48bcbd90a182192bedb4f3168dcc4c2ee3662cf7a35fa71c8d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72bd7599705bc48bcbd90a182192bedb4f3168dcc4c2ee3662cf7a35fa71c8d4->enter($__internal_72bd7599705bc48bcbd90a182192bedb4f3168dcc4c2ee3662cf7a35fa71c8d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:pages:add.html.twig"));

        $__internal_1b8b6ade93493b10f9f36139b8dd79ddbcf010f997dd7d166f03f3ac1384b930 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b8b6ade93493b10f9f36139b8dd79ddbcf010f997dd7d166f03f3ac1384b930->enter($__internal_1b8b6ade93493b10f9f36139b8dd79ddbcf010f997dd7d166f03f3ac1384b930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:pages:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72bd7599705bc48bcbd90a182192bedb4f3168dcc4c2ee3662cf7a35fa71c8d4->leave($__internal_72bd7599705bc48bcbd90a182192bedb4f3168dcc4c2ee3662cf7a35fa71c8d4_prof);

        
        $__internal_1b8b6ade93493b10f9f36139b8dd79ddbcf010f997dd7d166f03f3ac1384b930->leave($__internal_1b8b6ade93493b10f9f36139b8dd79ddbcf010f997dd7d166f03f3ac1384b930_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ee97035f8a1f293bbb1562cd3f8b1fed166c86d8274006ba9a3313381e4fc519 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee97035f8a1f293bbb1562cd3f8b1fed166c86d8274006ba9a3313381e4fc519->enter($__internal_ee97035f8a1f293bbb1562cd3f8b1fed166c86d8274006ba9a3313381e4fc519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e0bc6b0ef7278f033f0c8c2f7b83e917a81ea24319d502d41ee9cf3dc68464de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0bc6b0ef7278f033f0c8c2f7b83e917a81ea24319d502d41ee9cf3dc68464de->enter($__internal_e0bc6b0ef7278f033f0c8c2f7b83e917a81ea24319d502d41ee9cf3dc68464de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h3>Add a trick</h3>


    ";
        // line 7
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => "jquery.collection.html.twig"));
        // line 8
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
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
        
        $__internal_e0bc6b0ef7278f033f0c8c2f7b83e917a81ea24319d502d41ee9cf3dc68464de->leave($__internal_e0bc6b0ef7278f033f0c8c2f7b83e917a81ea24319d502d41ee9cf3dc68464de_prof);

        
        $__internal_ee97035f8a1f293bbb1562cd3f8b1fed166c86d8274006ba9a3313381e4fc519->leave($__internal_ee97035f8a1f293bbb1562cd3f8b1fed166c86d8274006ba9a3313381e4fc519_prof);

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
