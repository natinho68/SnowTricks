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
        $__internal_cf87facee2d0eaf2df3fe521a4416625126c0171fce20a0093132c8ef44109a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf87facee2d0eaf2df3fe521a4416625126c0171fce20a0093132c8ef44109a2->enter($__internal_cf87facee2d0eaf2df3fe521a4416625126c0171fce20a0093132c8ef44109a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_296a1d7dc146599632b6c97e0facddb810e01eae68e2f16acb465ec764484322 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_296a1d7dc146599632b6c97e0facddb810e01eae68e2f16acb465ec764484322->enter($__internal_296a1d7dc146599632b6c97e0facddb810e01eae68e2f16acb465ec764484322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf87facee2d0eaf2df3fe521a4416625126c0171fce20a0093132c8ef44109a2->leave($__internal_cf87facee2d0eaf2df3fe521a4416625126c0171fce20a0093132c8ef44109a2_prof);

        
        $__internal_296a1d7dc146599632b6c97e0facddb810e01eae68e2f16acb465ec764484322->leave($__internal_296a1d7dc146599632b6c97e0facddb810e01eae68e2f16acb465ec764484322_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8e8a60de34e815f8a44791bc9ddaf87325974d58f8331e518c95b5300ffad6cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e8a60de34e815f8a44791bc9ddaf87325974d58f8331e518c95b5300ffad6cd->enter($__internal_8e8a60de34e815f8a44791bc9ddaf87325974d58f8331e518c95b5300ffad6cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8780a53d698a9128e714e96608181812d1254700242d3e802c81569e9cf78d2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8780a53d698a9128e714e96608181812d1254700242d3e802c81569e9cf78d2f->enter($__internal_8780a53d698a9128e714e96608181812d1254700242d3e802c81569e9cf78d2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_8780a53d698a9128e714e96608181812d1254700242d3e802c81569e9cf78d2f->leave($__internal_8780a53d698a9128e714e96608181812d1254700242d3e802c81569e9cf78d2f_prof);

        
        $__internal_8e8a60de34e815f8a44791bc9ddaf87325974d58f8331e518c95b5300ffad6cd->leave($__internal_8e8a60de34e815f8a44791bc9ddaf87325974d58f8331e518c95b5300ffad6cd_prof);

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
