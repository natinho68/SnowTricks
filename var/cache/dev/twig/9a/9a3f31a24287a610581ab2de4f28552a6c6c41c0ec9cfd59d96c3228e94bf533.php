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
        $__internal_619aeea94a180e6cf03fee3d5a97fc909b23811f8045f9f11a65108ab106010f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_619aeea94a180e6cf03fee3d5a97fc909b23811f8045f9f11a65108ab106010f->enter($__internal_619aeea94a180e6cf03fee3d5a97fc909b23811f8045f9f11a65108ab106010f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_17dccc08f45c5930b38e9ed8be28ca08b2952a6eb61dfb4fe7f3d7d11f618f26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17dccc08f45c5930b38e9ed8be28ca08b2952a6eb61dfb4fe7f3d7d11f618f26->enter($__internal_17dccc08f45c5930b38e9ed8be28ca08b2952a6eb61dfb4fe7f3d7d11f618f26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_619aeea94a180e6cf03fee3d5a97fc909b23811f8045f9f11a65108ab106010f->leave($__internal_619aeea94a180e6cf03fee3d5a97fc909b23811f8045f9f11a65108ab106010f_prof);

        
        $__internal_17dccc08f45c5930b38e9ed8be28ca08b2952a6eb61dfb4fe7f3d7d11f618f26->leave($__internal_17dccc08f45c5930b38e9ed8be28ca08b2952a6eb61dfb4fe7f3d7d11f618f26_prof);

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
