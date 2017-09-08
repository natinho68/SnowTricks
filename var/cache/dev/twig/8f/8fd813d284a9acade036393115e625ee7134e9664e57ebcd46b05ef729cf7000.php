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
        $__internal_584b03d1a345bb25498381088d1b031fd10fdb2c589d43782dcf39f30be2845c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_584b03d1a345bb25498381088d1b031fd10fdb2c589d43782dcf39f30be2845c->enter($__internal_584b03d1a345bb25498381088d1b031fd10fdb2c589d43782dcf39f30be2845c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Profile:edit.html.twig"));

        $__internal_fb6b7fb1d476e736e1639eef9eeba452fc1de41b90ad38362fd2ae0263c06282 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb6b7fb1d476e736e1639eef9eeba452fc1de41b90ad38362fd2ae0263c06282->enter($__internal_fb6b7fb1d476e736e1639eef9eeba452fc1de41b90ad38362fd2ae0263c06282_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_584b03d1a345bb25498381088d1b031fd10fdb2c589d43782dcf39f30be2845c->leave($__internal_584b03d1a345bb25498381088d1b031fd10fdb2c589d43782dcf39f30be2845c_prof);

        
        $__internal_fb6b7fb1d476e736e1639eef9eeba452fc1de41b90ad38362fd2ae0263c06282->leave($__internal_fb6b7fb1d476e736e1639eef9eeba452fc1de41b90ad38362fd2ae0263c06282_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4be2d237cfdab8736acc91189291b3f07a9b38ebd9994c8afcdf02a47a55e0fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4be2d237cfdab8736acc91189291b3f07a9b38ebd9994c8afcdf02a47a55e0fb->enter($__internal_4be2d237cfdab8736acc91189291b3f07a9b38ebd9994c8afcdf02a47a55e0fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_06543aa16f4f138326901f3c6eb893c5d5222054be4edc6eceabb3cb18153f38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06543aa16f4f138326901f3c6eb893c5d5222054be4edc6eceabb3cb18153f38->enter($__internal_06543aa16f4f138326901f3c6eb893c5d5222054be4edc6eceabb3cb18153f38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "UserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_06543aa16f4f138326901f3c6eb893c5d5222054be4edc6eceabb3cb18153f38->leave($__internal_06543aa16f4f138326901f3c6eb893c5d5222054be4edc6eceabb3cb18153f38_prof);

        
        $__internal_4be2d237cfdab8736acc91189291b3f07a9b38ebd9994c8afcdf02a47a55e0fb->leave($__internal_4be2d237cfdab8736acc91189291b3f07a9b38ebd9994c8afcdf02a47a55e0fb_prof);

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
