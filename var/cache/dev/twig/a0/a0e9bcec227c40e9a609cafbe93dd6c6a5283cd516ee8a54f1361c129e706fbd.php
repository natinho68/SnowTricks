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
        $__internal_c5c3fc80f799cc6bd1b51693f053ac05b680f448a811ce998251171aef6d63c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5c3fc80f799cc6bd1b51693f053ac05b680f448a811ce998251171aef6d63c5->enter($__internal_c5c3fc80f799cc6bd1b51693f053ac05b680f448a811ce998251171aef6d63c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_959d4257bf0fbfa8fc9e798e1d58d1557f08e3ab9a54831a2481e656f09b9cbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_959d4257bf0fbfa8fc9e798e1d58d1557f08e3ab9a54831a2481e656f09b9cbf->enter($__internal_959d4257bf0fbfa8fc9e798e1d58d1557f08e3ab9a54831a2481e656f09b9cbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_c5c3fc80f799cc6bd1b51693f053ac05b680f448a811ce998251171aef6d63c5->leave($__internal_c5c3fc80f799cc6bd1b51693f053ac05b680f448a811ce998251171aef6d63c5_prof);

        
        $__internal_959d4257bf0fbfa8fc9e798e1d58d1557f08e3ab9a54831a2481e656f09b9cbf->leave($__internal_959d4257bf0fbfa8fc9e798e1d58d1557f08e3ab9a54831a2481e656f09b9cbf_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_241b2b04872b8eeca756f06dc5243499d8d0337f9ddbd1f003b32e5f89334d49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_241b2b04872b8eeca756f06dc5243499d8d0337f9ddbd1f003b32e5f89334d49->enter($__internal_241b2b04872b8eeca756f06dc5243499d8d0337f9ddbd1f003b32e5f89334d49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_230d889c6a393d468fa292c6a7da10ae524f693cf644b8eb68d35c0cd2cd8f3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_230d889c6a393d468fa292c6a7da10ae524f693cf644b8eb68d35c0cd2cd8f3f->enter($__internal_230d889c6a393d468fa292c6a7da10ae524f693cf644b8eb68d35c0cd2cd8f3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_230d889c6a393d468fa292c6a7da10ae524f693cf644b8eb68d35c0cd2cd8f3f->leave($__internal_230d889c6a393d468fa292c6a7da10ae524f693cf644b8eb68d35c0cd2cd8f3f_prof);

        
        $__internal_241b2b04872b8eeca756f06dc5243499d8d0337f9ddbd1f003b32e5f89334d49->leave($__internal_241b2b04872b8eeca756f06dc5243499d8d0337f9ddbd1f003b32e5f89334d49_prof);

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
