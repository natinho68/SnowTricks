<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_ebbf784bfc08a546b201fd8c354b54daa8243d1b7199aff3b7382b50acf64c05 extends Twig_Template
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
        $__internal_12925831cd8115af92ba02c87d8c78d46999dd4f175b1049ceaf5eb3d0451680 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12925831cd8115af92ba02c87d8c78d46999dd4f175b1049ceaf5eb3d0451680->enter($__internal_12925831cd8115af92ba02c87d8c78d46999dd4f175b1049ceaf5eb3d0451680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_81ac80b7392909a4f55164e0b7ddc85baa9078c44808f543d5525256b639d9a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81ac80b7392909a4f55164e0b7ddc85baa9078c44808f543d5525256b639d9a8->enter($__internal_81ac80b7392909a4f55164e0b7ddc85baa9078c44808f543d5525256b639d9a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_12925831cd8115af92ba02c87d8c78d46999dd4f175b1049ceaf5eb3d0451680->leave($__internal_12925831cd8115af92ba02c87d8c78d46999dd4f175b1049ceaf5eb3d0451680_prof);

        
        $__internal_81ac80b7392909a4f55164e0b7ddc85baa9078c44808f543d5525256b639d9a8->leave($__internal_81ac80b7392909a4f55164e0b7ddc85baa9078c44808f543d5525256b639d9a8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
