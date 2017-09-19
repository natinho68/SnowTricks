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
        $__internal_c16b3b0776b5d8b8827834eebce87642eb0ce457ea72063d3ff5dbf73be4ac35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c16b3b0776b5d8b8827834eebce87642eb0ce457ea72063d3ff5dbf73be4ac35->enter($__internal_c16b3b0776b5d8b8827834eebce87642eb0ce457ea72063d3ff5dbf73be4ac35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Profile:edit.html.twig"));

        $__internal_9749d60ac06354173b2befe534fa6b364bd061c6f95e0d59cfd1b23cd0ff001d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9749d60ac06354173b2befe534fa6b364bd061c6f95e0d59cfd1b23cd0ff001d->enter($__internal_9749d60ac06354173b2befe534fa6b364bd061c6f95e0d59cfd1b23cd0ff001d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c16b3b0776b5d8b8827834eebce87642eb0ce457ea72063d3ff5dbf73be4ac35->leave($__internal_c16b3b0776b5d8b8827834eebce87642eb0ce457ea72063d3ff5dbf73be4ac35_prof);

        
        $__internal_9749d60ac06354173b2befe534fa6b364bd061c6f95e0d59cfd1b23cd0ff001d->leave($__internal_9749d60ac06354173b2befe534fa6b364bd061c6f95e0d59cfd1b23cd0ff001d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c8f6c1774aa9371c4d4d9d275bc15cb15c90ebd47689cbe74a1bde5700b235f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8f6c1774aa9371c4d4d9d275bc15cb15c90ebd47689cbe74a1bde5700b235f4->enter($__internal_c8f6c1774aa9371c4d4d9d275bc15cb15c90ebd47689cbe74a1bde5700b235f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2f72ec7057b4ae32545dd545407f0b2baeef813f0847ce479b8bddc0e0ca2283 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f72ec7057b4ae32545dd545407f0b2baeef813f0847ce479b8bddc0e0ca2283->enter($__internal_2f72ec7057b4ae32545dd545407f0b2baeef813f0847ce479b8bddc0e0ca2283_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "UserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_2f72ec7057b4ae32545dd545407f0b2baeef813f0847ce479b8bddc0e0ca2283->leave($__internal_2f72ec7057b4ae32545dd545407f0b2baeef813f0847ce479b8bddc0e0ca2283_prof);

        
        $__internal_c8f6c1774aa9371c4d4d9d275bc15cb15c90ebd47689cbe74a1bde5700b235f4->leave($__internal_c8f6c1774aa9371c4d4d9d275bc15cb15c90ebd47689cbe74a1bde5700b235f4_prof);

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
