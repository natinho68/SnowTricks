<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_d7477e85ff500e2feb3384e4772495977957dfde0ac620b81004c083288b09e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_4b5c5095f52c5e7e82e9b118ffb79042e64b8c9ea4d2912845c16cd14057bf15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b5c5095f52c5e7e82e9b118ffb79042e64b8c9ea4d2912845c16cd14057bf15->enter($__internal_4b5c5095f52c5e7e82e9b118ffb79042e64b8c9ea4d2912845c16cd14057bf15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_c3191c67273a077a2e4824b5c02655a9b64dfb86479ac2886a60efdf59274893 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3191c67273a077a2e4824b5c02655a9b64dfb86479ac2886a60efdf59274893->enter($__internal_c3191c67273a077a2e4824b5c02655a9b64dfb86479ac2886a60efdf59274893_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b5c5095f52c5e7e82e9b118ffb79042e64b8c9ea4d2912845c16cd14057bf15->leave($__internal_4b5c5095f52c5e7e82e9b118ffb79042e64b8c9ea4d2912845c16cd14057bf15_prof);

        
        $__internal_c3191c67273a077a2e4824b5c02655a9b64dfb86479ac2886a60efdf59274893->leave($__internal_c3191c67273a077a2e4824b5c02655a9b64dfb86479ac2886a60efdf59274893_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_db3ae0cbbe5cde0e42c3e25e65406eb2d84a0fc873935dc65aa698f788a657d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db3ae0cbbe5cde0e42c3e25e65406eb2d84a0fc873935dc65aa698f788a657d7->enter($__internal_db3ae0cbbe5cde0e42c3e25e65406eb2d84a0fc873935dc65aa698f788a657d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b0cd8e225c17b273200401cdb4d8db2db68cd66b83dbfa39018e27b62e79cc66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0cd8e225c17b273200401cdb4d8db2db68cd66b83dbfa39018e27b62e79cc66->enter($__internal_b0cd8e225c17b273200401cdb4d8db2db68cd66b83dbfa39018e27b62e79cc66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_b0cd8e225c17b273200401cdb4d8db2db68cd66b83dbfa39018e27b62e79cc66->leave($__internal_b0cd8e225c17b273200401cdb4d8db2db68cd66b83dbfa39018e27b62e79cc66_prof);

        
        $__internal_db3ae0cbbe5cde0e42c3e25e65406eb2d84a0fc873935dc65aa698f788a657d7->leave($__internal_db3ae0cbbe5cde0e42c3e25e65406eb2d84a0fc873935dc65aa698f788a657d7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
