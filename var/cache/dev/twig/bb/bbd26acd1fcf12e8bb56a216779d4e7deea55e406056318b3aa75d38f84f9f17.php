<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_eca13deb91d3d966ee2705303cb96f8790f416f49afe737ccf913c7de0cf2408 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_3d073e831906c638d460a016a752bd539c75bb9e6f36bcfa32a2e71ed0ad341f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d073e831906c638d460a016a752bd539c75bb9e6f36bcfa32a2e71ed0ad341f->enter($__internal_3d073e831906c638d460a016a752bd539c75bb9e6f36bcfa32a2e71ed0ad341f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_2dd6d4518afcde7c3321515b904f93fb423c841eb1b63c0e10aaa3d68b28cf69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dd6d4518afcde7c3321515b904f93fb423c841eb1b63c0e10aaa3d68b28cf69->enter($__internal_2dd6d4518afcde7c3321515b904f93fb423c841eb1b63c0e10aaa3d68b28cf69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d073e831906c638d460a016a752bd539c75bb9e6f36bcfa32a2e71ed0ad341f->leave($__internal_3d073e831906c638d460a016a752bd539c75bb9e6f36bcfa32a2e71ed0ad341f_prof);

        
        $__internal_2dd6d4518afcde7c3321515b904f93fb423c841eb1b63c0e10aaa3d68b28cf69->leave($__internal_2dd6d4518afcde7c3321515b904f93fb423c841eb1b63c0e10aaa3d68b28cf69_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2575ee11b83a243b4c0199baf83d6b6af4023be57e54a3df5743e4bd2cab17e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2575ee11b83a243b4c0199baf83d6b6af4023be57e54a3df5743e4bd2cab17e4->enter($__internal_2575ee11b83a243b4c0199baf83d6b6af4023be57e54a3df5743e4bd2cab17e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e3c5b285e71ba9b76fcd04f687efc93e7ccefe8fbe5e0fde7972f8330e94bc7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3c5b285e71ba9b76fcd04f687efc93e7ccefe8fbe5e0fde7972f8330e94bc7e->enter($__internal_e3c5b285e71ba9b76fcd04f687efc93e7ccefe8fbe5e0fde7972f8330e94bc7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_e3c5b285e71ba9b76fcd04f687efc93e7ccefe8fbe5e0fde7972f8330e94bc7e->leave($__internal_e3c5b285e71ba9b76fcd04f687efc93e7ccefe8fbe5e0fde7972f8330e94bc7e_prof);

        
        $__internal_2575ee11b83a243b4c0199baf83d6b6af4023be57e54a3df5743e4bd2cab17e4->leave($__internal_2575ee11b83a243b4c0199baf83d6b6af4023be57e54a3df5743e4bd2cab17e4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
