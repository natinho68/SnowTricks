<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_d5f2eaef80767f375a47816037a9fad7e42eedff83d6802fa7deb1b76fd187f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_844fbc34c8db21664707304ffcf80049a55ceca08b9729f5981cba809e3dad13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_844fbc34c8db21664707304ffcf80049a55ceca08b9729f5981cba809e3dad13->enter($__internal_844fbc34c8db21664707304ffcf80049a55ceca08b9729f5981cba809e3dad13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_6453c3a368ee78af8be2e61d1882f8a8a586b5f6a414ebd566f16e1dc8e494d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6453c3a368ee78af8be2e61d1882f8a8a586b5f6a414ebd566f16e1dc8e494d6->enter($__internal_6453c3a368ee78af8be2e61d1882f8a8a586b5f6a414ebd566f16e1dc8e494d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_844fbc34c8db21664707304ffcf80049a55ceca08b9729f5981cba809e3dad13->leave($__internal_844fbc34c8db21664707304ffcf80049a55ceca08b9729f5981cba809e3dad13_prof);

        
        $__internal_6453c3a368ee78af8be2e61d1882f8a8a586b5f6a414ebd566f16e1dc8e494d6->leave($__internal_6453c3a368ee78af8be2e61d1882f8a8a586b5f6a414ebd566f16e1dc8e494d6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_376f7e3038727f942e14ad2ee76c5c21bb5b7bb0d6fdc1685d9c0e89de461170 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_376f7e3038727f942e14ad2ee76c5c21bb5b7bb0d6fdc1685d9c0e89de461170->enter($__internal_376f7e3038727f942e14ad2ee76c5c21bb5b7bb0d6fdc1685d9c0e89de461170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_71d6d558b3863987c568a074f188d124f1adf8e906aff442f03674faec9124ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71d6d558b3863987c568a074f188d124f1adf8e906aff442f03674faec9124ad->enter($__internal_71d6d558b3863987c568a074f188d124f1adf8e906aff442f03674faec9124ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_71d6d558b3863987c568a074f188d124f1adf8e906aff442f03674faec9124ad->leave($__internal_71d6d558b3863987c568a074f188d124f1adf8e906aff442f03674faec9124ad_prof);

        
        $__internal_376f7e3038727f942e14ad2ee76c5c21bb5b7bb0d6fdc1685d9c0e89de461170->leave($__internal_376f7e3038727f942e14ad2ee76c5c21bb5b7bb0d6fdc1685d9c0e89de461170_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show.html.twig");
    }
}
