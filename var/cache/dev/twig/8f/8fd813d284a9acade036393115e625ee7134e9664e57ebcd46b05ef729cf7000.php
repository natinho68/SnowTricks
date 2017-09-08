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
        $__internal_c6768e4c73b5db673779cbd9ccd39174c12abee2690a247dba35750e0ce6a37e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6768e4c73b5db673779cbd9ccd39174c12abee2690a247dba35750e0ce6a37e->enter($__internal_c6768e4c73b5db673779cbd9ccd39174c12abee2690a247dba35750e0ce6a37e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Profile:edit.html.twig"));

        $__internal_4c90b04d7947516cd8684da35b5076eb5d9fb6b3e58bb27357ae29408c8ada6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c90b04d7947516cd8684da35b5076eb5d9fb6b3e58bb27357ae29408c8ada6b->enter($__internal_4c90b04d7947516cd8684da35b5076eb5d9fb6b3e58bb27357ae29408c8ada6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6768e4c73b5db673779cbd9ccd39174c12abee2690a247dba35750e0ce6a37e->leave($__internal_c6768e4c73b5db673779cbd9ccd39174c12abee2690a247dba35750e0ce6a37e_prof);

        
        $__internal_4c90b04d7947516cd8684da35b5076eb5d9fb6b3e58bb27357ae29408c8ada6b->leave($__internal_4c90b04d7947516cd8684da35b5076eb5d9fb6b3e58bb27357ae29408c8ada6b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b82bf188792ea0a4a5a8d9ae56ca11f0d9c8be0f6c4c5653f1276e64e2b8417b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b82bf188792ea0a4a5a8d9ae56ca11f0d9c8be0f6c4c5653f1276e64e2b8417b->enter($__internal_b82bf188792ea0a4a5a8d9ae56ca11f0d9c8be0f6c4c5653f1276e64e2b8417b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_cf2eba510e216d6d42d7cc6c7d254e3195cccb3092a8be5c57e5b29bbac5e0ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf2eba510e216d6d42d7cc6c7d254e3195cccb3092a8be5c57e5b29bbac5e0ad->enter($__internal_cf2eba510e216d6d42d7cc6c7d254e3195cccb3092a8be5c57e5b29bbac5e0ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "UserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_cf2eba510e216d6d42d7cc6c7d254e3195cccb3092a8be5c57e5b29bbac5e0ad->leave($__internal_cf2eba510e216d6d42d7cc6c7d254e3195cccb3092a8be5c57e5b29bbac5e0ad_prof);

        
        $__internal_b82bf188792ea0a4a5a8d9ae56ca11f0d9c8be0f6c4c5653f1276e64e2b8417b->leave($__internal_b82bf188792ea0a4a5a8d9ae56ca11f0d9c8be0f6c4c5653f1276e64e2b8417b_prof);

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
