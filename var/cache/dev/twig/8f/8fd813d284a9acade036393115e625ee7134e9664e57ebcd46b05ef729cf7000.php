<?php

/* UserBundle:Profile:edit.html.twig */
class __TwigTemplate_dc265bafac2c1f716a9f87c703e742e29d919751276d3bc9ca2c1ef648d59478 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "UserBundle:Profile:edit.html.twig", 1);
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
        $__internal_ee2d0779ed6cef908b355790a1ca87d357efa18fa7aee04d993ad85e2baab146 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee2d0779ed6cef908b355790a1ca87d357efa18fa7aee04d993ad85e2baab146->enter($__internal_ee2d0779ed6cef908b355790a1ca87d357efa18fa7aee04d993ad85e2baab146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Profile:edit.html.twig"));

        $__internal_b0151fa782f9878d5be694518049f30f33bf8186a07c4066e5ed4709ea6a0819 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0151fa782f9878d5be694518049f30f33bf8186a07c4066e5ed4709ea6a0819->enter($__internal_b0151fa782f9878d5be694518049f30f33bf8186a07c4066e5ed4709ea6a0819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee2d0779ed6cef908b355790a1ca87d357efa18fa7aee04d993ad85e2baab146->leave($__internal_ee2d0779ed6cef908b355790a1ca87d357efa18fa7aee04d993ad85e2baab146_prof);

        
        $__internal_b0151fa782f9878d5be694518049f30f33bf8186a07c4066e5ed4709ea6a0819->leave($__internal_b0151fa782f9878d5be694518049f30f33bf8186a07c4066e5ed4709ea6a0819_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e32cc7f5d1f30502ddcd16b6da45ee81c1f96b4e0788c17a226ca7856b0dfd38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e32cc7f5d1f30502ddcd16b6da45ee81c1f96b4e0788c17a226ca7856b0dfd38->enter($__internal_e32cc7f5d1f30502ddcd16b6da45ee81c1f96b4e0788c17a226ca7856b0dfd38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_be46af060d8175aaf355cb9b64d1ebf9a99aa9df7df85fb746306e1f1d928de2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be46af060d8175aaf355cb9b64d1ebf9a99aa9df7df85fb746306e1f1d928de2->enter($__internal_be46af060d8175aaf355cb9b64d1ebf9a99aa9df7df85fb746306e1f1d928de2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "UserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_be46af060d8175aaf355cb9b64d1ebf9a99aa9df7df85fb746306e1f1d928de2->leave($__internal_be46af060d8175aaf355cb9b64d1ebf9a99aa9df7df85fb746306e1f1d928de2_prof);

        
        $__internal_e32cc7f5d1f30502ddcd16b6da45ee81c1f96b4e0788c17a226ca7856b0dfd38->leave($__internal_e32cc7f5d1f30502ddcd16b6da45ee81c1f96b4e0788c17a226ca7856b0dfd38_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Profile:edit.html.twig";
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
", "UserBundle:Profile:edit.html.twig", "/Applications/MAMP/htdocs/SnowTricks/src/UserBundle/Resources/views/Profile/edit.html.twig");
    }
}
