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
        $__internal_fccd402a01b39a2b243935e1063c9d8f6f60f2e02ec49028cf087feb7cd37d5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fccd402a01b39a2b243935e1063c9d8f6f60f2e02ec49028cf087feb7cd37d5a->enter($__internal_fccd402a01b39a2b243935e1063c9d8f6f60f2e02ec49028cf087feb7cd37d5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_b787884940c9b6c7cd31d7b2e961f3515bd35f7c619cfc71168f43d4ec69947e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b787884940c9b6c7cd31d7b2e961f3515bd35f7c619cfc71168f43d4ec69947e->enter($__internal_b787884940c9b6c7cd31d7b2e961f3515bd35f7c619cfc71168f43d4ec69947e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_fccd402a01b39a2b243935e1063c9d8f6f60f2e02ec49028cf087feb7cd37d5a->leave($__internal_fccd402a01b39a2b243935e1063c9d8f6f60f2e02ec49028cf087feb7cd37d5a_prof);

        
        $__internal_b787884940c9b6c7cd31d7b2e961f3515bd35f7c619cfc71168f43d4ec69947e->leave($__internal_b787884940c9b6c7cd31d7b2e961f3515bd35f7c619cfc71168f43d4ec69947e_prof);

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
