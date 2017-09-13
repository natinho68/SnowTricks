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
        $__internal_5641507b6f3faf3aadeb339a95b1e3b7e1488ff99580187be9da08ab8b2f3834 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5641507b6f3faf3aadeb339a95b1e3b7e1488ff99580187be9da08ab8b2f3834->enter($__internal_5641507b6f3faf3aadeb339a95b1e3b7e1488ff99580187be9da08ab8b2f3834_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_fed94aa335219c1070935b5616793e65b486d0d3bfeac4216aab1a4789973236 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fed94aa335219c1070935b5616793e65b486d0d3bfeac4216aab1a4789973236->enter($__internal_fed94aa335219c1070935b5616793e65b486d0d3bfeac4216aab1a4789973236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_5641507b6f3faf3aadeb339a95b1e3b7e1488ff99580187be9da08ab8b2f3834->leave($__internal_5641507b6f3faf3aadeb339a95b1e3b7e1488ff99580187be9da08ab8b2f3834_prof);

        
        $__internal_fed94aa335219c1070935b5616793e65b486d0d3bfeac4216aab1a4789973236->leave($__internal_fed94aa335219c1070935b5616793e65b486d0d3bfeac4216aab1a4789973236_prof);

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
