<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_290ce38760978f0db598839df3e1d384f0eae48af636154b5c7d15e0899b8d83 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_e7ce6c3d6082f3d90cb90498021c965bfb44e9911f8d935bc5bed5435c45eec6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7ce6c3d6082f3d90cb90498021c965bfb44e9911f8d935bc5bed5435c45eec6->enter($__internal_e7ce6c3d6082f3d90cb90498021c965bfb44e9911f8d935bc5bed5435c45eec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_972344ab16b5a5c535fe49cbc4c63a0db92f14a9d9cca8f755f4781c6bf475ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_972344ab16b5a5c535fe49cbc4c63a0db92f14a9d9cca8f755f4781c6bf475ee->enter($__internal_972344ab16b5a5c535fe49cbc4c63a0db92f14a9d9cca8f755f4781c6bf475ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e7ce6c3d6082f3d90cb90498021c965bfb44e9911f8d935bc5bed5435c45eec6->leave($__internal_e7ce6c3d6082f3d90cb90498021c965bfb44e9911f8d935bc5bed5435c45eec6_prof);

        
        $__internal_972344ab16b5a5c535fe49cbc4c63a0db92f14a9d9cca8f755f4781c6bf475ee->leave($__internal_972344ab16b5a5c535fe49cbc4c63a0db92f14a9d9cca8f755f4781c6bf475ee_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_61874f91b9563fca4439ed023c43a16b7383e509d81a302ae10d5a075de08795 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61874f91b9563fca4439ed023c43a16b7383e509d81a302ae10d5a075de08795->enter($__internal_61874f91b9563fca4439ed023c43a16b7383e509d81a302ae10d5a075de08795_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c562573988e55550e1fd3338f751080ecf1023f6e08f4cf67856ab366879f014 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c562573988e55550e1fd3338f751080ecf1023f6e08f4cf67856ab366879f014->enter($__internal_c562573988e55550e1fd3338f751080ecf1023f6e08f4cf67856ab366879f014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_c562573988e55550e1fd3338f751080ecf1023f6e08f4cf67856ab366879f014->leave($__internal_c562573988e55550e1fd3338f751080ecf1023f6e08f4cf67856ab366879f014_prof);

        
        $__internal_61874f91b9563fca4439ed023c43a16b7383e509d81a302ae10d5a075de08795->leave($__internal_61874f91b9563fca4439ed023c43a16b7383e509d81a302ae10d5a075de08795_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}
