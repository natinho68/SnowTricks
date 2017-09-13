<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_0ae84bef562e96a494e412e35134b0f0af758524f850e11ca89498f98c5d0946 extends Twig_Template
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
        $__internal_d825ad1e48642d69a7d4f93de1cf0708cb45b81a7f60d7277c0e59bea9706606 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d825ad1e48642d69a7d4f93de1cf0708cb45b81a7f60d7277c0e59bea9706606->enter($__internal_d825ad1e48642d69a7d4f93de1cf0708cb45b81a7f60d7277c0e59bea9706606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_b1d95362e5e67c2734f50f6c37b79fa0549db4cfce72e8d6a4bfe88b478b71bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1d95362e5e67c2734f50f6c37b79fa0549db4cfce72e8d6a4bfe88b478b71bd->enter($__internal_b1d95362e5e67c2734f50f6c37b79fa0549db4cfce72e8d6a4bfe88b478b71bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_d825ad1e48642d69a7d4f93de1cf0708cb45b81a7f60d7277c0e59bea9706606->leave($__internal_d825ad1e48642d69a7d4f93de1cf0708cb45b81a7f60d7277c0e59bea9706606_prof);

        
        $__internal_b1d95362e5e67c2734f50f6c37b79fa0549db4cfce72e8d6a4bfe88b478b71bd->leave($__internal_b1d95362e5e67c2734f50f6c37b79fa0549db4cfce72e8d6a4bfe88b478b71bd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
