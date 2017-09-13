<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_7c5806aad47eca9dc1d3785e3783897f2a127d8ada33f997d509eaad15b00e73 extends Twig_Template
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
        $__internal_74afa0a355e943753bb80440b0a0d23d6898eb2b4431d09f233df97eb3868ace = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74afa0a355e943753bb80440b0a0d23d6898eb2b4431d09f233df97eb3868ace->enter($__internal_74afa0a355e943753bb80440b0a0d23d6898eb2b4431d09f233df97eb3868ace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_9f8e8f7bdeb37b4a61eb85d917620ad510dbfe69c18c1bdc5b87fbcae92b979d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f8e8f7bdeb37b4a61eb85d917620ad510dbfe69c18c1bdc5b87fbcae92b979d->enter($__internal_9f8e8f7bdeb37b4a61eb85d917620ad510dbfe69c18c1bdc5b87fbcae92b979d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_74afa0a355e943753bb80440b0a0d23d6898eb2b4431d09f233df97eb3868ace->leave($__internal_74afa0a355e943753bb80440b0a0d23d6898eb2b4431d09f233df97eb3868ace_prof);

        
        $__internal_9f8e8f7bdeb37b4a61eb85d917620ad510dbfe69c18c1bdc5b87fbcae92b979d->leave($__internal_9f8e8f7bdeb37b4a61eb85d917620ad510dbfe69c18c1bdc5b87fbcae92b979d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
