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
        $__internal_141573b73c0ff0d9c58f08509ef98bec4512062c6541bcdf718fbea27f132657 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_141573b73c0ff0d9c58f08509ef98bec4512062c6541bcdf718fbea27f132657->enter($__internal_141573b73c0ff0d9c58f08509ef98bec4512062c6541bcdf718fbea27f132657_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_768c3f1b8a804bdedd04392d7811a98eb2decd6741f72606cff06a111650f060 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_768c3f1b8a804bdedd04392d7811a98eb2decd6741f72606cff06a111650f060->enter($__internal_768c3f1b8a804bdedd04392d7811a98eb2decd6741f72606cff06a111650f060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_141573b73c0ff0d9c58f08509ef98bec4512062c6541bcdf718fbea27f132657->leave($__internal_141573b73c0ff0d9c58f08509ef98bec4512062c6541bcdf718fbea27f132657_prof);

        
        $__internal_768c3f1b8a804bdedd04392d7811a98eb2decd6741f72606cff06a111650f060->leave($__internal_768c3f1b8a804bdedd04392d7811a98eb2decd6741f72606cff06a111650f060_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_151c433168b3f5291b5fa2c07df60bb647d62b8059eebb53f87de80f8b47fd8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_151c433168b3f5291b5fa2c07df60bb647d62b8059eebb53f87de80f8b47fd8a->enter($__internal_151c433168b3f5291b5fa2c07df60bb647d62b8059eebb53f87de80f8b47fd8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ff934ebd79100890738f814e7425c9efca160a4062ef384ee1dac2da2db90ab0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff934ebd79100890738f814e7425c9efca160a4062ef384ee1dac2da2db90ab0->enter($__internal_ff934ebd79100890738f814e7425c9efca160a4062ef384ee1dac2da2db90ab0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_ff934ebd79100890738f814e7425c9efca160a4062ef384ee1dac2da2db90ab0->leave($__internal_ff934ebd79100890738f814e7425c9efca160a4062ef384ee1dac2da2db90ab0_prof);

        
        $__internal_151c433168b3f5291b5fa2c07df60bb647d62b8059eebb53f87de80f8b47fd8a->leave($__internal_151c433168b3f5291b5fa2c07df60bb647d62b8059eebb53f87de80f8b47fd8a_prof);

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
