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
        $__internal_de42b50f4c437e96dee48027682babfdc44db755dd6359076da759806d6dafaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de42b50f4c437e96dee48027682babfdc44db755dd6359076da759806d6dafaa->enter($__internal_de42b50f4c437e96dee48027682babfdc44db755dd6359076da759806d6dafaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_10a8c4ba0990f82b81166c9c4632ca39d5dc041750c746671d4a41e779ce892e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10a8c4ba0990f82b81166c9c4632ca39d5dc041750c746671d4a41e779ce892e->enter($__internal_10a8c4ba0990f82b81166c9c4632ca39d5dc041750c746671d4a41e779ce892e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_de42b50f4c437e96dee48027682babfdc44db755dd6359076da759806d6dafaa->leave($__internal_de42b50f4c437e96dee48027682babfdc44db755dd6359076da759806d6dafaa_prof);

        
        $__internal_10a8c4ba0990f82b81166c9c4632ca39d5dc041750c746671d4a41e779ce892e->leave($__internal_10a8c4ba0990f82b81166c9c4632ca39d5dc041750c746671d4a41e779ce892e_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_92f20e31b1ce71a26ea724b5cafdb5a4cbf6559bd01b671cadcc7de7f256651b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92f20e31b1ce71a26ea724b5cafdb5a4cbf6559bd01b671cadcc7de7f256651b->enter($__internal_92f20e31b1ce71a26ea724b5cafdb5a4cbf6559bd01b671cadcc7de7f256651b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1397f20ef79454ee81814a7e47a0932dda38396878d13857924303432f83967f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1397f20ef79454ee81814a7e47a0932dda38396878d13857924303432f83967f->enter($__internal_1397f20ef79454ee81814a7e47a0932dda38396878d13857924303432f83967f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_1397f20ef79454ee81814a7e47a0932dda38396878d13857924303432f83967f->leave($__internal_1397f20ef79454ee81814a7e47a0932dda38396878d13857924303432f83967f_prof);

        
        $__internal_92f20e31b1ce71a26ea724b5cafdb5a4cbf6559bd01b671cadcc7de7f256651b->leave($__internal_92f20e31b1ce71a26ea724b5cafdb5a4cbf6559bd01b671cadcc7de7f256651b_prof);

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
