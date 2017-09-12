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
        $__internal_40446494915d96fba5a64dd1ba63890b16dcb123872494e61f55138cba20d8bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40446494915d96fba5a64dd1ba63890b16dcb123872494e61f55138cba20d8bc->enter($__internal_40446494915d96fba5a64dd1ba63890b16dcb123872494e61f55138cba20d8bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_b2e09a8c777ba6bd74604e4de5068cc15c0f682788e4a46ebdfeb811db6103c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2e09a8c777ba6bd74604e4de5068cc15c0f682788e4a46ebdfeb811db6103c6->enter($__internal_b2e09a8c777ba6bd74604e4de5068cc15c0f682788e4a46ebdfeb811db6103c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40446494915d96fba5a64dd1ba63890b16dcb123872494e61f55138cba20d8bc->leave($__internal_40446494915d96fba5a64dd1ba63890b16dcb123872494e61f55138cba20d8bc_prof);

        
        $__internal_b2e09a8c777ba6bd74604e4de5068cc15c0f682788e4a46ebdfeb811db6103c6->leave($__internal_b2e09a8c777ba6bd74604e4de5068cc15c0f682788e4a46ebdfeb811db6103c6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3a329e9fb7c6c429d1f29bdf65699a01cb34c128e73cd7921bb6ad340bf7f33a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a329e9fb7c6c429d1f29bdf65699a01cb34c128e73cd7921bb6ad340bf7f33a->enter($__internal_3a329e9fb7c6c429d1f29bdf65699a01cb34c128e73cd7921bb6ad340bf7f33a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d6f85cfb8376a894d6c9f457fa2cda1171483fa521f851f252261b6840bff893 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6f85cfb8376a894d6c9f457fa2cda1171483fa521f851f252261b6840bff893->enter($__internal_d6f85cfb8376a894d6c9f457fa2cda1171483fa521f851f252261b6840bff893_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_d6f85cfb8376a894d6c9f457fa2cda1171483fa521f851f252261b6840bff893->leave($__internal_d6f85cfb8376a894d6c9f457fa2cda1171483fa521f851f252261b6840bff893_prof);

        
        $__internal_3a329e9fb7c6c429d1f29bdf65699a01cb34c128e73cd7921bb6ad340bf7f33a->leave($__internal_3a329e9fb7c6c429d1f29bdf65699a01cb34c128e73cd7921bb6ad340bf7f33a_prof);

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
