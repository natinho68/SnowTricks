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
        $__internal_d940163f1942e4217cf0632c5899d05d63c83004a4d09c6710bd5028144bd894 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d940163f1942e4217cf0632c5899d05d63c83004a4d09c6710bd5028144bd894->enter($__internal_d940163f1942e4217cf0632c5899d05d63c83004a4d09c6710bd5028144bd894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:pages:add.html.twig"));

        $__internal_f2c25c31011eeda2d8ef58fe31cabf288a9654496442190efaabb0bd56fb49cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2c25c31011eeda2d8ef58fe31cabf288a9654496442190efaabb0bd56fb49cd->enter($__internal_f2c25c31011eeda2d8ef58fe31cabf288a9654496442190efaabb0bd56fb49cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:pages:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d940163f1942e4217cf0632c5899d05d63c83004a4d09c6710bd5028144bd894->leave($__internal_d940163f1942e4217cf0632c5899d05d63c83004a4d09c6710bd5028144bd894_prof);

        
        $__internal_f2c25c31011eeda2d8ef58fe31cabf288a9654496442190efaabb0bd56fb49cd->leave($__internal_f2c25c31011eeda2d8ef58fe31cabf288a9654496442190efaabb0bd56fb49cd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_25ea2ebd94335d2ec01feb3a7cc2d2944f4a6c092d17eedee359ae1746c30cb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25ea2ebd94335d2ec01feb3a7cc2d2944f4a6c092d17eedee359ae1746c30cb2->enter($__internal_25ea2ebd94335d2ec01feb3a7cc2d2944f4a6c092d17eedee359ae1746c30cb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_db3c3992fd454acd09390c432f49bae1ed20a180594fbc448dbe5fd064609f8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db3c3992fd454acd09390c432f49bae1ed20a180594fbc448dbe5fd064609f8e->enter($__internal_db3c3992fd454acd09390c432f49bae1ed20a180594fbc448dbe5fd064609f8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_db3c3992fd454acd09390c432f49bae1ed20a180594fbc448dbe5fd064609f8e->leave($__internal_db3c3992fd454acd09390c432f49bae1ed20a180594fbc448dbe5fd064609f8e_prof);

        
        $__internal_25ea2ebd94335d2ec01feb3a7cc2d2944f4a6c092d17eedee359ae1746c30cb2->leave($__internal_25ea2ebd94335d2ec01feb3a7cc2d2944f4a6c092d17eedee359ae1746c30cb2_prof);

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
