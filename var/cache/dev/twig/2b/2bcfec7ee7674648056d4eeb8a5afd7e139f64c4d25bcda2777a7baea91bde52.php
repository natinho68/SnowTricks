<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_7f545f45d40b090af3f7723592b96f041df094c47e0e7faa3dfd0caedc111fcf extends Twig_Template
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
        $__internal_903133c699b7ebf97b289e76ed6c8a72f51ba995eb6b68d2bd496ad2971353d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_903133c699b7ebf97b289e76ed6c8a72f51ba995eb6b68d2bd496ad2971353d6->enter($__internal_903133c699b7ebf97b289e76ed6c8a72f51ba995eb6b68d2bd496ad2971353d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_9f5df7c6be73f2b39b441edb874891ffd05d29f733b8db5fd4b73b49b0c55f63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f5df7c6be73f2b39b441edb874891ffd05d29f733b8db5fd4b73b49b0c55f63->enter($__internal_9f5df7c6be73f2b39b441edb874891ffd05d29f733b8db5fd4b73b49b0c55f63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_903133c699b7ebf97b289e76ed6c8a72f51ba995eb6b68d2bd496ad2971353d6->leave($__internal_903133c699b7ebf97b289e76ed6c8a72f51ba995eb6b68d2bd496ad2971353d6_prof);

        
        $__internal_9f5df7c6be73f2b39b441edb874891ffd05d29f733b8db5fd4b73b49b0c55f63->leave($__internal_9f5df7c6be73f2b39b441edb874891ffd05d29f733b8db5fd4b73b49b0c55f63_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
