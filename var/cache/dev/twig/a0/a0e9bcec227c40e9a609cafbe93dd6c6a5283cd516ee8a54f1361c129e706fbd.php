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
        $__internal_fcb07467ba1c2ad3d0b5315243afb67d8d66c443abdc09cc276c2bfcad99d1d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcb07467ba1c2ad3d0b5315243afb67d8d66c443abdc09cc276c2bfcad99d1d6->enter($__internal_fcb07467ba1c2ad3d0b5315243afb67d8d66c443abdc09cc276c2bfcad99d1d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_4041f20c19d9509d9e34d692ad5c6e49cef6c2894a3315920fa8880b8dbf288a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4041f20c19d9509d9e34d692ad5c6e49cef6c2894a3315920fa8880b8dbf288a->enter($__internal_4041f20c19d9509d9e34d692ad5c6e49cef6c2894a3315920fa8880b8dbf288a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_fcb07467ba1c2ad3d0b5315243afb67d8d66c443abdc09cc276c2bfcad99d1d6->leave($__internal_fcb07467ba1c2ad3d0b5315243afb67d8d66c443abdc09cc276c2bfcad99d1d6_prof);

        
        $__internal_4041f20c19d9509d9e34d692ad5c6e49cef6c2894a3315920fa8880b8dbf288a->leave($__internal_4041f20c19d9509d9e34d692ad5c6e49cef6c2894a3315920fa8880b8dbf288a_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_673ea7bc8e45e3e0680f76af4a08f8e16e254b04689ea3d9aa4432e93cc230cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_673ea7bc8e45e3e0680f76af4a08f8e16e254b04689ea3d9aa4432e93cc230cf->enter($__internal_673ea7bc8e45e3e0680f76af4a08f8e16e254b04689ea3d9aa4432e93cc230cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4374751fc07d8c1aa250b6ac61701227840b33ba6b483adc4b279d47cace295c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4374751fc07d8c1aa250b6ac61701227840b33ba6b483adc4b279d47cace295c->enter($__internal_4374751fc07d8c1aa250b6ac61701227840b33ba6b483adc4b279d47cace295c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_4374751fc07d8c1aa250b6ac61701227840b33ba6b483adc4b279d47cace295c->leave($__internal_4374751fc07d8c1aa250b6ac61701227840b33ba6b483adc4b279d47cace295c_prof);

        
        $__internal_673ea7bc8e45e3e0680f76af4a08f8e16e254b04689ea3d9aa4432e93cc230cf->leave($__internal_673ea7bc8e45e3e0680f76af4a08f8e16e254b04689ea3d9aa4432e93cc230cf_prof);

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
