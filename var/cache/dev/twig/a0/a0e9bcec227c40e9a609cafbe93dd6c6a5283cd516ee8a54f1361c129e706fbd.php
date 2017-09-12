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
        $__internal_110b45152ea311b25f29e5edf8c2d385a8db204eadfd605fa4cd3405e3162482 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_110b45152ea311b25f29e5edf8c2d385a8db204eadfd605fa4cd3405e3162482->enter($__internal_110b45152ea311b25f29e5edf8c2d385a8db204eadfd605fa4cd3405e3162482_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_50e2a32230f51815f93db3711174d3091432504c10de0ade500823d64d1d290f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50e2a32230f51815f93db3711174d3091432504c10de0ade500823d64d1d290f->enter($__internal_50e2a32230f51815f93db3711174d3091432504c10de0ade500823d64d1d290f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_110b45152ea311b25f29e5edf8c2d385a8db204eadfd605fa4cd3405e3162482->leave($__internal_110b45152ea311b25f29e5edf8c2d385a8db204eadfd605fa4cd3405e3162482_prof);

        
        $__internal_50e2a32230f51815f93db3711174d3091432504c10de0ade500823d64d1d290f->leave($__internal_50e2a32230f51815f93db3711174d3091432504c10de0ade500823d64d1d290f_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_85760621debf57d96237bbd502b123b69e5a4a93731141a34f992640ddea9368 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85760621debf57d96237bbd502b123b69e5a4a93731141a34f992640ddea9368->enter($__internal_85760621debf57d96237bbd502b123b69e5a4a93731141a34f992640ddea9368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_75d16f2fcb0db25320967881ce68d0e130558a67957237da881607748d64a4d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75d16f2fcb0db25320967881ce68d0e130558a67957237da881607748d64a4d1->enter($__internal_75d16f2fcb0db25320967881ce68d0e130558a67957237da881607748d64a4d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_75d16f2fcb0db25320967881ce68d0e130558a67957237da881607748d64a4d1->leave($__internal_75d16f2fcb0db25320967881ce68d0e130558a67957237da881607748d64a4d1_prof);

        
        $__internal_85760621debf57d96237bbd502b123b69e5a4a93731141a34f992640ddea9368->leave($__internal_85760621debf57d96237bbd502b123b69e5a4a93731141a34f992640ddea9368_prof);

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
