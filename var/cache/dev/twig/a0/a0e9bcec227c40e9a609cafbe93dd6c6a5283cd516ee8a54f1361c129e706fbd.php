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
        $__internal_9d7ba219d827fd7788b4218ed34a7c312716a7793417e762dd298ebe6fda268a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d7ba219d827fd7788b4218ed34a7c312716a7793417e762dd298ebe6fda268a->enter($__internal_9d7ba219d827fd7788b4218ed34a7c312716a7793417e762dd298ebe6fda268a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_652d127da2953694036989bc61b1d2f239b902617c363dea6e811464fc09f646 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_652d127da2953694036989bc61b1d2f239b902617c363dea6e811464fc09f646->enter($__internal_652d127da2953694036989bc61b1d2f239b902617c363dea6e811464fc09f646_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_9d7ba219d827fd7788b4218ed34a7c312716a7793417e762dd298ebe6fda268a->leave($__internal_9d7ba219d827fd7788b4218ed34a7c312716a7793417e762dd298ebe6fda268a_prof);

        
        $__internal_652d127da2953694036989bc61b1d2f239b902617c363dea6e811464fc09f646->leave($__internal_652d127da2953694036989bc61b1d2f239b902617c363dea6e811464fc09f646_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_c744f342e810bccdc7ecf9f803aef4d8253d1b64c78833e0c0911813d014192c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c744f342e810bccdc7ecf9f803aef4d8253d1b64c78833e0c0911813d014192c->enter($__internal_c744f342e810bccdc7ecf9f803aef4d8253d1b64c78833e0c0911813d014192c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_83fa962a84128f04d2c4acd0c8d350f5e9426dbab36f62afde70e73f07023e8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83fa962a84128f04d2c4acd0c8d350f5e9426dbab36f62afde70e73f07023e8d->enter($__internal_83fa962a84128f04d2c4acd0c8d350f5e9426dbab36f62afde70e73f07023e8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_83fa962a84128f04d2c4acd0c8d350f5e9426dbab36f62afde70e73f07023e8d->leave($__internal_83fa962a84128f04d2c4acd0c8d350f5e9426dbab36f62afde70e73f07023e8d_prof);

        
        $__internal_c744f342e810bccdc7ecf9f803aef4d8253d1b64c78833e0c0911813d014192c->leave($__internal_c744f342e810bccdc7ecf9f803aef4d8253d1b64c78833e0c0911813d014192c_prof);

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
