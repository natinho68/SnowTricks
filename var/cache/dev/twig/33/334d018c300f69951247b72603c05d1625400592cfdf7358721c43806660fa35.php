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
        $__internal_0af77070c8df7ecd104abbe37c89f9019de2df8a10922888d90d195db22566cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0af77070c8df7ecd104abbe37c89f9019de2df8a10922888d90d195db22566cb->enter($__internal_0af77070c8df7ecd104abbe37c89f9019de2df8a10922888d90d195db22566cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_92852cf33af003e70198c821e0b7e35898e44668b754885f5bdf423b011de09f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92852cf33af003e70198c821e0b7e35898e44668b754885f5bdf423b011de09f->enter($__internal_92852cf33af003e70198c821e0b7e35898e44668b754885f5bdf423b011de09f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_0af77070c8df7ecd104abbe37c89f9019de2df8a10922888d90d195db22566cb->leave($__internal_0af77070c8df7ecd104abbe37c89f9019de2df8a10922888d90d195db22566cb_prof);

        
        $__internal_92852cf33af003e70198c821e0b7e35898e44668b754885f5bdf423b011de09f->leave($__internal_92852cf33af003e70198c821e0b7e35898e44668b754885f5bdf423b011de09f_prof);

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
