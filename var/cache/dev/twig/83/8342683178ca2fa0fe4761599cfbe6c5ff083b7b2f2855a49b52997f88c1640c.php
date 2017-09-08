<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_cd2162b286b425d51d5c42f4cd691cacba6943476b4b5a3f0ee6eecf0ee59060 extends Twig_Template
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
        $__internal_f5627cf6fb02e7f0a499e19900e5c6e0980113f2c09f784ba3c9d1b4f0454605 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5627cf6fb02e7f0a499e19900e5c6e0980113f2c09f784ba3c9d1b4f0454605->enter($__internal_f5627cf6fb02e7f0a499e19900e5c6e0980113f2c09f784ba3c9d1b4f0454605_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_616ea0e1a53ab4e28ae9282099b9f0460c8e9a8148c6769fbe6d69b08d7fceab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_616ea0e1a53ab4e28ae9282099b9f0460c8e9a8148c6769fbe6d69b08d7fceab->enter($__internal_616ea0e1a53ab4e28ae9282099b9f0460c8e9a8148c6769fbe6d69b08d7fceab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_f5627cf6fb02e7f0a499e19900e5c6e0980113f2c09f784ba3c9d1b4f0454605->leave($__internal_f5627cf6fb02e7f0a499e19900e5c6e0980113f2c09f784ba3c9d1b4f0454605_prof);

        
        $__internal_616ea0e1a53ab4e28ae9282099b9f0460c8e9a8148c6769fbe6d69b08d7fceab->leave($__internal_616ea0e1a53ab4e28ae9282099b9f0460c8e9a8148c6769fbe6d69b08d7fceab_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
