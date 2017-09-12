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
        $__internal_40e6cd83030114e40b2f0542f69db2fb9607cd7019ea0dd23c84158fa4c6d8b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40e6cd83030114e40b2f0542f69db2fb9607cd7019ea0dd23c84158fa4c6d8b6->enter($__internal_40e6cd83030114e40b2f0542f69db2fb9607cd7019ea0dd23c84158fa4c6d8b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Profile:edit.html.twig"));

        $__internal_f859ba0ebc88cc21850fde8dbcdc50744380e263a0449c2102b23be370aa0065 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f859ba0ebc88cc21850fde8dbcdc50744380e263a0449c2102b23be370aa0065->enter($__internal_f859ba0ebc88cc21850fde8dbcdc50744380e263a0449c2102b23be370aa0065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40e6cd83030114e40b2f0542f69db2fb9607cd7019ea0dd23c84158fa4c6d8b6->leave($__internal_40e6cd83030114e40b2f0542f69db2fb9607cd7019ea0dd23c84158fa4c6d8b6_prof);

        
        $__internal_f859ba0ebc88cc21850fde8dbcdc50744380e263a0449c2102b23be370aa0065->leave($__internal_f859ba0ebc88cc21850fde8dbcdc50744380e263a0449c2102b23be370aa0065_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5bbdbdb3eaf1354cc13daa8b6a02958387e92a7457bb4d7573d1ce65cf2f8f0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bbdbdb3eaf1354cc13daa8b6a02958387e92a7457bb4d7573d1ce65cf2f8f0a->enter($__internal_5bbdbdb3eaf1354cc13daa8b6a02958387e92a7457bb4d7573d1ce65cf2f8f0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7f697ac985ea62aede3373cdc4f058e1c7c6c120a956f72a5ee68c823a7ccef9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f697ac985ea62aede3373cdc4f058e1c7c6c120a956f72a5ee68c823a7ccef9->enter($__internal_7f697ac985ea62aede3373cdc4f058e1c7c6c120a956f72a5ee68c823a7ccef9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "UserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_7f697ac985ea62aede3373cdc4f058e1c7c6c120a956f72a5ee68c823a7ccef9->leave($__internal_7f697ac985ea62aede3373cdc4f058e1c7c6c120a956f72a5ee68c823a7ccef9_prof);

        
        $__internal_5bbdbdb3eaf1354cc13daa8b6a02958387e92a7457bb4d7573d1ce65cf2f8f0a->leave($__internal_5bbdbdb3eaf1354cc13daa8b6a02958387e92a7457bb4d7573d1ce65cf2f8f0a_prof);

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
