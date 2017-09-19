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
        $__internal_fe5c365f344603875f08746a9bbcd0f752cf8a00c13cb965dd63dfaf20d7f16c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe5c365f344603875f08746a9bbcd0f752cf8a00c13cb965dd63dfaf20d7f16c->enter($__internal_fe5c365f344603875f08746a9bbcd0f752cf8a00c13cb965dd63dfaf20d7f16c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_1922b5d629d9a1c02a58197168e4b1217bb70ff955aa00e462f4ec35359d4849 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1922b5d629d9a1c02a58197168e4b1217bb70ff955aa00e462f4ec35359d4849->enter($__internal_1922b5d629d9a1c02a58197168e4b1217bb70ff955aa00e462f4ec35359d4849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe5c365f344603875f08746a9bbcd0f752cf8a00c13cb965dd63dfaf20d7f16c->leave($__internal_fe5c365f344603875f08746a9bbcd0f752cf8a00c13cb965dd63dfaf20d7f16c_prof);

        
        $__internal_1922b5d629d9a1c02a58197168e4b1217bb70ff955aa00e462f4ec35359d4849->leave($__internal_1922b5d629d9a1c02a58197168e4b1217bb70ff955aa00e462f4ec35359d4849_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e8b89ee0ecf7d84650efb3e9143e981f643604920cc51808fbcef76bf4f967ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8b89ee0ecf7d84650efb3e9143e981f643604920cc51808fbcef76bf4f967ff->enter($__internal_e8b89ee0ecf7d84650efb3e9143e981f643604920cc51808fbcef76bf4f967ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2352a53815bc7f5c0336450431803c91cc8eb968e8d3224426876890fb150548 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2352a53815bc7f5c0336450431803c91cc8eb968e8d3224426876890fb150548->enter($__internal_2352a53815bc7f5c0336450431803c91cc8eb968e8d3224426876890fb150548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_2352a53815bc7f5c0336450431803c91cc8eb968e8d3224426876890fb150548->leave($__internal_2352a53815bc7f5c0336450431803c91cc8eb968e8d3224426876890fb150548_prof);

        
        $__internal_e8b89ee0ecf7d84650efb3e9143e981f643604920cc51808fbcef76bf4f967ff->leave($__internal_e8b89ee0ecf7d84650efb3e9143e981f643604920cc51808fbcef76bf4f967ff_prof);

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
