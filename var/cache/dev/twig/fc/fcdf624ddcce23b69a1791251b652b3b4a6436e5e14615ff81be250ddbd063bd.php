<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_75f0d6782c8770f49cb335a145077e81a9d90aa1874c18de0c5e2c408861be67 extends Twig_Template
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
        $__internal_bd70c6976c4d84ac5870e21277435f6c2c280891eba54dd9946efdc8958688bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd70c6976c4d84ac5870e21277435f6c2c280891eba54dd9946efdc8958688bb->enter($__internal_bd70c6976c4d84ac5870e21277435f6c2c280891eba54dd9946efdc8958688bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_bea55c23cbd96c2404e0d513372c6f705e18eb60e58ac4fc2efea98614e058be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bea55c23cbd96c2404e0d513372c6f705e18eb60e58ac4fc2efea98614e058be->enter($__internal_bea55c23cbd96c2404e0d513372c6f705e18eb60e58ac4fc2efea98614e058be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_bd70c6976c4d84ac5870e21277435f6c2c280891eba54dd9946efdc8958688bb->leave($__internal_bd70c6976c4d84ac5870e21277435f6c2c280891eba54dd9946efdc8958688bb_prof);

        
        $__internal_bea55c23cbd96c2404e0d513372c6f705e18eb60e58ac4fc2efea98614e058be->leave($__internal_bea55c23cbd96c2404e0d513372c6f705e18eb60e58ac4fc2efea98614e058be_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
