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
        $__internal_85c14b91afb1bafd2c3a4ceb5c59b66622c4763d2c11cf38da0d083253de7318 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85c14b91afb1bafd2c3a4ceb5c59b66622c4763d2c11cf38da0d083253de7318->enter($__internal_85c14b91afb1bafd2c3a4ceb5c59b66622c4763d2c11cf38da0d083253de7318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_57c4cb8a4faca1090e9b042972185889dab05256b33c30bf58aa8017a8175dcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57c4cb8a4faca1090e9b042972185889dab05256b33c30bf58aa8017a8175dcd->enter($__internal_57c4cb8a4faca1090e9b042972185889dab05256b33c30bf58aa8017a8175dcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_85c14b91afb1bafd2c3a4ceb5c59b66622c4763d2c11cf38da0d083253de7318->leave($__internal_85c14b91afb1bafd2c3a4ceb5c59b66622c4763d2c11cf38da0d083253de7318_prof);

        
        $__internal_57c4cb8a4faca1090e9b042972185889dab05256b33c30bf58aa8017a8175dcd->leave($__internal_57c4cb8a4faca1090e9b042972185889dab05256b33c30bf58aa8017a8175dcd_prof);

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
