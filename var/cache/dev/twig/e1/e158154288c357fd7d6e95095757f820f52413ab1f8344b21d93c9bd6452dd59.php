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
        $__internal_c55c61a13bc090c4ba816554f5b5b8b269cd9dfd3d9c284034983baa8c4ef0eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c55c61a13bc090c4ba816554f5b5b8b269cd9dfd3d9c284034983baa8c4ef0eb->enter($__internal_c55c61a13bc090c4ba816554f5b5b8b269cd9dfd3d9c284034983baa8c4ef0eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_3774abfc3a48ee7f4c8d9abfc1d07c75666d13c8c06ac26a23b29560552672cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3774abfc3a48ee7f4c8d9abfc1d07c75666d13c8c06ac26a23b29560552672cf->enter($__internal_3774abfc3a48ee7f4c8d9abfc1d07c75666d13c8c06ac26a23b29560552672cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c55c61a13bc090c4ba816554f5b5b8b269cd9dfd3d9c284034983baa8c4ef0eb->leave($__internal_c55c61a13bc090c4ba816554f5b5b8b269cd9dfd3d9c284034983baa8c4ef0eb_prof);

        
        $__internal_3774abfc3a48ee7f4c8d9abfc1d07c75666d13c8c06ac26a23b29560552672cf->leave($__internal_3774abfc3a48ee7f4c8d9abfc1d07c75666d13c8c06ac26a23b29560552672cf_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fbb6f28ff4f7bbbbd4dfa14e6fb5a1ecbd9a8b3b596888eebbdc8f2fa1458318 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbb6f28ff4f7bbbbd4dfa14e6fb5a1ecbd9a8b3b596888eebbdc8f2fa1458318->enter($__internal_fbb6f28ff4f7bbbbd4dfa14e6fb5a1ecbd9a8b3b596888eebbdc8f2fa1458318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b9c65dcc2576867805170ae22f5c2034e10e74f69c246003b587a7f642cf17c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9c65dcc2576867805170ae22f5c2034e10e74f69c246003b587a7f642cf17c1->enter($__internal_b9c65dcc2576867805170ae22f5c2034e10e74f69c246003b587a7f642cf17c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_b9c65dcc2576867805170ae22f5c2034e10e74f69c246003b587a7f642cf17c1->leave($__internal_b9c65dcc2576867805170ae22f5c2034e10e74f69c246003b587a7f642cf17c1_prof);

        
        $__internal_fbb6f28ff4f7bbbbd4dfa14e6fb5a1ecbd9a8b3b596888eebbdc8f2fa1458318->leave($__internal_fbb6f28ff4f7bbbbd4dfa14e6fb5a1ecbd9a8b3b596888eebbdc8f2fa1458318_prof);

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
