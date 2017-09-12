<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_593eee9993242872a9e8bbcae414c864ad7cbe11279d476c58b37bce791ae173 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_47a15044841e23e33b51db1badcaf03b943face89a13355f6f1326b21c9ffbeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47a15044841e23e33b51db1badcaf03b943face89a13355f6f1326b21c9ffbeb->enter($__internal_47a15044841e23e33b51db1badcaf03b943face89a13355f6f1326b21c9ffbeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_955a1efbeb5f26ec70d04fa08cd006aa2097d46cb651153472696888f876c1b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_955a1efbeb5f26ec70d04fa08cd006aa2097d46cb651153472696888f876c1b6->enter($__internal_955a1efbeb5f26ec70d04fa08cd006aa2097d46cb651153472696888f876c1b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47a15044841e23e33b51db1badcaf03b943face89a13355f6f1326b21c9ffbeb->leave($__internal_47a15044841e23e33b51db1badcaf03b943face89a13355f6f1326b21c9ffbeb_prof);

        
        $__internal_955a1efbeb5f26ec70d04fa08cd006aa2097d46cb651153472696888f876c1b6->leave($__internal_955a1efbeb5f26ec70d04fa08cd006aa2097d46cb651153472696888f876c1b6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a23d0f9c3e766775a2f2f30c5258af2cf1029c862cd4ff17d5c6d8a4498f69c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a23d0f9c3e766775a2f2f30c5258af2cf1029c862cd4ff17d5c6d8a4498f69c3->enter($__internal_a23d0f9c3e766775a2f2f30c5258af2cf1029c862cd4ff17d5c6d8a4498f69c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_97b9aaa0a65b992370303835ae00f25b875a659f7b97279f381aa55aed9380e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97b9aaa0a65b992370303835ae00f25b875a659f7b97279f381aa55aed9380e0->enter($__internal_97b9aaa0a65b992370303835ae00f25b875a659f7b97279f381aa55aed9380e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_97b9aaa0a65b992370303835ae00f25b875a659f7b97279f381aa55aed9380e0->leave($__internal_97b9aaa0a65b992370303835ae00f25b875a659f7b97279f381aa55aed9380e0_prof);

        
        $__internal_a23d0f9c3e766775a2f2f30c5258af2cf1029c862cd4ff17d5c6d8a4498f69c3->leave($__internal_a23d0f9c3e766775a2f2f30c5258af2cf1029c862cd4ff17d5c6d8a4498f69c3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/friendsofsymfony/user-bundle/Resources/views/Group/edit.html.twig");
    }
}
