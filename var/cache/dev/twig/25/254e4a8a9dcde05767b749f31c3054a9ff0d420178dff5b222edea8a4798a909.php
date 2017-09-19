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
        $__internal_ec288b8f68026ccc3487c2ec0705b8d2f8a7ec018d94c78af974b91b4757c417 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec288b8f68026ccc3487c2ec0705b8d2f8a7ec018d94c78af974b91b4757c417->enter($__internal_ec288b8f68026ccc3487c2ec0705b8d2f8a7ec018d94c78af974b91b4757c417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_6e6a2c2f1a174251ce8fac4dd3958a07c21574b8cc61496b26fa3a78303d1dc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e6a2c2f1a174251ce8fac4dd3958a07c21574b8cc61496b26fa3a78303d1dc4->enter($__internal_6e6a2c2f1a174251ce8fac4dd3958a07c21574b8cc61496b26fa3a78303d1dc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_ec288b8f68026ccc3487c2ec0705b8d2f8a7ec018d94c78af974b91b4757c417->leave($__internal_ec288b8f68026ccc3487c2ec0705b8d2f8a7ec018d94c78af974b91b4757c417_prof);

        
        $__internal_6e6a2c2f1a174251ce8fac4dd3958a07c21574b8cc61496b26fa3a78303d1dc4->leave($__internal_6e6a2c2f1a174251ce8fac4dd3958a07c21574b8cc61496b26fa3a78303d1dc4_prof);

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
