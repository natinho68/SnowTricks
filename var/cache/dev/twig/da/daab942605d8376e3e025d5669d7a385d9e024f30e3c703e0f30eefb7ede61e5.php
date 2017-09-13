<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_aa2bd50c6cba0a8439cc67d22b7a49edd8ddcfe04aeeb076ade1dcf46bc46f0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_8c0e3400d87d3228321832275ac0367fed42ad39f15df48a0b6e96469f6596d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c0e3400d87d3228321832275ac0367fed42ad39f15df48a0b6e96469f6596d3->enter($__internal_8c0e3400d87d3228321832275ac0367fed42ad39f15df48a0b6e96469f6596d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_86206217eebb1bbd166a90ca990f4d66ec3dca8ae425f3b8884ff91d188d2cb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86206217eebb1bbd166a90ca990f4d66ec3dca8ae425f3b8884ff91d188d2cb2->enter($__internal_86206217eebb1bbd166a90ca990f4d66ec3dca8ae425f3b8884ff91d188d2cb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c0e3400d87d3228321832275ac0367fed42ad39f15df48a0b6e96469f6596d3->leave($__internal_8c0e3400d87d3228321832275ac0367fed42ad39f15df48a0b6e96469f6596d3_prof);

        
        $__internal_86206217eebb1bbd166a90ca990f4d66ec3dca8ae425f3b8884ff91d188d2cb2->leave($__internal_86206217eebb1bbd166a90ca990f4d66ec3dca8ae425f3b8884ff91d188d2cb2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_07a533b4c31ea9a17e67b7d11cffcea04223a10b7311edcaeeadaae027e7969e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07a533b4c31ea9a17e67b7d11cffcea04223a10b7311edcaeeadaae027e7969e->enter($__internal_07a533b4c31ea9a17e67b7d11cffcea04223a10b7311edcaeeadaae027e7969e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_448253af6ef36f2fc75f43dc053f6175b023793f1c014b41a1b8bd7e1904b9a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_448253af6ef36f2fc75f43dc053f6175b023793f1c014b41a1b8bd7e1904b9a0->enter($__internal_448253af6ef36f2fc75f43dc053f6175b023793f1c014b41a1b8bd7e1904b9a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_448253af6ef36f2fc75f43dc053f6175b023793f1c014b41a1b8bd7e1904b9a0->leave($__internal_448253af6ef36f2fc75f43dc053f6175b023793f1c014b41a1b8bd7e1904b9a0_prof);

        
        $__internal_07a533b4c31ea9a17e67b7d11cffcea04223a10b7311edcaeeadaae027e7969e->leave($__internal_07a533b4c31ea9a17e67b7d11cffcea04223a10b7311edcaeeadaae027e7969e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show.html.twig");
    }
}
