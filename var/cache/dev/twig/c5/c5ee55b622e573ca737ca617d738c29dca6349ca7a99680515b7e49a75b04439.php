<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_fac4bda99c1c84e70b593071f7541a85fec033aa67a013a5231a0f75ae7c3c4d extends Twig_Template
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
        $__internal_4f7810c11d6fe7dc86e69acd1ec57fc0b002f8caf4b81493c23fcb91a7f5d25c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f7810c11d6fe7dc86e69acd1ec57fc0b002f8caf4b81493c23fcb91a7f5d25c->enter($__internal_4f7810c11d6fe7dc86e69acd1ec57fc0b002f8caf4b81493c23fcb91a7f5d25c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_1b881458707c47775ffefaa920e1b29f55c254df7fc202d43eccd262ee98bc99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b881458707c47775ffefaa920e1b29f55c254df7fc202d43eccd262ee98bc99->enter($__internal_1b881458707c47775ffefaa920e1b29f55c254df7fc202d43eccd262ee98bc99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_4f7810c11d6fe7dc86e69acd1ec57fc0b002f8caf4b81493c23fcb91a7f5d25c->leave($__internal_4f7810c11d6fe7dc86e69acd1ec57fc0b002f8caf4b81493c23fcb91a7f5d25c_prof);

        
        $__internal_1b881458707c47775ffefaa920e1b29f55c254df7fc202d43eccd262ee98bc99->leave($__internal_1b881458707c47775ffefaa920e1b29f55c254df7fc202d43eccd262ee98bc99_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
