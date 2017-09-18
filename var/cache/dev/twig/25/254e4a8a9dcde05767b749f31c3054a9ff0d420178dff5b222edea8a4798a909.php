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
        $__internal_63679e20d73ae34e6076a42c53dd0ed700fb11e12436c3927f8da115aef91ae6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63679e20d73ae34e6076a42c53dd0ed700fb11e12436c3927f8da115aef91ae6->enter($__internal_63679e20d73ae34e6076a42c53dd0ed700fb11e12436c3927f8da115aef91ae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_d87293fea068343850cb673ed8b502bb3cdfc43637c9f7e72428c379dd222202 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d87293fea068343850cb673ed8b502bb3cdfc43637c9f7e72428c379dd222202->enter($__internal_d87293fea068343850cb673ed8b502bb3cdfc43637c9f7e72428c379dd222202_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_63679e20d73ae34e6076a42c53dd0ed700fb11e12436c3927f8da115aef91ae6->leave($__internal_63679e20d73ae34e6076a42c53dd0ed700fb11e12436c3927f8da115aef91ae6_prof);

        
        $__internal_d87293fea068343850cb673ed8b502bb3cdfc43637c9f7e72428c379dd222202->leave($__internal_d87293fea068343850cb673ed8b502bb3cdfc43637c9f7e72428c379dd222202_prof);

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
