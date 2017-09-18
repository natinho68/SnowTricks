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
        $__internal_463e0eece71d23c4b93379b1ee442e573f75c167addd7531cfde9faf9c6b078b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_463e0eece71d23c4b93379b1ee442e573f75c167addd7531cfde9faf9c6b078b->enter($__internal_463e0eece71d23c4b93379b1ee442e573f75c167addd7531cfde9faf9c6b078b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_0b00db12b09f782fffecd36a92ace37e4a709729a32ea0e67116afe683727c5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b00db12b09f782fffecd36a92ace37e4a709729a32ea0e67116afe683727c5f->enter($__internal_0b00db12b09f782fffecd36a92ace37e4a709729a32ea0e67116afe683727c5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_463e0eece71d23c4b93379b1ee442e573f75c167addd7531cfde9faf9c6b078b->leave($__internal_463e0eece71d23c4b93379b1ee442e573f75c167addd7531cfde9faf9c6b078b_prof);

        
        $__internal_0b00db12b09f782fffecd36a92ace37e4a709729a32ea0e67116afe683727c5f->leave($__internal_0b00db12b09f782fffecd36a92ace37e4a709729a32ea0e67116afe683727c5f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8fc5e06b60c13979b3ff10d67d2f4fd1d1051afe1962e6014410843d4a1c2625 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fc5e06b60c13979b3ff10d67d2f4fd1d1051afe1962e6014410843d4a1c2625->enter($__internal_8fc5e06b60c13979b3ff10d67d2f4fd1d1051afe1962e6014410843d4a1c2625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_18c118bb7f0f1286910ed77b95089a0c589f3319b9c27c8174a96ba0254547ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18c118bb7f0f1286910ed77b95089a0c589f3319b9c27c8174a96ba0254547ac->enter($__internal_18c118bb7f0f1286910ed77b95089a0c589f3319b9c27c8174a96ba0254547ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_18c118bb7f0f1286910ed77b95089a0c589f3319b9c27c8174a96ba0254547ac->leave($__internal_18c118bb7f0f1286910ed77b95089a0c589f3319b9c27c8174a96ba0254547ac_prof);

        
        $__internal_8fc5e06b60c13979b3ff10d67d2f4fd1d1051afe1962e6014410843d4a1c2625->leave($__internal_8fc5e06b60c13979b3ff10d67d2f4fd1d1051afe1962e6014410843d4a1c2625_prof);

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
