<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_805e1563398889dbe24b0fdef5e28f1db8bd879cd5e95df9476c2639a6204dfc extends Twig_Template
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
        $__internal_ecbcbd8eb2826b4dc09453f773eb81a64bc59c269d3c43d2f94e65b1fa2f6530 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecbcbd8eb2826b4dc09453f773eb81a64bc59c269d3c43d2f94e65b1fa2f6530->enter($__internal_ecbcbd8eb2826b4dc09453f773eb81a64bc59c269d3c43d2f94e65b1fa2f6530_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_145a028982a4126b9e646f5b00fe3f4950c47856d64d679a9e39fcebc31cc7c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_145a028982a4126b9e646f5b00fe3f4950c47856d64d679a9e39fcebc31cc7c7->enter($__internal_145a028982a4126b9e646f5b00fe3f4950c47856d64d679a9e39fcebc31cc7c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_ecbcbd8eb2826b4dc09453f773eb81a64bc59c269d3c43d2f94e65b1fa2f6530->leave($__internal_ecbcbd8eb2826b4dc09453f773eb81a64bc59c269d3c43d2f94e65b1fa2f6530_prof);

        
        $__internal_145a028982a4126b9e646f5b00fe3f4950c47856d64d679a9e39fcebc31cc7c7->leave($__internal_145a028982a4126b9e646f5b00fe3f4950c47856d64d679a9e39fcebc31cc7c7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
