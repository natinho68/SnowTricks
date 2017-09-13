<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_92b2c4b4e50f874b8f58b3408bf890cbfb8607d01265f4d38109cc354eb216d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_acecd43cf79c5b558a1b234aef8c008229cfc74a0bfa32ec4279b440739f0dba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acecd43cf79c5b558a1b234aef8c008229cfc74a0bfa32ec4279b440739f0dba->enter($__internal_acecd43cf79c5b558a1b234aef8c008229cfc74a0bfa32ec4279b440739f0dba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_b4a3cde5376c686cb4c714a8c4f0920e070a5a63d8029f70d40201a0e37bc6cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4a3cde5376c686cb4c714a8c4f0920e070a5a63d8029f70d40201a0e37bc6cd->enter($__internal_b4a3cde5376c686cb4c714a8c4f0920e070a5a63d8029f70d40201a0e37bc6cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_acecd43cf79c5b558a1b234aef8c008229cfc74a0bfa32ec4279b440739f0dba->leave($__internal_acecd43cf79c5b558a1b234aef8c008229cfc74a0bfa32ec4279b440739f0dba_prof);

        
        $__internal_b4a3cde5376c686cb4c714a8c4f0920e070a5a63d8029f70d40201a0e37bc6cd->leave($__internal_b4a3cde5376c686cb4c714a8c4f0920e070a5a63d8029f70d40201a0e37bc6cd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0c3906127c17706557a9c3612147d708a4db8b39dc1bf88aaecab5dfd94ca68c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c3906127c17706557a9c3612147d708a4db8b39dc1bf88aaecab5dfd94ca68c->enter($__internal_0c3906127c17706557a9c3612147d708a4db8b39dc1bf88aaecab5dfd94ca68c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4c409a43f0db0bc2d99bbf20222f310ccaf8af1b37841fc3449c0ad77397590f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c409a43f0db0bc2d99bbf20222f310ccaf8af1b37841fc3449c0ad77397590f->enter($__internal_4c409a43f0db0bc2d99bbf20222f310ccaf8af1b37841fc3449c0ad77397590f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_4c409a43f0db0bc2d99bbf20222f310ccaf8af1b37841fc3449c0ad77397590f->leave($__internal_4c409a43f0db0bc2d99bbf20222f310ccaf8af1b37841fc3449c0ad77397590f_prof);

        
        $__internal_0c3906127c17706557a9c3612147d708a4db8b39dc1bf88aaecab5dfd94ca68c->leave($__internal_0c3906127c17706557a9c3612147d708a4db8b39dc1bf88aaecab5dfd94ca68c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list.html.twig");
    }
}
