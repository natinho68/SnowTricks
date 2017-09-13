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
        $__internal_cc2945e80b918778c04c5d029ba07df646e930b6ddb59acd43c814a1960f2668 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc2945e80b918778c04c5d029ba07df646e930b6ddb59acd43c814a1960f2668->enter($__internal_cc2945e80b918778c04c5d029ba07df646e930b6ddb59acd43c814a1960f2668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Profile:edit.html.twig"));

        $__internal_4d2519d2a0b20952b2d78ae58c89e3f1f37bc3bde83e055e6751482a48396557 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d2519d2a0b20952b2d78ae58c89e3f1f37bc3bde83e055e6751482a48396557->enter($__internal_4d2519d2a0b20952b2d78ae58c89e3f1f37bc3bde83e055e6751482a48396557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc2945e80b918778c04c5d029ba07df646e930b6ddb59acd43c814a1960f2668->leave($__internal_cc2945e80b918778c04c5d029ba07df646e930b6ddb59acd43c814a1960f2668_prof);

        
        $__internal_4d2519d2a0b20952b2d78ae58c89e3f1f37bc3bde83e055e6751482a48396557->leave($__internal_4d2519d2a0b20952b2d78ae58c89e3f1f37bc3bde83e055e6751482a48396557_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a2c98ff6237ca3a32dcc874dd94fbe38e6e6cc5120d3e5e692cb30b67738490b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2c98ff6237ca3a32dcc874dd94fbe38e6e6cc5120d3e5e692cb30b67738490b->enter($__internal_a2c98ff6237ca3a32dcc874dd94fbe38e6e6cc5120d3e5e692cb30b67738490b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_860948495b028c6f0f89712be9832144a70499fcdd1a1b4e9637d21321738d18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_860948495b028c6f0f89712be9832144a70499fcdd1a1b4e9637d21321738d18->enter($__internal_860948495b028c6f0f89712be9832144a70499fcdd1a1b4e9637d21321738d18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "UserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_860948495b028c6f0f89712be9832144a70499fcdd1a1b4e9637d21321738d18->leave($__internal_860948495b028c6f0f89712be9832144a70499fcdd1a1b4e9637d21321738d18_prof);

        
        $__internal_a2c98ff6237ca3a32dcc874dd94fbe38e6e6cc5120d3e5e692cb30b67738490b->leave($__internal_a2c98ff6237ca3a32dcc874dd94fbe38e6e6cc5120d3e5e692cb30b67738490b_prof);

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
