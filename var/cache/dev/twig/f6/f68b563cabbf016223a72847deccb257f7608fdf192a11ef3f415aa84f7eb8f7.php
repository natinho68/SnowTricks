<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_18e2f0bcc54199452edcd610b439d96e7b380c6c9bcbdc222b2ccc77b1ca3c52 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_665acd9cb42bbc5030a7705b830c861aceb28d0c4543434d1ba10906c8a378ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_665acd9cb42bbc5030a7705b830c861aceb28d0c4543434d1ba10906c8a378ee->enter($__internal_665acd9cb42bbc5030a7705b830c861aceb28d0c4543434d1ba10906c8a378ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_a37c2c58890c9c028caa03620c8c3db9a56866373e274cdff8ae4c8878ead5dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a37c2c58890c9c028caa03620c8c3db9a56866373e274cdff8ae4c8878ead5dc->enter($__internal_a37c2c58890c9c028caa03620c8c3db9a56866373e274cdff8ae4c8878ead5dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_665acd9cb42bbc5030a7705b830c861aceb28d0c4543434d1ba10906c8a378ee->leave($__internal_665acd9cb42bbc5030a7705b830c861aceb28d0c4543434d1ba10906c8a378ee_prof);

        
        $__internal_a37c2c58890c9c028caa03620c8c3db9a56866373e274cdff8ae4c8878ead5dc->leave($__internal_a37c2c58890c9c028caa03620c8c3db9a56866373e274cdff8ae4c8878ead5dc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_36ff742d82bb0603edb7c1cb595bbcec200007b0c0c63a4c8c29786b9eba5c44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36ff742d82bb0603edb7c1cb595bbcec200007b0c0c63a4c8c29786b9eba5c44->enter($__internal_36ff742d82bb0603edb7c1cb595bbcec200007b0c0c63a4c8c29786b9eba5c44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ed4ac27bd7fe46b84920472d3849356852d0aab12087dd702ac3eb5173301dfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed4ac27bd7fe46b84920472d3849356852d0aab12087dd702ac3eb5173301dfa->enter($__internal_ed4ac27bd7fe46b84920472d3849356852d0aab12087dd702ac3eb5173301dfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_ed4ac27bd7fe46b84920472d3849356852d0aab12087dd702ac3eb5173301dfa->leave($__internal_ed4ac27bd7fe46b84920472d3849356852d0aab12087dd702ac3eb5173301dfa_prof);

        
        $__internal_36ff742d82bb0603edb7c1cb595bbcec200007b0c0c63a4c8c29786b9eba5c44->leave($__internal_36ff742d82bb0603edb7c1cb595bbcec200007b0c0c63a4c8c29786b9eba5c44_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/friendsofsymfony/user-bundle/Resources/views/Group/new.html.twig");
    }
}
