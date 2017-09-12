<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_36ea7196d08e8bba310370e57d5f781c91115dd4bff0bac696d025029cfc55eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_beb2baae191768b0f6791ad76af90340f63ffab9c51d9246394965652afbc35b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_beb2baae191768b0f6791ad76af90340f63ffab9c51d9246394965652afbc35b->enter($__internal_beb2baae191768b0f6791ad76af90340f63ffab9c51d9246394965652afbc35b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_7686511bfeccb2cd597a433ef89d388ced734f90ccfab0ccbea635f3eedcca78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7686511bfeccb2cd597a433ef89d388ced734f90ccfab0ccbea635f3eedcca78->enter($__internal_7686511bfeccb2cd597a433ef89d388ced734f90ccfab0ccbea635f3eedcca78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_beb2baae191768b0f6791ad76af90340f63ffab9c51d9246394965652afbc35b->leave($__internal_beb2baae191768b0f6791ad76af90340f63ffab9c51d9246394965652afbc35b_prof);

        
        $__internal_7686511bfeccb2cd597a433ef89d388ced734f90ccfab0ccbea635f3eedcca78->leave($__internal_7686511bfeccb2cd597a433ef89d388ced734f90ccfab0ccbea635f3eedcca78_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e22fae137127fa72a01ab9f3ff2af2a770b604047d40a19950214d9130cd47a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e22fae137127fa72a01ab9f3ff2af2a770b604047d40a19950214d9130cd47a4->enter($__internal_e22fae137127fa72a01ab9f3ff2af2a770b604047d40a19950214d9130cd47a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_762fa826af38b243649a562d84915436f4ed8c0f36cb58d226683b7d3c282326 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_762fa826af38b243649a562d84915436f4ed8c0f36cb58d226683b7d3c282326->enter($__internal_762fa826af38b243649a562d84915436f4ed8c0f36cb58d226683b7d3c282326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_762fa826af38b243649a562d84915436f4ed8c0f36cb58d226683b7d3c282326->leave($__internal_762fa826af38b243649a562d84915436f4ed8c0f36cb58d226683b7d3c282326_prof);

        
        $__internal_e22fae137127fa72a01ab9f3ff2af2a770b604047d40a19950214d9130cd47a4->leave($__internal_e22fae137127fa72a01ab9f3ff2af2a770b604047d40a19950214d9130cd47a4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
