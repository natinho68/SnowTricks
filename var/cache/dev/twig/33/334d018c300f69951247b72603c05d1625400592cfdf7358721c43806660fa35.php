<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_556f64efd5b13a6c9d370fe4cc9226876bc241dd3522814a3525e7463f56f309 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8df3fb9abf2bde568d2d8411c35ec621a165a61af2d05583eed4d1c010c9f4d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8df3fb9abf2bde568d2d8411c35ec621a165a61af2d05583eed4d1c010c9f4d2->enter($__internal_8df3fb9abf2bde568d2d8411c35ec621a165a61af2d05583eed4d1c010c9f4d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_ab5e46022caed1d7b4e018a5acfd51dd3a5f095cf4f08945389f947ea41a815c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab5e46022caed1d7b4e018a5acfd51dd3a5f095cf4f08945389f947ea41a815c->enter($__internal_ab5e46022caed1d7b4e018a5acfd51dd3a5f095cf4f08945389f947ea41a815c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_8df3fb9abf2bde568d2d8411c35ec621a165a61af2d05583eed4d1c010c9f4d2->leave($__internal_8df3fb9abf2bde568d2d8411c35ec621a165a61af2d05583eed4d1c010c9f4d2_prof);

        
        $__internal_ab5e46022caed1d7b4e018a5acfd51dd3a5f095cf4f08945389f947ea41a815c->leave($__internal_ab5e46022caed1d7b4e018a5acfd51dd3a5f095cf4f08945389f947ea41a815c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
