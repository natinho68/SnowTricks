<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_e0af928166cb9fef112792e9d86f25507714feb76f468929df08c918305c15ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5689ab0fe5c062bced91c40f73958c25475098437d23c24790ce94348ddd3fde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5689ab0fe5c062bced91c40f73958c25475098437d23c24790ce94348ddd3fde->enter($__internal_5689ab0fe5c062bced91c40f73958c25475098437d23c24790ce94348ddd3fde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_d587ecfb4da8608431e9f40e83b8592cab1e3874b746a0f7b4509d1d5d8dcc6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d587ecfb4da8608431e9f40e83b8592cab1e3874b746a0f7b4509d1d5d8dcc6e->enter($__internal_d587ecfb4da8608431e9f40e83b8592cab1e3874b746a0f7b4509d1d5d8dcc6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_5689ab0fe5c062bced91c40f73958c25475098437d23c24790ce94348ddd3fde->leave($__internal_5689ab0fe5c062bced91c40f73958c25475098437d23c24790ce94348ddd3fde_prof);

        
        $__internal_d587ecfb4da8608431e9f40e83b8592cab1e3874b746a0f7b4509d1d5d8dcc6e->leave($__internal_d587ecfb4da8608431e9f40e83b8592cab1e3874b746a0f7b4509d1d5d8dcc6e_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_b3fc19fa98f6d86dcd86b46748ca27877fcc3a02446419bc07248441e4e9167e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3fc19fa98f6d86dcd86b46748ca27877fcc3a02446419bc07248441e4e9167e->enter($__internal_b3fc19fa98f6d86dcd86b46748ca27877fcc3a02446419bc07248441e4e9167e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1671e286a19cc825ace5633c97019bfe3e3e7c3833890907ea19245421e52552 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1671e286a19cc825ace5633c97019bfe3e3e7c3833890907ea19245421e52552->enter($__internal_1671e286a19cc825ace5633c97019bfe3e3e7c3833890907ea19245421e52552_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_1671e286a19cc825ace5633c97019bfe3e3e7c3833890907ea19245421e52552->leave($__internal_1671e286a19cc825ace5633c97019bfe3e3e7c3833890907ea19245421e52552_prof);

        
        $__internal_b3fc19fa98f6d86dcd86b46748ca27877fcc3a02446419bc07248441e4e9167e->leave($__internal_b3fc19fa98f6d86dcd86b46748ca27877fcc3a02446419bc07248441e4e9167e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
