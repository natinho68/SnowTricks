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
        $__internal_9fa295dda0ad5eba8fd6a0b7d876637d89f2e820fb7bf9700617ebd17c6b9ef0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fa295dda0ad5eba8fd6a0b7d876637d89f2e820fb7bf9700617ebd17c6b9ef0->enter($__internal_9fa295dda0ad5eba8fd6a0b7d876637d89f2e820fb7bf9700617ebd17c6b9ef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Profile:edit.html.twig"));

        $__internal_460b04736a1092da7209f8c528a7215e8fd099e201d3f9153c157bdab7c3f712 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_460b04736a1092da7209f8c528a7215e8fd099e201d3f9153c157bdab7c3f712->enter($__internal_460b04736a1092da7209f8c528a7215e8fd099e201d3f9153c157bdab7c3f712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9fa295dda0ad5eba8fd6a0b7d876637d89f2e820fb7bf9700617ebd17c6b9ef0->leave($__internal_9fa295dda0ad5eba8fd6a0b7d876637d89f2e820fb7bf9700617ebd17c6b9ef0_prof);

        
        $__internal_460b04736a1092da7209f8c528a7215e8fd099e201d3f9153c157bdab7c3f712->leave($__internal_460b04736a1092da7209f8c528a7215e8fd099e201d3f9153c157bdab7c3f712_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ff1dce14186e73930e8e8fff8dc0d02930481689e45b8620fd2fae384f798d6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff1dce14186e73930e8e8fff8dc0d02930481689e45b8620fd2fae384f798d6c->enter($__internal_ff1dce14186e73930e8e8fff8dc0d02930481689e45b8620fd2fae384f798d6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_39c6f6b60f3c8e353ded33af6a8707f34d6b46f8b08ff442d81cbb7f5a89c703 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39c6f6b60f3c8e353ded33af6a8707f34d6b46f8b08ff442d81cbb7f5a89c703->enter($__internal_39c6f6b60f3c8e353ded33af6a8707f34d6b46f8b08ff442d81cbb7f5a89c703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "UserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_39c6f6b60f3c8e353ded33af6a8707f34d6b46f8b08ff442d81cbb7f5a89c703->leave($__internal_39c6f6b60f3c8e353ded33af6a8707f34d6b46f8b08ff442d81cbb7f5a89c703_prof);

        
        $__internal_ff1dce14186e73930e8e8fff8dc0d02930481689e45b8620fd2fae384f798d6c->leave($__internal_ff1dce14186e73930e8e8fff8dc0d02930481689e45b8620fd2fae384f798d6c_prof);

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
