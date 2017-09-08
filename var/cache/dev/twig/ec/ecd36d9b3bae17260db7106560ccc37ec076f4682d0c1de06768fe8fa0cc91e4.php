<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_f3fd23ee3a93923105d06eb8a26d0f231737de2cee01273c6f6da3c90dba87f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_27d1c898f56b392fa423812bd67ed004897b20a205dbf96882e176c1285328d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27d1c898f56b392fa423812bd67ed004897b20a205dbf96882e176c1285328d6->enter($__internal_27d1c898f56b392fa423812bd67ed004897b20a205dbf96882e176c1285328d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $__internal_500e353d8c2fca26f534cf1efaa6dd9731f83096c94df2b4e3559cb717d898ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_500e353d8c2fca26f534cf1efaa6dd9731f83096c94df2b4e3559cb717d898ad->enter($__internal_500e353d8c2fca26f534cf1efaa6dd9731f83096c94df2b4e3559cb717d898ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27d1c898f56b392fa423812bd67ed004897b20a205dbf96882e176c1285328d6->leave($__internal_27d1c898f56b392fa423812bd67ed004897b20a205dbf96882e176c1285328d6_prof);

        
        $__internal_500e353d8c2fca26f534cf1efaa6dd9731f83096c94df2b4e3559cb717d898ad->leave($__internal_500e353d8c2fca26f534cf1efaa6dd9731f83096c94df2b4e3559cb717d898ad_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f3e5f5f6b0d93f47088366b34ca2fa6c1f8c29a4b88c163bf07ae4c3ca170857 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3e5f5f6b0d93f47088366b34ca2fa6c1f8c29a4b88c163bf07ae4c3ca170857->enter($__internal_f3e5f5f6b0d93f47088366b34ca2fa6c1f8c29a4b88c163bf07ae4c3ca170857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ee9bab8b7950a0dcdd335f5f598ea0e5b6266ab118f002045748f81a769fe206 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee9bab8b7950a0dcdd335f5f598ea0e5b6266ab118f002045748f81a769fe206->enter($__internal_ee9bab8b7950a0dcdd335f5f598ea0e5b6266ab118f002045748f81a769fe206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_ee9bab8b7950a0dcdd335f5f598ea0e5b6266ab118f002045748f81a769fe206->leave($__internal_ee9bab8b7950a0dcdd335f5f598ea0e5b6266ab118f002045748f81a769fe206_prof);

        
        $__internal_f3e5f5f6b0d93f47088366b34ca2fa6c1f8c29a4b88c163bf07ae4c3ca170857->leave($__internal_f3e5f5f6b0d93f47088366b34ca2fa6c1f8c29a4b88c163bf07ae4c3ca170857_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/edit.html.twig", "/Applications/MAMP/htdocs/SnowTricks/src/UserBundle/Resources/views/Profile/edit.html.twig");
    }
}
