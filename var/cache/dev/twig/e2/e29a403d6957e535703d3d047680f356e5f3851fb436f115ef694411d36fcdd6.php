<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_400140564fe7c0f57636f821a8d903e35b349bf7f883f0efa1e61139e7c8f527 extends Twig_Template
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
        $__internal_38737c79ed6f81cd1abcd91bd3b18e20e051cd6e4c3a1d35b2b18f04b2f804d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38737c79ed6f81cd1abcd91bd3b18e20e051cd6e4c3a1d35b2b18f04b2f804d3->enter($__internal_38737c79ed6f81cd1abcd91bd3b18e20e051cd6e4c3a1d35b2b18f04b2f804d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_e3119521bfa64d1b54abf07ff878723a06a78c07c3574febc6e920155236e8e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3119521bfa64d1b54abf07ff878723a06a78c07c3574febc6e920155236e8e0->enter($__internal_e3119521bfa64d1b54abf07ff878723a06a78c07c3574febc6e920155236e8e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_38737c79ed6f81cd1abcd91bd3b18e20e051cd6e4c3a1d35b2b18f04b2f804d3->leave($__internal_38737c79ed6f81cd1abcd91bd3b18e20e051cd6e4c3a1d35b2b18f04b2f804d3_prof);

        
        $__internal_e3119521bfa64d1b54abf07ff878723a06a78c07c3574febc6e920155236e8e0->leave($__internal_e3119521bfa64d1b54abf07ff878723a06a78c07c3574febc6e920155236e8e0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
