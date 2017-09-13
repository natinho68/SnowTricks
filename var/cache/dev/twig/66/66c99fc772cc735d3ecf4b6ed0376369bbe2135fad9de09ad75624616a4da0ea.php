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
        $__internal_2bf53a3cad522b3805e8a9d8cf32ec51b24fa9daf3b478e7bf8ac1c8a1911b66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bf53a3cad522b3805e8a9d8cf32ec51b24fa9daf3b478e7bf8ac1c8a1911b66->enter($__internal_2bf53a3cad522b3805e8a9d8cf32ec51b24fa9daf3b478e7bf8ac1c8a1911b66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_7fecceb53c626b898a0b4f468514a75233733897b455ff1ec752c20269eb6aa0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fecceb53c626b898a0b4f468514a75233733897b455ff1ec752c20269eb6aa0->enter($__internal_7fecceb53c626b898a0b4f468514a75233733897b455ff1ec752c20269eb6aa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_2bf53a3cad522b3805e8a9d8cf32ec51b24fa9daf3b478e7bf8ac1c8a1911b66->leave($__internal_2bf53a3cad522b3805e8a9d8cf32ec51b24fa9daf3b478e7bf8ac1c8a1911b66_prof);

        
        $__internal_7fecceb53c626b898a0b4f468514a75233733897b455ff1ec752c20269eb6aa0->leave($__internal_7fecceb53c626b898a0b4f468514a75233733897b455ff1ec752c20269eb6aa0_prof);

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
